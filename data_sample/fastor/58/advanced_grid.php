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
        'width' => '2',
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
                1 => 'Categories',
                $language_id => 'Categories',
              ),
              'limit' => '20',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'Desktops',
                    $language_id => 'Desktops',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Laptops & Notebooks',
                    $language_id => 'Laptops & Notebooks',
                  ),
                  'url' => 'index.php?route=product/category&path=18',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Components',
                    $language_id => 'Components',
                  ),
                  'url' => 'index.php?route=product/category&path=25',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tablets',
                    $language_id => 'Tablets',
                  ),
                  'url' => 'index.php?route=product/category&path=57',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Software',
                    $language_id => 'Software',
                  ),
                  'url' => 'index.php?route=product/category&path=17',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Phones & PDAs',
                    $language_id => 'Phones & PDAs',
                  ),
                  'url' => 'index.php?route=product/category&path=24',
                  'sort' => '6',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Cameras',
                    $language_id => 'Cameras',
                  ),
                  'url' => 'index.php?route=product/category&path=33',
                  'sort' => '7',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'MP3 Players',
                    $language_id => 'MP3 Players',
                  ),
                  'url' => 'index.php?route=product/category&path=34',
                  'sort' => '8',
                ),
              ),
            ),
          ),
        ),
      ),
      2 => 
      array (
        'status' => '1',
        'width' => '2',
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
                1 => 'Brands',
                $language_id => 'Brands',
              ),
              'limit' => '20',
              'array' => 
              array (
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Apple',
                    $language_id => 'Apple',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=8',
                  'sort' => '1',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Canon',
                    $language_id => 'Canon',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=9',
                  'sort' => '2',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Hewlett-Packard',
                    $language_id => 'Hewlett-Packard',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=7',
                  'sort' => '3',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'HTC',
                    $language_id => 'HTC',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=5',
                  'sort' => '4',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Palm',
                    $language_id => 'Palm',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=6',
                  'sort' => '5',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Sony',
                    $language_id => 'Sony',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&manufacturer_id=10',
                  'sort' => '6',
                ),
              ),
            ),
          ),
        ),
      ),
      3 => 
      array (
        'status' => '1',
        'width' => '2',
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
                1 => 'My account',
                $language_id => 'My account',
              ),
              'limit' => '20',
              'array' => 
              array (
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'My Account',
                    $language_id => 'My Account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '1',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                17 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
                18 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '4',
                ),
                19 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '5',
                ),
                20 => 
                array (
                  'name' => 
                  array (
                    1 => 'Gift Vouchers',
                    $language_id => 'Gift Vouchers',
                  ),
                  'url' => 'index.php?route=account/voucher',
                  'sort' => '6',
                ),
                21 => 
                array (
                  'name' => 
                  array (
                    1 => 'Affiliates',
                    $language_id => 'Affiliates',
                  ),
                  'url' => 'index.php?route=affiliate/login',
                  'sort' => '7',
                ),
                22 => 
                array (
                  'name' => 
                  array (
                    1 => 'Specials',
                    $language_id => 'Specials',
                  ),
                  'url' => 'index.php?route=product/special',
                  'sort' => '8',
                ),
              ),
            ),
          ),
        ),
      ),
      4 => 
      array (
        'status' => '1',
        'width' => '2',
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
                1 => 'Information',
                $language_id => 'Information',
              ),
              'limit' => '5',
              'array' => 
              array (
                23 => 
                array (
                  'name' => 
                  array (
                    1 => 'About Us',
                    $language_id => 'About Us',
                  ),
                  'url' => 'index.php?route=information/information&information_id=4',
                  'sort' => '1',
                ),
                24 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery Information',
                    $language_id => 'Delivery Information',
                  ),
                  'url' => 'index.php?route=information/information&information_id=6',
                  'sort' => '2',
                ),
                25 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => 'index.php?route=information/information&information_id=3',
                  'sort' => '3',
                ),
                26 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms & Conditions',
                    $language_id => 'Terms & Conditions',
                  ),
                  'url' => 'index.php?route=information/information&information_id=5',
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
        'sort' => '8',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => 'Powered by OpenCart.',
              $language_id => 'Powered by OpenCart.',
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
              1 => '<div class="row footer-blocks-top-shoes3" style="padding-top: 0px">
     <div class="col-sm-4">
          <div class="footer-block-shoes3">
               <img src="image/catalog/computer8/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6>Call us</h6>
                    <p>+48 500-500-500</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-5">
          <div class="footer-block-shoes3">
               <img src="image/catalog/computer8/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6>Or send e-mail</h6>
                    <p>contact@example.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-3 text-right"><a href="index.php?route=information/contact" class="button btn-default">Use contact form</a></div>
