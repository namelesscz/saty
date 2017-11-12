<?php
class ModelExtensionShippingMultishipping extends Model
{
    function getQuote($address)
    {
        $this->load->language('extension/shipping/multishipping');
        
        $method_data = array();
        
        if ($this->customer->isLogged()) {
            $group_id = $this->customer->getGroupId();
        } else {
            $group_id = '-2';
        }
        
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping m LEFT JOIN " . DB_PREFIX . "multishipping_description md ON (m.id = md.multishipping_id) WHERE (m.customer_group_id = " . (int) $group_id . " OR m.customer_group_id = -1) AND md.language_id = " . (int) $this->config->get('config_language_id') . " ORDER BY m.sort_order ASC");
        
        if ($query->rows) {
            $quote_data = array();
            
            foreach ($query->rows as $result) {
                $status = false;
                
                if (!$result['geo_zone_id']) {
                    $status = true;
                } else {
                    $geo_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int) $result['geo_zone_id'] . "' AND country_id = '" . (int) $address['country_id'] . "' AND (zone_id = '" . (int) $address['zone_id'] . "' OR zone_id = '0')");
                    
                    if ($geo_query->num_rows) {
                        $status = true;
                    } else {
                        $status = false;
                    }
                    
                }
                
                if ($status) {
                    $calculate_weight = $this->cart->getWeight();
                    
                    if ($query->row['price_cod_with_tax']) {
                        $calculate_price = 0;
                        
                        foreach ($this->cart->getProducts() as $product) {
                            $calculate_price += $this->tax->calculate($product['total'], $product['tax_class_id'], $this->config->get('config_tax'));
                        }
                    } else {
                        $calculate_price = $this->cart->getSubTotal();
                    }
                    
                    $cost = null;
                    
                    $rates = unserialize($result['price_shipping']);
                    
                    if (!empty($rates) && is_array($rates)) {
                        usort($rates, array(
                            $this,
                            'sort'
                        ));
                        
                        foreach ($rates as $rate) {
                            if ((float) $rate['p']['from'] <= $calculate_price && ($rate['p']['to'] === '' || (float) $rate['p']['to'] >= $calculate_price)) {
                                if ((float) $rate['w']['from'] <= $calculate_weight && ($rate['w']['to'] === '' || (float) $rate['w']['to'] >= $calculate_weight)) {
                                    $cost = $rate['price'];
                                    
                                    break;
                                }
                            }
                        }
                    }
                    
                    if (!is_null($cost)) {
                        $description            = '';
                        $destination_additional = '';
                        
                        if (!empty($result['description'])) {
                            $description .= '<p style="padding-left: 20px;">' . html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8') . '</p>';
                        }
                        
                        if ($result['service_id'] > 1) {
                            if (!empty($this->session->data['multishipping']['service_' . $result['service_id']])) {
                                $multishipping_info = $this->getBranch($result['service_id'], $this->session->data['multishipping']['service_' . $result['service_id']]);
                                
                                if ($multishipping_info) {
                                    switch ($result['service_id']) {
                                        case 2:
                                            $destination            = $multishipping_info['city'];
                                            $destination_additional = $multishipping_info['address'];
                                            break;       

                                        case 3:
                                            $extra_data = unserialize($multishipping_info['extra_data']);
          
                                            $destination            = $extra_data['name'];
                                            $destination_additional =  $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
                                            break;

                                        case 4:
                                            $extra_data = unserialize($multishipping_info['extra_data']);
          
                                            $destination            = $extra_data['name'];
                                            $destination_additional =  $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
                                            break;

                                        case 5:
                                            $extra_data = unserialize($multishipping_info['extra_data']);
          
                                            $destination            = $extra_data['name'];
                                            $destination_additional =  $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
                                            break;

                                        case 6:
                                            $extra_data = unserialize($multishipping_info['extra_data']);
          
                                            $destination            = $extra_data['name'];
                                            $destination_additional =  $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
                                            break;

                                        case 7:
                                            $extra_data = unserialize($multishipping_info['extra_data']);
          
                                            $destination            = $extra_data['name'];
                                            $destination_additional =  $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'];
                                            break;
                                    }
                                } else {
                                    $destination = $this->language->get('text_no_destination');
                                }
                            } else {
                                $destination = $this->language->get('text_no_destination');
                            }
                            
                            $description .= '<p style="padding-left: 20px;">' . $this->language->get('text_destination') . ': <span id="destination_service_' . $result['service_id'] . '"><strong>' . $destination . '</strong>' . ((!empty($destination_additional)) ? ' (' . $destination_additional . ')' : '') . '</span>';
                            
                            if (empty($destination_additional)) {
                                $description .= '&nbsp;<button data-loading-text="' . $this->language->get('text_loading') . '" type="button" class="btn btn-primary btn-xs multishipping_destination" style="padding: 4px 6px;" data-toggle="modal" data-multishipping_id="' . $result['id'] . '">' . $this->language->get('text_select_destination') . '</button>';
                            } else {
                                $description .= '&nbsp;<button data-loading-text="' . $this->language->get('text_loading') . '" type="button" class="btn btn-primary btn-xs multishipping_destination" style="padding: 4px 6px;" data-toggle="modal" data-multishipping_id="' . $result['id'] . '">' . $this->language->get('text_change_destination') . '</button>';
                            }
                        }
                        
                        $quote_data[$result['id']] = array(
                            'code' => 'multishipping.' . $result['id'],
                            'title' => $result['name'],
                            'raw_title' => $result['name'],
                            'cost' => $cost,
                            'tax_class_id' => $result['tax_class_id'],
                            'text' => $this->currency->format($this->tax->calculate($cost, $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                            'description' => $description,
                            'service_id' => $result['service_id']
                        );
                    }
                }
            }
            
            if (!empty($quote_data)) {
                $method_data = array(
                    'code' => 'multishipping',
                    'title' => $this->language->get('text_title'),
                    'quote' => $quote_data,
                    'sort_order' => $this->config->get('multishipping_sort_order'),
                    'error' => false
                );
            }
        }
        
        return $method_data;
    }
    
