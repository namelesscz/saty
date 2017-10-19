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
    'custom_class' => 'links-font-size-15',
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
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-3&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-5&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;Visit us&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;PO Box 16122 Collins Street, Victoria 8007 Australia&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;row footer-blocks-top&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-3&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-5&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/matrialarts/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 8px&quot;&gt;
                    &lt;h6 style=&quot;font-size: 18px&quot;&gt;Visit us&lt;/h6&gt;
                    &lt;p style=&quot;font-size: 15px&quot;&gt;PO Box 16122 Collins Street, Victoria 8007 Australia&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '3',
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
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Information',
                $language_id => 'Information',
              ),
              'limit' => '7',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'About us',
                    $language_id => 'About us',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=4',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery information',
                    $language_id => 'Delivery information',
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
              ),
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Custom block',
                $language_id => 'Custom block',
              ),
              'limit' => '7',
              'array' => 
              array (
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact Us',
                    $language_id => 'Contact Us',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '1',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Returns',
                    $language_id => 'Returns',
                  ),
                  'url' => 'index.php?route=account/return/add',
                  'sort' => '2',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Site Map',
                    $language_id => 'Site Map',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '3',
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '6',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '4',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'title' => 
              array (
                1 => 'My account',
                $language_id => 'My account',
              ),
              'limit' => '4',
              'array' => 
              array (
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => 'My account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '1',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '4',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div style=&quot;width: 292px;float: right;position: relative;margin-top: -205px;margin-right: -20px&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
              $language_id => '&lt;div style=&quot;width: 292px;float: right;position: relative;margin-top: -205px;margin-right: -20px&quot; class=&quot;hidden-xs hidden-sm&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;',
            ),
          ),
        ),
      ),
      5 => 
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
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'responsive-margin-top-30',
    'margin_top' => '40',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '30',
    'padding_right' => '30',
    'padding_bottom' => '30',
    'padding_left' => '30',
    'force_full_width' => '0',
    'background_color' => '#171616',
    'background_image_type' => '1',
    'background_image' => 'catalog/matrialarts/bg-intro-text.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      6 => 
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
              1 => '&lt;div class=&quot;welcome-matrialarts&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Welcome in Fastor&lt;/div&gt;
     &lt;p&gt;You can buy here any martiarts and boxing equipment and accessories you need&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;columns-matrialarts row&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
          &lt;p&gt;Free shipping &amp; Return&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
          &lt;p&gt;Money back guarantee&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-support.png&quot; alt=&quot;Support&quot;&gt;
          &lt;p&gt;Support 24/7&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;welcome-matrialarts&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Welcome in Fastor&lt;/div&gt;
     &lt;p&gt;You can buy here any martiarts and boxing equipment and accessories you need&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;columns-matrialarts row&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
          &lt;p&gt;Free shipping &amp; Return&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
          &lt;p&gt;Money back guarantee&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;img src=&quot;image/catalog/matrialarts/icon-support.png&quot; alt=&quot;Support&quot;&gt;
          &lt;p&gt;Support 24/7&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'status' => '1',
        'width' => '12',
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
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid.tpl',
              'title' => 
              array (
                1 => 'Latest Products',
                $language_id => 'Latest Products',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '155',
              'height' => '155',
              'limit' => '6',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
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
    'background_image_type' => '1',
    'background_image' => 'catalog/matrialarts/bg-newsletter.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'matrialarts_newsletter.tpl',
              'title' => 
              array (
                1 => 'Newsletter',
                $language_id => 'Newsletter',
              ),
              'text' => 
              array (
                1 => 'Subscribe now and get 20% discount for your first order',
                $language_id => 'Subscribe now and get 20% discount for your first order',
              ),
              'input_placeholder' => 
              array (
                1 => 'e-mail',
                $language_id => 'e-mail',
              ),
              'subscribe_text' => 
              array (
                1 => 'Add',
                $language_id => 'Add',
              ),
              'unsubscribe_text' => 
              array (
                1 => '',
                $language_id => '',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => '',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '30',
    'padding_right' => '30',
    'padding_bottom' => '30',
    'padding_left' => '30',
    'force_full_width' => '0',
    'background_color' => '#171616',
    'background_image_type' => '1',
    'background_image' => 'catalog/matrialarts/bg-bestsellers.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
            'type' => 'products_tabs',
            'products_tabs' => 
            array (
              'module_layout' => 'matrialarts_products_tabs.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'description' => 
              array (
                1 => '&lt;span style=&quot;color: #c30a0a&quot;&gt;Check our bestsellers&lt;br&gt;products:&lt;/span&gt;',
                $language_id => '&lt;span style=&quot;color: #c30a0a&quot;&gt;Check our bestsellers&lt;br&gt;products:&lt;/span&gt;',
              ),
              'width' => '170',
              'height' => '170',
              'limit' => '4',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    1 => 'Gloves',
                    $language_id => 'Gloves',
                  ),
                  'get_products_from' => 'random',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                2 => 
                array (
                  'title' => 
                  array (
                    1 => 'Punch Bags',
                    $language_id => 'Punch Bags',
                  ),
                  'get_products_from' => 'latest',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
                3 => 
                array (
                  'title' => 
                  array (
                    1 => 'Protective equipment',
                    $language_id => 'Protective equipment',
                  ),
                  'get_products_from' => 'most_viewed',
                  'product' => '',
                  'products' => '',
                  'category' => '',
                  'categories' => '',
                ),
              ),
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