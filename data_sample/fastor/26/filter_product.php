<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["filter_product_module"] = array (
  1 => 
  array (
    'tabs' => 
    array (
      1 => 
      array (
        'heading' => 
        array (
          1 => 'All',
          $language_id => 'All',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '41,40,48,36,34,43,44,45,49,33,46,29,30,42,47,28',
        'category' => '',
        'categories' => '',
      ),
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Women',
          $language_id => 'Women',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Men',
          $language_id => 'Men',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      4 => 
      array (
        'heading' => 
        array (
          1 => 'Accessories',
          $language_id => 'Accessories',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '25,33,35,29,28,20',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '6',
    'cols' => '2',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
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