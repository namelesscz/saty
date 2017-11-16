<?php
class ControllerExtensionPaymentTwisto extends Controller {
	private $error = array();

	public function install() {
		try {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD twisto_id VARCHAR(10) NULL DEFAULT NULL");
		} catch (Exception $e) {
			// probably already altered before
		}

		try {
			$this->db->query("ALTER TABLE `" . DB_PREFIX . "order` ADD twisto_order_items TEXT NULL DEFAULT NULL");
		} catch (Exception $e) {
			// probably already altered before
		}
	}

	public function index() {
		$this->load->language('extension/payment/twisto');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			foreach ($this->request->post['twisto'] as $store_id => $store_data) {
				if ($store_id != 0 && !empty($store_data['twisto']['as_default'])) {
					$store_data_combined = array();

					foreach ($store_data as $key => $data) {
						$store_data_combined[$key] = array_merge($store_data[$key], $this->request->post['twisto'][0][$key]);
					}

					$store_data = $store_data_combined;
				}

				$this->model_setting_setting->editSetting('twisto', $store_data, $store_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_as_default'] = $this->language->get('text_as_default');
		$data['text_common'] = $this->language->get('text_common');
		$data['text_fields_mapping'] = $this->language->get('text_fields_mapping');

		$data['entry_field_facebook_id'] = $this->language->get('entry_field_facebook_id');
		$data['entry_field_company_id'] = $this->language->get('entry_field_company_id');
		$data['entry_field_vat_id'] = $this->language->get('entry_field_vat_id');
		$data['entry_field_payment_telephone'] = $this->language->get('entry_field_payment_telephone');
		$data['entry_field_shipping_telephone'] = $this->language->get('entry_field_shipping_telephone');
		$data['entry_public_key'] = $this->language->get('entry_public_key');
		$data['entry_private_key'] = $this->language->get('entry_private_key');
		$data['entry_webhook_url'] = $this->language->get('entry_webhook_url');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_order_status'] = $this->language->get('entry_order_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['help_total'] = $this->language->get('help_total');
		$data['help_webhook_url'] = $this->language->get('help_webhook_url');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['error'] = $this->error;

		if (!$this->currency->has('CZK')) {
			$data['error']['currency'] = $this->language->get('error_currency');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/twisto', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/twisto', 'token=' . $this->session->data['token'], true);
		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true);

		$this->load->model('setting/store');

		$data['stores'] = array_merge(array(array(
			'store_id' => 0,
			'name'     => $this->config->get('config_name'),
		)), $this->model_setting_store->getStores());

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		$this->load->model('customer/custom_field');

		$data['custom_fields'] = array_merge(array(array(
			'custom_field_id' => 0,
			'name'            => $this->language->get('text_none'),
		)), $this->model_customer_custom_field->getCustomFields());

		if (isset($this->request->post['twisto'])) {
			$data['twisto'] = $this->request->post['twisto'];
		} else {
			$data['twisto'] = array();

			foreach ($data['stores'] as $store) {
				$data['twisto'][$store['store_id']] = $this->model_setting_setting->getSetting('twisto', $store['store_id']);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/twisto', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/twisto')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		foreach ($this->request->post['twisto'] as $store_id => $store_data) {
			if ($store_id != 0 && !empty($store_data['twisto']['as_default'])) {
				continue;
			}

			if (!$store_data['twisto']['public_key']) {
				$this->error[$store_id]['public_key'] = $this->language->get('error_public_key');
			}

			if (!$store_data['twisto']['private_key']) {
				$this->error[$store_id]['private_key'] = $this->language->get('error_private_key');
			}
		}

		return !$this->error && $this->currency->has('CZK');
	}
}