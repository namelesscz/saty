<?php
class ControllerCommonHeader extends Controller {
	public function index() {

	$google_adwords_code = html_entity_decode($this->config->get('config_remarketing_manager_adwords_code'), ENT_QUOTES, 'UTF-8');
	$google_remarketing_tag = html_entity_decode($this->document->getRemarketingGoogleTag(), ENT_QUOTES, 'UTF-8');
	$remarketing_analytics=0;
	if ($google_remarketing_tag == ""){
		$google_remarketing_tag = html_entity_decode($this->config->get('config_remarketing_manager_google_snippet'), ENT_QUOTES, 'UTF-8');
		if ($google_remarketing_tag != ""){
			if (strpos($google_remarketing_tag, 'gtag')!==false){//new gtag
				if (strpos($google_remarketing_tag, 'ecomm_prodid')!==false){
					$google_remarketing_tag = str_replace('ecomm_prodid\': \'replace with value\'','ecomm_prodid\': \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('ecomm_pagetype\': \'replace with value\'','ecomm_pagetype\': \'other\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('\'ecomm_totalvalue\': \'replace with value\',','',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('\'ecomm_totalvalue\': \'replace with value\'','',$google_remarketing_tag);
				}
				if (strpos($google_remarketing_tag, 'dynx_itemid')!==false){
					$google_remarketing_tag = str_replace('dynx_itemid\': \'replace with value\'','dynx_itemid\': \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_itemid2\': \'replace with value\'','dynx_itemid2\': \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_pagetype\': \'replace with value\'','dynx_pagetype\': \'other\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('\'dynx_totalvalue\': \'replace with value\',','',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('\'dynx_totalvalue\': \'replace with value\'','',$google_remarketing_tag);
				}
				$google_remarketing_tag = str_replace('replace with value','',$google_remarketing_tag);
			} else {//legacy adwords
				if (strpos($google_remarketing_tag, 'ecomm_prodid')!==false){
					$google_remarketing_tag = str_replace('ecomm_prodid: \'REPLACE_WITH_VALUE\'','ecomm_prodid: \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('ecomm_pagetype: \'REPLACE_WITH_VALUE\'','ecomm_pagetype: \'other\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('ecomm_totalvalue: \'REPLACE_WITH_VALUE\',','',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('ecomm_totalvalue: \'REPLACE_WITH_VALUE\'','',$google_remarketing_tag);
				}
				if (strpos($google_remarketing_tag, 'dynx_itemid')!==false){
					$google_remarketing_tag = str_replace('dynx_itemid: \'REPLACE_WITH_VALUE\'','dynx_itemid: \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_itemid2: \'REPLACE_WITH_VALUE\'','dynx_itemid2: \'\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_pagetype: \'REPLACE_WITH_VALUE\'','dynx_pagetype: \'other\'',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_totalvalue: \'REPLACE_WITH_VALUE\',','',$google_remarketing_tag);
					$google_remarketing_tag = str_replace('dynx_totalvalue: \'REPLACE_WITH_VALUE\'','',$google_remarketing_tag);
				}
				$google_remarketing_tag = str_replace('REPLACE_WITH_VALUE','',$google_remarketing_tag);
			}
		}
	}
	$google_global_tag = "";
	if (strpos($google_remarketing_tag, 'gtag')!==false){//new gtag only
		$start=strpos($google_remarketing_tag , "<script>");
		$end=strpos($google_remarketing_tag , "</script>");
		if ($start!==false && $end!==false) {
			$google_remarketing_tag=substr($google_remarketing_tag , $start+8 ,$end-$start-8);
		}
		$google_global_tag = $google_remarketing_tag;
		$google_remarketing_tag = "";
	}

	$google_conversion_code = $this->document->getConversionGoogle();
	if (strpos($google_conversion_code, 'gtag')!==false){//new gtag only
		$start=strpos($google_conversion_code , "<script>");
		$end=strpos($google_conversion_code , "</script>");
		if ($start!==false && $end!==false) {
			$google_conversion_code=substr($google_conversion_code , $start+8 ,$end-$start-8);
		}
		$google_global_tag = $google_global_tag.$google_conversion_code;
		$google_conversion_code = "";
	}

		// Analytics
		$this->load->model('extension/extension');

		$data['analytics'] = array();

		$analytics = $this->model_extension_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get($analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get($analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');


	$facebook_remarketing_tag = $this->document->getRemarketingFacebook();
	if ($facebook_remarketing_tag == "")
		$facebook_remarketing_tag = $this->config->get('config_remarketing_manager_facebook_code');
	if ($facebook_remarketing_tag != ""){
		$facebook_remarketing_advanced = $this->config->get('config_remarketing_manager_facebook_advanced');
		if ($facebook_remarketing_advanced == 1) {
			$contains_matching_start=strpos($facebook_remarketing_tag, "init");
			$contains_matching_end=strpos($facebook_remarketing_tag, ");", $contains_matching_start);
			$contains_matching=substr ($facebook_remarketing_tag, $contains_matching_start, ($contains_matching_end-$contains_matching_start));
			if (strpos ($contains_matching , "{")===false)
				$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , ", {}", $contains_matching_end, 0 );
			$customer_email='';
			$customer_firstname='';
			$customer_lastname='';
			if ($this->customer->isLogged()){
				$customer_email = strtolower ($this->customer->getEmail());
				$customer_firstname = strtolower ($this->customer->getFirstName());
				$customer_lastname = strtolower ($this->customer->getLastName());
			} elseif (isset($this->session->data['guest'])){
				if (isset($this->session->data['guest']['email'])) {
						$customer_email = $this->session->data['guest']['email'];
				}
				if (isset($this->session->data['guest']['firstname'])) {
						$customer_firstname = $this->session->data['guest']['firstname'];
				}
				if (isset($this->session->data['guest']['lastname'])) {
						$customer_lastname = $this->session->data['guest']['lastname'];
				}
			}
			$customer_email=str_replace(' ', '', strtolower($customer_email));
			if ($customer_email!='') {
				$pos=strpos ($facebook_remarketing_tag , "em:");
				if ($pos !== false) {
					$posEOL=strpos ($facebook_remarketing_tag , PHP_EOL, $pos);
					if ($posEOL !== false) {
						if (substr ( $facebook_remarketing_tag , $posEOL-2, 1 )==';'){
							$posEOL=strpos ($facebook_remarketing_tag , ',', $pos);
							if ($posEOL !== false)
								$posEOL=$posEOL+1;
						}
						if ($posEOL !== false)
							$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "em: '".$customer_email."'," , $pos ,($posEOL-$pos) );
					}
				} else {
					$pos=strpos ($facebook_remarketing_tag , "});");
					if ($pos !== false)
						$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "em: '".$customer_email."',".PHP_EOL , $pos ,0 );
				}
			}
			if ($customer_firstname!='') {
				$pos=strpos ($facebook_remarketing_tag , "fn:");
				if ($pos !== false) {
					$posEOL=strpos ($facebook_remarketing_tag , PHP_EOL, $pos);
					if ($posEOL !== false) {
						if (substr ( $facebook_remarketing_tag , $posEOL-2, 1 )==';'){
							$posEOL=strpos ($facebook_remarketing_tag , ',', $pos);
							if ($posEOL !== false)
								$posEOL=$posEOL+1;
						}
						if ($posEOL !== false)
							$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "fn: '".$customer_firstname."'," , $pos ,($posEOL-$pos) );
					}
				} else {
					$pos=strpos ($facebook_remarketing_tag , "});");
					if ($pos !== false)
						$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "fn: '".$customer_firstname."',".PHP_EOL , $pos ,0 );
				}
			}
			if ($customer_lastname!='') {
				$pos=strpos ($facebook_remarketing_tag , "ln:");
				if ($pos !== false) {
					$posEOL=strpos ($facebook_remarketing_tag , PHP_EOL, $pos);
					if ($posEOL !== false) {
						if (substr ( $facebook_remarketing_tag , $posEOL-2, 1 )==';'){
							$posEOL=strpos ($facebook_remarketing_tag , ',', $pos);
							if ($posEOL !== false)
								$posEOL=$posEOL+1;
						}
						if ($posEOL !== false)
							$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "ln: '".$customer_lastname."'," , $pos ,($posEOL-$pos) );
					}
				} else {
					$pos=strpos ($facebook_remarketing_tag , "});");
					if ($pos !== false)
						$facebook_remarketing_tag=substr_replace ( $facebook_remarketing_tag , "ln: '".$customer_lastname."',".PHP_EOL , $pos ,0 );
				}
			}
		}
		$facebook_remarketing_tag = str_replace('insert_email_variable,','',$facebook_remarketing_tag);
		$facebook_remarketing_tag = str_replace('insert_email_variable','',$facebook_remarketing_tag);
		$data['facebook_remarketing'] = html_entity_decode($facebook_remarketing_tag, ENT_QUOTES, 'UTF-8');
	}

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		$data['text_home'] = $this->language->get('text_home');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_shopping_cart'] = $this->language->get('text_shopping_cart');
		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));

		$data['text_account'] = $this->language->get('text_account');
		$data['text_register'] = $this->language->get('text_register');
		$data['text_login'] = $this->language->get('text_login');
		$data['text_order'] = $this->language->get('text_order');
		$data['text_transaction'] = $this->language->get('text_transaction');
		$data['text_download'] = $this->language->get('text_download');
		$data['text_logout'] = $this->language->get('text_logout');
		$data['text_checkout'] = $this->language->get('text_checkout');
		$data['text_category'] = $this->language->get('text_category');
		$data['text_all'] = $this->language->get('text_all');


	if ($remarketing_analytics==0 && $google_global_tag != ""){
		$pos=strripos ($google_adwords_code , "</script>");
		if ($pos!==false) {
			$google_adwords_code = substr_replace ( $google_adwords_code , $google_global_tag , $pos ,0 );
		}
		$data['google_adwords_code'] = html_entity_decode($google_adwords_code, ENT_QUOTES, 'UTF-8');
	}
	if (!isset($data['google_legacy_code'])){ //legacy code only
		$data['google_legacy_code'] = "";
	}
	if ($google_remarketing_tag != "") { //legacy code only
		$data['google_legacy_code'] = html_entity_decode($data['google_legacy_code'].$google_remarketing_tag, ENT_QUOTES, 'UTF-8');
	}
	if ($google_conversion_code != "") { //legacy code only
		$data['google_legacy_code'] = html_entity_decode($data['google_legacy_code'].$google_conversion_code, ENT_QUOTES, 'UTF-8');
	}

		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');

		//tracking codes
		$data['glami_code'] = $this->language->get('glami_code');
		$data['fb_code'] = $this->language->get('fb_code');
		$data['ga_code'] = $this->language->get('ga_code');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');

		// For page specific css
		if (isset($this->request->get['route'])) {
			if (isset($this->request->get['product_id'])) {
				$class = '-' . $this->request->get['product_id'];
			} elseif (isset($this->request->get['path'])) {
				$class = '-' . $this->request->get['path'];
			} elseif (isset($this->request->get['manufacturer_id'])) {
				$class = '-' . $this->request->get['manufacturer_id'];
			} elseif (isset($this->request->get['information_id'])) {
				$class = '-' . $this->request->get['information_id'];
			} else {
				$class = '';
			}

			$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
		} else {
			$data['class'] = 'common-home';
		}

		return $this->load->view('common/header', $data);
	}
}
