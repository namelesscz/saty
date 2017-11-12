<?php
class ModelExtensionShippingMultishipping extends Model {
  private $services = array(
		1 => 'package_on_hand',
		2 => 'package_on_post',
		3 => 'ppl',
		4 => 'heurekapoint',
		5 => 'zasilkovna',
		6 => 'dpd',
    7 => 'geis'
  );
  private $countries = array(
    'ČR' => 56,
    'SR' => 189
  );
  
  public function getSavedServices()
  {
    $services = array();
    
    $sql = $this->db->query("SELECT m.*, md.name AS name FROM " . DB_PREFIX . "multishipping m LEFT JOIN " . DB_PREFIX . "multishipping_description md ON (m.id = md.multishipping_id) WHERE md.language_id = " . (int) $this->config->get('config_language_id') . " ORDER BY sort_order ASC");
    
    foreach ($sql->rows as $row)
    {
      $services[] = array(
        'id' => $row['id'],
        'name' => $row['name'],                            
        'sort_order' => $row['sort_order']
      );
    }
    
    return $services;
  }
  
	public function getMultishipping($multishipping_id) {
    $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping WHERE id = " . (int) $multishipping_id);

		return $sql->row;                                   
	}

  public function getCountries($service_id) {
    $this->load->model('localisation/country');
    
    $countries = array();
    
    $sql = $this->db->query("SELECT country FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " GROUP BY country");

    foreach ($sql->rows as $row)
    {
      $country_info = $this->model_localisation_country->getCountry($this->countries[$row['country']]);
      
      $countries[] = array(
        'id' => $country_info['country_id'],
        'name' => $country_info['name']
      );
    }

		return $countries;      
  }

	public function getMultishippingDescriptions($multishipping_id) {
		$multishipping_descriptions = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_description WHERE multishipping_id = " . (int) $multishipping_id);

		foreach ($query->rows as $row) {
			$multishipping_descriptions[$row['language_id']] = array(
				'name'             => $row['name'],
				'description'      => $row['description']
			);
		}

		return $multishipping_descriptions;
	}
  
	public function getServices() {
		$services = array();

		foreach ($this->services as $key => $value) {
			$services[$key] = $this->language->get('text_service_' . $value);
		}

		return $services;
	}
  
	public function addService($data) {
		$this->db->query("
      INSERT INTO " . DB_PREFIX . "multishipping 
        SET 
        service_id = " . (int) $data['real_service_id'] . ", 
        price_shipping = '" . $this->db->escape(serialize(empty($data['price']) ? array() : $data['price'])) . "', 
        price_cod = '" . $this->db->escape(serialize(empty($data['cod_price']) ? array() : $data['cod_price'])) . "', 
        order_status_id = " . (int) $data['order_status_id'] . ", 
        sort_order = " . (int) $data['sort_order'] . ", 
        geo_zone_id = " . (int) $data['geo_zone_id'] . ", 
        customer_group_id = " . (int) $data['customer_group_id'] . ", 
        tax_class_id = " . (int) $data['tax_class_id'] . ", 
        price_shipping_with_tax = " . (int) $data['shipping_price_inc_tax'] . ", 
        price_cod_with_tax = " . (int) $data['payment_price_inc_tax'] . "
    ");

		$service_id = $this->db->getLastId();

		foreach ($data['custom_service_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "multishipping_description SET multishipping_id = " . (int) $service_id . ", language_id = " . (int) $language_id . ", name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}
  
	public function editService($multishipping_id, $data) {
		$this->db->query("
      UPDATE " . DB_PREFIX . "multishipping 
        SET 
        service_id = " . (int) $data['real_service_id'] . ", 
        price_shipping = '" . $this->db->escape(serialize(empty($data['price']) ? array() : $data['price'])) . "', 
        price_cod = '" . $this->db->escape(serialize(empty($data['cod_price']) ? array() : $data['cod_price'])) . "', 
        order_status_id = " . (int) $data['order_status_id'] . ", 
        sort_order = " . (int) $data['sort_order'] . ", 
        geo_zone_id = " . (int) $data['geo_zone_id'] . ", 
        customer_group_id = " . (int) $data['customer_group_id'] . ", 
        tax_class_id = " . (int) $data['tax_class_id'] . ", 
        price_shipping_with_tax = " . (int) $data['shipping_price_inc_tax'] . ", 
        price_cod_with_tax = " . (int) $data['payment_price_inc_tax'] . "
        WHERE id = " . (int) $multishipping_id . "
    ");

    $this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_description WHERE multishipping_id = " . (int) $multishipping_id);

		foreach ($data['custom_service_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "multishipping_description SET multishipping_id = " . (int) $multishipping_id . ", language_id = " . (int) $language_id . ", name = '" . $this->db->escape($value['name']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}
  
	public function deleteService($multishipping_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "multishipping WHERE id = " . (int) $multishipping_id);
		$this->db->query("DELETE FROM " . DB_PREFIX . "multishipping_description WHERE multishipping_id = " . (int) $multishipping_id);
	}
}