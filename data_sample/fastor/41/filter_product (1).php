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
          1 => 'Latest Coffee’s &amp; Tea’s',
          $language_id => 'Latest Coffee’s &amp; Tea’s',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '42,28,47,30,41,46',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '220',
    'height' => '220',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '6',
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
        'products' => '43,44,46,41,40',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '100',
    'height' => '98',
    'itemsperpage' => '5',
    'cols' => '1',
    'limit' => '5',
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
          1 => 'Coffee\'s',
          $language_id => 'Coffee\'s',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '33,25,18',
      ),
      4 => 
      array (
        'heading' => 
        array (
          1 => 'Tea\'s',
          $language_id => 'Tea\'s',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '47,28,46,43,44,45,30,42,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '210',
    'itemsperpage' => '4',
    'cols' => '2',
    'limit' => '8',
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