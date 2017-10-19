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
        'sort' => '0',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '0',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;row footer-blocks-top&quot;&gt;
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer2/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e13500&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer2/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e13500&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;row footer-blocks-top&quot;&gt;
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer2/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e13500&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/computer2/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e13500&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;
     &lt;/div&gt;
&lt;/div&gt;',
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
        'width' => '6',
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
            'type' => 'links',
            'html' => 
            array (
              1 => '&lt;div class=&quot;footer-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;h6&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-top: 10px&quot;&gt;
               &lt;p&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
               &lt;ul class=&quot;social-icons&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     &lt;div style=&quot;height: 20px&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;footer-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-6&quot;&gt;
               &lt;h6&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-6&quot; style=&quot;padding-top: 10px&quot;&gt;
               &lt;p&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
               &lt;ul class=&quot;social-icons&quot;&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     &lt;div style=&quot;height: 20px&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
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
                1 => 'Custom block',
                $language_id => 'Custom block',
              ),
              'limit' => '4',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'About Us',
                    $language_id => 'About Us',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=4',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery Information',
                    $language_id => 'Delivery Information',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=6',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=3',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms &amp; Conditions',
                    $language_id => 'Terms &amp; Conditions',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=5',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact Us',
                    $language_id => 'Contact Us',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Sitemap',
                    $language_id => 'Sitemap',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '6',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '7',
                ),
              ),
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
      3 => 
      array (
        'status' => '1',
        'width' => '6',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'links',
            'html' => 
            array (
              1 => '',
              $language_id => '',
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
                1 => 'Custom block',
                $language_id => 'Custom block',
              ),
              'limit' => '4',
              'array' => 
              array (
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'About us',
                    $language_id => 'About us',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=4',
                  'sort' => '1',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery information',
                    $language_id => 'Delivery information',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=6',
                  'sort' => '2',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=3',
                  'sort' => '3',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms &amp; Conditions',
                    $language_id => 'Terms &amp; Conditions',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=5',
                  'sort' => '4',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact us',
                    $language_id => 'Contact us',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '5',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Sitemap',
                    $language_id => 'Sitemap',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '6',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '7',
                ),
              ),
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
      4 => 
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
              1 => '&lt;div style=&quot;text-align: center&quot;&gt;Copyright © 2015, Your Store, All Rights Reserved.&lt;/div&gt;',
              $language_id => '&lt;div style=&quot;text-align: center&quot;&gt;Copyright © 2015, Your Store, All Rights Reserved.&lt;/div&gt;',
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
); 

$output2 = array();
$output2["advanced_grid_module"] = $this->config->get('advanced_grid_module');

if(!is_array($output["advanced_grid_module"])) $output["advanced_grid_module"] = array();
if(!is_array($output2["advanced_grid_module"])) $output2["advanced_grid_module"] = array();
$output3 = array();
$output3["advanced_grid_module"] = array_merge($output["advanced_grid_module"], $output2["advanced_grid_module"]);

$this->model_setting_setting->editSetting( "advanced_grid", $output3 );		

?>