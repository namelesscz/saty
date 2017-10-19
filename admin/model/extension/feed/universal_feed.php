<?php
class ModelExtensionFeedUniversalFeed extends Model {
	public function addFeed($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "universal_feed SET
			name = '" . $this->db->escape($data['name']) . "',
			tag_top = '" . $this->db->escape($data['tag_top']) . "',
			tag_item = '" . $this->db->escape($data['tag_item']) . "',
			tag_variant = '" . $this->db->escape($data['tag_variant']) . "',
			variant_type = '" . $this->db->escape($data['variant_type']) . "',
			free_text_before = '" . $this->db->escape($data['free_text_before']) . "',
			free_text_after = '" . $this->db->escape($data['free_text_after']) . "',
			language_id = " . (int)$data['language_id'] . ",
			currency_code = '" . $this->db->escape($data['currency_code']) . "',
			only_in_stock = " . (empty($data['only_in_stock']) ? 0 : 1) . ",
			only_priced = " . (empty($data['only_priced']) ? 0 : 1) . ",
			filter_manufacturer = '" . $this->db->escape(json_encode(empty($data['filter_manufacturer']) ? array() : $data['filter_manufacturer'])) . "',
			stock_status = '" . $this->db->escape(json_encode($data['stock_status'])) . "',
			shipping_methods = '" . $this->db->escape(json_encode(empty($data['shipping_methods']) ? array() : $data['shipping_methods'])) . "',
			cache = " . (int)$data['cache'] . ",
			status = " . (int)$data['status'] . ",
			date_added = NOW(),
			date_modified = NOW()");

		$feed_id = $this->db->getLastId();

		if (!empty($data['keyword'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "url_alias SET query = 'universal_feed_id=" . (int)$feed_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
		}

		if (!empty($data['fields'])) {
			foreach ($data['fields'] as $field) {
				$ins[] = "(" . (int)$feed_id . ", '" . $this->db->escape($field['tag']) . "', '" . $this->db->escape($field['type']) . "', '" . $this->db->escape($field['setting']) . "', " . (empty($field['in_product']) ? 0 : 1) . ", " . (empty($field['in_variant']) ? 0 : 1) . ", " . (empty($field['cdata']) ? 0 : 1) . ")";
			}

			$this->db->query("INSERT INTO " . DB_PREFIX . "universal_feed_field (universal_feed_id, tag, type, setting, in_product, in_variant, cdata) VALUES " . implode(',', $ins));
		}

		return $feed_id;
	}

	public function editFeed($feed_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "universal_feed SET
			name = '" . $this->db->escape($data['name']) . "',
			tag_top = '" . $this->db->escape($data['tag_top']) . "',
			tag_item = '" . $this->db->escape($data['tag_item']) . "',
			tag_variant = '" . $this->db->escape($data['tag_variant']) . "',
			variant_type = '" . $this->db->escape($data['variant_type']) . "',
			free_text_before = '" . $this->db->escape($data['free_text_before']) . "',
			free_text_after = '" . $this->db->escape($data['free_text_after']) . "',
			language_id = " . (int)$data['language_id'] . ",
			currency_code = '" . $this->db->escape($data['currency_code']) . "',
			only_in_stock = " . (empty($data['only_in_stock']) ? 0 : 1) . ",
			only_priced = " . (empty($data['only_priced']) ? 0 : 1) . ",
			filter_manufacturer = '" . $this->db->escape(json_encode(empty($data['filter_manufacturer']) ? array() : $data['filter_manufacturer'])) . "',
			stock_status = '" . $this->db->escape(json_encode($data['stock_status'])) . "',
			shipping_methods = '" . $this->db->escape(json_encode(empty($data['shipping_methods']) ? array() : $data['shipping_methods'])) . "',
			cache = " . (int)$data['cache'] . ",
			status = " . (int)$data['status'] . ",
			date_modified = NOW()
			WHERE universal_feed_id = " . (int)$feed_id);

		$this->db->query("DELETE FROM " . DB_PREFIX . "url_alias WHERE query = 'universal_feed_id=" . (int)$feed_id . "'");

		if (!empty($data['keyword'])) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "url_alias SET query = 'universal_feed_id=" . (int)$feed_id . "', keyword = '" . $this->db->escape($data['keyword']) . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "universal_feed_field WHERE universal_feed_id = " . (int)$feed_id);

		if (!empty($data['fields'])) {
			foreach ($data['fields'] as $field) {
				$ins[] = "(" . (int)$feed_id . ", '" . $this->db->escape($field['tag']) . "', '" . $this->db->escape($field['type']) . "', '" . $this->db->escape($field['setting']) . "', " . (empty($field['in_product']) ? 0 : 1) . ", " . (empty($field['in_variant']) ? 0 : 1) . ", " . (empty($field['cdata']) ? 0 : 1) . ")";
			}

			$this->db->query("INSERT INTO " . DB_PREFIX . "universal_feed_field (universal_feed_id, tag, type, setting, in_product, in_variant, cdata) VALUES " . implode(',', $ins));
		}
	}

	public function deleteFeed($feed_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "universal_feed WHERE universal_feed_id = " . (int)$feed_id);
		$this->db->query("DELETE FROM " . DB_PREFIX . "url_alias WHERE query = 'universal_feed_id=" . (int)$feed_id . "'");
		$this->db->query("DELETE FROM " . DB_PREFIX . "universal_feed_field WHERE universal_feed_id = " . (int)$feed_id);
	}

