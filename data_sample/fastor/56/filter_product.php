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
          1 => 'Dekstops',
          $language_id => 'Dekstops',
        ),
        'title' => 'products',
        'product' => '',
        'products' => '42,47,28,41,43,44,45,29,46,30',
        'category' => '',
        'categories' => '',
      ),
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Laptops & Notebooks',
          $language_id => 'Laptops & Notebooks',
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
          1 => 'Components',
          $language_id => 'Components',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '164',
    'height' => '164',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '2',
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