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
      1 => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/computer3/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
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
      1 => '&lt;div class=&quot;row footer-blocks-top type-2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;color: #fff&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;color: #fff&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-location.png&quot; alt=&quot;Location&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff;line-height: 1.2&quot;&gt;16122 Collins Street&lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row footer-blocks-top type-2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;color: #fff&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;color: #fff&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer3/icon-location.png&quot; alt=&quot;Location&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #fff;line-height: 1.2&quot;&gt;16122 Collins Street&lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
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
      1 => '&lt;div class=&quot;category-wall2&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/desktops.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Desktops&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/laptops.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laptops &amp; Notebooks&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/components.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Components&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/tablets.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tablets&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/software.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Software&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/phones.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Phones &amp; PDAs&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/cameras.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cameras&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/mp3.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;MP3 Players&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;All products&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;category-wall2&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/desktops.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Desktops&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/laptops.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laptops &amp; Notebooks&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/components.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Components&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/tablets.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tablets&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/software.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Software&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/phones.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Phones &amp; PDAs&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/cameras.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cameras&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;img src=&quot;image/catalog/computer3/mp3.png&quot; alt=&quot;&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;MP3 Players&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;div class=&quot;category clearfix&quot;&gt;
                    &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;All products&lt;/a&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
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