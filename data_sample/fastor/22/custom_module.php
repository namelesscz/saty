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
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;

&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;',
      $language_id => '&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-03.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;

&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-04.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cosmetics/banner-05.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
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
      1 => '&lt;div class=&quot;container hidden-xs hidden-sm&quot;&gt;&lt;div class=&quot;cosmetics-categories clearfix&quot;&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/eyes.png) top left no-repeat&quot;&gt;Eyes&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/lips.png) top left no-repeat&quot;&gt;Lips&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/nails.png) top left no-repeat&quot;&gt;Nails&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/face.png) top left no-repeat&quot;&gt;Face&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/skincares.png) top left no-repeat&quot;&gt;Skincares&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/brushes.png) top left no-repeat&quot;&gt;Brushes&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/fragrances.png) top left no-repeat&quot;&gt;Fragrances&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;All&lt;br&gt;products&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container hidden-xs hidden-sm&quot;&gt;&lt;div class=&quot;cosmetics-categories clearfix&quot;&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/eyes.png) top left no-repeat&quot;&gt;Eyes&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/lips.png) top left no-repeat&quot;&gt;Lips&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/nails.png) top left no-repeat&quot;&gt;Nails&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/face.png) top left no-repeat&quot;&gt;Face&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/skincares.png) top left no-repeat&quot;&gt;Skincares&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/brushes.png) top left no-repeat&quot;&gt;Brushes&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;background: url(image/catalog/cosmetics/fragrances.png) top left no-repeat&quot;&gt;Fragrances&lt;/a&gt;&lt;/div&gt;
     &lt;div&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;All&lt;br&gt;products&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;&lt;/div&gt;',
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