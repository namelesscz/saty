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
   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 464px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/fashion3/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;right: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 464px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/fashion3/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;left: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;style type=&quot;text/css&quot;&gt;
@media (max-width: 1270px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 350px !important;
   }
}

@media (max-width: 991px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 250px !important;
   }
}
&lt;/style&gt;',
      $language_id => '&lt;div class=&quot;row row-no-padding banners-full-width&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 464px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/fashion3/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;right: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot; style=&quot;height: 464px;position: relative&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/fashion3/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;position: absolute;display: block:top: 0;left: 0;max-width: none&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;

&lt;style type=&quot;text/css&quot;&gt;
@media (max-width: 1270px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 350px !important;
   }
}

@media (max-width: 991px) {
   .banners-full-width &gt; div,
   .banners-full-width &gt; div img {
      height: 250px !important;
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
      1 => '&lt;div class=&quot;fashion3-columns clearfix&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-premium.png&quot; alt=&quot;Premium&quot;&gt;
          &lt;h4&gt;Only premium&lt;br&gt;materials&lt;/h4&gt;
     &lt;/div&gt;     
     
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-perfect.png&quot; alt=&quot;Perfect cutting&quot;&gt;
          &lt;h4&gt;Perfect cutting&lt;br&gt;and sewing&lt;/h4&gt;
     &lt;/div&gt;   
     
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
          &lt;h4&gt;Always with&lt;br&gt;free shipping&lt;/h4&gt;
     &lt;/div&gt;   
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;fashion3-columns clearfix&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-premium.png&quot; alt=&quot;Premium&quot;&gt;
          &lt;h4&gt;Only premium&lt;br&gt;materials&lt;/h4&gt;
     &lt;/div&gt;     
     
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-perfect.png&quot; alt=&quot;Perfect cutting&quot;&gt;
          &lt;h4&gt;Perfect cutting&lt;br&gt;and sewing&lt;/h4&gt;
     &lt;/div&gt;   
     
     &lt;div class=&quot;col-sm-4&quot;&gt;     
          &lt;img src=&quot;image/catalog/fashion3/icon-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
          &lt;h4&gt;Always with&lt;br&gt;free shipping&lt;/h4&gt;
     &lt;/div&gt;   
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
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