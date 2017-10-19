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
      1 => '&lt;div class=&quot;row banners banners-with-padding-30 responsive-margin-top-0&quot; style=&quot;margin-top: -145px;z-index: 23;position: relative&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/architecture/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/architecture/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-30 responsive-margin-top-0&quot; style=&quot;margin-top: -145px;z-index: 23;position: relative&quot;&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/architecture/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/architecture/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
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
      1 => '&lt;div class=&quot;container&quot;&gt;
     &lt;div class=&quot;architecture-categories row&quot;&gt;
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/house.png&quot; alt=&quot;House&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;House&lt;/a&gt;&lt;span&gt;&gt; 80m/2&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/property.png&quot; alt=&quot;Property&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Property&lt;/a&gt;&lt;span&gt;&lt; 80m/2&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/apartments.png&quot; alt=&quot;Apartments&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Apartments&lt;/a&gt;&lt;span&gt;Skyscrapers&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/other.png&quot; alt=&quot;Other&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Other&lt;/a&gt;&lt;span&gt;Garages...&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container&quot;&gt;
     &lt;div class=&quot;architecture-categories row&quot;&gt;
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/house.png&quot; alt=&quot;House&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;House&lt;/a&gt;&lt;span&gt;&gt; 80m/2&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/property.png&quot; alt=&quot;Property&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Property&lt;/a&gt;&lt;span&gt;&lt; 80m/2&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/apartments.png&quot; alt=&quot;Apartments&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Apartments&lt;/a&gt;&lt;span&gt;Skyscrapers&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/architecture/other.png&quot; alt=&quot;Other&quot;&gt;&lt;/a&gt;
               &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Other&lt;/a&gt;&lt;span&gt;Garages...&lt;/span&gt;&lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '99999',
    'position' => 'slideshow',
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