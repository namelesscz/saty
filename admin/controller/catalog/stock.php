<?php
class ControllerCatalogStock extends Controller {
	private $error = array();
	private $import_file = 'stock.csv' ;

	public function index() {
		$this->load->language('catalog/stock');

		$this->document->setTitle($this->language->get('heading_title'));
		$errors      = array();
		$deltas      = array();
		$header      = array();
		$models      = array();
		$import_file = (defined(DIR_DOWNLOAD)? DIR_DOWNLOAD : getcwd().'/' ).$this->import_file;
		if (file_exists($import_file)) {
			$fp = fopen($import_file,'r');
			if ($fp){
				$i = 0;
				while (($data = fgetcsv($fp, 1000, ",")) !== FALSE){
					if ($i > 0) {
						$model = $data[0];
						if (!$model) { continue; }

						$models[] = $model;

						$local_deltas= array();
						for ($j=2;$j < (count($data)-1); $j++) {
							$cnt_old = $this->getQuantityForProductOption($model,$header[$j]);
							if (intval($data[$j]) != $cnt_old) {
								$this->setQuantityForProductOption($model,$header[$j],intval($data[$j]));
								$local_deltas[$j] =  intval($data[$j]) - $cnt_old;
							}
						}
						$total_old = $this->getQuantityForProduct($model);
						$total = intval(end($data));
						if ($total != $total_old) {
							$this->setQuantityForProduct($model,$total);
							$local_deltas['total'] = $total - $total_old;
						}
						if (count($local_deltas)) {
							$deltas[$model] = $local_deltas;
						}
					}
					else {
						$header = $data;
					}
					$i++;
				}
				fclose($fp);
				if (count($models)) {
					$this->clearOptions($models);
				}
			}
		} else {
			$errors[] = str_replace('###FILE###', $import_file, $this->language->get('error_stock_file_not_found'));
		}
		$data                  = array();
		$data['out_table']     = $this->printOutput($deltas,$header);
		$data['import_file']   = $import_file;
		$data['errors']        = $errors;
		$data['heading_title'] = $this->language->get('heading_title') ;

		$data['header']        = $this->load->controller('common/header');
		$data['column_left']   = $this->load->controller('common/column_left');
		$data['footer']        = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/stock', $data));
	}

	private function getQuantityForProductOption ($model, $option){
		$query = $this->db->query('SELECT quantity FROM '. DB_PREFIX . 'product_option_value WHERE product_id=(SELECT product_id FROM '. DB_PREFIX . 'product WHERE model="'.$model.'" LIMIT 1) and option_value_id=(SELECT option_value_id FROM '. DB_PREFIX . 'option_value_description WHERE language_id=2 AND lower(name)=lower("'.$option.' - skladem") LIMIT 1) LIMIT 1; ');
		if ($query->num_rows) {
			return $query->row['quantity'];
		}
		return 0;
	}

	private function setQuantityForProductOption ($model, $option, $quantity) {
		$query = $this->db->query('UPDATE '. DB_PREFIX . 'product_option_value SET quantity='.intval($quantity).' WHERE product_id=(SELECT product_id FROM '. DB_PREFIX . 'product WHERE model="'.$model.'" LIMIT 1) and option_value_id=(SELECT option_value_id FROM '. DB_PREFIX . 'option_value_description WHERE language_id=2 AND lower(name)=lower("'.$option.' - skladem") LIMIT 1) LIMIT 1; ');
	}

	private function getQuantityForProduct ($model){
		$query = $this->db->query('SELECT quantity FROM '. DB_PREFIX . 'product WHERE model="'.$model.'" LIMIT 1;');
		if ($query->num_rows) {
			return $query->row['quantity'];
		}
		return 0;
	}

	private function clearOptions ($models) {
		$query = $this->db->query('UPDATE '. DB_PREFIX . 'product_option_value SET quantity=0 WHERE option_value_id IN (SELECT option_value_id FROM '. DB_PREFIX . 'option_value_description WHERE language_id=2 AND name LIKE "%kladem") AND product_id NOT IN ( SELECT product_id FROM '. DB_PREFIX . 'product WHERE model IN ("'.implode('","',$models).'") )');
	}

	private function setQuantityForProduct ($model, $quantity) {
		$query = $this->db->query('UPDATE '. DB_PREFIX . 'product SET quantity='.intval($quantity).' WHERE model="'.$model.'" LIMIT 1;');
	}

	private function printOutput($deltas,$header) {
		$str = '<table  class="table table-bordered table-hover"><tr>';
		for ($i=0;$i < count($header);$i++){
			if( $i==1) { continue;}
			$str .= '<th>'.$header[$i].'</th>';
		}
		$str .= '</tr>';
		foreach ($deltas as $model => $data) {
			$str .= '<tr><td>'.$model.'</td>';
			for ($i=2;$i < count($header)-1;$i++) {
				if(array_key_exists($i,$data)) {
					$str .= '<td>'.$data[$i].'</td>';
				} else {
					$str .= '<td>&nbsp;</td>';
				}
			}
			$str .= '<td>'.(array_key_exists('total',$data)? $data['total'] : '&nbsp;').'</td></tr>';
		}
		$str .= '</table>';
		return $str;
	}
}

