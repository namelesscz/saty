<?php
class ModelFeedGoogleMerchantCenter extends Model {
	public function getBaseCategory() {

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "feed_manager_taxonomy` WHERE `name` NOT LIKE '%>%' ORDER BY `name` ASC");
		return $query->rows;
	}

	public function getCategory($category_id) {
		$query = $this->db->query("SELECT `name`,`taxonomy_id` FROM `" . DB_PREFIX . "feed_manager_taxonomy` WHERE `status` LIKE '1';");
		$baseCategory = $query->rows;
$taxonomyID="";
if ($query->rows){
		$taxonomyID = $query->row['taxonomy_id'];


		if ($category_id!=""){
			$query = $this->db->query("SELECT taxonomy_id FROM `" . DB_PREFIX . "feed_manager_category` WHERE `category_id` LIKE '".$category_id."'");
			if ($query->row) {
				$taxonomyID = $query->row['taxonomy_id'];
			}
		}

			$baseCategoryName = "";
			foreach($baseCategory as $baseName) {
				$baseCategoryName=$baseCategoryName." OR name LIKE '".$baseName['name']."%'";
			}
			$baseCategoryName=substr($baseCategoryName, 4);
			$query = $this->db->query("SELECT taxonomy_id, name, IF(taxonomy_id = '".$taxonomyID."', 1, 0) as status FROM ".DB_PREFIX."feed_manager_taxonomy WHERE (".$baseCategoryName.") AND taxonomy_id NOT LIKE '0' ORDER BY name ASC;");

		//if ($taxonomyID=="0") {

		} else {
			$query = $this->db->query("SELECT taxonomy_id, name, IF(taxonomy_id = '".$taxonomyID."', 1, 0) as status FROM ".DB_PREFIX."feed_manager_taxonomy WHERE taxonomy_id NOT LIKE '0' ORDER BY name ASC;");
		}
		return $query->rows;
	}

	public function saveSetting($data_base) {
		$this->db->query("UPDATE `" . DB_PREFIX . "feed_manager_taxonomy` SET status = '0';");
		if (isset($data_base['google_merchant_base'])){
			foreach($data_base['google_merchant_base'] as $base) {
				$this->db->query("UPDATE `" . DB_PREFIX . "feed_manager_taxonomy` SET status = '1' WHERE `taxonomy_id` LIKE '".$base."';");
			}
		}
	}

	public function saveCategory($taxonomy_id,$category_id) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "feed_manager_category` SET taxonomy_id = '".$taxonomy_id."', category_id = '".$category_id."' ON DUPLICATE KEY UPDATE taxonomy_id = '".$taxonomy_id."'");
	}

	public function removeCategory($category_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "feed_manager_category` WHERE category_id LIKE '".$category_id."';");
	}

	public function saveProduct($product_id,$gender,$age_group,$color) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "feed_manager_product` SET product_id = '".$product_id."', gender = '".$gender."', age_group = '".$age_group."', color = '".$color."' ON DUPLICATE KEY UPDATE gender = '".$gender."', age_group = '".$age_group."', color = '".$color."'");
	}

	public function removeProduct($product_id) {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "feed_manager_product` WHERE product_id LIKE '".$product_id."';");
	}

	public function getProduct($product_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "feed_manager_product` WHERE `product_id` LIKE '".$product_id."';");
		$merchant_center = array() ;

		if ($query->row){
			$merchant_center['color'] = $query->row['color'];
			$merchant_center['age_group'] = $query->row['age_group'];
			$merchant_center['gender'] = $query->row['gender'];

		} else {
			$merchant_center['color'] = '';
			$merchant_center['age_group'] = 'adult';
			$merchant_center['gender'] = 'unisex';
		}
		return $merchant_center;
	}

	public function getOptionID() {
		$query=$this->db->query("SELECT * FROM `" . DB_PREFIX . "option_description` WHERE language_id LIKE '".$this->config->get('config_language_id')."';");
		return $query->rows;
	}

	public function getAttributes() {
		$query=$this->db->query("SELECT attribute_id,name FROM `" . DB_PREFIX . "attribute_description` WHERE language_id LIKE '".$this->config->get('config_language_id')."';");
		return $query->rows;
	}
}
?>
