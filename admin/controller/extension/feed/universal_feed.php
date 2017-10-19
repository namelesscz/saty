<?php
class ControllerExtensionFeedUniversalFeed extends Controller {
	private $error = array();

	public function install() {
		$query = $this->db->query("SELECT setting_id, `value` FROM `" . DB_PREFIX . "setting`
			WHERE `key` = 'universal_feed_status'");

		if ($query->row) {
			if (!$query->row['value']) {
				$this->db->query("UPDATE `" . DB_PREFIX . "setting`
					SET `value` = 1
					WHERE setting_id = " . (int)$query->row['setting_id']);
			}
		} else {
			$this->db->query("INSERT INTO `" . DB_PREFIX . "setting`
				SET store_id = 0,
					code = 'universal_feed',
					`key` = 'universal_feed_status',
					`value` = 1");
		}
	}

	public function index() {
		$this->load->language('extension/feed/universal_feed');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

		$this->getList();
	}

	public function insert() {
		$this->load->language('extension/feed/universal_feed');

    	$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

    	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_feed_universal_feed->addFeed($this->request->post['feed']);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter'])) {
				foreach ($this->request->get['filter'] as $key => $value) {
					$url .= '&filter[' . $key . ']=' . $value;
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'));
    	}

    	$this->getForm();
	}

	public function update() {
		$this->load->language('extension/feed/universal_feed');

    	$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

    	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_extension_feed_universal_feed->editFeed($this->request->get['universal_feed_id'], $this->request->post['feed']);

			include_once(DIR_CATALOG . 'model/extension/feed/universal_feed_common.php');

			$uf_model = new ModelExtensionFeedUniversalFeedCommon($this->registry);

			$uf_model->clearCache($this->request->get['universal_feed_id']);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter'])) {
				foreach ($this->request->get['filter'] as $key => $value) {
					$url .= '&filter[' . $key . ']=' . $value;
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'));
    	}

    	$this->getForm();
	}

	public function delete() {
		$this->load->language('extension/feed/universal_feed');

    	$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

    	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateChange()) {
			include_once(DIR_CATALOG . 'model/extension/feed/universal_feed_common.php');

			$uf_model = new ModelExtensionFeedUniversalFeedCommon($this->registry);

			foreach ($this->request->post['selected'] as $universal_feed_id) {
				$this->model_extension_feed_universal_feed->deleteFeed($universal_feed_id);
				$uf_model->clearCache($universal_feed_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter'])) {
				foreach ($this->request->get['filter'] as $key => $value) {
					$url .= '&filter[' . $key . ']=' . $value;
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'));
    	}

    	$this->getList();
	}

	public function copy() {
		$this->load->language('extension/feed/universal_feed');

    	$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

    	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateChange()) {
			foreach ($this->request->post['selected'] as $universal_feed_id) {
				$this->model_extension_feed_universal_feed->copyFeed($universal_feed_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter'])) {
				foreach ($this->request->get['filter'] as $key => $value) {
					$url .= '&filter[' . $key . ']=' . $value;
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'));
    	}

    	$this->getList();
	}

	public function clearcache() {
		$this->load->language('extension/feed/universal_feed');

    	$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/feed/universal_feed');

    	if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateChange()) {
			include_once(DIR_CATALOG . 'model/extension/feed/universal_feed_common.php');

			$uf_model = new ModelExtensionFeedUniversalFeedCommon($this->registry);

			foreach ($this->request->post['selected'] as $universal_feed_id) {
				$uf_model->clearCache($universal_feed_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['filter'])) {
				foreach ($this->request->get['filter'] as $key => $value) {
					$url .= '&filter[' . $key . ']=' . $value;
				}
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'));
    	}

    	$this->getList();
	}

	private function getList() {
		$filter = array();

		if (!empty($this->request->get['filter'])) {
			foreach ($this->request->get['filter'] as $key => $value) {
				$filter[$key] = $value;
			}
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'uf.name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['filter'])) {
			foreach ($this->request->get['filter'] as $key => $value) {
				$url .= '&filter[' . $key . ']=' . $value;
			}
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_feeds'),
			'href'      => $this->url->link('extension/feed', 'token=' . $this->session->data['token'] . $url, 'SSL'),
      		'separator' => ' :: '
   		);

		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'),
      		'separator' => ' :: '
   		);

		$data['insert']     = $this->url->link('extension/feed/universal_feed/insert', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$data['delete']     = $this->url->link('extension/feed/universal_feed/delete', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$data['copy']       = $this->url->link('extension/feed/universal_feed/copy', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$data['clearcache'] = $this->url->link('extension/feed/universal_feed/clearcache', 'token=' . $this->session->data['token'] . $url, 'SSL');

		$data['feeds'] = array();

		$filter_data = array(
			'filter'   => $filter,
			'sort'     => $sort,
			'order'    => $order,
			'start'    => ($page - 1) * $this->config->get('config_admin_limit'),
			'limit'    => $this->config->get('config_admin_limit')
		);

		$feed_total = $this->model_extension_feed_universal_feed->getTotalFeeds($filter_data);

		$results = $this->model_extension_feed_universal_feed->getFeeds($filter_data);

		foreach ($results as $result) {
			$action = array();

			$action[] = array(
				'text' => $this->language->get('button_edit'),
				'icon' => 'pencil',
				'href' => $this->url->link('extension/feed/universal_feed/update', 'token=' . $this->session->data['token'] . '&universal_feed_id=' . $result['universal_feed_id'] . $url, 'SSL')
			);

			$action[] = array(
				'text'   => $this->language->get('text_view'),
				'icon'   => 'eye',
				'href'   => HTTP_CATALOG . 'index.php?route=extension/feed/universal_feed&universal_feed_id=' . $result['universal_feed_id'],
				'target' => '_blank'
			);

      		$data['feeds'][] = array(
				'universal_feed_id' => $result['universal_feed_id'],
				'name'              => $result['name'],
				'keyword'           => $result['keyword'],
				'date_added'        => date($this->language->get('date_format_short') . ' ' . $this->language->get('time_format'), strtotime($result['date_added'])),
				'date_modified'     => ($result['date_modified'] ? date($this->language->get('date_format_short') . ' ' . $this->language->get('time_format'), strtotime($result['date_modified'])) : '-'),
				'status'            => ($result['status'] ? $this->language->get('text_enabled') : $this->language->get('text_disabled')),
				'selected'          => isset($this->request->post['selected']) && in_array($result['product_id'], $this->request->post['selected']),
				'action'            => $action
			);
    	}
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_no_selected'] = $this->language->get('text_no_selected');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_keyword'] = $this->language->get('column_keyword');
		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_date_modified'] = $this->language->get('column_date_modified');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_action'] = $this->language->get('column_action');
	
		$data['button_add'] = $this->language->get('button_add');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_copy'] = $this->language->get('button_copy');
		$data['button_clear_cache'] = $this->language->get('button_clear_cache');
		$data['button_filter'] = $this->language->get('button_filter');

 		$data['token'] = $this->session->data['token'];

 		$data['error'] = $this->error;

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$url = '';

		if (isset($this->request->get['filter'])) {
			foreach ($this->request->get['filter'] as $key => $value) {
				$url .= '&filter[' . $key . ']=' . $value;
			}
		}

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name']          = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . '&sort=uf.name' . $url, 'SSL');
		$data['sort_keyword']       = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . '&sort=keyword' . $url, 'SSL');
		$data['sort_date_added']    = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . '&sort=uf.date_added' . $url, 'SSL');
		$data['sort_date_modified'] = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . '&sort=uf.date_modified' . $url, 'SSL');
		$data['sort_status']        = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . '&sort=uf.status' . $url, 'SSL');

		$url = '';

		if (isset($this->request->get['filter'])) {
			foreach ($this->request->get['filter'] as $key => $value) {
				$url .= '&filter[' . $key . ']=' . $value;
			}
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $feed_total;
		$pagination->page  = $page;
		$pagination->limit = $this->config->get('config_admin_limit');
		$pagination->url   = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url . '&page={page}', 'SSL');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($feed_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($feed_total - $this->config->get('config_limit_admin'))) ? $feed_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $feed_total, ceil($feed_total / $this->config->get('config_limit_admin')));

		$data['filter'] = $filter;
		$data['sort']   = $sort;
		$data['order']  = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/feed/universal_feed_list', $data));
	}

	private function getForm() {
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_not_cached'] = $this->language->get('text_not_cached');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_standalone_product'] = $this->language->get('text_standalone_product');
		$data['text_inner_product'] = $this->language->get('text_inner_product');
		$data['text_hours'] = $this->language->get('text_hours');
		$data['text_store_default'] = $this->language->get('text_store_default');
		$data['text_stock_status_setting'] = $this->language->get('text_stock_status_setting');
		$data['text_stock_status_alias'] = $this->language->get('text_stock_status_alias');
		$data['text_select_all'] = $this->language->get('text_select_all');
		$data['text_unselect_all'] = $this->language->get('text_unselect_all');
		$data['text_price'] = $this->language->get('text_price');
		$data['text_weight'] = $this->language->get('text_weight');
		$data['text_feed_specs'] = $this->language->get('text_feed_specs');

		$data['date_time_format'] = $this->language->get('datetime_format');

		$data['column_tag'] = $this->language->get('column_tag');
		$data['column_type'] = $this->language->get('column_type');
		$data['column_setting'] = $this->language->get('column_setting');
		$data['column_in_product'] = $this->language->get('column_in_product');
		$data['column_in_variant'] = $this->language->get('column_in_variant');
		$data['column_cdata'] = $this->language->get('column_cdata');
		$data['column_description'] = $this->language->get('column_description');
		$data['column_order_status'] = $this->language->get('column_order_status');
		$data['column_tag_value'] = $this->language->get('column_tag_value');
		$data['column_code'] = $this->language->get('column_code');
		$data['column_count'] = $this->language->get('column_count');
		$data['column_start'] = $this->language->get('column_start');
		$data['column_end'] = $this->language->get('column_end');
		$data['column_price'] = $this->language->get('column_price');
		$data['column_price_cod'] = $this->language->get('column_price_cod');

		$data['entry_reloaded'] = $this->language->get('entry_reloaded');
		$data['entry_preset_feed'] = $this->language->get('entry_preset_feed');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_keyword'] = $this->language->get('entry_keyword');
		$data['entry_tag_top'] = $this->language->get('entry_tag_top');
		$data['entry_tag_item'] = $this->language->get('entry_tag_item');
		$data['entry_tag_variant'] = $this->language->get('entry_tag_variant');
		$data['entry_variant_type'] = $this->language->get('entry_variant_type');
		$data['entry_free_text_before'] = $this->language->get('entry_free_text_before');
		$data['entry_free_text_after'] = $this->language->get('entry_free_text_after');
		$data['entry_language'] = $this->language->get('entry_language');
		$data['entry_currency'] = $this->language->get('entry_currency');
		$data['entry_only_in_stock'] = $this->language->get('entry_only_in_stock');
		$data['entry_only_priced'] = $this->language->get('entry_only_priced');
		$data['entry_filter_manufacturer'] = $this->language->get('entry_filter_manufacturer');
		$data['entry_cache'] = $this->language->get('entry_cache');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_stock_date_available'] = $this->language->get('entry_stock_date_available');
		$data['entry_stock_in_stock'] = $this->language->get('entry_stock_in_stock');

		$data['button_add_field'] = $this->language->get('button_add_field');
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_add_shipping_method'] = $this->language->get('button_add_shipping_method');

		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_fields'] = $this->language->get('tab_fields');
		$data['tab_stock_statuses'] = $this->language->get('tab_stock_statuses');
		$data['tab_shipping_methods'] = $this->language->get('tab_shipping_methods');

 		$data['error'] = $this->error;

		$url = '';

		if (isset($this->request->get['filter'])) {
			foreach ($this->request->get['filter'] as $key => $value) {
				$url .= '&filter[' . $key . ']=' . $value;
			}
		}

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
			'separator' => false
   		);

		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_feeds'),
			'href'      => $this->url->link('extension/feed', 'token=' . $this->session->data['token'], 'SSL'),
			'separator' => ' :: '
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL'),
      		'separator' => ' :: '
   		);

