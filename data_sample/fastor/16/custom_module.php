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
   &lt;div class=&quot;col-sm-6&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;display:block;margin:0px auto&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;display:block;margin:0px auto&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row row-no-padding&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-01.png&quot; alt=&quot;Banner&quot; style=&quot;display:block;margin:0px auto&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;

   &lt;div class=&quot;col-sm-6&quot;&gt;
      &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-02.png&quot; alt=&quot;Banner&quot; style=&quot;display:block;margin:0px auto&quot;&gt;&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;',
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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '15',
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
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/spices/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '2',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
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
      1 => '&lt;div class=&quot;row footer-blocks-top type-2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;font-size: 17px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;color: #350a04&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;font-size: 17px&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;color: #350a04&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-location.png&quot; alt=&quot;Location&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;line-height: 1.2;font-size: 17px&quot;&gt;16122 Collins Street&lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row footer-blocks-top type-2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;font-size: 17px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;color: #350a04&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;font-size: 17px&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;color: #350a04&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/spices/icon-location.png&quot; alt=&quot;Location&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #350a04;line-height: 1.2;font-size: 17px&quot;&gt;16122 Collins Street&lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'footer_top',
    'status' => '1',
    'sort_order' => '',
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
      1 => '&lt;div style=&quot;background: url(image/catalog/spices/separator.png) top center no-repeat;height: 68px;width: 100%;position: relative;margin-bottom: -3px&quot;&gt;&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;background: url(image/catalog/spices/separator.png) top center no-repeat;height: 68px;width: 100%;position: relative;margin-bottom: -3px&quot;&gt;&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'customfooter_top',
    'status' => '1',
    'sort_order' => '15',
  ),
  6 => 
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
      1 => '&lt;img src=&quot;image/catalog/spices/banner-06.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;margin: 0px auto -3px auto&quot;&gt;',
      $language_id => '&lt;img src=&quot;image/catalog/spices/banner-06.png&quot; alt=&quot;Banner&quot; style=&quot;display: block;margin: 0px auto -3px auto&quot;&gt;',
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