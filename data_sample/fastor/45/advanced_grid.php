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
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Information',
                $language_id => 'Information',
              ),
              'limit' => '5',
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
                  'url' => '/index.php?route=information/information&amp;information_id=3',
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
      2 => 
      array (
        'status' => '1',
        'width' => '3',
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
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Customer Service',
                $language_id => 'Customer Service',
              ),
              'limit' => '5',
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
      3 => 
      array (
        'status' => '1',
        'width' => '3',
        'disable_on_mobile' => '0',
        'width_xs' => '1',
        'width_sm' => '1',
        'width_md' => '1',
        'width_lg' => '1',
        'sort' => '5',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Extras',
                $language_id => 'Extras',
              ),
              'limit' => '5',
              'array' => 
              array (
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '1',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Gift Vouchers',
                    $language_id => 'Gift Vouchers',
                  ),
                  'url' => 'index.php?route=account/voucher',
                  'sort' => '2',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Affiliates',
                    $language_id => 'Affiliates',
                  ),
                  'url' => 'index.php?route=affiliate/login',
                  'sort' => '3',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Specials',
                    $language_id => 'Specials',
                  ),
                  'url' => 'index.php?route=product/special',
                  'sort' => '4',
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '3',
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
            'sort' => '1',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'My Account',
                $language_id => 'My Account',
              ),
              'limit' => '5',
              'array' => 
              array (
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'My Account',
                    $language_id => 'My Account',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '1',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '2',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '3',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '4',
                ),
              ),
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
        'sort' => '7',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;text-center&quot;&gt;Powered by OpenCart.
&lt;ul class=&quot;social-icons-default&quot; style=&quot;padding-top: 7px&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;text-center&quot;&gt;Powered by OpenCart.
&lt;ul class=&quot;social-icons-default&quot; style=&quot;padding-top: 7px&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
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
              1 => '&lt;div class=&quot;row footer-blocks-top-toys2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block-toys2&quot;&gt;
               &lt;img src=&quot;image/catalog/cleaning/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Call us&lt;/h6&gt;
                    &lt;p style=&quot;color: #00a9cf&quot;&gt;+48 500-500-100&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-5&quot;&gt;
          &lt;div class=&quot;footer-block-toys2&quot;&gt;
               &lt;img src=&quot;image/catalog/cleaning/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Or send e-mail&lt;/h6&gt;
                    &lt;p style=&quot;color: #00a9cf&quot;&gt;contact@example.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-3 text-right&quot;&gt;&lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row banners banners-with-padding-45&quot;&gt;
     &lt;div class=&quot;col-sm-8&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cleaning/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cleaning/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;
',
              $language_id => '&lt;div class=&quot;row footer-blocks-top-toys2&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block-toys2&quot;&gt;
               &lt;img src=&quot;image/catalog/cleaning/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Call us&lt;/h6&gt;
                    &lt;p style=&quot;color: #00a9cf&quot;&gt;+48 500-500-100&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-5&quot;&gt;
          &lt;div class=&quot;footer-block-toys2&quot;&gt;
               &lt;img src=&quot;image/catalog/cleaning/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Or send e-mail&lt;/h6&gt;
                    &lt;p style=&quot;color: #00a9cf&quot;&gt;contact@example.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-3 text-right&quot;&gt;&lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;row banners banners-with-padding-45&quot;&gt;
     &lt;div class=&quot;col-sm-8&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cleaning/banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/cleaning/banner-04.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;
',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
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
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      7 => 
      array (
        'status' => '1',
        'width' => '4',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'toys2_today_deals.tpl',
              'title' => 
              array (
                1 => 'Today deal',
                $language_id => 'Today deal',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42',
              'category' => '',
              'categories' => '',
              'width' => '300',
              'height' => '285',
              'limit' => '1',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '8',
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
                1 => 'Latest products',
                $language_id => 'Latest products',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '30,47,28,41,43,44,45,29',
              'category' => '',
              'categories' => '',
              'width' => '200',
              'height' => '220',
              'limit' => '8',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'responsive-margin-top-40',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/cleaning/bg-parallax.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'fixed',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;cleaning-parallax text-center&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Need help?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our community&lt;br&gt;&lt;span style=&quot;color: #ffd300&quot;&gt;forum&lt;/span&gt;&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Go to forum&lt;/a&gt;
     &lt;img src=&quot;image/catalog/cleaning/tons-of-tips.png&quot; alt=&quot;Tons of tips&quot; style=&quot;position: absolute;margin-top: -95px;margin-left: 149px;left: 50%&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot;&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
              $language_id => '&lt;div class=&quot;cleaning-parallax text-center&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Need help?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our community&lt;br&gt;&lt;span style=&quot;color: #ffd300&quot;&gt;forum&lt;/span&gt;&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Go to forum&lt;/a&gt;
     &lt;img src=&quot;image/catalog/cleaning/tons-of-tips.png&quot; alt=&quot;Tons of tips&quot; style=&quot;position: absolute;margin-top: -95px;margin-left: 149px;left: 50%&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot;&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => 'responsive-margin-top-40 responsive-margin-bottom-0',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '-15',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/cleaning/bg-parallax2.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '12',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      10 => 
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
              1 => '&lt;div class=&quot;cleaning-parallax2 text-center&quot;&gt;
     &lt;img src=&quot;image/catalog/cleaning/up-to-30.png&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot; alt=&quot;Up to 30%&quot; style=&quot;position: absolute;left: 50%;margin-left: 235px&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Join newsletter&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Get discount!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Join now&lt;/a&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
              $language_id => '&lt;div class=&quot;cleaning-parallax2 text-center&quot;&gt;
     &lt;img src=&quot;image/catalog/cleaning/up-to-30.png&quot; class=&quot;hidden-xs hidden-sm hidden-md&quot; alt=&quot;Up to 30%&quot; style=&quot;position: absolute;left: 50%;margin-left: 235px&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Join newsletter&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Get discount!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;Join now&lt;/a&gt;
&lt;/div&gt;

&lt;link href=\'https://fonts.googleapis.com/css?family=Shadows+Into+Light\' rel=\'stylesheet\' type=\'text/css\'&gt;',
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