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
        'sort' => '1',
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
        'sort' => '2',
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
        'sort' => '5',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;text-center&quot;&gt;Powered By OpenCart. Your Store © 2015&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;text-center&quot;&gt;Powered By OpenCart. Your Store © 2015&lt;/div&gt;',
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
    'padding_bottom' => '209',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/holidays/bg-where-you-want.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '2',
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
              1 => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Where you want to go?&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;holidays-countries row&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Europe&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bulgaria&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Croatia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cyprus&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Finland&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Greece&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Italy&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Malta&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Monaco&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Portugal&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;San Marino&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Spain&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;color: #019ad5;border-color: #019ad5&quot;&gt;Africa&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cabo Verde&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cameroon&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Egypt&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Guinea&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kenya&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Madagascar&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Mali&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Mauritius&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Morocco&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tunisia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Zimbabwe&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;color: #0162a1;border-color: #0162a1&quot;&gt;Asia&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Armenia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;China&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;India&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Japan&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laos&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Malaysia&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Maldives&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Philippines&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Singapore&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sri Lanka&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Turkey&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;United Arab Emirates
                         &lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;text-center&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;button&quot; style=&quot;margin-top: 40px&quot;&gt;Show all offers&lt;/a&gt;&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Where you want to go?&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;holidays-countries row&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Europe&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bulgaria&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Croatia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cyprus&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Finland&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Greece&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Italy&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Malta&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Monaco&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Portugal&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;San Marino&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Spain&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;color: #019ad5;border-color: #019ad5&quot;&gt;Africa&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cabo Verde&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cameroon&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Egypt&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Guinea&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kenya&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Madagascar&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Mali&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Mauritius&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Morocco&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tunisia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Zimbabwe&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; style=&quot;color: #0162a1;border-color: #0162a1&quot;&gt;Asia&lt;/a&gt;&lt;/div&gt;
          &lt;div class=&quot;row&quot;&gt;
               &lt;div class=&quot;col-xs-5&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Armenia&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;China&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;India&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Japan&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laos&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Malaysia&lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
               
               &lt;div class=&quot;col-xs-7&quot;&gt;
                    &lt;ul&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Maldives&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Philippines&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Singapore&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Sri Lanka&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Turkey&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;United Arab Emirates
                         &lt;/a&gt;&lt;/li&gt;
                    &lt;/ul&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;text-center&quot;&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;button&quot; style=&quot;margin-top: 40px&quot;&gt;Show all offers&lt;/a&gt;&lt;/div&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'products-without-border',
    'margin_top' => '0',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '80',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#ebf7fd',
    'background_image_type' => '1',
    'background_image' => 'catalog/holidays/bg-featured-offers.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '3',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      7 => 
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
              1 => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot; style=&quot;margin-bottom: 10px&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Featured offers&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot; style=&quot;margin-bottom: 10px&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Featured offers&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '9',
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
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '500',
              'height' => '500',
              'limit' => '3',
            ),
          ),
        ),
      ),
      9 => 
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;button-show-all-offers&quot;&gt;Show all&lt;br&gt;offers&lt;br&gt;&lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot; class=&quot;button-show-all-offers&quot;&gt;Show all&lt;br&gt;offers&lt;br&gt;&lt;i class=&quot;fa fa-chevron-right&quot;&gt;&lt;/i&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => 'responsive-holidays-contact',
    'margin_top' => '10',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '40',
    'padding_right' => '40',
    'padding_bottom' => '40',
    'padding_left' => '40',
    'force_full_width' => '0',
    'background_color' => '#0162a1',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '1',
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
              1 => '&lt;div class=&quot;holidays-contact clearfix&quot;&gt;
     &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button pull-right&quot;&gt;Contact form&lt;/a&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Sale&lt;br&gt;service&lt;/div&gt;
          &lt;p&gt;801 100 100&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Mobile&lt;br&gt;phone&lt;/div&gt;
          &lt;p&gt;77 421 23 12&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-clock.png&quot; alt=&quot;Time&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Monday&lt;br&gt;Friday&lt;/div&gt;
          &lt;p&gt;9:00-18:00&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/holidays/banner-05.png&quot; alt=&quot;Banner&quot; class=&quot;responsive-margin-top-30&quot; style=&quot;display: block;margin-top: 40px&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;div class=&quot;holidays-contact clearfix&quot;&gt;
     &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;button pull-right&quot;&gt;Contact form&lt;/a&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Sale&lt;br&gt;service&lt;/div&gt;
          &lt;p&gt;801 100 100&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Mobile&lt;br&gt;phone&lt;/div&gt;
          &lt;p&gt;77 421 23 12&lt;/p&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;element&quot;&gt;
          &lt;img src=&quot;image/catalog/holidays/icon-clock.png&quot; alt=&quot;Time&quot;&gt;
          &lt;div class=&quot;heading&quot;&gt;Monday&lt;br&gt;Friday&lt;/div&gt;
          &lt;p&gt;9:00-18:00&lt;/p&gt;
     &lt;/div&gt;
&lt;/div&gt;

&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/holidays/banner-05.png&quot; alt=&quot;Banner&quot; class=&quot;responsive-margin-top-30&quot; style=&quot;display: block;margin-top: 40px&quot;&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
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
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '7',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      11 => 
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
              1 => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Latest offers&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;box box-no-advanced box-with-products no-clear-after&quot;&gt;
     &lt;div class=&quot;box-heading&quot; style=&quot;font-size: 25px&quot;&gt;Latest offers&lt;/div&gt;
     &lt;div class=&quot;clear&quot;&gt;&lt;/div&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      12 => 
      array (
        'status' => '1',
        'width' => '4',
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
              'module_layout' => 'holidays_products.tpl',
              'title' => 
              array (
                1 => 'Europe',
                $language_id => 'Europe',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '47,41,43',
              'category' => '',
              'categories' => '',
              'width' => '140',
              'height' => '140',
              'limit' => '3',
            ),
          ),
        ),
      ),
      13 => 
      array (
        'status' => '1',
        'width' => '4',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'holidays_products.tpl',
              'title' => 
              array (
                1 => '&lt;span style=&quot;color: #019ad5&quot;&gt;Africa&lt;/span&gt;',
                $language_id => '&lt;span style=&quot;color: #019ad5&quot;&gt;Africa&lt;/span&gt;',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '29,36,48',
              'category' => '',
              'categories' => '',
              'width' => '140',
              'height' => '140',
              'limit' => '3',
            ),
          ),
        ),
      ),
      14 => 
      array (
        'status' => '1',
        'width' => '4',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'holidays_products.tpl',
              'title' => 
              array (
                1 => '&lt;span style=&quot;color: #0162a1&quot;&gt;Asia&lt;/span&gt;',
                $language_id => '&lt;span style=&quot;color: #0162a1&quot;&gt;Asia&lt;/span&gt;',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '30,28,41',
              'category' => '',
              'categories' => '',
              'width' => '140',
              'height' => '140',
              'limit' => '3',
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