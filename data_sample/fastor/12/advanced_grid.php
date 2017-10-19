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
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;800-140-100&lt;/h6&gt;
                    &lt;p&gt;Mon - Fri: 8:00 - 17:00&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4 text-center&quot;&gt;
          &lt;a href=&quot;index.php?route=information/contact&quot; class=&quot;footer-button&quot;&gt;Contact form&lt;/a&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;row footer-blocks-top&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;Do you have any question?&lt;/h6&gt;
                    &lt;p&gt;email.example@gmail.com&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6&gt;800-140-100&lt;/h6&gt;
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
                1 => 'My account',
                $language_id => 'My account',
              ),
              'limit' => '7',
              'array' => 
              array (
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => 'My account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '1',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
                8 => 
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
            'sort' => '',
            'type' => 'newsletter',
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
                1 => 'What you want',
                $language_id => 'What you want',
              ),
              'get_products_from' => 'latest',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '83',
              'height' => '83',
              'limit' => '2',
            ),
            'newsletter' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Newsletter',
                $language_id => 'Newsletter',
              ),
              'text' => 
              array (
                1 => 'Add you e-mail addres to our newsletter to be always on time with all promotions.',
                $language_id => 'Add you e-mail addres to our newsletter to be always on time with all promotions.',
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
            'sort' => '',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;row footer-blocks-bottom&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Free shipping &amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-money-back.png&quot; alt=&quot;Money back&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;

     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;row footer-blocks-bottom&quot;&gt;
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-free-shipping.png&quot; alt=&quot;Free shipping&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Free shipping &amp; Return&lt;/h6&gt;
                    &lt;p&gt;For all orders over $500&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;
     
     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-money-back.png&quot; alt=&quot;Money back&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Money back guarantee&lt;/h6&gt;
                    &lt;p&gt;100% money back guarante&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
     &lt;/div&gt;

     &lt;div class=&quot;col-sm-4&quot;&gt;
          &lt;div class=&quot;footer-block&quot;&gt;
               &lt;img src=&quot;image/catalog/antique/icon-support.png&quot; alt=&quot;Support&quot;&gt;
               &lt;div class=&quot;footer-block-content&quot;&gt;
                    &lt;h6 style=&quot;color: #e2b422&quot;&gt;Support 24/7&lt;/h6&gt;
                    &lt;p&gt;We answer for question all time&lt;/p&gt;
               &lt;/div&gt;
          &lt;/div&gt;
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
      6 => 
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
      7 => 
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
            'type' => 'products',
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
                1 => 'Bells',
                $language_id => 'Bells',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '46,30,31,43',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '160',
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
      8 => 
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
            'type' => 'products',
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
                1 => 'Coffe express',
                $language_id => 'Coffe express',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '44,45,31',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '160',
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
            'type' => 'products',
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
                1 => 'Watches',
                $language_id => 'Watches',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '29,46,30',
              'category' => '',
              'categories' => '',
              'width' => '150',
              'height' => '160',
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
      10 => 
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
            'type' => 'products',
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
                1 => 'Other',
                $language_id => 'Other',
              ),
              'get_products_from' => 'category',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '18,33,25',
              'width' => '150',
              'height' => '160',
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