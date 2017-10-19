<?php
class ControllerExtensionFeedUniversalFeed extends Controller {
    public function index() {
        if (empty($this->request->get['universal_feed_id'])) {
            $this->response->redirect('error/not_found');
        }
        $this->load->model('extension/feed/universal_feed_common');
        $feed = $this->model_extension_feed_universal_feed_common->getFeed($this->request->get['universal_feed_id']);
        if (empty($feed) || !$feed['status']) {
            $this->response->redirect('error/not_found');
        }
        $language_id = ($feed['language_id'] ? $feed['language_id'] : $this->config->get('config_language_id'));
        $currency_code = ($feed['currency_code'] ? $feed['currency_code'] : $this->config->get('config_currency'));
        $filename = $feed['universal_feed_id'] . '-s' . $this->config->get('config_store_id') . '-l' . $language_id;
        $times = json_decode($feed['date_reloaded'], true);
        $last_cached = (empty($times[$this->config->get('config_store_id')]) ? 0 : $times[$this->config->get('config_store_id')]);
        if (!empty($this->request->get['force']) || $feed['cache'] <= 0 || !file_exists(DIR_CACHE . ModelExtensionFeedUniversalFeedCommon::DIR_FEED . '/' . $filename) || ($last_cached + $feed['cache'] * 60 * 60) <= time()) {
            $this->model_extension_feed_universal_feed_common->clearCache($this->request->get['universal_feed_id']);
            $language_tmp = $this->config->get('config_language_id');
            $currency_tmp = $this->config->get('config_currency');
            $this->config->set('config_language_id', $language_id);
            $this->config->set('config_currency', $currency_code);
            $this->session->data['currency'] = $currency_code;
            $this->_generate($feed, $filename);
            $this->config->set('config_language_id', $language_tmp);
            $this->config->set('config_currency', $currency_tmp);
            $this->session->data['currency'] = $currency_tmp;
            $times[$this->config->get('config_store_id')] = time();
            $this->db->query("UPDATE " . DB_PREFIX . "universal_feed SET date_reloaded = '" . $this->db->escape(json_encode($times)) . "' WHERE universal_feed_id = " . (int)$feed['universal_feed_id']);
        }
        $this->response->addHeader('Content-Type: application/xml');
        $this->response->setOutput(file_get_contents(DIR_CACHE . ModelExtensionFeedUniversalFeedCommon::DIR_FEED . '/' . $filename));
    }
    private function _generate($feed, $filename) {
        $this->load->model('catalog/product');
        $this->load->model('catalog/category');
        $field_types = $this->model_extension_feed_universal_feed_common->getFieldTypes();
        $tables = array();
        foreach ($feed['fields'] as $field) {
            if (isset($field_types[$field['type']])) {
                foreach ($field_types[$field['type']]['params'] as $key => $value) {
                    if (!in_array($key, $tables)) {
                        $tables[] = $key;
                    }
                }
            }
        }
        $output = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>" . PHP_EOL;
        $output .= html_entity_decode($feed['free_text_before'], ENT_QUOTES, 'UTF-8');
        $output .= '<' . $feed['tag_top'] . (strstr($feed['keyword'], 'zbozi')  ? ' xmlns="http://www.zbozi.cz/ns/offer/1.0"' : ''). '>';
        $products = $this->model_extension_feed_universal_feed_common->getProducts($tables, $feed['only_in_stock'], $feed['only_priced'], $feed['filter_manufacturer']);
        foreach ($products as $product_id => $product) {
            $output .= '<' . $feed['tag_item'] . '>';
            $a_params = array();
            foreach ($feed['fields'] as $field) {
                if ($field['in_product'] && isset($field_types[$field['type']])) {
                    $this->model_extension_feed_universal_feed_common->setCdata(empty($field['cdata']) ? false : true);
                    $result = call_user_func(array($this->model_extension_feed_universal_feed_common, 'tag' . $field_types[$field['type']]['method']), $product, $field['setting'], $feed);
                    if ($result !== false) {
                        if (is_array($result)) {
                            foreach ($result as $res) {
                                if (is_array($res)) {
                                    $output .= '<' . $res['tag'] . '>';
                                    foreach ($res['values'] as $vkey => $vval) {
                                        $output .= '<' . $vkey . '>' . $vval . '</' . $vkey . '>';
                                    }
                                    $output .= '</' . $res['tag'] . '>';
                                } else {
                                    $output .= '<' . $field['tag'] . '>' . $res . '</' . $field['tag'] . '>';
                                }
                            }  //foreach
                        } else {
                            if (count(explode('.', $field['tag'])) == 2) {
                                $a_s = explode('.', $field['tag']);
                                $a_params[ $a_s[0]][$a_s[1]] = $result;
                            } else {
                                $output .= '<' . $field['tag'] . '>' . $result . '</' . $field['tag'] . '>';
                            } //else
                        } //else
                    }
                }
            }
            //two leveled
            if (count($a_params)) {
                foreach ($a_params as $a_key => $a_val) {
                    $output .= '<'.$a_key.'>';
                    foreach ($a_val as $a_i_key => $a_i_val) {
                        $output .= '<'.$a_i_key.'>'.$a_i_val.'</'.$a_i_key.'>';
                    }
                    $output .= '</'.$a_key.'>';
                }
            }
            if ($feed['variant_type'] == 'S') {
                $output .= '</' . $feed['tag_item'] . '>';
            }
            if ($feed['tag_variant']) {
                $variants = $this->model_extension_feed_universal_feed_common->getProductVariants($product_id, $product, $feed['only_in_stock']);
                foreach ($variants as $variant) {
                    $output .= '<' . $feed['tag_variant'] . '>';
                    $a_params = array();
                    foreach ($feed['fields'] as $field) {
                        if ($field['in_variant'] && isset($field_types[$field['type']])) {
                            $this->model_extension_feed_universal_feed_common->setCdata(empty($field['cdata']) ? false : true);
                            $result = call_user_func(array($this->model_extension_feed_universal_feed_common, 'tag' . $field_types[$field['type']]['method']), $variant, $field['setting'], $feed);
                            if ($result !== false) {
                                if (is_array($result)) {
                                    foreach ($result as $res) {
                                        if (is_array($res)) {
                                            $output .= '<' . $res['tag'] . '>';
                                            foreach ($res['values'] as $vkey => $vval) {
                                                $output .= '<' . $vkey . '>' . $vval . '</' . $vkey . '>';
                                            }
                                            $output .= '</' . $res['tag'] . '>';
                                        } else {
                                            $output .= '<' . $field['tag'] . '>' . $res . '</' . $field['tag'] . '>';
                                        }
                                    }
                                } else {
                                    if (count(explode('.', $field['tag'])) == 2) {
                                        $a_s = explode('.', $field['tag']);
                                        $a_params[ $a_s[0]][$a_s[1]] = $result;
                                    } else {
                                        $output .= '<' . $field['tag'] . '>' . $result . '</' . $field['tag'] . '>';
                                    }
                                }
                            }
                        }
                    }
                    //two leveled
                    if (count($a_params)) {
                        foreach ($a_params as $a_key => $a_val) {
                            $output .= '<'.$a_key.'>';
                            foreach ($a_val as $a_i_key => $a_i_val) {
                                $output .= '<'.$a_i_key.'>'.$a_i_val.'</'.$a_i_key.'>';
                            }
                            $output .= '</'.$a_key.'>';
                        }
                    }
                    $output .= '</' . $feed['tag_variant'] . '>';
                }
            }
            if ($feed['variant_type'] == 'I') {
                $output .= '</' . $feed['tag_item'] . '>';
            }
        }
        $output .= '</' . $feed['tag_top'] . '>';
        $output .= html_entity_decode($feed['free_text_after'], ENT_QUOTES, 'UTF-8');
        $dirs = explode('/', ModelExtensionFeedUniversalFeedCommon::DIR_FEED);
        $actual = DIR_CACHE;
        foreach ($dirs as $dir) {
            $actual .= $dir;
            if (!is_dir($actual)) {
                mkdir($actual, 0775);
            }
            $actual .= '/';
        }
        file_put_contents(DIR_CACHE . ModelExtensionFeedUniversalFeedCommon::DIR_FEED . '/' . $filename, $output);
    }
}
?>