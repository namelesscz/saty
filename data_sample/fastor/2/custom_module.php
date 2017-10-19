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
      1 => '&lt;div class=&quot;row row-no-padding banners-full-width&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 240px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;right: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 240px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;left: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;style type=&quot;text/css&quot;&gt;
@media (max-width: 1270px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 200px !important;
   }
}

@media (max-width: 991px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 150px !important;
   }
}
&lt;/style&gt;',
      $language_id => '&lt;div class=&quot;row row-no-padding banners-full-width&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 240px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;right: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 240px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;left: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;style type=&quot;text/css&quot;&gt;
@media (max-width: 1270px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 200px !important;
   }
}

@media (max-width: 991px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 150px !important;
   }
}
&lt;/style&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '2',
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
      1 => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
 &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners hidden-xs&quot;&gt;
 &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-06.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-06.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
  ),
  4 => 
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
      1 => '&lt;div class=&quot;row banners hidden-xs hidden-sm&quot;&gt;
 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners hidden-xs hidden-sm&quot;&gt;
 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '2',
  ),
  5 => 
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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-06.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-06.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/full-width/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '2',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
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