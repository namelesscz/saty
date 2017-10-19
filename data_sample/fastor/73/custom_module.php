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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-6"><a href="#"><img src="image/catalog/sport2/banner-01.jpg" alt="Image"></a></div>
 <div class="col-sm-6"><a href="#"><img src="image/catalog/sport2/banner-02.jpg" alt="Image"></a></div>
 </div>',
      $language_id => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-6"><a href="#"><img src="image/catalog/sport2/banner-01.jpg" alt="Image"></a></div>
 <div class="col-sm-6"><a href="#"><img src="image/catalog/sport2/banner-02.jpg" alt="Image"></a></div>
 </div>',
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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners">
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-03.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-04.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-05.jpg" alt="Image"></a></div>
 </div>

<div style="height: 10px" class="hidden-xs"></div>',
      $language_id => '<div class="row banners">
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-03.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-04.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/sport2/banner-05.jpg" alt="Image"></a></div>
 </div>

<div style="height: 10px" class="hidden-xs"></div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '5',
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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div style="height: 15px"></div>',
      $language_id => '<div style="height: 15px"></div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
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