<?php
class ModelExtensionPaymentMultiShippingCOD extends Model
{
    public function getMethod($address, $total)
    {   
        $method_data = array();
				$shipping = "multishipping_cod";
				if (!empty($this->session->data['shipping_method'])) {
					$shipping = $this->session->data['shipping_method'];
				}

        if (!empty($shipping)) {
            #$shipping = $this->session->data['shipping_method'];
            
            $code = explode('.', $shipping['code']);
            
            if ($code[0] == 'multishipping') {
                $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "multishipping WHERE id = " . (int) $code[1]);
                
                if ($query->row) {
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
                    
                    $rates = unserialize($query->row['price_cod']);
                    
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
                        $this->load->language('extension/payment/multishipping_cod');
                        
                        $method_data = array(
                            'code' => 'multishipping_cod',
                            'title' => $this->language->get('text_title'),
                            'terms' => $cost,
                            'cost' => $cost,
                            'tax_class_id' => $query->row['tax_class_id'],
                            'text' => $this->currency->format($this->tax->calculate($cost, $query->row['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']),
                            'sort_order' => $this->config->get('multishipping_cod_sort_order'),
                            'order_status_id' => $query->row['order_status_id']
                        );
                    }
                }
            }
        }

        return $method_data;
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
