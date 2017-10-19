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
      1 => '&lt;div class=&quot;row row-no-padding&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-01.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-02.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-03.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-04.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-05.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-06.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row row-no-padding&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-01.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-02.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-03.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-04.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-05.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/audio/banner-06.png&quot; style=&quot;display: block;margin: 0px auto&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
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
      1 => '&lt;div class=&quot;audio-product&quot;&gt;
     &lt;div class=&quot;details&quot;&gt;
          &lt;div class=&quot;countdown-special&quot;&gt;
               &lt;p&gt;Deal of the week&lt;/p&gt;
               &lt;script&gt;
               $(function () {
               	var austDay = new Date();
               	austDay = new Date(2015, 12 - 1, 22);
               	var date = new Date();
               	date.setDate(date.getDate() + 10 /*days*/);    
               	$(\'#audio-countdown\').countdown({until: date});
               });
               &lt;/script&gt;
               &lt;div id=&quot;audio-countdown&quot; class=&quot;clearfix&quot;&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;overflow-price-name&quot;&gt;
               &lt;div class=&quot;price&quot;&gt;$12.999,00 &lt;span class=&quot;price-old&quot;&gt;$18.999,00&lt;/span&gt;&lt;/div&gt;
               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot;&gt;Mixer M4&lt;br&gt;3-Channel Scratch&lt;/a&gt;&lt;/div&gt;
               &lt;div class=&quot;add-to-cart&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot; class=&quot;button-add-to-cart&quot;&gt;Add to cart&lt;/a&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot;&gt;&lt;img src=&quot;image/catalog/audio/mixer.png&quot; alt=&quot;Mixer&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;audio-product&quot;&gt;
     &lt;div class=&quot;details&quot;&gt;
          &lt;div class=&quot;countdown-special&quot;&gt;
               &lt;p&gt;Deal of the week&lt;/p&gt;
               &lt;script&gt;
               $(function () {
               	var austDay = new Date();
               	austDay = new Date(2015, 12 - 1, 22);
               	var date = new Date();
               	date.setDate(date.getDate() + 10 /*days*/);    
               	$(\'#audio-countdown\').countdown({until: date});
               });
               &lt;/script&gt;
               &lt;div id=&quot;audio-countdown&quot; class=&quot;clearfix&quot;&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;overflow-price-name&quot;&gt;
               &lt;div class=&quot;price&quot;&gt;$12.999,00 &lt;span class=&quot;price-old&quot;&gt;$18.999,00&lt;/span&gt;&lt;/div&gt;
               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot;&gt;Mixer M4&lt;br&gt;3-Channel Scratch&lt;/a&gt;&lt;/div&gt;
               &lt;div class=&quot;add-to-cart&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot; class=&quot;button-add-to-cart&quot;&gt;Add to cart&lt;/a&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;product_id=28&quot;&gt;&lt;img src=&quot;image/catalog/audio/mixer.png&quot; alt=&quot;Mixer&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
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