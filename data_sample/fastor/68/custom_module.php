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
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-01.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-02.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-03.jpg" alt="Image"></a></div>
 </div>',
      $language_id => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-01.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-02.jpg" alt="Image"></a></div>
 <div class="col-sm-4"><a href="#"><img src="image/catalog/fashion6/banner-03.jpg" alt="Image"></a></div>
 </div>',
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
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-12"><a href="#"><img src="image/catalog/fashion6/banner-04.jpg" alt="Image"></a></div>
 </div>',
      $language_id => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-12"><a href="#"><img src="image/catalog/fashion6/banner-04.jpg" alt="Image"></a></div>
 </div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
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
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-6"><a href="#"><img src="image/catalog/fashion6/banner-05.jpg" alt="Image"></a></div>
 <div class="col-sm-6"><a href="#"><img src="image/catalog/fashion6/banner-06.jpg" alt="Image"></a></div>
 </div>',
      $language_id => '<div class="row banners banners-with-padding-30">
 <div class="col-sm-6"><a href="#"><img src="image/catalog/fashion6/banner-05.jpg" alt="Image"></a></div>
 <div class="col-sm-6"><a href="#"><img src="image/catalog/fashion6/banner-06.jpg" alt="Image"></a></div>
 </div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
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
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '<div class="furniture-contact fashion6-contact">     
     <div class="row">
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-phone.png" alt="Phone">
               <p>800-140-100</p>
               <span style="color: #bf9e50">Mobile phones</span>
          </div>
          
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-phone2.png" alt="Phone">
               <p>800-fastor-100</p>
               <span style="color: #bf9e50">Toll free</span>
          </div>
          
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-mail.png" alt="Mail">
               <a href="index.php?route=information/contact" class="button btn-default">Send e-mail</a>
          </div>
     </div>
</div>',
      $language_id => '<div class="furniture-contact fashion6-contact">     
     <div class="row">
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-phone.png" alt="Phone">
               <p>800-140-100</p>
               <span style="color: #bf9e50">Mobile phones</span>
          </div>
          
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-phone2.png" alt="Phone">
               <p>800-fastor-100</p>
               <span style="color: #bf9e50">Toll free</span>
          </div>
          
          <div class="col-sm-4 text-center">
               <img src="image/catalog/furniture/icon-mail.png" alt="Mail">
               <a href="index.php?route=information/contact" class="button btn-default">Send e-mail</a>
          </div>
     </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'customfooter_top',
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