	public function copyFeed($feed_id) {
		$feed = $this->getFeed($feed_id);

		$feed['name']               .= ' (copy)';
		$feed['keyword']             = '';
		$feed['filter_manufacturer'] = json_decode($feed['filter_manufacturer'], TRUE);
		$feed['stock_status']        = json_decode($feed['stock_status'], TRUE);
		$feed['shipping_methods']    = json_decode($feed['shipping_methods'], TRUE);

		$this->addFeed($feed);
	}

	public function getFeeds($data) {
		$sql = "SELECT uf.universal_feed_id, uf.name, uf.date_added, uf.date_modified, uf.status, (SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE query = CONCAT('universal_feed_id=', uf.universal_feed_id) LIMIT 1) AS keyword FROM " . DB_PREFIX . "universal_feed uf WHERE 1 = 1";

		if (!empty($data['filter']['name'])) {
			$sql .= " AND uf.name LIKE '%" . $this->db->escape($data['filter']['name']) . "%'";
		}

		if (!empty($data['filter']['keyword'])) {
			$sql .= " AND (SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE query = CONCAT('universal_feed_id=', uf.universal_feed_id) LIMIT 1) LIKE '%" . $this->db->escape($data['filter']['keyword']) . "%'";
		}

		if (isset($data['filter']['status'])) {
			$sql .= " AND uf.status = " . (int)$data['filter']['status'];
		}

		$sort_data = array(
			'uf.name',
			'keyword',
			'uf.date_added',
			'uf.date_modified',
			'uf.status'
		);

		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY uf.name";
		}

		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}

		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}

			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}

			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}

		$query = $this->db->query($sql);

		return $query->rows;
	}

	public function getTotalFeeds($data) {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "universal_feed uf WHERE 1 = 1";

		if (!empty($data['filter']['name'])) {
			$sql .= " AND uf.name LIKE '%" . $this->db->escape($data['filter']['name']) . "%'";
		}

		if (!empty($data['filter']['keyword'])) {
			$sql .= " AND (SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE query = CONCAT('universal_feed_id=', uf.universal_feed_id) LIMIT 1) LIKE '%" . $this->db->escape($data['filter']['keyword']) . "%'";
		}

		if (isset($data['filter']['status'])) {
			$sql .= " AND uf.status = " . (int)$data['filter']['status'];
		}

		$query = $this->db->query($sql);

		return $query->row['total'];
	}

	public function getFeed($feed_id) {
		$feed = array();

		$query = $this->db->query("SELECT *, (SELECT keyword FROM " . DB_PREFIX . "url_alias WHERE query = CONCAT('universal_feed_id=', " . (int)$feed_id . ") LIMIT 1) AS keyword FROM " . DB_PREFIX . "universal_feed WHERE universal_feed_id = " . (int)$feed_id);

		if (!empty($query->row)) {
			$feed = $query->row;

			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "universal_feed_field WHERE universal_feed_id = " . (int)$feed_id);

			$feed['fields'] = $query->rows;
		}

		return $feed;
	}

	public function getPresetFeeds() {
		$country_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "country WHERE country_id = " . (int)$this->config->get('config_country_id'));

		return array(
			'google_merchant' => array(
				'title' => $this->language->get('text_preset_google_merchant'),
				'link'  => 'https://support.google.com/merchants/answer/188494?hl=en',
				'setting' => array(
					'free_text_before' => '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">',
					'tag_top'          => 'channel',
					'tag_item'         => 'item',
					'tag_variant'      => '',
					'free_text_after'  => '</rss>',
				),
				'stock' => array(
					'in_stock'     => 'in stock',
					'stock_status' => array(
						'in stock',
						'available for order',
						'out of stock',
						'preorder',
					),
					'stock_date'   => false,
				),
				'tags' => array(
					array(
						'tag'     => 'g:id',
						'type'    => 'ID',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'title',
						'type'    => 'PRODUCTNAME',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'description',
						'type'    => 'DESCRIPTION_NO_HTML',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:product_type',
						'type'    => 'CATEGORYTEXT',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'link',
						'type'    => 'URL',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:image_link',
						'type'    => 'IMGURL',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:additional_image_link',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
$result = array();

$query = $this->db->query("SELECT image FROM " . DB_PREFIX . "product_image WHERE product_id = " . (int)$params[\'product\'][\'product_id\']);

foreach ($query->rows as $row) {
	if (file_exists(DIR_IMAGE . $row[\'image\'])) {
		$result[] = HTTP_SERVER . \'image/\' . $row[\'image\'];
	}
}

return ($result ? $result : false);
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:condition',
						'type'    => 'CUSTOM_CODE',
						'params'  => 'return "new";',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:availability',
						'type'    => 'DELIVERY_DATE',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:price',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
$tax = ' . (in_array($country_query->row['iso_code_3'], array('USA')) ? 0 : (in_array($country_query->row['iso_code_3'], array('IND', 'CAN')) ? (int)$this->config->get('config_tax') : 1)) . ';

return $this->currency->format($this->tax->calculate($params[\'product\'][\'price\'] * $params[\'product\'][\'minimum\'], $params[\'product\'][\'tax_class_id\'], $tax), null, null, false) . \' \' . $this->currency->getCode();
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:sale_price',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!(float)$params[\'product_special\'][\'special\']) return false;

$tax = ' . (in_array($country_query->row['iso_code_3'], array('USA')) ? 0 : (in_array($country_query->row['iso_code_3'], array('IND', 'CAN')) ? (int)$this->config->get('config_tax') : 1)) . ';

return $this->currency->format($this->tax->calculate($params[\'product_special\'][\'special\'] * $params[\'product\'][\'minimum\'], $params[\'product\'][\'tax_class_id\'], $tax), null, null, false) . \' \' . $this->currency->getCode();
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:sale_price_effective_date',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!(float)$params[\'product_special\'][\'special\']) return false;

$query = $this->db->query("SELECT date_start, date_end FROM " . DB_PREFIX . "product_special ps
	WHERE product_id = " . (int)$params[\'product\'][\'product_id\'] . "
		AND ps.customer_group_id = " . (int)$this->config->get(\'config_customer_group_id\') . "
		AND ((ps.date_start = \'0000-00-00\' OR ps.date_start < NOW())
		AND (ps.date_end = \'0000-00-00\' OR ps.date_end > NOW()))
		ORDER BY ps.priority ASC, ps.price ASC LIMIT 1");

if (!$query->row || $query->row[\'date_end\'] == \'0000-00-00\') return false;

if ($query->row[\'date_start\'] == \'0000-00-00\') {
	$start = date(\'Y-m-dT00:00O\');
} else {
	$start = date(\'Y-m-dT00:00O\', strtotime($query->row[\'date_start\']));
}

$end = date(\'Y-m-dT23:59O\', strtotime($query->row[\'date_end\']));

return $start . \'/\' . $end;
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:brand',
						'type'    => 'MANUFACTURER',
						'params'  => '',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:gtin',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!empty($params[\'product\'][\'upc\'])) return $params[\'product\'][\'upc\'];
if (!empty($params[\'product\'][\'ean\'])) return $params[\'product\'][\'ean\'];
if (!empty($params[\'product\'][\'jan\'])) return $params[\'product\'][\'jan\'];
if (!empty($params[\'product\'][\'isbn\'])) return $params[\'product\'][\'isbn\'];
if (!empty($params[\'product\'][\'sku\'])) return $params[\'product\'][\'sku\'];
if (!empty($params[\'product\'][\'model\'])) return $params[\'product\'][\'model\'];
return false;
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:mpn',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!empty($params[\'product\'][\'mpn\'])) return $params[\'product\'][\'mpn\'];
return false;
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
					array(
						'tag'     => 'g:multipack',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if ($params[\'product\'][\'minimum\'] > 1) return $params[\'product\'][\'minimum\'];
return false;
',
						'product' => true,
						'variant' => false,
						'cdata'   => true,
					),
				),
			),
			'heureka' => array(
				'title' => $this->language->get('text_preset_heureka'),
				'link'  => 'http://sluzby.heureka.cz/napoveda/xml-feed/',
				'setting' => array(
					'free_text_before' => '',
					'tag_top'          => 'SHOP',
					'tag_item'         => 'SHOPITEM',
					'tag_variant'      => 'SHOPITEM',
					'variant_type'     => 'S',
					'free_text_after'  => '',
				),
				'stock' => array(
					'in_stock'         => '0',
					'stock_date'       => true,
				),
				'shipping' => array(
					'CESKA_POSTA',
					'CESKA_POSTA_NA_POSTU',
					'CSAD_LOGISTIK_OSTRAVA',
					'DPD',
					'DHL',
					'EMS',
					'FOFR',
					'GEBRUDER_WEISS',
					'GEIS',
					'GENERAL_PARCEL',
					'GLS',
					'HDS',
					'HEUREKAPOINT',
					'INTIME',
					'PPL',
					'RADIALKA',
					'SEEGMULLER',
					'TNT',
					'TOPTRANS',
					'UPS',
					'VLASTNI_PREPRAVA',
				),
				'tags' => array(
					array(
						'tag'     => 'ITEM_ID',
						'type'    => 'ID',
						'params'  => '- 1 1',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'PRODUCTNAME',
						'type'    => 'PRODUCTNAME',
						'params'  => '[product] [value]',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'PRODUCT',
						'type'    => 'PRODUCTNAME',
						'params'  => '[product] [name] [value]',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'DESCRIPTION',
						'type'    => 'DESCRIPTION_NO_HTML',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'URL',
						'type'    => 'URL',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'IMGURL',
						'type'    => 'IMGURL',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'IMGURL_ALTERNATIVE',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
$result = array();

$query = $this->db->query("SELECT image FROM " . DB_PREFIX . "product_image WHERE product_id = " . (int)$params[\'product\'][\'product_id\']);

foreach ($query->rows as $row) {
	if (file_exists(DIR_IMAGE . $row[\'image\'])) {
		$result[] = HTTP_SERVER . \'image/\' . $row[\'image\'];
	}
}

return ($result ? $result : false);
',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'PRICE_VAT',
						'type'    => 'PRICE',
						'params'  => '1 1',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'PARAM',
						'type'    => 'ATTRIB',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'MANUFACTURER',
						'type'    => 'MANUFACTURER',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'CATEGORYTEXT',
						'type'    => 'CATEGORYTEXT',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'CATEGORYTEXT',
						'type'    => 'CATEGORYTEXT',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'EAN',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!empty($params[\'product\'][\'ean\'])) return $params[\'product\'][\'ean\'];
return false;
',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'ISBN',
						'type'    => 'CUSTOM_CODE',
						'params'  => '
if (!empty($params[\'product\'][\'isbn\'])) return $params[\'product\'][\'isbn\'];
return false;
',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'DELIVERY',
						'type'    => 'SHIPPING_METHODS',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
					array(
						'tag'     => 'ITEMGROUP_ID',
						'type'    => 'ID',
						'params'  => '',
						'product' => true,
						'variant' => true,
						'cdata'   => true,
					),
				),
			),
		);
	}
}