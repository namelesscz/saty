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
          1 => 'Latest products',
          $language_id => 'Latest products',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '42,30,28,47,41,43,44,45,46,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Bestsellers',
          $language_id => 'Bestsellers',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '30,28,41',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '80',
    'height' => '80',
    'itemsperpage' => '3',
    'cols' => '1',
    'limit' => '3',
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '1',
  ),
  3 => 
  array (
    'tabs' => 
    array (
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Women',
          $language_id => 'Women',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '46,43,44,30',
        'category' => '',
        'categories' => '',
      ),
      4 => 
      array (
        'heading' => 
        array (
          1 => 'Men',
          $language_id => 'Men',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '44,45,30,46',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '4',
    'layout_id' => '1',
    'position' => 'content_big_column',
    'status' => '1',
    'sort_order' => '1',
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