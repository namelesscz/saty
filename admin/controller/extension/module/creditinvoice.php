<?php
/* Creditinvoice by Dymago - opencart@dymago.nl */
class ControllerExtensionModuleCreditInvoice extends Controller {

	public function install() {
		$this->db->query("ALTER TABLE `". DB_PREFIX ."order` ADD COLUMN `creditinvoice_no` INT( 11 ) NOT NULL DEFAULT 0 AFTER `invoice_prefix`");
	}

	public function uninstall() {
		$this->db->query("ALTER TABLE `". DB_PREFIX ."order` DROP COLUMN `creditinvoice_no`");
	}

	public function index() {
		$this->load->language('extension/module/creditinvoice');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('creditinvoice', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_name'] = $this->language->get('text_name');
		$data['text_ready'] = $this->language->get('text_ready');
		$data['text_support'] = $this->language->get('text_support');
		$data['text_developed'] = $this->language->get('text_developed');
		$data['text_ocp'] = $this->language->get('text_ocp');
		$data['text_instructions'] = $this->language->get('text_instructions');
		$data['text_uninstall'] = $this->language->get('text_uninstall');
		$data['text_manually'] = $this->language->get('text_manually');
		$data['text_creditinv_status'] = $this->language->get('text_creditinv_status');
		$data['text_company_details'] = $this->language->get('text_company_details');
		$data['text_extension'] = $this->language->get('text_extension');
		$data['entry_done'] = $this->language->get('entry_done');
		$data['entry_support'] = $this->language->get('entry_support');
		$data['entry_developer'] = $this->language->get('entry_developer');
		$data['entry_mail'] = $this->language->get('entry_mail');
		$data['entry_uninstall'] = $this->language->get('entry_uninstall');
		$data['entry_creditinv_setting'] = $this->language->get('entry_creditinv_setting');
		$data['entry_company_details'] = $this->language->get('entry_company_details');
		$data['entry_extension'] = $this->language->get('entry_extension');
		$data['entry_ocp'] = $this->language->get('entry_ocp');
		$data['entry_copyright'] = $this->language->get('entry_copyright');

		$data['tab_ready'] = $this->language->get('tab_ready');
		$data['tab_instructions'] = $this->language->get('tab_instructions');
		$data['tab_uninstall'] = $this->language->get('tab_uninstall');
		$data['tab_support'] = $this->language->get('tab_support');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_module'),
			'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/creditinvoice', 'token=' . $this->session->data['token'], true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/creditinvoice', 'token=' . $this->session->data['token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/creditinvoice', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/creditinvoice', $data));
	}
}