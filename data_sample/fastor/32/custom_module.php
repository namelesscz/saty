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
      1 => '&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-12&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cameras/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_big_column',
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
      1 => '&lt;div style=&quot;background: #eaebec url(image/catalog/cameras/bg-top-bar.png) bottom left repeat-x&quot;&gt;
   &lt;div class=&quot;standard-body&quot;&gt;
        &lt;div class=&quot;full-width&quot;&gt;
             &lt;div class=&quot;container&quot;&gt;
                  &lt;div class=&quot;row cameras-top-bar&quot;&gt;
                       &lt;div class=&quot;col-sm-4&quot;&gt;FREE SHIPPING for all orders over &lt;b&gt;$500&lt;/b&gt;&lt;/div&gt;
                       &lt;div class=&quot;col-sm-4 text-center&quot;&gt;Have any question &lt;b&gt;500-132-500&lt;/b&gt;&lt;/div&gt;
                       &lt;div class=&quot;col-sm-4 text-right&quot;&gt;Support from monday to friday &lt;b&gt;ON LIVE CHAT&lt;/b&gt;&lt;/div&gt;
                  &lt;/div&gt;
             &lt;/div&gt;
        &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;background: #eaebec url(image/catalog/cameras/bg-top-bar.png) bottom left repeat-x&quot;&gt;
   &lt;div class=&quot;standard-body&quot;&gt;
        &lt;div class=&quot;full-width&quot;&gt;
             &lt;div class=&quot;container&quot;&gt;
                  &lt;div class=&quot;row cameras-top-bar&quot;&gt;
                       &lt;div class=&quot;col-sm-4&quot;&gt;FREE SHIPPING for all orders over &lt;b&gt;$500&lt;/b&gt;&lt;/div&gt;
                       &lt;div class=&quot;col-sm-4 text-center&quot;&gt;Have any question &lt;b&gt;500-132-500&lt;/b&gt;&lt;/div&gt;
                       &lt;div class=&quot;col-sm-4 text-right&quot;&gt;Support from monday to friday &lt;b&gt;ON LIVE CHAT&lt;/b&gt;&lt;/div&gt;
                  &lt;/div&gt;
             &lt;/div&gt;
        &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
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
      1 => '&lt;div class=&quot;cameras-columns&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6&gt;Free shipping &amp;amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-money.png&quot; alt=&quot;Money&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6 style=&quot;color: #f74212&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6 style=&quot;color: #9ac7ad&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;cameras-columns&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6&gt;Free shipping &amp;amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-money.png&quot; alt=&quot;Money&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6 style=&quot;color: #f74212&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/cameras/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;right&quot;&gt;
                    &lt;h6 style=&quot;color: #9ac7ad&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '6',
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