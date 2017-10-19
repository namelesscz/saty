<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["product_blocks_module"] = array (
  1 => 
  array (
    'type' => '1',
    'block_name' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'icon' => '',
    'icon_position' => 'left',
    'popup_module' => '1',
    'html' => 
    array (
      1 => '&lt;div class=&quot;product-block&quot;&gt;
   &lt;div class=&quot;title-block&quot;&gt;Custom block&lt;/div&gt;
   &lt;div class=&quot;block-content&quot;&gt;
      &lt;ul class=&quot;product-contact&quot;&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-mail2.png&quot; alt=&quot;Email&quot;&gt;&lt;p&gt;email.example@gmail.com&lt;/p&gt;&lt;/li&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;&lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button button-type-2&quot;&gt;Contact form&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;product-block&quot;&gt;
   &lt;div class=&quot;title-block&quot;&gt;Custom block&lt;/div&gt;
   &lt;div class=&quot;block-content&quot;&gt;
      &lt;ul class=&quot;product-contact&quot;&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-mail2.png&quot; alt=&quot;Email&quot;&gt;&lt;p&gt;email.example@gmail.com&lt;/p&gt;&lt;/li&gt;
       &lt;li&gt;&lt;img src=&quot;image/catalog/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;&lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;&lt;/li&gt;
      &lt;/ul&gt;
      
      &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button button-type-2&quot;&gt;Contact form&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;',
    ),
    'show_on_products_from' => 'all',
    'product' => '',
    'products' => '',
    'category' => '',
    'categories' => '',
    'layout_id' => '99999',
    'position' => 'product_custom_block',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$output2 = array();
$output2["product_blocks_module"] = $this->config->get('product_blocks_module');

if(!is_array($output["product_blocks_module"])) $output["product_blocks_module"] = array();
if(!is_array($output2["product_blocks_module"])) $output2["product_blocks_module"] = array();
$output3 = array();
$output3["product_blocks_module"] = array_merge($output["product_blocks_module"], $output2["product_blocks_module"]);

$this->model_setting_setting->editSetting( "product_blocks", $output3 );		

?>