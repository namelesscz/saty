<?php
class ControllerExtensionPaymentMultiShippingCod extends Controller
{
    public function index()
    {
        $data['button_confirm'] = $this->language->get('button_confirm');
        
        $data['continue'] = $this->url->link('checkout/success');
        
            return $this->load->view('extension/payment/multishipping_cod', $data);
    }
    
    public function confirm()
    {
        $this->load->model('checkout/order');
        
        $order_status_id = $this->session->data['payment_method']['order_status_id'];
        
        $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $order_status_id);
    }
}
?>
