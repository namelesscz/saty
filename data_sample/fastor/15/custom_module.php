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
      1 => '&lt;div class=&quot;container&quot;&gt;&lt;div class=&quot;overflow-games-banners&quot;&gt;
 &lt;div class=&quot;row banners banners-with-padding-30 games-banners&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
   &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;container&quot;&gt;&lt;div class=&quot;overflow-games-banners&quot;&gt;
 &lt;div class=&quot;row banners banners-with-padding-30 games-banners&quot;&gt;
   &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/banner-01.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
   &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/banner-02.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;&lt;/div&gt;',
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
      1 => '&lt;div class=&quot;games-big-sale&quot;&gt;
     &lt;div class=&quot;image hidden-xs hidden-sm hidden-md&quot; style=&quot;left: 436px;top: 0&quot;&gt;&lt;img src=&quot;image/catalog/games/big-sale.png&quot; alt=&quot;Big sale&quot;&gt;&lt;/div&gt;
     &lt;div class=&quot;heading&quot;&gt;Accessories&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Read more&lt;/a&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;games-big-sale&quot;&gt;
     &lt;div class=&quot;image hidden-xs hidden-sm hidden-md&quot; style=&quot;left: 436px;top: 0&quot;&gt;&lt;img src=&quot;image/catalog/games/big-sale.png&quot; alt=&quot;Big sale&quot;&gt;&lt;/div&gt;
     &lt;div class=&quot;heading&quot;&gt;Accessories&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Read more&lt;/a&gt;
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