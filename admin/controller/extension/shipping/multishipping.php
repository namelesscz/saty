<?php
class ControllerExtensionShippingMultishipping extends Controller
{
    private $error = array();
    
    public function index()
    {
        $this->load->language('extension/shipping/multishipping');
        
        $this->document->setTitle($this->language->get('heading_title'));
        
        $this->load->model('setting/setting');
        $this->load->model('extension/shipping/multishipping');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('multishipping', $this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=shipping', true));
        }
        
        $data['heading_title'] = $this->language->get('heading_title');
        
        $data['text_edit']           = $this->language->get('text_edit');
        $data['text_enabled']        = $this->language->get('text_enabled');
        $data['text_disabled']       = $this->language->get('text_disabled');
        $data['text_country_all']    = $this->language->get('text_country_all');
        $data['text_country_auto']   = $this->language->get('text_country_auto');
        $data['text_country_select'] = $this->language->get('text_country_select');
        $data['text_no_results']     = $this->language->get('text_no_results');
        
        $data['tab_general']      = $this->language->get('tab_general');
        $data['tab_service']      = $this->language->get('tab_service');
        $data['tab_shipping']     = $this->language->get('tab_shipping');
        $data['tab_heurekapoint'] = $this->language->get('tab_heurekapoint');
        $data['tab_zasilkovna']   = $this->language->get('tab_zasilkovna');
        $data['tab_ppl']          = $this->language->get('tab_ppl');
        $data['tab_dpd']          = $this->language->get('tab_dpd');
        $data['tab_geis']         = $this->language->get('tab_geis');
        
        $data['entry_status']               = $this->language->get('entry_status');
        $data['entry_sort_order']           = $this->language->get('entry_sort_order');
        $data['entry_heurekapoint_code']    = $this->language->get('entry_heurekapoint_code');
        $data['entry_heurekapoint_country'] = $this->language->get('entry_heurekapoint_country');
        $data['entry_heurekapoint_partner'] = $this->language->get('entry_heurekapoint_partner');
        $data['entry_zasilkovna_code']      = $this->language->get('entry_zasilkovna_code');
        $data['entry_zasilkovna_country']   = $this->language->get('entry_zasilkovna_country');
        $data['entry_dpd_country']          = $this->language->get('entry_dpd_country');
        $data['entry_ppl_country']          = $this->language->get('entry_ppl_country');
        $data['entry_geis_country']         = $this->language->get('entry_geis_country');
        
        $data['column_name']       = $this->language->get('column_name');
        $data['column_sort_order'] = $this->language->get('column_sort_order');
        $data['column_action']     = $this->language->get('column_action');
        
        $data['button_save']   = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');
        $data['button_reload'] = $this->language->get('button_reload');
        $data['button_add']    = $this->language->get('button_add');
        $data['button_edit']   = $this->language->get('button_edit');
        $data['button_delete'] = $this->language->get('button_delete');
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }
        
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }
        
        $data['breadcrumbs'] = array();
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
      			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_shipping'),
    			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=shipping', true)

        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true)
        );
        
        $data['action']                    = $this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true);
        $data['cancel']                    = $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], true);
        $data['reload']                    = $this->url->link('extension/shipping/multishipping/reload', 'token=' . $this->session->data['token'], true);
        $data['multishipping_service_add'] = $this->url->link('extension/shipping/multishipping/insert', 'token=' . $this->session->data['token'], true);
        
        if (isset($this->request->post['multishipping_status'])) {
            $data['multishipping_status'] = $this->request->post['multishipping_status'];
        } else {
            $data['multishipping_status'] = $this->config->get('multishipping_status');
        }
        
        if (isset($this->request->post['multishipping_sort_order'])) {
            $data['multishipping_sort_order'] = $this->request->post['multishipping_sort_order'];
        } else {
            $data['multishipping_sort_order'] = $this->config->get('multishipping_sort_order');
        }
        
        if (isset($this->request->post['multishipping_heurekapoint_code'])) {
            $data['multishipping_heurekapoint_code'] = $this->request->post['multishipping_heurekapoint_code'];
        } else {
            $data['multishipping_heurekapoint_code'] = $this->config->get('multishipping_heurekapoint_code');
        }
        
        if (isset($this->request->post['multishipping_heurekapoint_country'])) {
            $data['multishipping_heurekapoint_country'] = (int) $this->request->post['multishipping_heurekapoint_country'];
        } else {
            $data['multishipping_heurekapoint_country'] = (int) $this->config->get('multishipping_heurekapoint_country');
        }
        
        $data['heurekapoint_countries'] = array();
        $heurekapoint_countries = $this->model_extension_shipping_multishipping->getCountries(4);
        
        foreach ($heurekapoint_countries as $heurekapoint_country)
        {
          $data['heurekapoint_countries'][] = array(
            'value' => $heurekapoint_country['id'],
            'name' => $heurekapoint_country['name'],
            'selected' => (in_array($heurekapoint_country['id'], (array) $this->config->get('multishipping_heurekapoint_countries'))) ? true : false
          );
        }
        
        if (isset($this->request->post['multishipping_heurekapoint_partner'])) {
            $data['multishipping_heurekapoint_partner'] = (int) $this->request->post['multishipping_heurekapoint_partner'];
        } else {
            $data['multishipping_heurekapoint_partner'] = (int) $this->config->get('multishipping_heurekapoint_partner');
        }
        
        if (isset($this->request->post['multishipping_zasilkovna_code'])) {
            $data['multishipping_zasilkovna_code'] = $this->request->post['multishipping_zasilkovna_code'];
        } else {
            $data['multishipping_zasilkovna_code'] = $this->config->get('multishipping_zasilkovna_code');
        }
        
        if (isset($this->request->post['multishipping_zasilkovna_country'])) {
            $data['multishipping_zasilkovna_country'] = (int) $this->request->post['multishipping_zasilkovna_country'];
        } else {
            $data['multishipping_zasilkovna_country'] = (int) $this->config->get('multishipping_zasilkovna_country');
        }
        
        $data['zasilkovna_countries'] = array();
        $zasilkovna_countries = $this->model_extension_shipping_multishipping->getCountries(5);

        foreach ($zasilkovna_countries as $zasilkovna_country)
        {
          $data['zasilkovna_countries'][] = array(
            'value' => $zasilkovna_country['id'],
            'name' => $zasilkovna_country['name'],
            'selected' => (in_array($zasilkovna_country['id'], (array) $this->config->get('multishipping_zasilkovna_countries'))) ? true : false
          );
        }        
        
        if (isset($this->request->post['multishipping_dpd_country'])) {
            $data['multishipping_dpd_country'] = (int) $this->request->post['multishipping_dpd_country'];
        } else {
            $data['multishipping_dpd_country'] = (int) $this->config->get('multishipping_dpd_country');
        }
        
        if (isset($this->request->post['multishipping_ppl_country'])) {
            $data['multishipping_ppl_country'] = (int) $this->request->post['multishipping_ppl_country'];
        } else {
            $data['multishipping_ppl_country'] = (int) $this->config->get('multishipping_ppl_country');
        }
        
        $data['dpd_countries'] = array();
        $dpd_countries = $this->model_extension_shipping_multishipping->getCountries(6);
        
        foreach ($dpd_countries as $dpd_country)
        {
          $data['dpd_countries'][] = array(
            'value' => $dpd_country['id'],
            'name' => $dpd_country['name'],
            'selected' => (in_array($dpd_country['id'], (array) $this->config->get('multishipping_dpd_countries'))) ? true : false
          );
        } 
        
        $data['ppl_countries'] = array();
        $ppl_countries = $this->model_extension_shipping_multishipping->getCountries(3);
        
        foreach ($ppl_countries as $ppl_country)
        {
          $data['ppl_countries'][] = array(
            'value' => $ppl_country['id'],
            'name' => $ppl_country['name'],
            'selected' => (in_array($ppl_country['id'], (array) $this->config->get('multishipping_ppl_countries'))) ? true : false
          );
        } 
        
        if (isset($this->request->post['multishipping_geis_country'])) {
            $data['multishipping_geis_country'] = (int) $this->request->post['multishipping_geis_country'];
        } else {
            $data['multishipping_geis_country'] = (int) $this->config->get('multishipping_geis_country');
        }
        
        $data['geis_countries'] = array();
        $geis_countries = $this->model_extension_shipping_multishipping->getCountries(7);
        
        foreach ($geis_countries as $geis_country)
        {
          $data['geis_countries'][] = array(
            'value' => $geis_country['id'],
            'name' => $geis_country['name'],
            'selected' => (in_array($geis_country['id'], (array) $this->config->get('multishipping_geis_countries'))) ? true : false
          );
        } 
        
        $data['multishipping_services'] = array();
        
        $multishipping_services = $this->model_extension_shipping_multishipping->getSavedServices();
        
        foreach ($multishipping_services as $multishipping_service) {
            $data['multishipping_services'][] = array(
                'id' => $multishipping_service['id'],
                'name' => $multishipping_service['name'],
                'sort_order' => $multishipping_service['sort_order'],
                'edit' => $this->url->link('extension/shipping/multishipping/update', 'multishipping_id=' . $multishipping_service['id'] . '&token=' . $this->session->data['token'], true),
                'delete' => $this->url->link('extension/shipping/multishipping/delete', 'multishipping_id=' . $multishipping_service['id'] . '&token=' . $this->session->data['token'], true)
            );
        }
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/shipping/multishipping.tpl', $data));
    }
    
    public function reload()
    {      
      $this->language->load('extension/shipping/multishipping');
      
      $this->session->data['success'] = $this->language->get('text_success');
            
      $this->response->redirect(HTTP_CATALOG . 'index.php?route=extension/shipping/multishipping/reloadDestinations&token=' . $this->session->data['token']);
    }
    
    public function insert()
    {
        $this->load->language('extension/shipping/multishipping');
        
        $this->document->setTitle($this->language->get('heading_title_form'));
        
        $this->load->model('extension/shipping/multishipping');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_shipping_multishipping->addService($this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true));
        }
        
        $this->getForm();
    }
    
    public function update()
    {
        $this->load->language('extension/shipping/multishipping');
        
        $this->document->setTitle($this->language->get('heading_title_form'));
        
        $this->load->model('extension/shipping/multishipping');
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_extension_shipping_multishipping->editService($this->request->get['multishipping_id'], $this->request->post);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true));
        }
        
        $this->getForm();
    }
    
    public function delete()
    {
        $this->load->language('extension/shipping/multishipping');
        
        $this->document->setTitle($this->language->get('heading_title_form'));
        
        $this->load->model('extension/shipping/multishipping');
        
        if (($this->request->server['REQUEST_METHOD'] == 'GET') && $this->validateDelete()) {
            $this->model_extension_shipping_multishipping->deleteService($this->request->get['multishipping_id']);
            
            $this->session->data['success'] = $this->language->get('text_success');
            
            $this->response->redirect($this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true));
        }
        
        $this->index();
    }
    
    private function getForm()
    {
        $data['heading_title'] = $this->language->get('heading_title_form');
        
        $data['text_none']        = $this->language->get('text_none');
        $data['text_default']     = $this->language->get('text_default');
        $data['text_enabled']     = $this->language->get('text_enabled');
        $data['text_disabled']    = $this->language->get('text_disabled');
        $data['text_yes']         = $this->language->get('text_yes');
        $data['text_no']          = $this->language->get('text_no');
        $data['text_all_zones']   = $this->language->get('text_all_zones');
        $data['text_all_groups']  = $this->language->get('text_all_groups');
        $data['text_guest_group'] = $this->language->get('text_guest_group');
        
        $data['column_from']   = $this->language->get('column_from');
        $data['column_to']     = $this->language->get('column_to');
        $data['column_price']  = $this->language->get('column_price');
        $data['column_weight'] = $this->language->get('column_weight');
        
        $data['entry_name']           = $this->language->get('entry_name');
        $data['entry_description']    = $this->language->get('entry_description');
        $data['entry_price']          = $this->language->get('entry_price');
        $data['entry_price_inc_tax']  = $this->language->get('entry_price_inc_tax');
        $data['entry_customer_group'] = $this->language->get('entry_customer_group');
        $data['entry_real_service']   = $this->language->get('entry_real_service');
        $data['entry_sort_order']     = $this->language->get('entry_sort_order');
        $data['entry_geo_zone']       = $this->language->get('entry_geo_zone');
        $data['entry_customer_group'] = $this->language->get('entry_customer_group');
        $data['entry_tax']            = $this->language->get('entry_tax');
        $data['entry_cod_price']      = $this->language->get('entry_cod_price');
        $data['entry_order_status']   = $this->language->get('entry_order_status');
        
        $data['button_save']      = $this->language->get('button_save');
        $data['button_remove']    = $this->language->get('button_remove');
        $data['button_cancel']    = $this->language->get('button_cancel');
        $data['button_add_price'] = $this->language->get('button_add_price');
        
        $data['tab_general'] = $this->language->get('tab_general');
        $data['tab_price']   = $this->language->get('tab_price');
        $data['tab_cod']     = $this->language->get('tab_cod');
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }
        
        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = array();
        }
        
        if (isset($this->error['description'])) {
            $data['error_description'] = $this->error['description'];
        } else {
            $data['error_description'] = array();
        }
        
        $data['breadcrumbs'] = array();
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home', 'token=' . $this->session->data['token'], true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_shipping'),
            'href' => $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], true)
        );
        
        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true)
        );
        
        if (!isset($this->request->get['multishipping_id'])) {
            $data['action'] = $this->url->link('extension/shipping/multishipping/insert', 'token=' . $this->session->data['token'], true);
        } else {
            $data['action'] = $this->url->link('extension/shipping/multishipping/update', 'token=' . $this->session->data['token'] . '&multishipping_id=' . $this->request->get['multishipping_id'], true);
        }
        
        $data['cancel'] = $this->url->link('extension/shipping/multishipping', 'token=' . $this->session->data['token'], true);
        
        $data['token'] = $this->session->data['token'];
        
        if (isset($this->request->get['multishipping_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $multishipping_info = $this->model_extension_shipping_multishipping->getMultishipping($this->request->get['multishipping_id']);
        }
        
        $this->load->model('localisation/language');
        
        $data['languages'] = $this->model_localisation_language->getLanguages();
        
        if (isset($this->request->post['multishipping_description'])) {
            $data['multishipping_description'] = $this->request->post['multishipping_description'];
        } elseif (isset($multishipping_info)) {
            $data['multishipping_description'] = $this->model_extension_shipping_multishipping->getMultishippingDescriptions($this->request->get['multishipping_id']);
        } else {
            $data['multishipping_description'] = array();
        }
        
        if (isset($this->request->post['price'])) {
            $data['price'] = $this->request->post['price'];
        } else if (isset($multishipping_info)) {
            $data['price'] = unserialize($multishipping_info['price_shipping']);
        } else {
            $data['price'] = array();
        }
        
        usort($data['price'], array(
            $this,
            'sort'
        ));
        
        if (isset($this->request->post['shipping_price_inc_tax'])) {
            $data['shipping_price_inc_tax'] = $this->request->post['shipping_price_inc_tax'];
        } else if (isset($multishipping_info)) {
            $data['shipping_price_inc_tax'] = $multishipping_info['price_shipping_with_tax'];
        } else {
            $data['shipping_price_inc_tax'] = false;
        }
        
        if (isset($this->request->post['payment_price_inc_tax'])) {
            $data['payment_price_inc_tax'] = $this->request->post['payment_price_inc_tax'];
        } else if (isset($multishipping_info)) {
            $data['payment_price_inc_tax'] = $multishipping_info['price_cod_with_tax'];
        } else {
            $data['payment_price_inc_tax'] = false;
        }
        
        $this->load->model('localisation/tax_class');
        
        $data['tax_classes'] = $this->model_localisation_tax_class->getTaxClasses();
        
        if (isset($this->request->post['tax_class_id'])) {
            $data['tax_class_id'] = $this->request->post['tax_class_id'];
        } elseif (isset($multishipping_info)) {
            $data['tax_class_id'] = $multishipping_info['tax_class_id'];
        } else {
            $data['tax_class_id'] = 0;
        }
        
        $data['real_services'] = $this->model_extension_shipping_multishipping->getServices();
        
        if (isset($this->request->post['real_service_id'])) {
            $data['real_service_id'] = $this->request->post['real_service_id'];
        } elseif (isset($multishipping_info)) {
            $data['real_service_id'] = $multishipping_info['service_id'];
        } else {
            $data['real_service_id'] = 0;
        }
        
        if (isset($this->request->post['cod_price'])) {
            $data['cod_price'] = $this->request->post['cod_price'];
        } elseif (isset($multishipping_info)) {
            $data['cod_price'] = unserialize($multishipping_info['price_cod']);
        } else {
            $data['cod_price'] = array();
        }
        
        usort($data['cod_price'], array(
            $this,
            'sort'
        ));
        
        $this->load->model('localisation/order_status');
        
        $data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
        
        if (isset($this->request->post['order_status_id'])) {
            $data['order_status_id'] = $this->request->post['order_status_id'];
        } elseif (isset($multishipping_info)) {
            $data['order_status_id'] = $multishipping_info['order_status_id'];
        } else {
            $data['order_status_id'] = $this->config->get('order_status_id');
        }
        
        if ((string) substr(VERSION, 0, 3) !== '2.0')
        {
          $this->load->model('customer/customer_group');
          
          $data['customer_groups']   = $this->model_customer_customer_group->getCustomerGroups();
        } else {
      		$this->load->model('sale/customer_group');
      
      		$data['customer_groups'] = $this->model_sale_customer_group->getCustomerGroups();
        }

        $data['customer_groups'][] = array(
            'customer_group_id' => -1,
            'name' => $data['text_all_groups']
        );
        $data['customer_groups'][] = array(
            'customer_group_id' => -2,
            'name' => $data['text_guest_group']
        );
        
        if (isset($this->request->post['customer_group_id'])) {
            $data['customer_group_id'] = $this->request->post['customer_group_id'];
        } elseif (isset($multishipping_info)) {
            $data['customer_group_id'] = $multishipping_info['customer_group_id'];
        } else {
            $data['customer_group_id'] = -1;
        }
        
        $this->load->model('localisation/geo_zone');
        
        $data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
        
        if (isset($this->request->post['geo_zone_id'])) {
            $data['geo_zone_id'] = $this->request->post['geo_zone_id'];
        } elseif (isset($multishipping_info)) {
            $data['geo_zone_id'] = $multishipping_info['geo_zone_id'];
        } else {
            $data['geo_zone_id'] = $this->config->get('geo_zone_id');
        }
        
        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (isset($multishipping_info)) {
            $data['sort_order'] = $multishipping_info['sort_order'];
        } else {
            $data['sort_order'] = 0;
        }
        
        $data['header']      = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer']      = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/shipping/multishipping_form.tpl', $data));
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
    
    public function install()
    {
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD branch_id VARCHAR( 255 ) NOT NULL DEFAULT '0'");
        
        $this->db->query("
CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "multishipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `price_shipping` longtext NOT NULL,
  `price_shipping_with_tax` int(1) NOT NULL DEFAULT '0',
  `tax_class_id` int(11) NOT NULL DEFAULT '0',
  `customer_group_id` int(11) NOT NULL DEFAULT '0',
  `geo_zone_id` int(11) NOT NULL DEFAULT '0',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `price_cod` longtext NOT NULL,
  `price_cod_with_tax` int(1) NOT NULL DEFAULT '0',
  `order_status_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "multishipping_description` (
  `multishipping_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "multishipping_destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` varchar(255) NOT NULL,
  `service_id` int(11) NOT NULL,
  `country` varchar(2) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` int(5) NOT NULL,
  `extra_data` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
    }
    
    public function uninstall()
    {
        $this->db->query("ALTER TABLE `" . DB_PREFIX . "order` DROP branch_id");
    }
    
    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/multishipping')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        return !$this->error;
    }
    
    private function validateForm()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/multishipping')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        foreach ($this->request->post['custom_service_description'] as $language_id => $value) {
            if ((strlen(utf8_decode($value['name'])) < 2) || (strlen(utf8_decode($value['name'])) > 255)) {
                $this->error['name'][$language_id] = $this->language->get('error_name');
            }
        }
        
        if ($this->error && !isset($this->error['warning'])) {
            $this->error['warning'] = $this->language->get('error_warning');
        }
        
        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }
    
    private function validateDelete()
    {
        if (!$this->user->hasPermission('modify', 'extension/shipping/multishipping')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        
        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }
}