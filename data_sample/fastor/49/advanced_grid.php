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
               &lt;img src=&quot;image/catalog/sportwinter/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 10px&quot;&gt;
                    &lt;h6 style=&quot;color: #e55a19;font-size: 17px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 10px&quot;&gt;
                    &lt;h6 style=&quot;color: #1056a9;font-size: 17px&quot;&gt;800-140-100&lt;/h6&gt;
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
               &lt;img src=&quot;image/catalog/sportwinter/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 10px&quot;&gt;
                    &lt;h6 style=&quot;color: #e55a19;font-size: 17px&quot;&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 10px&quot;&gt;
                    &lt;h6 style=&quot;color: #1056a9;font-size: 17px&quot;&gt;800-140-100&lt;/h6&gt;
                    &lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;
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
              1 => '&lt;div class=&quot;footer-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/sportwinter/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;h6 style=&quot;color: #2e363d;padding-bottom: 13px&quot;&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;footer-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/sportwinter/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;h6 style=&quot;color: #2e363d;padding-bottom: 13px&quot;&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/h6&gt;
&lt;/div&gt;',
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
                1 => 'My account',
                $language_id => 'My account',
              ),
              'limit' => '7',
              'array' => 
              array (
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => 'My account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '1',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
              ),
            ),
          ),
        ),
      ),
      5 => 
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
            'sort' => '',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Custom links',
                $language_id => 'Custom links',
              ),
              'limit' => '5',
              'array' => 
              array (
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms &amp; Conditions',
                    $language_id => 'Terms &amp; Conditions',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=5',
                  'sort' => '1',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact Us',
                    $language_id => 'Contact Us',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '2',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Sitemap',
                    $language_id => 'Sitemap',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '3',
                ),
              ),
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
        'sort' => '5',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;row footer-blocks-bottom&quot;&gt;
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #e55a19;font-size: 16px&quot;&gt;Free shipping &amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #1056a9;font-size: 16px&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;

     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #2e363d;font-size: 16px&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;row footer-blocks-bottom&quot;&gt;
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #e55a19;font-size: 16px&quot;&gt;Free shipping &amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-money.png&quot; alt=&quot;Money back&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #1056a9;font-size: 16px&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;

     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/sportwinter/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot; style=&quot;padding-top: 0px&quot;&gt;
                    &lt;h6 style=&quot;color: #2e363d;font-size: 16px&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
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
              1 => '&lt;div&gt;Copyright © 2015, Your Store, All Rights Reserved.&lt;/div&gt;',
              $language_id => '&lt;div&gt;Copyright © 2015, Your Store, All Rights Reserved.&lt;/div&gt;',
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
    'background_image_type' => '1',
    'background_image' => 'catalog/sportwinter/bg-products.png',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid_for_sportwinter.tpl',
              'title' => 
              array (
                1 => 'Latest products',
                $language_id => 'Latest products',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '47,28,31,43,44,45,29,30,46,41,40,48,34,36',
              'category' => '',
              'categories' => '',
              'width' => '250',
              'height' => '250',
              'limit' => '12',
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
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/sportwinter/bg-banner-big-sale.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
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
              1 => '&lt;div class=&quot;sportwinter-big-sale&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Looking for nice&lt;br&gt;winter holidays?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our offer!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Read more&lt;/a&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;sportwinter-big-sale&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Looking for nice&lt;br&gt;winter holidays?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our offer!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Read more&lt;/a&gt;
&lt;/div&gt;',
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
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/sportwinter/bg-products.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '8',
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
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'products_grid_for_sportwinter.tpl',
              'title' => 
              array (
                1 => 'Featured products',
                $language_id => 'Featured products',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '41,40,48,36,34,43,44,45,29,30,31,47,28,46',
              'category' => '',
              'categories' => '',
              'width' => '250',
              'height' => '250',
              'limit' => '12',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'custom_class' => 'responsive-margin-top-45',
    'margin_top' => '75',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#272e34',
    'background_image_type' => '1',
    'background_image' => 'catalog/sportwinter/bg-newsletter.png',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'repeat-x',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'sportwinter_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe to our Newsletter',
                $language_id => 'Subscribe to our Newsletter',
              ),
              'text' => 
              array (
                1 => 'Get 25% discount for first buy',
                $language_id => 'Get 25% discount for first buy',
              ),
              'input_placeholder' => 
              array (
                1 => 'your e-mail',
                $language_id => 'your e-mail',
              ),
              'subscribe_text' => 
              array (
                1 => 'Ok',
                $language_id => 'Ok',
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
  6 => 
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
    'background_image_type' => '1',
    'background_image' => 'catalog/sportwinter/bg-banner-big-sale.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '3',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      12 => 
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
              1 => '&lt;div class=&quot;sportwinter-big-sale&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Looking for nice&lt;br&gt;winter holidays?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our offer!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Read more&lt;/a&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;sportwinter-big-sale&quot;&gt;
     &lt;div class=&quot;first-heading&quot;&gt;Looking for nice&lt;br&gt;winter holidays?&lt;/div&gt;
     &lt;div class=&quot;second-heading&quot;&gt;Check our offer!&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button btn-default&quot;&gt;Read more&lt;/a&gt;
&lt;/div&gt;',
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