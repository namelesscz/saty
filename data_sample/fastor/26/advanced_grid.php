<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["advanced_grid_module"] = array (
  1 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div style=&quot;height: 9px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;footer-about-us text-center&quot;&gt;
     &lt;img src=&quot;image/catalog/fashionsimple/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;h6 style=&quot;color: #bc985c;font-weight: 500 !important&quot;&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
     &lt;p style=&quot;color: #808080&quot;&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
     
     &lt;ul class=&quot;social-icons social-icons-fashionsimple&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;

&lt;div style=&quot;height: 26px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;footer-about-us text-center&quot;&gt;
     &lt;img src=&quot;image/catalog/fashionsimple/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;h6 style=&quot;color: #bc985c;font-weight: 500 !important&quot;&gt;PO Box 16122 Collins Street &lt;br&gt;Victoriaa&lt;div style=&quot;height: 9px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;

&lt;div class=&quot;footer-about-us text-center&quot;&gt;
     &lt;img src=&quot;image/catalog/fashionsimple/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;h6 style=&quot;color: #bc985c;font-weight: 500 !important&quot;&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
     &lt;p style=&quot;color: #808080&quot;&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
     
     &lt;ul class=&quot;social-icons social-icons-fashionsimple&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;

&lt;div style=&quot;height: 26px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt; 8007 Australia&lt;/h6&gt;
     &lt;p style=&quot;color: #808080&quot;&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
     
     &lt;ul class=&quot;social-icons social-icons-fashionsimple&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;

&lt;div style=&quot;height: 10px&quot; class=&quot;hidden-xs&quot;&gt;&lt;/div&gt;',
            ),
            'module' => 
            array (
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'limit' => '5',
            ),
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'latest_blogs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'load_module' => 
            array (
              'module' => 'account',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '6',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div style=&quot;text-align: center&quot;&gt;Copyright © 2016, Your Store, All Rights Reserved.&lt;/div&gt;',
              $language_id => '&lt;div style=&quot;text-align: center&quot;&gt;Copyright © 2016, Your Store, All Rights Reserved.&lt;/div&gt;',
            ),
            'module' => 
            array (
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'limit' => '5',
            ),
            'products' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'latest_blogs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'load_module' => 
            array (
              'module' => 'account',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'border-top-1-grey',
    'margin_top' => '10',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '20',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
      array (
        'status' => '1',
        'width' => '12',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '1',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;img src=&quot;image/catalog/fashionsimple/banner-big-sale.png&quot; alt=&quot;Big sale&quot; style=&quot;position: relative;margin-bottom: -1px;margin-left: auto;margin-right: auto;display: block&quot;&gt;',
              $language_id => '&lt;img src=&quot;image/catalog/fashionsimple/banner-big-sale.png&quot; alt=&quot;Big sale&quot; style=&quot;position: relative;margin-bottom: -1px;margin-left: auto;margin-right: auto;display: block&quot;&gt;',
            ),
            'module' => 
            array (
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'limit' => '5',
            ),
            'products' => 
            array (
              'module_layout' => 'antique_products.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'newsletter' => 
            array (
              'module_layout' => 'ceramica_newsletter.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'subscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
            'latest_blogs' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'width' => '80',
              'height' => '80',
              'limit' => '3',
            ),
            'load_module' => 
            array (
              'module' => 'account',
            ),
          ),
        ),
      ),
    ),
  ),
); 

$output2 = array();
$output2["advanced_grid_module"] = $this->config->get('advanced_grid_module');

if(!is_array($output["advanced_grid_module"])) $output["advanced_grid_module"] = array();
if(!is_array($output2["advanced_grid_module"])) $output2["advanced_grid_module"] = array();
$output3 = array();
$output3["advanced_grid_module"] = array_merge($output["advanced_grid_module"], $output2["advanced_grid_module"]);

$this->model_setting_setting->editSetting( "advanced_grid", $output3 );		

?>