		if (!isset($this->request->get['universal_feed_id'])) {
			$data['action'] = $this->url->link('extension/feed/universal_feed/insert', 'token=' . $this->session->data['token'] . $url, 'SSL');
		} else {
			$data['action'] = $this->url->link('extension/feed/universal_feed/update', 'token=' . $this->session->data['token'] . '&universal_feed_id=' . $this->request->get['universal_feed_id'] . $url, 'SSL');
		}

		$data['cancel'] = $this->url->link('extension/feed/universal_feed', 'token=' . $this->session->data['token'] . $url, 'SSL');

		if (isset($this->request->post['feed'])) {
			$data['feed'] = $this->request->post['feed'];
		} elseif (isset($this->request->get['universal_feed_id'])) {
			$data['feed'] = $this->model_extension_feed_universal_feed->getFeed($this->request->get['universal_feed_id']);
			$data['feed']['filter_manufacturer'] = json_decode($data['feed']['filter_manufacturer'], TRUE);
			$data['feed']['date_reloaded'] = json_decode($data['feed']['date_reloaded'], TRUE);
			$data['feed']['stock_status'] = json_decode($data['feed']['stock_status'], TRUE);
			$data['feed']['shipping_methods'] = json_decode($data['feed']['shipping_methods'], TRUE);
		} else {
			$data['feed'] = array();
		}

