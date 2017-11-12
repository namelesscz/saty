<?php
class ModelCatalogCategory extends Model {
	public function getCategory($category_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row;
	}

	public function getCategories($parent_id = 0) {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' ORDER BY c.sort_order, LCASE(cd.name)");
#
		return $query->rows;
	}
#
	public function getCategoryFilters($category_id) {
		#$implode = array();
#
		#$query = $this->db->query("SELECT filter_id FROM " . DB_PREFIX . "category_filter WHERE category_id = '" . (int)$category_id . "'");
#
		#foreach ($query->rows as $result) {
			#$implode[] = (int)$result['filter_id'];
		#}
#
		#$filter_group_data = array();
#
		#if ($implode) {
			#$filter_group_query = $this->db->query("SELECT DISTINCT f.filter_group_id, fgd.name, fg.sort_order FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_group fg ON (f.filter_group_id = fg.filter_group_id) LEFT JOIN " . DB_PREFIX . "filter_group_description fgd ON (fg.filter_group_id = fgd.filter_group_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND fgd.language_id = '" . (int)$this->config->get('config_language_id') . "' GROUP BY f.filter_group_id ORDER BY fg.sort_order, LCASE(fgd.name)");
#
			#foreach ($filter_group_query->rows as $filter_group) {
				#$filter_data = array();
#
				#$filter_query = $this->db->query("SELECT DISTINCT f.filter_id, fd.name FROM " . DB_PREFIX . "filter f LEFT JOIN " . DB_PREFIX . "filter_description fd ON (f.filter_id = fd.filter_id) WHERE f.filter_id IN (" . implode(',', $implode) . ") AND f.filter_group_id = '" . (int)$filter_group['filter_group_id'] . "' AND fd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY f.sort_order, LCASE(fd.name)");
#
				#foreach ($filter_query->rows as $filter) {
					#$filter_data[] = array(
						#'filter_id' => $filter['filter_id'],
						#'name'      => $filter['name']
					#);
				#}
#
				#if ($filter_data) {
					#$filter_group_data[] = array(
						#'filter_group_id' => $filter_group['filter_group_id'],
						#'name'            => $filter_group['name'],
						#'filter'          => $filter_data
					#);
				#}
			#}
		#}

		##### filters from products;
		$query = $this->db->query("SELECT
 agd.name as group_name,
 ad.name as atrr_name,
 pa.attribute_id as attr_id,
 a.attribute_group_id as group_id,
 count(DISTINCT pc.product_id) as product_count,
 group_concat(pc.product_id) as products
FROM " . DB_PREFIX . "product_to_category pc
JOIN " . DB_PREFIX . "product_attribute pa ON pc.product_id=pa.product_id
LEFT JOIN " . DB_PREFIX . "attribute_description ad ON pa.attribute_id=ad.attribute_id and pa.language_id=ad.language_id
JOIN " . DB_PREFIX . "attribute a ON a.attribute_id=pa.attribute_id
JOIN " . DB_PREFIX . "attribute_group ag ON ag.attribute_group_id=a.attribute_group_id
LEFT JOIN " . DB_PREFIX . "attribute_group_description agd ON agd.attribute_group_id=a.attribute_group_id AND agd.language_id=pa.language_id
WHERE pc.category_id='".(int)$category_id."' and pa.language_id='" . (int)$this->config->get('config_language_id') . "'
GROUP BY a.attribute_group_id,a.attribute_id
ORDER BY agd.name, ad.name");
	$last_group_name ='';
	$last_group_id ='';
	$filter_data = array();
	$filter_group_data = array();
	foreach ($query->rows as $result) {
		if (! $last_group_name) {
			$last_group_name = $result['group_name'];
			$last_group_id   = $result['group_id'];
		}

		if ($last_group_name != $result['group_name']) {
			if (count ($filter_data) > 1){
				$filter_group_data[] = array(
					'filter_group_id' => $last_group_id,
					'name'            => $last_group_name,
					'filter'          => $filter_data
				);
			}
			$last_group_name = $result['group_name'];
			$last_group_id   = $result['group_id'];
			$filter_data     = array();
		}
		$filter_data[] = array(
			'filter_id' => $result['attr_id'],
			'name'      => $result['atrr_name']
		);
	}

		return $filter_group_data;
	}

	public function getCategoryLayoutId($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_layout WHERE category_id = '" . (int)$category_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

		if ($query->num_rows) {
			return $query->row['layout_id'];
		} else {
			return 0;
		}
	}

	public function getTotalCategoriesByCategoryId($parent_id = 0) {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.parent_id = '" . (int)$parent_id . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND c.status = '1'");

		return $query->row['total'];
	}

	public function getFilterByAvailability($category_id) {
		$query = $this->db->query("SELECT substring(ovd.name, position(') - ' IN ovd.name)+3) as sub,GROUP_CONCAT(distinct pov.option_value_id) as options, count(DISTINCT pov.product_id) as cnt FROM " . DB_PREFIX . "product_option_value pov JOIN " . DB_PREFIX . "option_value_description ovd ON pov.option_value_id=ovd.option_value_id JOIN product_to_category pc ON pov.product_id=pc.product_id WHERE ovd.language_id=". (int)$this->config->get('config_language_id')." AND pc.category_id=".(int)$category_id." GROUP BY substring(ovd.name, position(') - ' IN ovd.name)+3)");
		$filters = array();
		foreach ($query->rows as $result) {
			$filters[] = array('name' => $result['sub'],'ids' => $result['options']);
		}
		return $filters;
	}

	public function getFilterBySize($category_id) {
		$query = $this->db->query("SELECT  * FROM (SELECT substring(ovd.name,1, position(') - ' IN ovd.name)+1) as sub ,GROUP_CONCAT(distinct pov.option_value_id) as options, count(DISTINCT pov.product_id) as cnt FROM " . DB_PREFIX . "product_option_value pov JOIN " . DB_PREFIX . "option_value_description ovd ON pov.option_value_id=ovd.option_value_id JOIN product_to_category pc ON pov.product_id=pc.product_id WHERE ovd.language_id=". (int)$this->config->get('config_language_id')." AND pc.category_id=".(int)$category_id." GROUP BY substring(ovd.name,1, position(') - ' IN ovd.name)+1) ) as f ORDER BY cast(replace(substring(f.sub,position('(US' iN f.sub)+3),')','') as unsigned)");
		$filters = array();
		foreach ($query->rows as $result) {
			$filters[] = array('name' => $result['sub'],'ids' => $result['options']);
		}
		return $filters;
	}

}