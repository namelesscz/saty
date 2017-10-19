<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;row banners banners-with-padding-30&quot; style=&quot;margin-top: 3px&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-30&quot; style=&quot;margin-top: 3px&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;row banners banners-with-padding-40&quot;&gt;
     &lt;div class=&quot;col-sm-8&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-40&quot;&gt;
     &lt;div class=&quot;col-sm-8&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;games3-big-sale&quot;&gt;
     &lt;div class=&quot;image hidden-xs hidden-sm hidden-md&quot; style=&quot;left: 363px;top: 0&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-big-sale.png&quot; alt=&quot;Big sale&quot;&gt;&lt;/div&gt;
     &lt;div class=&quot;heading&quot;&gt;All accessories&lt;br&gt;on Sale!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;More&lt;/a&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;games3-big-sale&quot;&gt;
     &lt;div class=&quot;image hidden-xs hidden-sm hidden-md&quot; style=&quot;left: 363px;top: 0&quot;&gt;&lt;img src=&quot;image/catalog/games3/banner-big-sale.png&quot; alt=&quot;Big sale&quot;&gt;&lt;/div&gt;
     &lt;div class=&quot;heading&quot;&gt;All accessories&lt;br&gt;on Sale!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;More&lt;/a&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'customfooter_top',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$output2 = array();
$output2["custom_module_module"] = $this->config->get('custom_module_module');

if(!is_array($output["custom_module_module"])) $output["custom_module_module"] = array();
if(!is_array($output2["custom_module_module"])) $output2["custom_module_module"] = array();
$output3 = array();
$output3["custom_module_module"] = array_merge($output["custom_module_module"], $output2["custom_module_module"]);

$this->model_setting_setting->editSetting( "custom_module", $output3 );	

?>