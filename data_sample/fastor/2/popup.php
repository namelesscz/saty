<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["popup_id_module"] = 11;
$output["popup_module"] = array (
  1 => 
  array (
    'type' => '1',
    'newsletter_popup_title' => 
    array (
      1 => 'Join our newsletter&lt;br&gt;and get discount!',
      $language_id => 'Join our newsletter&lt;br&gt;and get discount!',
    ),
    'newsletter_popup_text' => 
    array (
      1 => 'Subscribe to the newsletter to receive&lt;br&gt;
updates about new products.',
      $language_id => 'Subscribe to the newsletter to receive&lt;br&gt;
updates about new products.',
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
    'module_id' => '1',
    'show_only_once' => '0',
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
    'background_color' => '',
    'background_image' => 'catalog/bg-popup-newsletter.png',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '0',
    'sort_order' => '0',
  ),
  2 => 
  array (
    'type' => '2',
    'newsletter_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_popup_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_input_placeholder' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'custom_popup_title' => 
    array (
      1 => 'Cookies',
      $language_id => 'Cookies',
    ),
    'custom_popup_text' => 
    array (
      1 => 'Our website use cookies. If you continue to use this &lt;br&gt;
site we will assume that you are happy with this.&lt;br&gt;&lt;br&gt;

More about cookies: &lt;a href=&quot;http://www.aboutcookies.org&quot; target=&quot;_blank&quot;&gt;www.aboutcookies.org&lt;/a&gt;',
      $language_id => 'Our website use cookies. If you continue to use this &lt;br&gt;
site we will assume that you are happy with this.&lt;br&gt;&lt;br&gt;

More about cookies: &lt;a href=&quot;http://www.aboutcookies.org&quot; target=&quot;_blank&quot;&gt;www.aboutcookies.org&lt;/a&gt;',
    ),
    'contact_form_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'module_id' => '8',
    'show_only_once' => '1',
    'display_text_dont_show_again' => '0',
    'text_dont_show_again' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'display_buttons_yes_no' => '0',
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
    'background_color' => '',
    'background_image' => 'catalog/bg-popup-custom.png',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '1',
    'sort_order' => '0',
  ),
  3 => 
  array (
    'type' => '3',
    'newsletter_popup_title' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_popup_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_input_placeholder' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'newsletter_subscribe_button_text' => 
    array (
      1 => '',
      $language_id => '',
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
      1 => 'Have a question?',
      $language_id => 'Have a question?',
    ),
    'module_id' => '10',
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
    'background_color' => '',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'show_after' => '',
    'autoclose_after' => '',
    'disable_on_desktop' => '0',
    'layout_id' => '1',
    'position' => 'popup',
    'status' => '0',
    'sort_order' => '0',
  ),
); 

$this->model_setting_setting->editSetting( "popup", $output );	

?>