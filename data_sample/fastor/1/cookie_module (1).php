<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["cookie_module"] = array (
  1 => 
  array (
    'text_cookie' => 
    array (
      1 => 'Our website use cookies. If you continue to use this site we will assume that you are happy with this. &lt;br&gt;
More about cookies: &lt;a href=&quot;http://www.aboutcookies.org&quot; target=&quot;_blank&quot; style=&quot;color: #d9121f &quot;&gt;www.aboutcookies.org&lt;/a&gt;',
      $language_id => 'Our website use cookies. If you continue to use this site we will assume that you are happy with this. &lt;br&gt;
More about cookies: &lt;a href=&quot;http://www.aboutcookies.org&quot; target=&quot;_blank&quot; style=&quot;color: #d9121f &quot;&gt;www.aboutcookies.org&lt;/a&gt;',
    ),
    'module_id' => '1',
    'text_color' => '#808080',
    'border_color' => '',
    'background_color' => '',
    'background_image' => 'catalog/bg-cookie-module.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'display_text_dont_show_again' => '0',
    'text_dont_show_again' => 
    array (
      1 => 'Don’t show again',
      $language_id => 'Don’t show again',
    ),
    'text_dont_show_again_color' => '',
    'display_button' => '0',
    'text_button' => 
    array (
      1 => 'Accept cookies',
      $language_id => 'Accept cookies',
    ),
    'layout_id' => '99999',
    'position' => 'cookie',
    'display_position' => 'bottom',
    'status' => '1',
    'sort_order' => '',
  ),
); 

$output2 = array();
$output2["cookie_module"] = $this->config->get('cookie_module');

if(!is_array($output["cookie_module"])) $output["cookie_module"] = array();
if(!is_array($output2["cookie_module"])) $output2["cookie_module"] = array();
$output3 = array();
$output3["cookie_module"] = array_merge($output["cookie_module"], $output2["cookie_module"]);

$this->model_setting_setting->editSetting( "cookie", $output3 );	

?>