</div>',
              $language_id => '<div class="row footer-blocks-top-shoes3" style="padding-top: 0px">
     <div class="col-sm-4">
          <div class="footer-block-shoes3">
               <img src="image/catalog/computer8/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6>Call us</h6>
                    <p>+48 500-500-500</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-5">
          <div class="footer-block-shoes3">
               <img src="image/catalog/computer8/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6>Or send e-mail</h6>
                    <p>contact@example.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-3 text-right"><a href="index.php?route=information/contact" class="button btn-default">Use contact form</a></div>
</div>',
            ),
          ),
        ),
      ),
      7 => 
      array (
        'status' => '1',
        'width' => '4',
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
              1 => '<a href="#"><img src="image/catalog/computer8/banner-07.png" alt="Banner" style="display: block;margin-top: 12px"></a>
<a href="#"><img src="image/catalog/computer8/banner-08.png" alt="Banner" style="display: block"></a>',
              $language_id => '<a href="#"><img src="image/catalog/computer8/banner-07.png" alt="Banner" style="display: block;margin-top: 12px"></a>
<a href="#"><img src="image/catalog/computer8/banner-08.png" alt="Banner" style="display: block"></a>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'border-computer8-newsletter responsive-margin-top-40',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#f7f7f7',
    'background_image_type' => '0',
    'background_image' => '',
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
              'module_layout' => 'computer8_newsletter.tpl',
              'title' => 
              array (
                1 => 'Join our Newsletter',
                $language_id => 'Join our Newsletter',
              ),
              'text' => 
              array (
                1 => 'To receive $30 discount code',
                $language_id => 'To receive $30 discount code',
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
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '3',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
            'sort' => '0',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'computer8_today_deals.tpl',
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
              'width' => '320',
              'height' => '326',
              'limit' => '1',
            ),
          ),
        ),
      ),
      10 => 
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
            'type' => 'products_tabs',
            'products_tabs' => 
            array (
              'module_layout' => 'products_grid_with_carousel.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'description' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'width' => '200',
              'height' => '180',
              'limit' => '8',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    1 => 'Desktops',
                    $language_id => 'Desktops',
                  ),
                  'get_products_from' => 'products',
                  'product' => '',
                  'products' => '34,49,33,41,29,46,30,43',
                  'category' => '',
                  'categories' => '',
                ),
                2 => 
                array (
                  'title' => 
                  array (
                    1 => 'Components',
                    $language_id => 'Components',
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
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="row banners responsive-margin-top-15">
     <div class="col-sm-6"><a href="#"><img src="image/catalog/computer8/banner-05.png" alt="Banner"></a></div>
     <div class="col-sm-6"><a href="#"><img src="image/catalog/computer8/banner-06.png" alt="Banner"></a></div>
</div>',
              $language_id => '<div class="row banners responsive-margin-top-15">
     <div class="col-sm-6"><a href="#"><img src="image/catalog/computer8/banner-05.png" alt="Banner"></a></div>
     <div class="col-sm-6"><a href="#"><img src="image/catalog/computer8/banner-06.png" alt="Banner"></a></div>
</div>',
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