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
        'title' => 'latest',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '1',
    'width' => '250',
    'height' => '250',
    'itemsperpage' => '4',
    'cols' => '1',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
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
    'carousel' => '1',
    'width' => '100',
    'height' => '100',
    'itemsperpage' => '2',
    'cols' => '1',
    'limit' => '4',
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '0',
  ),
  3 => 
  array (
    'tabs' => 
    array (
      3 => 
      array (
        'heading' => 
        array (
          1 => 'Men',
          $language_id => 'Men',
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
          1 => 'Women',
          $language_id => 'Women',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      5 => 
      array (
        'heading' => 
        array (
          1 => 'Accessories',
          $language_id => 'Accessories',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '190',
    'itemsperpage' => '4',
    'cols' => '2',
    'limit' => '8',
    'layout_id' => '1',
    'position' => 'content_big_column',
    'status' => '1',
    'sort_order' => '',
  ),
  4 => 
  array (
    'tabs' => 
    array (
      6 => 
      array (
        'heading' => 
        array (
          1 => 'Featured',
          $language_id => 'Featured',
        ),
        'title' => 'category',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '17,25,30,18,28',
      ),
    ),
    'carousel' => '0',
    'width' => '200',
    'height' => '200',
    'itemsperpage' => '6',
    'cols' => '1',
    'limit' => '6',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '3',
  ),
  5 => 
  array (
    'tabs' => 
    array (
      7 => 
      array (
        'heading' => 
        array (
          1 => 'Related products',
          $language_id => 'Related products',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      8 => 
      array (
        'heading' => 
        array (
          1 => 'People also bought',
          $language_id => 'People also bought',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
        'category' => '',
        'categories' => '',
      ),
      9 => 
      array (
        'heading' => 
        array (
          1 => 'Custom products',
          $language_id => 'Custom products',
        ),
        'title' => 'most_viewed',
        'product' => '',
        'products' => '',
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
    'layout_id' => '2',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
  ),
  6 => 
  array (
    'tabs' => 
    array (
      10 => 
      array (
        'heading' => 
        array (
          1 => 'Featured',
          $language_id => 'Featured',
        ),
        'title' => 'random',
        'product' => '',
        'products' => '',
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
    'layout_id' => '3',
    'position' => 'content_bottom',
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