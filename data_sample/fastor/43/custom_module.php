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
      1 => '&lt;div class=&quot;row banners banners-with-padding-0-2&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-0-2&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-05.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/bakery/banner-05.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '10',
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
      1 => '&lt;div class=&quot;bakery-steps-title&quot;&gt;How it works?&lt;/div&gt;
&lt;div class=&quot;bakery-steps row clearfix&quot;&gt;
     &lt;div class=&quot;col-sm-4 first&quot;&gt;
          &lt;div class=&quot;circle&quot; style=&quot;color: #a15615&quot;&gt;1&lt;/div&gt;
          &lt;p&gt;Choose bread&lt;br&gt;you want..&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 second&quot;&gt;
          &lt;div class=&quot;circle&quot; style=&quot;color: #12588e&quot;&gt;2&lt;/div&gt;
          &lt;p&gt;Select subscription&lt;br&gt;option: 7 days, 1 month,&lt;br&gt; 3 months, 1 year&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 third&quot;&gt;
          &lt;div class=&quot;circle&quot;&gt;3&lt;/div&gt;
          &lt;p&gt;Set delivery hours&lt;br&gt;you want and DONE!&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
      $language_id => '&lt;div class=&quot;bakery-steps-title&quot;&gt;How it works?&lt;/div&gt;
&lt;div class=&quot;bakery-steps row clearfix&quot;&gt;
     &lt;div class=&quot;col-sm-4 first&quot;&gt;
          &lt;div class=&quot;circle&quot; style=&quot;color: #a15615&quot;&gt;1&lt;/div&gt;
          &lt;p&gt;Choose bread&lt;br&gt;you want..&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 second&quot;&gt;
          &lt;div class=&quot;circle&quot; style=&quot;color: #12588e&quot;&gt;2&lt;/div&gt;
          &lt;p&gt;Select subscription&lt;br&gt;option: 7 days, 1 month,&lt;br&gt; 3 months, 1 year&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 third&quot;&gt;
          &lt;div class=&quot;circle&quot;&gt;3&lt;/div&gt;
          &lt;p&gt;Set delivery hours&lt;br&gt;you want and DONE!&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
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