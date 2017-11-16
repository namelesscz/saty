<?php
include_once(DIR_SYSTEM . 'vendor/twisto/Twisto.php');

class ModelExtensionPaymentTwisto extends Model {
	private $installed = null;
	private $country_codes = array();

	public function getMethod($address, $total) {
		$this->load->language('extension/payment/twisto');

		$settings = $this->getSettings();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$settings['geo_zone_id'] . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if (!$this->currency->has('CZK')) {
			$status = false;
		} elseif ($settings['total'] > 0 && $settings['total'] > $total) {
			$status = false;
		} elseif (!$settings['geo_zone_id']) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($status) {
			$method_data = array(
				'code'       => 'twisto',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('twisto_sort_order')
			);
		}

		return $method_data;
	}

	private function getInst() {
		$settings = $this->getSettings();

		$twisto = new Twisto\Twisto();

		$twisto->setSecretKey($settings['private_key']);
		$twisto->setPublicKey($settings['public_key']);

		return $twisto;
	}

	public function isInstalled() {
		if ($this->installed === null) {
			$this->installed = $this->db->query("SELECT *
				FROM `" . DB_PREFIX . "extension`
				WHERE type = 'payment'
					AND code = 'twisto' LIMIT 1")->num_rows > 0;
		}

		return $this->installed;
	}

	public function getSettings($key = 'twisto') {
		return $this->config->get($key);
	}

	private function getOrderCustomField($field, $order_data, $sources = null) {
		if ($sources === null) {
			$sources = array('custom_field', 'payment_custom_field', 'shipping_custom_field');
		} elseif (!is_array($sources)) {
			$sources = array($sources);
		}

		$fields_mapping = $this->getSettings('twisto_fields');

		if (empty($fields_mapping[$field])) {
			return null;
		}

		$field_id = $fields_mapping[$field];

		foreach ($sources as $source) {
			if (is_string($order_data[$source])) {
				$order_data[$source] = json_decode($order_data[$source], true);
			}

			if (isset($order_data[$source][$field_id])) {
				return $order_data[$source][$field_id];
			}
		}

		return null;
	}

	public function getCheckPayload($order_data) {
		$customer = new Twisto\Customer(
			$order_data['email'],
			$order_data['payment_firstname'] . ' ' . $order_data['payment_lastname'],
			$this->getOrderCustomField('facebook_id', $order_data, 'custom_field'),
			$this->getOrderCustomField('company_id', $order_data),
			$this->getOrderCustomField('vat_id', $order_data)
		);

		$current_order = $this->getOrder($order_data, $this->getCurrentOrderItems($order_data['total']));

		$prev_orders_query = $this->db->query("SELECT *
			FROM `" . DB_PREFIX . "order`
			WHERE email = '" . $this->db->escape($order_data['email']) . "'
				AND payment_code != 'twisto'
				AND order_status_id IN (" . implode(',', $this->config->get('config_complete_status')) . ")");

		$prev_orders = array_map(array($this, 'getOrder'), $prev_orders_query->rows);

		return $this->getInst()->getCheckPayload($customer, $current_order, $prev_orders);
	}

	private function getOrder($order_data, $items = null) {
		if ($items === null) {
			if ($order_data['twisto_order_items']) {
				$items = unserialize($order_data['twisto_order_items']);
			} else {
				$items = $this->getOldOrderItems($order_data);
			}
		}

		return new Twisto\Order(
			new DateTime($order_data['date_added']),
			$this->getOrderAddress($order_data, 'payment'),
			$this->getOrderAddress($order_data, 'shipping'),
			$this->getPrice($order_data['total']),
			$items
		);
	}

	private function getOrderAddress($data, $type) {
		$country_id = $data[$type . '_country_id'];

		if (!isset($this->country_codes[$country_id])) {
			if (isset($data[$type . '_iso_code_2'])) {
				$this->country_codes[$country_id] = $data[$type . '_iso_code_2'];
			} else {
				$this->country_codes[$country_id] = $this->db->query("SELECT iso_code_2
					FROM `" . DB_PREFIX . "country`
					WHERE country_id = " . (int)$country_id)->row['iso_code_2'];
			}
		}

		return new Twisto\Address(
			$data[$type . '_firstname'] . ' ' . $data[$type . '_lastname'],
			$data[$type . '_address_1'] . ($data[$type . '_address_2'] ? ' ' . $data[$type . '_address_2'] : ''),
			$data[$type . '_city'],
			$data[$type . '_postcode'],
			$this->country_codes[$country_id],
			$this->getOrderCustomField('telephone', $data, $type . '_custom_field') ?: $data['telephone']
		);
	}

	private function getPrice($price) {
		return $this->currency->format($price, 'CZK', null, false);
	}

	private function getTwistoItem($data) {
		return new Twisto\Item(
			$data['type'],
			$data['name'],
			$data['id'],
			isset($data['qty']) ? $data['qty'] : 1,
			$this->getPrice($data['total']),
			isset($data['tax']) ? $data['tax'] : 0,
			null,
			null
#			!empty($data['ean']) ? $data['ean'] : null,
#			!empty($data['isbn']) ? $data['isbn'] : null
		);
	}

	private function getProductHash($product) {
		$options = array_map(function ($option) {
			return $option['option_id'] . ':' . ($option['option_value_id'] ?: $option['value']);
		}, $product['option']);

		sort($options);

		return $product['product_id'] . '-' . md5(implode(',', $options));
	}

	private function getOldOrderItems($order_data) {
		$items = array();

		$products_query = $this->db->query("SELECT
				op.*,
				p.ean,
				p.isbn
			FROM " . DB_PREFIX . "order_product op
			LEFT JOIN " . DB_PREFIX . "product p ON op.product_id = p.product_id
			WHERE op.order_id = " . (int)$order_data['order_id']);

		foreach ($products_query->rows as $product) {
			$options = $this->db->query("SELECT
					product_option_id AS option_id,
					product_option_value_id AS option_value_id,
					`value`
				FROM " . DB_PREFIX . "order_option
				WHERE order_product_id = " . (int)$product['order_product_id'])->rows;

			$items[] = array(
				'type'  => Twisto\Item::TYPE_DEFAULT,
				'name'  => $product['name'],
				'id'    => 'P-' . $this->getProductHash(array_merge($product, array('option' => $options))),
				'qty'   => $product['quantity'],
				'total' => $product['total'] + $product['tax'] * $product['quantity'],
				'tax'   => $product['tax'],
				'ean'   => $product['ean'],
				'isbn'  => $product['isbn'],
			);
		}

		$vouchers_query = $this->db->query("SELECT *
			FROM " . DB_PREFIX . "order_voucher
			WHERE order_id = " . (int)$order_data['order_id']);

		foreach ($vouchers_query->rows as $voucher) {
			$items[] = array(
				'type'  => Twisto\Item::TYPE_DEFAULT,
				'name'  => $voucher['description'],
				'id'    => 'V-' . md5($voucher['code']),
				'total' => $voucher['amount'],
			);
		}

		$totals_query = $this->db->query("SELECT *
			FROM `" . DB_PREFIX . "order_total`
			WHERE order_id = " . (int)$order_data['order_id'] . "
			ORDER BY sort_order");

		$apply_tax = true;

		foreach ($totals_query->rows as $total) {
			if ($total['code'] == 'sub_total' || $total['code'] == 'total') {
				continue;
			}

			if ($total['code'] == 'tax') {
				$apply_tax = false;

				continue;
			}

			if ($apply_tax) {
				if ($total['code'] == 'shipping') {
					$parts = explode('.', $order_data['shipping_code']);

					$tax_config_name = $parts[0];
				} elseif ($total['code'] == 'payment') {
					$parts = explode('.', $order_data['payment_code']);

					$tax_config_name = $parts[0];
				} else {
					$tax_config_name = $total['code'];
				}

				$tax_class_id = $this->config->get($tax_config_name . '_tax_class_id') ?: 0;
			} else {
				$tax_class_id = 0;
			}

			if ($total['code'] == 'shipping') {
				$item_type = Twisto\Item::TYPE_SHIPMENT;
			} elseif ($total['code'] == 'payment') {
				$item_type = Twisto\Item::TYPE_PAYMENT;
			} else {
				$item_type = ($total['value'] > 0 ? Twisto\Item::TYPE_DEFAULT : Twisto\Item::TYPE_DISCOUNT);
			}

			$items[] = array(
				'type'  => $item_type,
				'name'  => $total['title'],
				'id'    => 'T-' . $total['code'] . '-' . $total['order_total_id'],
				'total' => $total['value'],
				'tax'   => ($apply_tax ? $this->tax->getTax(100, $tax_class_id) : 0),
			);
		}

		$items_total = array_reduce($items, function($carry, $item) {
			return $carry + $item['total'];
		}, 0);

		$abs_diff = abs($order_data['total'] - $items_total);

		if ($abs_diff >= 0.01) {
			$this->load->language('extension/payment/twisto');

			if ($abs_diff >= 1) {
				// something is missing, probably because of coupon, reward or other strange total... doesn't matter
				$item_type = ($order_data['total'] > $items_total ? Twisto\Item::TYPE_DEFAULT : Twisto\Item::TYPE_DISCOUNT);
				$item_name = $this->language->get('text_fill_item');
				$item_id = 'fill';
			} else {
				$item_type = Twisto\Item::TYPE_ROUND;
				$item_name = $this->language->get('text_rounding');
				$item_id = 'rounding';
			}

			$items[] = array(
				'type'  => $item_type,
				'name'  => $item_name,
				'id'    => $item_id,
				'total' => $order_data['total'] - $items_total,
			);
		}

		return array_map(array($this, 'getTwistoItem'), $items);
	}

	private function getCurrentOrderItems($order_total) {
		$items = array();

		foreach ($this->cart->getProducts() as $product) {
			$items[] = array(
				'type'  => Twisto\Item::TYPE_DEFAULT,
				'name'  => $product['name'],
				'id'    => 'P-' . $this->getProductHash($product),
				'qty'   => $product['quantity'],
				'total' => $this->tax->calculate($product['total'], $product['tax_class_id']),
				'tax'   => $this->tax->getTax(100, $product['tax_class_id']),
				'ean'   => ($product['ean'] ? $product['ean'] : $product['model']),
				'isbn'  => ($product['isbn'] ? $product['isbn'] : $product['model']),
			);
		}

		if (!empty($this->session->data['vouchers'])) {
			foreach ($this->session->data['vouchers'] as $voucher) {
				$items[] = array(
					'type'  => Twisto\Item::TYPE_DEFAULT,
					'name'  => $voucher['description'],
					'id'    => 'V-' . md5($voucher['code']),
					'total' => $voucher['amount'],
				);
			}
		}

		$totals = array();
		$taxes = $this->cart->getTaxes();
		$total = 0;

		// Because __call can not keep var references so we put them into an array.
		$total_data = array(
			'totals' => &$totals,
			'taxes'  => &$taxes,
			'total'  => &$total
		);

		$this->load->model('extension/extension');

		$sort_order = array();

		$results = $this->model_extension_extension->getExtensions('total');

		foreach ($results as $key => $value) {
			$sort_order[$key] = $this->config->get($value['code'] . '_sort_order');
		}

		array_multisort($sort_order, SORT_ASC, $results);

		foreach ($results as $result) {
			if ($this->config->get($result['code'] . '_status')) {
				$this->load->model('extension/total/' . $result['code']);

				$total_before = $total;
				$taxes_before = $taxes;

				// We have to put the totals in an array so that they pass by reference.
				$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);

				if ($result['code'] == 'sub_total' || $result['code'] == 'tax' || $result['code'] == 'total' || $result['code'] == 'rounding') {
					continue;
				}

				$total_diff = $total - $total_before;

				if ($total_diff == 0) {
					continue;
				}

				$total_item = end($totals);
				$item_type = null;

				if ($result['code'] == 'shipping') {
					$item_type = Twisto\Item::TYPE_SHIPMENT;
				} elseif ($result['code'] == 'payment') {
					$item_type = Twisto\Item::TYPE_PAYMENT;
				} else {
					$item_type = ($total_diff > 0 ? Twisto\Item::TYPE_DEFAULT : Twisto\Item::TYPE_DISCOUNT);
				}

				$taxes_counted = 0;

				foreach ($taxes as $tax_class_id => $tax_amount) {
					$diff = (isset($taxes_before[$tax_class_id]) ? $tax_amount - $taxes_before[$tax_class_id] : $tax_amount);

					if ($diff == 0) {
						continue;
					}

					foreach ($this->tax->getRates(100, $tax_class_id) as $tax_rate) {
						$rate_total = null;
						$rate_tax = null;

						if ($tax_rate['type'] == 'F') {
							$rate_total = $tax_rate['rate'];
							$rate_tax = 100;
						} else {
							$rate_tax = $tax_rate['amount'];
							$rate_total = ($diff / $rate_tax) * (100 + $rate_tax);
						}

						$items[] = array(
							'type'  => $item_type,
							'name'  => $total_item['title'] . ' - ' . $tax_rate['name'],
							'id'    => 'T-' . $result['code'] . '-' . $tax_class_id . '-' . $rate_tax,
							'total' => $rate_total,
							'tax'   => $rate_tax,
						);

						$taxes_counted += $rate_total;
					}
				}

				if (abs($total_diff - $taxes_counted) >= 0.01) {
					$items[] = array(
						'type'  => $item_type,
						'name'  => $total_item['title'],
						'id'    => 'T-' . $result['code'],
						'total' => $total_diff - $taxes_counted,
					);
				}
			}
		}

		$items_total = array_reduce($items, function($carry, $item) {
			return $carry + $item['total'];
		}, 0);

		$abs_diff = abs($order_total - $items_total);

		if ($abs_diff >= 0.01) {
			$this->load->language('extension/payment/twisto');

			if ($abs_diff >= 1) {
				// something is missing, add something to fill the difference - shouldn't happen
				$item_type = ($order_total > $items_total ? Twisto\Item::TYPE_DEFAULT : Twisto\Item::TYPE_DISCOUNT);
				$item_name = $this->language->get('text_fill_item');
				$item_id = 'fill';
			} else {
				$item_type = Twisto\Item::TYPE_ROUND;
				$item_name = $this->language->get('text_rounding');
				$item_id = 'rounding';
			}

			$items[] = array(
				'type'  => $item_type,
				'name'  => $item_name,
				'id'    => $item_id,
				'total' => $order_total - $items_total,
			);
		}

		return array_map(array($this, 'getTwistoItem'), $items);
	}

	public function storeOrderItems($order_id, $order_total = null) {
		if (!$this->isInstalled()) {
			return;
		}

		if ($order_total === null) {
			$order_total = $this->db->query("SELECT total
				FROM `" . DB_PREFIX . "order`
				WHERE order_id = " . (int)$order_id)->row['total'];
		}

		$item_objects = $this->getCurrentOrderItems($order_total);

		try {
			$this->db->query("UPDATE `" . DB_PREFIX . "order`
				SET twisto_order_items = '" . $this->db->escape(serialize($item_objects)) . "'
				WHERE order_id = " . (int)$order_id);
		} catch (Exception $e) {
			// something's wrong...
		}
	}

	public function createInvoice($order_id, $transaction_id) {
		try {
			$invoice = Twisto\Invoice::create($this->getInst(), $transaction_id, $order_id);

			$this->db->query("UPDATE `" . DB_PREFIX . "order`
				SET twisto_id = '" . $this->db->escape($invoice->invoice_id) . "'
				WHERE order_id = " . (int)$order_id);
		} catch (Exception $e) {
			return false;
		}

		return true;
	}
}