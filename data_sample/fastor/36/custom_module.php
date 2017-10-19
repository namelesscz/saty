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
      1 => '&lt;div class=&quot;matrialarts-contact&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Need&lt;br&gt;help?&lt;/div&gt;
     &lt;p&gt;500 - 912 - 011&lt;/p&gt;
&lt;/div&gt;',
      $language_id => '&lt;div class=&quot;matrialarts-contact&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Need&lt;br&gt;help?&lt;/div&gt;
     &lt;p&gt;500 - 912 - 011&lt;/p&gt;
&lt;/div&gt;',
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
      1 => '&lt;div style=&quot;position: absolute;margin-top: -220px;z-index: 22;width: 308px&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
      $language_id => '&lt;div style=&quot;position: absolute;margin-top: -220px;z-index: 22;width: 308px&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
    ),
    'layout_id' => '1',
    'position' => 'slideshow',
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