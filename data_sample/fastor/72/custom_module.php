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
      1 => '',
      $language_id => '',
    ),
    'html' => 
    array (
      1 => '<div class="onepage-sections">
      	<div class="section">
      		<div class="title">Specification</div>
      		<div class="content">
      			<ul class="specification">
      				<li class="clearfix"><p class="first">Driver Unit</p><p class="second">1.57", dome type (CCAW Voice Coil)</p></li>
      				<li class="clearfix"><p class="first">Diaphragm</p><p class="second">Diaphragms with titanium-coated domes</p></li>
      				<li class="clearfix"><p class="first">Frequency Response (Hz)</p><p class="second">5–60000 Hz</p></li>
      				<li class="clearfix"><p class="first">Sensitivities (dB/mW)</p><p class="second">103 dB/mW</p></li>
      				<li class="clearfix"><p class="first">Magnet</p><p class="second">Neodymium</p></li>
      				<li class="clearfix"><p class="first">Impedance (Ohm)</p><p class="second">24 Ω at 1 kHz</p></li>
      				<li class="clearfix"><p class="first">Cord Type</p><p class="second">Detachable</p></li>
      				<li class="clearfix"><p class="first">Cord Length</p><p class="second">Approx. 3.94 ft</p></li>
      				<li class="clearfix"><p class="first">Plug</p><p class="second">L-shaped gold-plated 4-pole mini plug</p></li>
      			</ul>
      		</div>	
      	</div>
      	
      	<div class="section">
      		<div class="title">Available colors</div>
      		<div class="content"><img src="image/catalog/oneproduct/colors.jpg"></div>
      	</div>
      	
      	<div class="section">
      				<div class="title">Buy Now!</div>
      				<div class="content text-center">
      					<div class="price">from $199.99</div>
      					<div class="inputs" id="product">
      						<a href="index.php?route=product/product&product_id=42" class="button btn-default">Buy Now</a>
      					</div>
      				</div>
      	</div>
      </div>
',
      $language_id => '<div class="onepage-sections">
      	<div class="section">
      		<div class="title">Specification</div>
      		<div class="content">
      			<ul class="specification">
      				<li class="clearfix"><p class="first">Driver Unit</p><p class="second">1.57", dome type (CCAW Voice Coil)</p></li>
      				<li class="clearfix"><p class="first">Diaphragm</p><p class="second">Diaphragms with titanium-coated domes</p></li>
      				<li class="clearfix"><p class="first">Frequency Response (Hz)</p><p class="second">5–60000 Hz</p></li>
      				<li class="clearfix"><p class="first">Sensitivities (dB/mW)</p><p class="second">103 dB/mW</p></li>
      				<li class="clearfix"><p class="first">Magnet</p><p class="second">Neodymium</p></li>
      				<li class="clearfix"><p class="first">Impedance (Ohm)</p><p class="second">24 Ω at 1 kHz</p></li>
      				<li class="clearfix"><p class="first">Cord Type</p><p class="second">Detachable</p></li>
      				<li class="clearfix"><p class="first">Cord Length</p><p class="second">Approx. 3.94 ft</p></li>
      				<li class="clearfix"><p class="first">Plug</p><p class="second">L-shaped gold-plated 4-pole mini plug</p></li>
      			</ul>
      		</div>	
      	</div>
      	
      	<div class="section">
      		<div class="title">Available colors</div>
      		<div class="content"><img src="image/catalog/oneproduct/colors.jpg"></div>
      	</div>
      	
      	<div class="section">
      			<div class="title">Buy Now!</div>
      			<div class="content text-center">
      				<div class="price">from $199.99</div>
      				<div class="inputs" id="product">
      					<a href="index.php?route=product/product&product_id=42" class="button btn-default">Buy Now</a>
      				</div>
      			</div>
      	</div>
      </div>
      ',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '',
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