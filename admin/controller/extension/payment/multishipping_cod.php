<?php
class ControllerExtensionPaymentMultiShippingCod extends Controller {
	private $error = array();

	public function install() {
		$extensions = $this->model_extension_extension->getInstalled('shipping');

		if (!in_array('multishipping', $extensions)) {
			$this->load->language('extension/payment/multishipping_cod');
			
			$this->session->data['error'] = $this->language->get('error_install');
		}
	}

	public function index() {
		$this->load->language('extension/payment/multishipping_cod');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('multishipping_cod', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
    			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], true),
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_payment'),
    			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=payment', true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
    			'href'      => $this->url->link('extension/payment/multishipping_cod', 'token=' . $this->session->data['token'], true),
   		);

		$data['action'] = $this->url->link('extension/payment/multishipping_cod', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], true);

		if (isset($this->request->post['multishipping_cod_status'])) {
			$data['multishipping_cod_status'] = $this->request->post['multishipping_cod_status'];
		} else {
			$data['multishipping_cod_status'] = $this->config->get('multishipping_cod_status');
		}

		if (isset($this->request->post['multishipping_cod_sort_order'])) {
			$data['multishipping_cod_sort_order'] = $this->request->post['multishipping_cod_sort_order'];
		} else {
			$data['multishipping_cod_sort_order'] = $this->config->get('multishipping_cod_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/payment/multishipping_cod.tpl', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/multishipping_cod')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}
}
?>