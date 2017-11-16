<?php
class ControllerExtensionPaymentTwisto extends Controller {
	public function index() {
		$this->load->model('checkout/order');
		$this->load->model('extension/payment/twisto');

		$this->load->language('extension/payment/twisto');

		$settings = $this->model_extension_payment_twisto->getSettings();

		$data['button_confirm'] = $this->language->get('button_confirm');

		$data['text_instructions'] = $this->language->get('text_instructions');
		$data['text_description'] = $this->language->get('text_description');
		$data['text_loading'] = $this->language->get('text_loading');
		$data['text_error_server'] = $this->language->get('text_error_server');

		$order_data = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$data['check_payload'] = $this->model_extension_payment_twisto->getCheckPayload($order_data);

		$data['public_key'] = $settings['public_key'];

		$data['continue'] = $this->url->link('checkout/success');

		return $this->load->view('extension/payment/twisto', $data);
	}

	public function confirm() {
		if ($this->session->data['payment_method']['code'] == 'twisto' && !empty($this->request->post['transaction_id'])) {
			$this->load->model('checkout/order');
			$this->load->model('extension/payment/twisto');

			if (!$this->model_extension_payment_twisto->createInvoice($this->session->data['order_id'], $this->request->post['transaction_id'])) {
				header('X-PHP-Response-Code: 500', true, 500);

				return;
			}

			$settings = $this->model_extension_payment_twisto->getSettings();

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $settings['order_status_id']);
		}
	}
}