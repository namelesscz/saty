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
      1 => '<div class="market-phone hidden-md">
     <img src="image/catalog/market/icon-phone.png" alt="Phone">
     <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
     <p style="color: #bf9e50">500-100-100</p>
</div>',
      $language_id => '<div class="market-phone hidden-md">
     <img src="image/catalog/market/icon-phone.png" alt="Phone">
     <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
     <p style="color: #bf9e50">500-100-100</p>
</div>',
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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div style="height:244px" class="hidden-xs hidden-sm"></div>',
      $language_id => '<div style="height:244px" class="hidden-xs hidden-sm"></div>',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '0',
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
      1 => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/fashion8/banner-01.jpg" alt="Banner"></a></div>
</div>',
      $language_id => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/fashion8/banner-01.jpg" alt="Banner"></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'column_left',
    'status' => '1',
    'sort_order' => '1',
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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="market-columns">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-free-shipping.png" alt="Free shipping">
               <p>Free Shipping<br>& Returns</p>
          </div>
          
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-money.png" alt="Money">
               <p>100% Money<br>refund</p>
          </div>
          
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-delivery.png" alt="Delivery">
               <p>Fast send<br>and delivery</p>
          </div>
     </div>
</div>',
      $language_id => '<div class="market-columns">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-free-shipping.png" alt="Free shipping">
               <p>Free Shipping<br>& Returns</p>
          </div>
          
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-money.png" alt="Money">
               <p>100% Money<br>refund</p>
          </div>
          
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-delivery.png" alt="Delivery">
               <p>Fast send<br>and delivery</p>
          </div>
     </div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_big_column',
    'status' => '1',
    'sort_order' => '2',
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
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-05.png" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-06.png" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-07.png" alt="Banner"></a></div>
</div>',
      $language_id => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-05.png" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-06.png" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/market/banner-07.png" alt="Banner"></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
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