		$data['preset_feeds'] = $this->model_extension_feed_universal_feed->getPresetFeeds();

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$this->load->model('localisation/currency');

		$data['currencies'] = $this->model_localisation_currency->getCurrencies();

		include_once(DIR_CATALOG . 'model/extension/feed/universal_feed_common.php');

		$uf_model = new ModelExtensionFeedUniversalFeedCommon($this->registry);

		$data['field_types'] = $uf_model->getFieldTypes();

		$this->load->model('localisation/stock_status');

		$data['stock_statuses'] = $this->model_localisation_stock_status->getStockStatuses();

		$this->load->model('setting/store');

		$data['stores'] = array_merge(array(array(
			'store_id' => 0,
			'name'     => $this->config->get('config_name')
		)), $this->model_setting_store->getStores());

		$this->load->model('catalog/manufacturer');

		$data['manufacturers'] = $this->model_catalog_manufacturer->getManufacturers();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/feed/universal_feed_form', $data));
	}

	private function validateForm() {
		if (!$this->user->hasPermission('modify', 'extension/feed/universal_feed')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$data = $this->request->post['feed'];

		if (utf8_strlen($data['name']) < 3 || utf8_strlen($data['name']) > 50) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if (!empty($data['keyword'])) {
			$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "url_alias WHERE keyword = '" . $this->db->escape($data['keyword']) . "'";

			if (!empty($this->request->get['universal_feed_id'])) {
				$sql .= " AND query != 'universal_feed_id=" . (int)$this->request->get['universal_feed_id'] . "'";
			}

			$query = $this->db->query($sql);

			if ($query->row['total']) {
				$this->error['keyword'] = $this->language->get('error_keyword');
			}
		}

		if (utf8_strlen($data['tag_top']) < 1 || utf8_strlen($data['tag_top']) > 50) {
			$this->error['tag_top'] = $this->language->get('error_tag_top');
		}

		if (utf8_strlen($data['tag_item']) < 1 || utf8_strlen($data['tag_item']) > 50) {
			$this->error['tag_item'] = $this->language->get('error_tag_item');
		}

		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}

		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	private function validateChange() {
		if (!$this->user->hasPermission('modify', 'extension/feed/universal_feed')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
