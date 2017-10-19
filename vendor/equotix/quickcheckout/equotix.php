<?php
if (!class_exists('Equotix')) {
	class Equotix extends Controller {
		public function generateOutput($file, $data = array()) {
			$search = array(
				'{version}',
				'view/javascript/jquery/jquery-1.7.1.min.js',
				'view/javascript/jquery/jquery-1.6.1.min.js',
				'https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
				'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">'
			);
			
			$base = defined('HTTPS_CATALOG') ? HTTPS_CATALOG : HTTP_CATALOG;
			
			$replace = array(
				'<div style="color:#222222;text-align:center;">' . $this->extension . ' v' . $this->version . ' by <a href="http://www.marketinsg.com" target="_blank">MarketInSG</a></div>',
				$base . 'vendor/equotix/' . $this->code . '/js/jquery-1.11.3.min.js',
				$base . 'vendor/equotix/' . $this->code . '/js/jquery-1.11.3.min.js',
				$base . 'vendor/equotix/' . $this->code . '/js/jquery-1.11.3.min.js',
				'<!DOCTYPE html>'
			);
			
			$this->response->setOutput(str_replace($search, $replace, $this->load->view($file, $data)));
		}
	}
}