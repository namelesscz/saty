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
          1 => 'Latest books',
          $language_id => 'Latest books',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '30,28,47,41,43,44,45,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '1',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Specials',
          $language_id => 'Specials',
        ),
        'title' => 'products',
        'product' => 'i',
        'products' => '42,46,30,29,48,43,45,44,36,34',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_top',
    'status' => '1',
    'sort_order' => '4',
  ),
  3 => 
  array (
    'tabs' => 
    array (
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Bestsellers',
          $language_id => 'Bestsellers',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '100',
    'height' => '100',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '4',
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '3',
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