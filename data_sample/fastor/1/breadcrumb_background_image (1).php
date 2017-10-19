<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["breadcrumb_background_image_module"] = array (
  1 => 
  array (
    'background_color' => '#f9f8f8',
    'background_image' => 'catalog/breadcrumb-category.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'layout_id' => '3',
    'position' => 'breadcrumb',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$output2 = array();
$output2["breadcrumb_background_image_module"] = $this->config->get('breadcrumb_background_image_module');

if(!is_array($output["breadcrumb_background_image_module"])) $output["breadcrumb_background_image_module"] = array();
if(!is_array($output2["breadcrumb_background_image_module"])) $output2["breadcrumb_background_image_module"] = array();
$output3 = array();
$output3["breadcrumb_background_image_module"] = array_merge($output["breadcrumb_background_image_module"], $output2["breadcrumb_background_image_module"]);

$this->model_setting_setting->editSetting( "breadcrumb_background_image", $output3 );	

?>