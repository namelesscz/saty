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
      1 => '&lt;div class=&quot;carparts-phone hidden-md&quot;&gt;
     &lt;img src=&quot;image/catalog/carparts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
     &lt;p&gt;500-100-100&lt;/p&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;carparts-phone hidden-md&quot;&gt;
     &lt;img src=&quot;image/catalog/carparts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
     &lt;p&gt;500-100-100&lt;/p&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'top_block',
    'status' => '1',
    'sort_order' => '',
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
      1 => '&lt;div class=&quot;row banners banners-with-padding-0 responsive-margin-top-30&quot; style=&quot;position: relative;margin-top: -60px;z-index:22&quot;&gt;
     &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-9&quot;&gt;
          &lt;div class=&quot;row banners banners-with-padding-0&quot;&gt;
               &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
               &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;     
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-0 responsive-margin-top-30&quot; style=&quot;position: relative;margin-top: -60px;z-index:22&quot;&gt;
     &lt;div class=&quot;col-sm-3&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-9&quot;&gt;
          &lt;div class=&quot;row banners banners-with-padding-0&quot;&gt;
               &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
               &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/carparts/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;     
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
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