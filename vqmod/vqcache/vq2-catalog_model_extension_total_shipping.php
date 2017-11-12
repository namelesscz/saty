<?php
class ModelExtensionTotalShipping extends Model {
	public function getTotal($total) {
		if ($this->cart->hasShipping() && isset($this->session->data['shipping_method'])) {

				
        $multishipping_destination = '';
        if ((string) substr(VERSION, 0, 3) == '2.0' && !empty($this->request->get['order_id']))
        {
          $this->session->data['admin_order_id'] = (int) $this->request->get['order_id']; 
        }

        if ((stristr($this->session->data['shipping_method']['code'], 'multishipping') && !empty($this->session->data['multishipping'])) || !empty($this->session->data['admin_order_id']))
        {
          $this->load->model('extension/shipping/multishipping');

          if (!empty($this->session->data['admin_order_id']))
          {
            $sql_admin_order = $this->db->query("SELECT branch_id, shipping_code FROM " . DB_PREFIX . "order WHERE order_id = " . (int) $this->session->data['admin_order_id']);

            if (!empty($sql_admin_order->row) && stristr($sql_admin_order->row['shipping_code'], 'multishipping') && $sql_admin_order->row['shipping_code'] == $this->session->data['shipping_method']['code'])
            {
              $ex = explode('.', $sql_admin_order->row['shipping_code']);

              $multishipping_admin_info = $this->model_extension_shipping_multishipping->getMultishipping($ex[1]);

              $multishipping_info = $this->model_extension_shipping_multishipping->getBranch($multishipping_admin_info['service_id'], $sql_admin_order->row['branch_id']);

            }

          } else if (!empty($this->session->data['shipping_method']['service_id']) && !empty($this->session->data['multishipping']['service_' . $this->session->data['shipping_method']['service_id']])) {

            $multishipping_info = $this->model_extension_shipping_multishipping->getBranch($this->session->data['shipping_method']['service_id'], $this->session->data['multishipping']['service_' . $this->session->data['shipping_method']['service_id']]);

          }

          if (!empty($multishipping_info))
          {            

            switch ($this->session->data['shipping_method']['service_id'])
            {

              case 2:
                $multishipping_destination = $multishipping_info['address'];
                break;

              case 3:
                $extra_data = unserialize($multishipping_info['extra_data']);
                $multishipping_destination = $extra_data['name'] . ' (' . $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'] . ')';
                break;
              case 4:
                $extra_data = unserialize($multishipping_info['extra_data']);
                $multishipping_destination = $extra_data['name'] . ' (' . $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'] . ')';
                break;
              case 5:
                $extra_data = unserialize($multishipping_info['extra_data']);
                $multishipping_destination = $extra_data['name'] . ' (' . $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'] . ')';
                break;
              case 6:
                $extra_data = unserialize($multishipping_info['extra_data']);
                $multishipping_destination = $extra_data['name'] . ' (' . $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'] . ')';
                break;
              case 7:
                $extra_data = unserialize($multishipping_info['extra_data']);
                $multishipping_destination = $extra_data['name'] . ' (' . $multishipping_info['address'] . ', ' . $multishipping_info['postcode'] . ' ' . $multishipping_info['city'] . ')';
                break;
            }
          }
        } 

        

			
			$total['totals'][] = array(
				'code'       => 'shipping',
				
				'title'      => $this->session->data['shipping_method']['title'] . ((!empty($multishipping_destination)) ? ' (' . $multishipping_destination . ')' : ''),
			
				'value'      => $this->session->data['shipping_method']['cost'],
				'sort_order' => $this->config->get('shipping_sort_order')
			);

			if ($this->session->data['shipping_method']['tax_class_id']) {
				$tax_rates = $this->tax->getRates($this->session->data['shipping_method']['cost'], $this->session->data['shipping_method']['tax_class_id']);

				foreach ($tax_rates as $tax_rate) {
					if (!isset($total['taxes'][$tax_rate['tax_rate_id']])) {
						$total['taxes'][$tax_rate['tax_rate_id']] = $tax_rate['amount'];
					} else {
						$total['taxes'][$tax_rate['tax_rate_id']] += $tax_rate['amount'];
					}
				}
			}

			$total['total'] += $this->session->data['shipping_method']['cost'];
		}

				
        if (!empty($this->session->data['shipping_method']['code']) && stristr($this->session->data['shipping_method']['code'], 'multishipping'))
        {
          if (!empty($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'multishipping_cod')
          { 
      			$total['totals'][] = array(
      				'code'       => 'shipping',
      				'title'      => $this->session->data['payment_method']['title'],
      				'value'      => $this->session->data['payment_method']['cost'],
      				'sort_order' => $this->config->get('shipping_sort_order') + 0.5
      			);
            
			     $total['total'] += $this->session->data['payment_method']['cost'];

    			if ($this->session->data['shipping_method']['tax_class_id']) {
    				$tax_rates = $this->tax->getRates($this->session->data['payment_method']['cost'], $this->session->data['shipping_method']['tax_class_id']);
    
    				foreach ($tax_rates as $tax_rate) {
    					if (!isset($taxes[$tax_rate['tax_rate_id']])) {
    						$taxes[$tax_rate['tax_rate_id']] = $tax_rate['amount'];
    					} else {
    						$taxes[$tax_rate['tax_rate_id']] += $tax_rate['amount'];
    					}
    				}
    			}
          }
        }
        
			
	}
}