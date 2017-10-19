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
      1 => '&lt;div class=&quot;exclusive-banners clearfix&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;div style=&quot;background: url(image/catalog/exclusive/bg-banner-01.png) top right no-repeat&quot;&gt;
                    &lt;div class=&quot;heading&quot;&gt;Looking&lt;br&gt;for nice watch?&lt;/div&gt;
                    &lt;a href=&quot;#&quot; class=&quot;exclusive-button&quot;&gt;Go to store&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;div style=&quot;background: url(image/catalog/exclusive/bg-banner-02.png) top right no-repeat&quot;&gt;
                    &lt;div class=&quot;heading&quot;&gt;Hand-made&lt;br&gt;rings?&lt;/div&gt;
                    &lt;a href=&quot;#&quot; class=&quot;exclusive-button&quot;&gt;Read more&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;exclusive-banners clearfix&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;div style=&quot;background: url(image/catalog/exclusive/bg-banner-01.png) top right no-repeat&quot;&gt;
                    &lt;div class=&quot;heading&quot;&gt;Looking&lt;br&gt;for nice watch?&lt;/div&gt;
                    &lt;a href=&quot;#&quot; class=&quot;exclusive-button&quot;&gt;Go to store&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;div style=&quot;background: url(image/catalog/exclusive/bg-banner-02.png) top right no-repeat&quot;&gt;
                    &lt;div class=&quot;heading&quot;&gt;Hand-made&lt;br&gt;rings?&lt;/div&gt;
                    &lt;a href=&quot;#&quot; class=&quot;exclusive-button&quot;&gt;Read more&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
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