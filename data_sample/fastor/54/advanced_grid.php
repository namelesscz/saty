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
    'custom_class' => 'border-lingerie-newsletter responsive-margin-top-45',
    'margin_top' => '76',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#fff',
    'background_image_type' => '1',
    'background_image' => 'catalog/lingerie/bg-newsletter.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '0',
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
            'sort' => '1',
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'lingerie_newsletter.tpl',
              'title' => 
              array (
                1 => 'Join our Newsletter',
                $language_id => 'Join our Newsletter',
              ),
              'text' => 
              array (
                1 => 'And get discount',
                $language_id => 'And get discount',
              ),
              'input_placeholder' => 
              array (
                1 => 'e-mail address',
                $language_id => 'e-mail address',
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
  2 => 
  array (
    'custom_class' => 'responsive-margin-top-60',
    'margin_top' => '79',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f6f5f2',
    'background_image_type' => '1',
    'background_image' => 'catalog/lingerie/bg-parallax.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      2 => 
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
              1 => '&lt;div class=&quot;lingerie-parallax&quot;&gt;
     &lt;h3&gt;All 2015 Bras&lt;/h3&gt;
     &lt;h4&gt;On sale&lt;/h4&gt;
     &lt;a href=&quot;#&quot; class=&quot;button-lingerie-parallax&quot;&gt;Show products&lt;/a&gt;
&lt;/div&gt;     ',
              $language_id => '&lt;div class=&quot;lingerie-parallax&quot;&gt;
     &lt;h3&gt;All 2015 Bras&lt;/h3&gt;
     &lt;h4&gt;On sale&lt;/h4&gt;
     &lt;a href=&quot;#&quot; class=&quot;button-lingerie-parallax&quot;&gt;Show products&lt;/a&gt;
&lt;/div&gt;     ',
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
              1 => '&lt;img src=&quot;image/catalog/lingerie/logo-footer.png&quot; style=&quot;display: block;margin: 0px auto 3px auto&quot; alt=&quot;Logo&quot;&gt;',
              $language_id => '&lt;img src=&quot;image/catalog/lingerie/logo-footer.png&quot; style=&quot;display: block;margin: 0px auto 3px auto&quot; alt=&quot;Logo&quot;&gt;',
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
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;ul class=&quot;lingerie-categories&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/bras.png&quot; alt=&quot;Bras&quot;&gt;Bras&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/panties.png&quot; alt=&quot;Panties&quot;&gt;Panties&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/sleep.png&quot; alt=&quot;Sleep&quot;&gt;Sleep&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/beauty.png&quot; alt=&quot;Beauty&quot;&gt;Beauty&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/lingerie.png&quot; alt=&quot;Lingerie&quot;&gt;Lingerie&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/swim.png&quot; alt=&quot;Swim&quot;&gt;Swim&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;',
              $language_id => '&lt;ul class=&quot;lingerie-categories&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/bras.png&quot; alt=&quot;Bras&quot;&gt;Bras&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/panties.png&quot; alt=&quot;Panties&quot;&gt;Panties&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/sleep.png&quot; alt=&quot;Sleep&quot;&gt;Sleep&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/beauty.png&quot; alt=&quot;Beauty&quot;&gt;Beauty&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/lingerie.png&quot; alt=&quot;Lingerie&quot;&gt;Lingerie&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;&lt;img src=&quot;image/catalog/lingerie/swim.png&quot; alt=&quot;Swim&quot;&gt;Swim&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;',
            ),
          ),
        ),
      ),
      5 => 
      array (
        'status' => '1',
        'width' => '5',
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
                1 => '',
                $language_id => '',
              ),
              'limit' => '8',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'Login',
                    $language_id => 'Login',
                  ),
                  'url' => 'index.php?route=account/login',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Register',
                    $language_id => 'Register',
                  ),
                  'url' => 'index.php?route=account/register',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Shopping Cart',
                    $language_id => 'Shopping Cart',
                  ),
                  'url' => 'index.php?route=checkout/cart',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Checkout',
                    $language_id => 'Checkout',
                  ),
                  'url' => 'index.php?route=checkout/checkout',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => 'My account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '6',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '7',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '8',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'About Us',
                    $language_id => 'About Us',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=4',
                  'sort' => '9',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery Information',
                    $language_id => 'Delivery Information',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=5',
                  'sort' => '10',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=6',
                  'sort' => '11',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms &amp; Conditions',
                    $language_id => 'Terms &amp; Conditions',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=6',
                  'sort' => '12',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '13',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Gift Vouchers',
                    $language_id => 'Gift Vouchers',
                  ),
                  'url' => 'index.php?route=information/information&amp;information_id=6',
                  'sort' => '14',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Affiliates',
                    $language_id => 'Affiliates',
                  ),
                  'url' => 'index.php?route=affiliate/login',
                  'sort' => '15',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Specials',
                    $language_id => 'Specials',
                  ),
                  'url' => 'index.php?route=product/special',
                  'sort' => '16',
                ),
              ),
            ),
          ),
        ),
      ),
      6 => 
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
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;lingerie-contact&quot;&gt;
     &lt;h6&gt;500-500-500&lt;/h6&gt;
     &lt;p&gt;Call us&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;lingerie-contact&quot;&gt;
     &lt;h6&gt;email@example.com&lt;/h6&gt;
     &lt;p&gt;Or send e-mail&lt;/p&gt;
&lt;/div&gt;

&lt;ul class=&quot;social-icons-default&quot; style=&quot;position: relative;margin-left: -6px;margin-top: 3px&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;',
              $language_id => '&lt;div class=&quot;lingerie-contact&quot;&gt;
     &lt;h6&gt;500-500-500&lt;/h6&gt;
     &lt;p&gt;Call us&lt;/p&gt;
&lt;/div&gt;

&lt;div class=&quot;lingerie-contact&quot;&gt;
     &lt;h6&gt;email@example.com&lt;/h6&gt;
     &lt;p&gt;Or send e-mail&lt;/p&gt;
&lt;/div&gt;

&lt;ul class=&quot;social-icons-default&quot; style=&quot;position: relative;margin-left: -6px;margin-top: 3px&quot;&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;',
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
              1 => '&lt;div class=&quot;text-center&quot;&gt;Powered by OpenCart 2015.&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;text-center&quot;&gt;Powered by OpenCart 2015.&lt;/div&gt;',
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