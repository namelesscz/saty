<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["popup_id_module"] = 12;
$output["popup_module"] = array (
  2 => 
  array (
    'type' => '1',
    'newsletter_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_popup_text' => 
    array (
      1 => '&lt;img src=&quot;image/catalog/fashionsimple/get-discount.png&quot; style=&quot;display: block;margin-top: 30px;margin-bottom: 6px&quot; alt=&quot;Get discount&quot;&gt;',
      $language_id => '&lt;img src=&quot;image/catalog/fashionsimple/get-discount.png&quot; style=&quot;display: block;margin-top: 30px;margin-bottom: 6px&quot; alt=&quot;Get discount&quot;&gt;',
    ),
    'newsletter_input_placeholder' => 
    array (
      1 => 'E-mail',
      $language_id => 'E-mail',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      1 => 'Add',
      $language_id => 'Add',
    ),
    'custom_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'custom_popup_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'contact_form_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'module_id' => '11',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '1',
    'text_dont_show_again' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'display_buttons_yes_no' => '1',
    'no' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'yes' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'content_width' => '750',
    'background_color' => '#f5f5f5',
    'background_image' => 'catalog/fashionsimple/bg-newsletter.png',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '200',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '1',
    'sort_order' => '0',
  ),
); 

$output2 = array();
$output2["popup_module"] = $this->config->get('popup_module');

if(!is_array($output["popup_module"])) $output["popup_module"] = array();
if(!is_array($output2["popup_module"])) $output2["popup_module"] = array();
$output3 = array();
$output3["popup_module"] = array_merge($output["popup_module"], $output2["popup_module"]);

$this->model_setting_setting->editSetting( "popup", $output3 );	

?>