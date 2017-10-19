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
      1 => '&lt;div class=&quot;fashionsimple-top-contact&quot;&gt;
     &lt;img src=&quot;image/catalog/fashionsimple/icon-contact.png&quot; alt=&quot;Contact&quot;&gt;
     &lt;p&gt;Call us: 500-123-914&lt;/p&gt;
&lt;/div&gt;     ',
      $language_id => '&lt;div class=&quot;fashionsimple-top-contact&quot;&gt;
     &lt;img src=&quot;image/catalog/fashionsimple/icon-contact.png&quot; alt=&quot;Contact&quot;&gt;
     &lt;p&gt;Call us: 500-123-914&lt;/p&gt;
&lt;/div&gt;     ',
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
      1 => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
      $language_id => '&lt;p&gt;&lt;br&gt;&lt;/p&gt;',
    ),
    'html' => 
    array (
      1 => '&lt;div class=&quot;fashionsimple-page-title text-center&quot;&gt;
     &lt;h3 style=&quot;color: #0d0d0d&quot;&gt;Fastor Shop&lt;/h3&gt;
     &lt;h4 style=&quot;color: #bc985c&quot;&gt;Premium handmade clothes&lt;/h4&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;fashionsimple-page-title text-center&quot;&gt;
     &lt;h3 style=&quot;color: #0d0d0d&quot;&gt;Fastor Shop&lt;/h3&gt;
     &lt;h4 style=&quot;color: #bc985c&quot;&gt;Premium handmade clothes&lt;/h4&gt;
&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '0',
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