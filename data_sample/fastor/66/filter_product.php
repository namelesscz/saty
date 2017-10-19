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
          1 => 'Featured',
          $language_id => 'Featured',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '28,47,30,46,43,44,41,40,48,36,34,29,42',
        'category' => '',
        'categories' => '',
      ),
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Special',
          $language_id => 'Special',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Bestsellers',
          $language_id => 'Bestsellers',
        ),
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '220',
    'height' => '220',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '3',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      4 => 
      array (
        'heading' => 
        array (
          1 => 'Latest products',
          $language_id => 'Latest products',
        ),
        'title' => 'products',
        'product' => 'p',
        'products' => '42,30,28,47,41,43,44,45,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '220',
    'height' => '220',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
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