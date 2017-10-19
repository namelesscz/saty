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
        'products' => '42,30,47,28,43,44,45,41,40,48,36,34,29',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '155',
    'height' => '155',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '12',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '',
  ),
  2 => 
  array (
    'tabs' => 
    array (
      2 => 
      array (
        'heading' => 
        array (
          1 => 'Dog',
          $language_id => 'Dog',
        ),
        'title' => 'products',
        'product' => 's',
        'products' => '42,47,28,41,30,43,44,45,29,46',
        'category' => '',
        'categories' => '',
      ),
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Cat',
          $language_id => 'Cat',
        ),
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      4 => 
      array (
        'heading' => 
        array (
          1 => 'Fish',
          $language_id => 'Fish',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      5 => 
      array (
        'heading' => 
        array (
          1 => 'Bird',
          $language_id => 'Bird',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
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
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '7',
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