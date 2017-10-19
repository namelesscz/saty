<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["header_notice_module"] = array (
  1 => 
  array (
    'html' => 
    array (
      1 => 'This is new bar notification!',
      $language_id => 'This is new bar notification!',
    ),
    'background_color' => '',
    'text_color' => '',
    'text_link_hover_color' => '',
    'close_button_background_color' => '',
    'close_button_text_color' => '',
    'close_button_hover_background_color' => '',
    'close_button_hover_text_color' => '',
    'show_only_once' => '1',
    'disable_on_desktop' => '0',
    'disable_on_mobile' => '0',
    'layout_id' => '1',
    'position' => 'header_notice',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$output2 = array();
$output2["header_notice_module"] = $this->config->get('header_notice_module');

if(!is_array($output["header_notice_module"])) $output["header_notice_module"] = array();
if(!is_array($output2["header_notice_module"])) $output2["header_notice_module"] = array();
$output3 = array();
$output3["header_notice_module"] = array_merge($output["header_notice_module"], $output2["header_notice_module"]);

$this->model_setting_setting->editSetting( "header_notice", $output3 );	

?>