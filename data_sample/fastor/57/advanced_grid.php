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
                  'url' => 'index.php?route=information/information&information_id=4',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery Information',
                    $language_id => 'Delivery Information',
                  ),
                  'url' => 'index.php?route=information/information&information_id=6',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => '/index.php?route=information/information&information_id=3',
                  'sort' => '3',
                ),
                4 => 
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
              1 => '<div class="text-center">Powered by OpenCart.
<ul class="social-icons-computer7" style="padding-top: 7px">
     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
     <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
     <li><a href="#"><i class="fa fa-github"></i></a></li>
     <li><a href="#"><i class="fa fa-behance"></i></a></li>
</ul>
</div>',
              $language_id => '<div class="text-center">Powered by OpenCart.
<ul class="social-icons-computer7" style="padding-top: 7px">
     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
     <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
     <li><a href="#"><i class="fa fa-github"></i></a></li>
     <li><a href="#"><i class="fa fa-behance"></i></a></li>
</ul>
</div>',
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
              1 => '<div class="row footer-blocks-top-lingerie2">
     <div class="col-sm-4">
          <div class="footer-block-lingerie2">
               <img src="image/catalog/computer7/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <p style="color: #fff">Call us</p>
                    <h6 style="color: #4aacdd;font-size: 20px;line-height: 1">+48 500-500-500</h6>
               </div>
          </div>
     </div>
     
     <div class="col-sm-5">
          <div class="footer-block-lingerie2">
               <img src="image/catalog/computer7/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <p style="color: #fff">Or send e-mail</p>
                    <h6 style="color: #f13d3e;font-size: 20px;line-height: 1">contact@example.com</h6>
               </div>
          </div>
     </div>
     
     <div class="col-sm-3 text-right"><a href="index.php?route=information/contact" class="footer-button">Contact form</a></div>
</div>

<div class="row banners banners-with-padding-30 responsive-margin-bottom-10">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/computer7/banner-04.png" alt="Banner"></a></div>
</div>
',
              $language_id => '<div class="row footer-blocks-top-lingerie2">
     <div class="col-sm-4">
          <div class="footer-block-lingerie2">
               <img src="image/catalog/computer7/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <p style="color: #fff">Call us</p>
                    <h6 style="color: #4aacdd;font-size: 20px;line-height: 1">+48 500-500-500</h6>
               </div>
          </div>
     </div>
     
     <div class="col-sm-5">
          <div class="footer-block-lingerie2">
               <img src="image/catalog/computer7/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <p style="color: #fff">Or send e-mail</p>
                    <h6 style="color: #f13d3e;font-size: 20px;line-height: 1">contact@example.com</h6>
               </div>
          </div>
     </div>
     
     <div class="col-sm-3 text-right"><a href="index.php?route=information/contact" class="footer-button">Contact form</a></div>
</div>

<div class="row banners banners-with-padding-30 responsive-margin-bottom-10">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/computer7/banner-04.png" alt="Banner"></a></div>
</div>
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
    'force_full_width' => '0',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
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
        'width' => '8',
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
              'width' => '164',
              'height' => '164',
              'limit' => '8',
              'products' => 
              array (
                1 => 
                array (
                  'title' => 
                  array (
                    1 => 'Latest Products',
                    $language_id => 'Latest Products',
                  ),
                  'get_products_from' => 'products',
                  'product' => '',
                  'products' => '42,30,47,28,41,43,44,45',
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
              1 => '<div class="row banners" style="margin-top: 7px">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/computer7/banner-03.png" alt="Banner"></a></div>
</div>',
              $language_id => '<div class="row banners" style="margin-top: 7px">
     <div class="col-sm-12"><a href="#"><img src="image/catalog/computer7/banner-03.png" alt="Banner"></a></div>
</div>',
            ),
          ),
        ),
      ),
      8 => 
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
              'module_layout' => 'computer6_today_deals.tpl',
              'title' => 
              array (
                1 => 'Today Deal',
                $language_id => 'Today Deal',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42',
              'category' => '',
              'categories' => '',
              'width' => '320',
              'height' => '316',
              'limit' => '1',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'responsive-margin-top-45',
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
    'background_image' => 'catalog/computer7/bg-box.png',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '7',
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
              1 => '<div class="computer6-banner">
     <div class="title">MacBook</div>
     <div class="price">
          <span class="price-old">$1895.00</span> <span class="price-new" style="color: #4aacdd">$1395.00</span>
     </div>
     <a href="#" class="button computer6-button">Read more</a>
</div>',
              $language_id => '<div class="computer6-banner">
     <div class="title">MacBook</div>
     <div class="price">
          <span class="price-old">$1895.00</span> <span class="price-new" style="color: #4aacdd">$1395.00</span>
     </div>
     <a href="#" class="button computer6-button">Read more</a>
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