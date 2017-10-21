<?php
class ModelExtensionFeedUniversalFeedCommon extends Model {
	public static $cdata = true;

	const DIR_FEED = 'feed';

	public function setCdata($cdata) {
		$this->cdata = $cdata;
	}

	public function getFeed($feed_id) {
		$feed = array();

		$query = $this->db->query("SELECT *, (SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE query = CONCAT('universal_feed_id=', " . (int)$feed_id . ") LIMIT 1) AS keyword FROM " . DB_PREFIX . "universal_feed WHERE universal_feed_id = " . (int)$feed_id);

		if (!empty($query->row)) {
			$feed = $query->row;

			$feed['filter_manufacturer'] = json_decode($feed['filter_manufacturer'], true);
			$feed['shipping_methods'] = json_decode($feed['shipping_methods'], true);

			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "universal_feed_field WHERE universal_feed_id = " . (int)$feed_id);

			$feed['fields'] = $query->rows;
		}

		return $feed;
	}

	public function getProducts($tables, $only_in_stock, $only_priced, $filter_manufacturer) {
		$customer_group_id = $this->config->get('config_customer_group_id');

		$sql = "SELECT p.*";

		if (in_array('product_description', $tables)) {
			$sql .= ", pd.*";
		}

		if (in_array('manufacturer', $tables)) {
			$sql .= ", m.name AS manufacturer, m.image AS manufacturer_image";
		}

		if (in_array('product_discount', $tables)) {
			$sql .= ", (SELECT price FROM " . DB_PREFIX . "product_discount pd2 WHERE pd2.product_id = p.product_id AND pd2.customer_group_id = '" . (int)$customer_group_id . "' AND pd2.quantity = '1' AND ((pd2.date_start = '0000-00-00' OR pd2.date_start < NOW()) AND (pd2.date_end = '0000-00-00' OR pd2.date_end > NOW())) ORDER BY pd2.priority ASC, pd2.price ASC LIMIT 1) AS discount";
		}

		if (in_array('product_special', $tables)) {
			$sql .= ", (SELECT price FROM " . DB_PREFIX . "product_special ps WHERE ps.product_id = p.product_id AND ps.customer_group_id = '" . (int)$customer_group_id . "' AND ((ps.date_start = '0000-00-00' OR ps.date_start < NOW()) AND (ps.date_end = '0000-00-00' OR ps.date_end > NOW())) ORDER BY ps.priority ASC, ps.price ASC LIMIT 1) AS special";
		}

		if (in_array('product_reward', $tables)) {
			$sql .= ", (SELECT points FROM " . DB_PREFIX . "product_reward pr WHERE pr.product_id = p.product_id AND customer_group_id = '" . (int)$customer_group_id . "') AS reward";
		}

		$sql .= " FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id)";

		if (in_array('product_description', $tables)) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id)";
		}

		if (in_array('manufacturer', $tables)) {
			$sql .= " LEFT JOIN " . DB_PREFIX . "manufacturer m ON (p.manufacturer_id = m.manufacturer_id)";
		}

		$sql .= " WHERE p.status = 1 AND p2s.store_id = " . (int)$this->config->get('config_store_id');

		if ($only_in_stock) {
			$sql .= " AND p.quantity >= p.minimum";
		}

		if ($only_priced) {
			$sql .= " AND p.price > 0";
		}

		if (!empty($filter_manufacturer)) {
			$sql .= " AND p.manufacturer_id IN (" . implode(',', $filter_manufacturer) . ")";
		}

		if (in_array('product_description', $tables)) {
			$sql .= " AND pd.language_id = " . (int)$this->config->get('config_language_id');
		}

		$query = $this->db->query($sql);

		$result = array();

		foreach ($query->rows as $row) {
			$row_result = array();

			foreach ($row as $key => $value) {
				$table = 'product';

				if (in_array($key, array('name', 'description', 'meta_description', 'meta_keyword'))) {
					$table = 'product_description';
				} elseif (in_array($key, array('manufacturer', 'manufacturer_image'))) {
					$table = 'manufacturer';
				} elseif ($key == 'discount') {
					$table = 'product_discount';
				} elseif ($key == 'special') {
					$table = 'product_special';
				} elseif ($key == 'reward') {
					$table = 'product_reward';
				}

				$row_result[$table][$key] = $value;
			}

			if (isset($row_result['product_discount']['discount']) && (float)$row_result['product_discount']['discount']) {
				$row_result['product']['price_orig'] = $row_result['product']['price'];
				$row_result['product']['price'] = $row_result['product_discount']['discount'];
			}

			$result[$row['product_id']] = $row_result;
		}

		if (in_array('product_attribute', $tables)) {

			$query = $this->db->query("SELECT pa.product_id, pa.text, (SELECT name FROM " . DB_PREFIX . "attribute_description ad WHERE ad.attribute_id = pa.attribute_id AND ad.language_id = " . (int)$this->config->get('config_language_id') . ") AS name, (SELECT name FROM " . DB_PREFIX . "attribute_group_description agd JOIN " . DB_PREFIX . "attribute a ON agd.attribute_group_id=a.attribute_group_id WHERE a.attribute_id = pa.attribute_id AND agd.language_id = " . (int)$this->config->get('config_language_id') . ") AS parent FROM " . DB_PREFIX . "product_attribute pa WHERE pa.language_id = " . (int)$this->config->get('config_language_id'));

			foreach ($query->rows as $row) {
				if (!isset($result[$row['product_id']])) continue;

				if ( !trim($row['text']) && $row['parent']) {
					$result[$row['product_id']]['product_attribute'][] = array(
						'name'  => $row['parent'],
						'value' => $row['name']
					);
				} else {
					$result[$row['product_id']]['product_attribute'][] = array(
						'name'  => $row['name'],
						'value' => $row['text']
					);
				}
			}

		}

		return $result;
	}

	public function getProductVariants($product_id, $product_data, $only_in_stock) {
		$sql = "SELECT pov.option_id, pov.option_value_id, pov.quantity, pov.price, pov.price_prefix, pov.weight, pov.weight_prefix,pov.option_sku,
			(SELECT name FROM " . DB_PREFIX . "option_description od WHERE od.option_id = pov.option_id AND od.language_id = " . (int)$this->config->get('config_language_id') . ") AS name,
			(SELECT name FROM " . DB_PREFIX . "option_value_description ovd WHERE ovd.option_value_id = pov.option_value_id AND ovd.language_id = " . (int)$this->config->get('config_language_id') . ") AS value
			FROM " . DB_PREFIX . "product_option_value pov WHERE pov.product_id = " . (int)$product_id . " AND pov.option_id IN (SELECT option_id FROM `" . DB_PREFIX . "option` o WHERE o.type IN ('radio', 'checkbox', 'select', 'image'))";

		if ($only_in_stock) {
			$sql .= " AND pov.quantity >= " . (int)$product_data['product']['minimum'];
		}

		$query = $this->db->query($sql);

		$result = array();

		foreach ($query->rows as $row) {
			$data = $product_data;

			$data['variant'] = array(
				'option_id'       => $row['option_id'],
				'option_value_id' => $row['option_value_id'],
				'variant_name'    => $row['name'],
				'variant_value'   => $row['value'],
				'variant_sku'     => $row['option_sku']
			);

			$data['product']['quantity'] = $row['quantity'];

			if ($row['price_prefix'] == '-') {
				$data['product']['price'] -= $row['price'];
			} else {
				$data['product']['price'] += $row['price'];
			}

			if ($row['weight_prefix'] == '-') {
				$data['product']['weight'] -= $row['weight'];
			} else {
				$data['product']['weight'] += $row['weight'];
			}

			$result[] = $data;
		}

		return $result;
	}

	public function clearCache($feed_id) {
		if (is_dir(DIR_CACHE . self::DIR_FEED)) {
			$files = glob(DIR_CACHE . self::DIR_FEED . '/' . (int)$feed_id . '-*');

			if (!empty($files)) {
				foreach ($files as $file) {
					unlink($file);
				}
			}

			$this->db->query("UPDATE " . DB_PREFIX . "universal_feed SET date_reloaded = NULL WHERE universal_feed_id = " . (int)$feed_id);
		}
	}

	public function getFieldTypes() {
		return array(
			'ID' => array(
				'name'   => $this->language->get('field_ID_name'),
				'desc'   => $this->language->get('field_ID_desc'),
				'method' => 'ID',
				'params' => array(
					'product' => array('product_id')
				)
			),
			'PRODUCTNAME' => array(
				'name'   => $this->language->get('field_PRODUCTNAME_name'),
				'desc'   => $this->language->get('field_PRODUCTNAME_desc'),
				'method' => 'PRODUCTNAME',
				'params' => array(
					'product_description' => array('name')
				)
			),
			'DESCRIPTION' => array(
				'name'   => $this->language->get('field_DESCRIPTION_name'),
				'desc'   => $this->language->get('field_DESCRIPTION_desc'),
				'method' => 'DESCRIPTION',
				'params' => array(
					'product_description' => array('description')
				)
			),
			'DESCRIPTION_NO_HTML' => array(
				'name'   => $this->language->get('field_DESCRIPTION_NO_HTML_name'),
				'desc'   => $this->language->get('field_DESCRIPTION_NO_HTML_desc'),
				'method' => 'DESCRIPTION_NO_HTML',
				'params' => array(
					'product_description' => array('description')
				)
			),
			'MODEL' => array(
				'name'   => $this->language->get('field_MODEL_name'),
				'desc'   => $this->language->get('field_MODEL_desc'),
				'method' => 'MODEL',
				'params' => array(
					'product' => array('model')
				)
			),
			'MANUFACTURER' => array(
				'name'   => $this->language->get('field_MANUFACTURER_name'),
				'desc'   => $this->language->get('field_MANUFACTURER_desc'),
				'method' => 'MANUFACTURER',
				'params' => array(
					'manufacturer' => array('manufacturer')
				)
			),
			'SKU' => array(
				'name'   => $this->language->get('field_SKU_name'),
				'desc'   => $this->language->get('field_SKU_desc'),
				'method' => 'SKU',
				'params' => array(
					'product' => array('sku')
				)
			),
			'PRICE' => array(
				'name'   => $this->language->get('field_PRICE_name'),
				'desc'   => $this->language->get('field_PRICE_desc'),
				'method' => 'PRICE',
				'params' => array(
					'product' => array('price', 'tax_class_id'),
					'product_special' => array(),
					'product_discount' => array(),
				)
			),
			'VAT' => array(
				'name'   => $this->language->get('field_VAT_name'),
				'desc'   => $this->language->get('field_VAT_desc'),
				'method' => 'VAT',
				'params' => array(
					'product' => array('tax_class_id')
				)
			),
			'URL' => array(
				'name'   => $this->language->get('field_URL_name'),
				'desc'   => $this->language->get('field_URL_desc'),
				'method' => 'URL',
				'params' => array(
					'product' => array('product_id'),
				)
			),
			'IMGURL' => array(
				'name'   => $this->language->get('field_IMGURL_name'),
				'desc'   => $this->language->get('field_IMGURL_desc'),
				'method' => 'IMGURL',
				'params' => array(
					'product' => array('image')
				)
			),
			'CATEGORYTEXT' => array(
				'name'   => $this->language->get('field_CATEGORYTEXT_name'),
				'desc'   => $this->language->get('field_CATEGORYTEXT_desc'),
				'method' => 'CATEGORYTEXT',
				'params' => array(
					'product' => array('product_id')
				)
			),
			'ATTRIB' => array(
				'name'   => $this->language->get('field_ATTRIB_name'),
				'desc'   => $this->language->get('field_ATTRIB_desc'),
				'method' => 'ATTRIB',
				'params' => array(
					'product_attribute' => array('name')
				)
			),
			'DELIVERY_DATE' => array(
				'name'   => $this->language->get('field_DELIVERY_DATE_name'),
				'desc'   => $this->language->get('field_DELIVERY_DATE_desc'),
				'method' => 'DELIVERY_DATE',
				'params' => array(
					'product' => array('stock_status_id', 'quantity', 'minimum', 'date_available')
				)
			),
			'SHIPPING_METHODS' => array(
				'name'   => $this->language->get('field_SHIPPING_METHODS_name'),
				'desc'   => $this->language->get('field_SHIPPING_METHODS_desc'),
				'method' => 'SHIPPING_METHODS',
				'params' => array(
					'product' => array('price', 'weight'),
					'product_special' => array()
				)
			),
			'CUSTOM_CODE' => array(
				'name'   => $this->language->get('field_CUSTOM_CODE_name'),
				'desc'   => $this->language->get('field_CUSTOM_CODE_desc'),
				'method' => 'CUSTOM_CODE',
				'params' => array(
					'product'             => array(),
					'product_description' => array(),
					'manufacturer'        => array(),
					'product_discount'    => array(),
					'product_special'     => array(),
					'product_reward'      => array()
				)
			)
		);
	}

	public function tagID($params, $setting) {
		$result = $params['product']['product_id'];

		if (isset($params['variant']) && !empty($setting)) {
			$parts = explode(' ', $setting);

			if (!empty($parts[0])) {
				$divider = $parts[0];
			} else {
				$divider = '-';
			}

			if (!empty($parts[1])) {
				$result .= $divider . $params['variant']['option_id'];
			}

			if (!empty($parts[2])) {
				$result .= $divider . $params['variant']['option_value_id'];
			}
		}

		return $this->parseValue($result);
	}

	public function tagPRODUCTNAME($params, $setting) {
		if (empty($setting)) {
			$setting = '[product]';
		}

		$product = $params['product_description']['name'];
		$name    = (isset($params['variant']) ? $params['variant']['variant_name'] : '');
		$value   = (isset($params['variant']) ? $params['variant']['variant_value'] : '');

		$text = str_replace(array('[product]', '[name]', '[value]'), array($product, $name, $value), $setting);

		return $this->parseValue($text);
	}

	public function tagDESCRIPTION($params, $setting) {
		return $this->parseValue(html_entity_decode($params['product_description']['description'], ENT_QUOTES, 'UTF-8'));
	}

	public function tagDESCRIPTION_NO_HTML($params, $setting) {
		$text = trim(strip_tags(html_entity_decode($params['product_description']['description'], ENT_QUOTES, 'UTF-8')));

		if (!empty($setting)) {
			$parts = explode(' ', $setting);

			if (count($parts) == 2) {
				if ($parts[0] == 'W') {
					$words = explode(' ', $text);

					$text = implode(' ', array_slice($words, 0, (int)$parts[1]));
				} else {
					$text = mb_substr($text, 0, (int)$parts[1], 'UTF-8');
				}
			}
		}

		return $this->parseValue($text);
	}

	public function tagMODEL($params, $setting) {
		return $this->parseValue($params['product']['model']);
	}

	public function tagMANUFACTURER($params, $setting) {
		return $this->parseValue($params['manufacturer']['manufacturer']);
	}

	public function tagSKU($params, $setting) {
		return $this->parseValue($params['product']['sku']);
	}

	public function tagPRICE($params, $setting) {
		$parts = explode(' ', $setting);

		if (!empty($parts[1]) && (float)$params['product_special']['special']) {
			$price = $params['product_special']['special'];
		} else {
			$price = $params['product']['price'];
		}

		if ($parts[0] == '1') {
//			return $this->currency->format($this->tax->calculate($price, $params['product']['tax_class_id']), $this->config->get('config_currency'), null, false);
			return $this->currency->format($this->tax->calculate($price, $params['product']['tax_class_id']), null, null, false);
		} else {
			return $this->currency->format($price, null, null, false);
		}
	}

	public function tagVAT($params, $setting) {
		if (method_exists($this->tax, 'getRate')) {
			$tax = $this->tax->getRate($params['product']['tax_class_id']);
		} else {
			$tax = 0;

			foreach ($this->tax->getRates($params['product']['price'], $params['product']['tax_class_id']) as $rate) {
				if ($rate['type'] == 'P') {
					$tax += $rate['rate'];
				}
			}
		}

		if ($setting == 1) {
			$tax = (float)$tax / 100;
		}

		return (float)$tax;
	}

	public function tagURL($params, $setting) {
		if ($setting == '0') {
			$url = HTTPS_SERVER . 'index.php?route=product/product&product_id=' . $params['product']['product_id'];
			if(array_key_exists('variant',$params) && array_key_exists('option_sku',$params['variant'])){
				$url .= '&optioddn_value_id='.$params['variant']['product_option_value_id'];
			}
		} else {
			$url = $this->url->link('product/product', 'product_id=' . $params['product']['product_id']);
			if(array_key_exists('variant',$params) && array_key_exists('option_sku',$params['variant'])){
				$url .= '-'.$params['variant']['option_sku'];
			}
		}
		return str_replace('&amp;', '&', $this->parseValue($url));
	}

	public function tagIMGURL($params, $setting) {
		if (!$params['product']['image'] || !file_exists(DIR_IMAGE . $params['product']['image'])) {
			return false;
		}

		if (!empty($setting)) {
			$parts = explode(' ', $setting);

			if (count($parts) == 2) {
				$this->load->model('tool/image');

				$url = $this->model_tool_image->resize($params['product']['image'], (int)$parts[0], (int)$parts[1]);

				$url = str_replace(HTTP_SERVER . 'image/', '', $url);
				$url = str_replace(HTTPS_SERVER . 'image/', '', $url);

				$parts = explode('/', $url);

				foreach ($parts as $key => $value) {
					$parts[$key] = rawurlencode($value);
				}

				$url = HTTP_SERVER . 'image/' . implode('/', $parts);
			}
		}

		if (empty($url)) {
			$parts = explode('/', $params['product']['image']);

			foreach ($parts as $key => $value) {
				$parts[$key] = rawurlencode($value);
			}

			$url = HTTP_SERVER . 'image/' . implode('/', $parts);
		}

		return $this->parseValue($url);
	}

	public function tagCATEGORYTEXT($params, $setting) {
		static $saved_categories = array();

		if (!empty($setting)) {
			$divider = $setting;
		} else {
			$divider = '>';
		}

		$output = array();

		$categories = $this->model_catalog_product->getCategories($params['product']['product_id']);

		foreach ($categories as $category) {
			if (isset($saved_categories[$category['category_id']])) {
				$output[] = $saved_categories[$category['category_id']];
			} else {
				$path = $this->getPath($category['category_id']);

				if ($path) {
					$string = '';

					foreach (explode('_', $path) as $path_id) {
						$category_info = $this->model_catalog_category->getCategory($path_id);

						if ($category_info) {
							if (!$string) {
								$string = $category_info['name'];
							} else {
								$string .= ' ' . $divider . ' ' . $category_info['name'];
							}

							$saved_categories[$category_info['category_id']] = $string;
						}
					}

					$output[] = $string;
				}
			}
		}

		foreach ($output as $key => $value) {
			$output[$key] = $this->parseValue($value);
		}

		return $output;
	}

	public function tagATTRIB($params, $setting) {
		$parts = explode(' ', $setting);

		if (empty($params['product_attribute'])) return false;

		if (!empty($parts[0])) {
			$tag_name = $parts[0];
		} else {
			$tag_name = 'PARAM_NAME';
		}

		if (!empty($parts[1])) {
			$tag_value = $parts[1];
		} else {
			$tag_value = 'VAL';
		}

		$result = array();

		foreach ($params['product_attribute'] as $attribute) {
			$result[] = '<' . $tag_name . '>' . $this->parseValue($attribute['name']) . '</' . $tag_name . '>' .
				'<' . $tag_value . '>' . $this->parseValue($attribute['value']) . '</' . $tag_value . '>';
		}

		return $result;
	}

	public function tagDELIVERY_DATE($params, $setting, $feed) {
		$stock_statuses = json_decode($feed['stock_status'], true);

		if ($params['product']['quantity'] >= $params['product']['minimum']) {
			$status = $stock_statuses['setting']['in_stock'];
		} elseif ($params['product']['date_available'] >= date('Y-m-d')) {
			$status = $params['product']['date_available'];
		} elseif (isset($stock_statuses['alias'][$params['product']['stock_status_id']])) {
			$status = $stock_statuses['alias'][$params['product']['stock_status_id']];
		} else {
			$status = '';
		}

		if ($status === '') {
			return false;
		} else {
			return $this->parseValue($status);
		}
	}

	public function tagSHIPPING_METHODS($params, $setting, $feed) {
		if (empty($setting) || empty($feed['shipping_methods'])) return false;

		$tags = explode(',', $setting);

		$result = array();

		if ((float)$params['product_special']['special']) {
			$price = $params['product_special']['special'];
		} else {
			$price = $params['product']['price'];
		}

		foreach ($feed['shipping_methods'] as $shipping_method) {
			if (empty($shipping_method['code'])) continue;

			if ($shipping_method['count'] == 'price') {
				$compare = $price;
			} elseif ($shipping_method['count'] == 'weight') {
				$compare = $params['product']['weight'];
			} else {
				continue;
			}

			if ((empty($shipping_method['start']) || $compare >= (float)$shipping_method['start']) && (empty($shipping_method['end']) || $compare < (float)$shipping_method['end'])) {
				$values = array();

				if (!empty($tags[1])) {
					$values[$tags[1]] = $this->parseValue($shipping_method['code']);
				}

				if (!empty($tags[2])) {
					$values[$tags[2]] = $this->parseValue($shipping_method['price']);
				}

				if (!empty($tags[3])) {
					$values[$tags[3]] = $this->parseValue($shipping_method['cod']);
				}

				$result[] = array(
					'tag'    => $tags[0],
					'values' => $values
				);
			}
		}

		return $result;
	}

	public function tagCUSTOM_CODE($params, $setting) {
		if (empty($setting)) return false;

		$search = array();
		$replace = array();

		foreach ($params as $table) {
			foreach ($table as $key => $value) {
				if (!is_array($value)) {
					$search[] = '{' . $key . '}';

					if (is_numeric($value)) {
						$replace[] = (float)$value;
					} else {
						$replace[] = "'" . addslashes($value) . "'";
					}
				}
			}
		}

		$code = str_replace($search, $replace, html_entity_decode($setting, ENT_QUOTES, 'UTF-8'));

		$result = eval($code);

		if ($result === false) {
			return false;
		} else {
			if (is_array($result)) {
				foreach ($result as $key => $value) {
					$result[$key] = $this->parseValue($value);
				}
			} else {
				$result = $this->parseValue($result);
			}

			return $result;
		}
	}

	private function parseValue($value) {
		if ($this->cdata) {
			return '<![CDATA[' . $value . ']]>';
		} else {
			return htmlspecialchars(str_replace('&nbsp;', '&#160;', $value), ENT_QUOTES, 'UTF-8', false);
		}
	}

	private function getPath($parent_id, $current_path = '') {
		$category_info = $this->model_catalog_category->getCategory($parent_id);

		if ($category_info) {
			if (!$current_path) {
				$new_path = $category_info['category_id'];
			} else {
				$new_path = $category_info['category_id'] . '_' . $current_path;
			}

			$path = $this->getPath($category_info['parent_id'], $new_path);

			if ($path) {
				return $path;
			} else {
				return $new_path;
			}
		}
	}
}