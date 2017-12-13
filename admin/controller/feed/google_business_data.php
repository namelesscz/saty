<?php
class ControllerFeedGoogleBusinessData extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('feed/google_business_data');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('google_business_data', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			if ((int)str_replace('.','',VERSION)>=2300)
				$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true));
			else
				$this->response->redirect($this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_default'] = $this->language->get('text_default');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_file'] = $this->language->get('entry_file');
		$data['entry_data_feed'] = $this->language->get('entry_data_feed');

		$data['entry_google_business_data_description'] = $this->language->get('entry_google_business_data_description');
		$data['entry_google_business_data_sold_out'] = $this->language->get('entry_google_business_data_sold_out');
		$data['entry_google_business_data_description_html'] = $this->language->get('entry_google_business_data_description_html');
		$data['entry_google_business_data_feed_id1'] = $this->language->get('entry_google_business_data_feed_id1');
		$data['entry_google_business_data_feed_id2'] = $this->language->get('entry_google_business_data_feed_id2');
		$data['entry_google_business_data_use_taxes'] = $this->language->get('entry_google_business_data_use_taxes');
		$data['help_google_business_data_feed_id1'] = $this->language->get('help_google_business_data_feed_id1');
		$data['help_google_business_data_feed_id2'] = $this->language->get('help_google_business_data_feed_id2');
		$data['help_google_business_data_use_taxes'] = $this->language->get('help_google_business_data_use_taxes');
		$data['help_data_feed'] = $this->language->get('help_data_feed');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');

		$data['help_file'] = $this->language->get('help_file');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		if ((int)str_replace('.','',VERSION)>=2300) {
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_feed'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('feed/google_business_data', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('feed/google_business_data', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=feed', true);

		} else {
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_feed'),
			'href' => $this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('feed/google_business_data', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('feed/google_business_data', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL');
		}

		if (isset($this->request->post['google_business_data_status'])) {
			$data['google_business_data_status'] = $this->request->post['google_business_data_status'];
		} else {
			$data['google_business_data_status'] = $this->config->get('google_business_data_status');
		}

		if (isset($this->request->post['google_business_data_file'])) {
			$data['google_business_data_file'] = $this->request->post['google_business_data_file'];
		} else {
			$data['google_business_data_file'] = $this->config->get('google_business_data_file');
		}

		if (isset($this->request->post['google_business_data_sold_out'])) {
			$data['google_business_data_sold_out'] = $this->request->post['google_business_data_sold_out'];
		} else {
			$data['google_business_data_sold_out'] = $this->config->get('google_business_data_sold_out');
		}

		if (isset($this->request->post['google_business_data_description'])) {
			$data['google_business_data_description'] = $this->request->post['google_business_data_description'];
		} else {
			$data['google_business_data_description'] = $this->config->get('google_business_data_description');
		}

		if (isset($this->request->post['google_business_data_description_html'])) {
			$data['google_business_data_description_html'] = $this->request->post['google_business_data_description_html'];
		} else {
			$data['google_business_data_description_html'] = $this->config->get('google_business_data_description_html');
		}

		if (isset($this->request->post['google_business_data_feed_id1'])) {
			$data['google_business_data_feed_id1'] = $this->request->post['google_business_data_feed_id1'];
		} elseif ($this->config->get('google_business_data_feed_id1')!='') {
			$data['google_business_data_feed_id1'] = $this->config->get('google_business_data_feed_id1');
		} else {
			$data['google_business_data_feed_id1'] = 'model';
		}
		if (isset($this->request->post['google_business_data_feed_id2'])) {
			$data['google_business_data_feed_id2'] = $this->request->post['google_business_data_feed_id2'];
		} elseif ($this->config->get('google_business_data_feed_id2')!='') {
			$data['google_business_data_feed_id2'] = $this->config->get('google_business_data_feed_id2');
		} else {
			$data['google_business_data_feed_id2'] = '';
		}

		if (isset($this->request->post['google_business_data_use_taxes'])) {
			$data['google_business_data_use_taxes'] = $this->request->post['google_business_data_use_taxes'];
		} else {
			$data['google_business_data_use_taxes'] = $this->config->get('google_business_data_use_taxes');
		}

		$data['data_feed'] = HTTP_CATALOG . 'index.php?route=feed/google_business_data&lang='.$this->config->get('config_language').'&curr='.$this->config->get('config_currency').'&store='.(int)$this->config->get('config_store_id');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('feed/google_business_data.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'feed/google_business_data')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
