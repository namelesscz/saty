<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["filter_product_module"] = array (
  0 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          1 => 'Latest products',
          $language_id => 'Latest products',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '42,28,30,47,43,44,45,41,48,36,34,40,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '6',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
  ),
); 

$output2 = array();
$output2["filter_product_module"] = $this->config->get('filter_product_module');

if(!is_array($output["filter_product_module"])) $output["filter_product_module"] = array();
if(!is_array($output2["filter_product_module"])) $output2["filter_product_module"] = array();
$output3 = array();
$output3["filter_product_module"] = array_merge($output["filter_product_module"], $output2["filter_product_module"]);

$this->model_setting_setting->editSetting( "filter_product", $output3 );		

?>