    public function getMultishipping($multishipping_id)
    {
        $sql = $this->db->query("SELECT m.*, md.name FROM " . DB_PREFIX . "multishipping m LEFT JOIN " . DB_PREFIX . "multishipping_description md ON (m.id = md.multishipping_id) WHERE m.id = " . (int) $multishipping_id);
        
        return $sql->row;
    }
    
    public function getBranch($service_id, $branch_id)
    {
        $sql = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping_destination WHERE service_id = " . (int) $service_id . " AND branch_id = '" . $this->db->escape($branch_id) . "'");
        
        return $sql->row;
    }
    
    public function sort($a, $b)
    {
        if ((float) $a['p']['from'] == (float) $b['p']['from']) {
            if ((float) $a['w']['from'] < (float) $b['w']['from']) {
                return -1;
            } elseif ((float) $a['w']['from'] > (float) $b['w']['from']) {
                return 1;
            } elseif ($a['w']['to'] === '') {
                return 1;
            } elseif ($b['w']['to'] === '') {
                return -1;
            } elseif ((float) $a['w']['to'] < (float) $b['w']['to']) {
                return -1;
            } elseif ((float) $a['w']['to'] > (float) $b['w']['to']) {
                return 1;
            } else {
                return 0;
            }
        }
        
        if ((float) $a['p']['from'] < (float) $b['p']['from']) {
            return -1;
        } elseif ((float) $a['p']['from'] > (float) $b['p']['from']) {
            return 1;
        } elseif ($a['p']['to'] === '') {
            return 1;
        } elseif ($b['p']['to'] === '') {
            return -1;
        } elseif ((float) $a['p']['to'] < (float) $b['p']['to']) {
            return -1;
        } elseif ((float) $a['p']['to'] > (float) $b['p']['to']) {
            return 1;
        } else {
            return 0;
        }
    }
}
?>
