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
              1 => '<div class="row footer-blocks-top">
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/sport2/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6 style="font-size: 23px;line-height: 1;text-transform: none">Do you have any question?</h6>
                    <p style="color: #92c005">email.example@gmail.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/sport2/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6 style="font-size: 23px;line-height: 1;text-transform: none">800-140-100</h6>
                    <p style="color: #ff6d00">Mon - Fri: 8:00 - 17:00</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <a href="index.php?route=information/contact" class="footer-button">Contact form</a>
     </div>
</div>',
              $language_id => '<div class="row footer-blocks-top">
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/sport2/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6 style="font-size: 23px;line-height: 1;text-transform: none">Do you have any question?</h6>
                    <p style="color: #92c005">email.example@gmail.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/sport2/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6 style="font-size: 23px;line-height: 1;text-transform: none">800-140-100</h6>
                    <p style="color: #ff6d00">Mon - Fri: 8:00 - 17:00</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <a href="index.php?route=information/contact" class="footer-button">Contact form</a>
     </div>
</div>',
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
              1 => '<div class="footer-about-us">
     <img src="image/catalog/sport2/logo-footer.png" alt="Fastor">
     <h6 style="font-size: 22px;line-height: 20px;text-transform: none">PO Box 16122 Collins Street <br>Victoria 8007 Australia</h6>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>

<div style="height: 10px" class="hidden-xs"></div>',
              $language_id => '<div class="footer-about-us">
     <img src="image/catalog/logo-footer.png" alt="Fastor">
     <h6 style="font-size: 22px;line-height: 20px;text-transform: none">PO Box 16122 Collins Street <br>Victoria 8007 Australia</h6>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>

<div style="height: 10px" class="hidden-xs"></div>',
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
                1 => 'Custom block',
                $language_id => 'Custom block',
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
                  'url' => 'index.php?route=information/information&information_id=4',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery information',
                    $language_id => 'Delivery information',
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
                  'url' => 'index.php?route=information/information&information_id=3',
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
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact us',
                    $language_id => 'Contact us',
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
        'sort' => '3',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Put here',
                $language_id => 'Put here',
              ),
              'limit' => '7',
              'array' => 
              array (
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'My account',
                    $language_id => 'My account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '1',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '2',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '3',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '4',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Returns',
                    $language_id => 'Returns',
                  ),
                  'url' => 'index.php?route=account/return/add',
                  'sort' => '5',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div style="position: absolute;right: 15px;width: 262px;z-index:1;margin-top: 23px" class="hidden-xs hidden-sm hidden-md"><img src="image/catalog/sport2/banner-06.jpg" alt="Banner"></div>',
              $language_id => '<div style="position: absolute;right: 15px;width: 262px;z-index:1;margin-top: 23px" class="hidden-xs hidden-sm hidden-md"><img src="image/catalog/glamshop/banner-06.png" alt="Banner"></div>',
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
              1 => '<div style="text-align: center">Copyright © 2016, Your Store, All Rights Reserved.</div>',
              $language_id => '<div style="text-align: center">Copyright © 2016, Your Store, All Rights Reserved.</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => '',
    'margin_top' => '60',
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
    'background_image' => 'catalog/glamshop/bg-newsletter.png',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
    'disable_on_mobile' => '1',
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'sport2_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe to<br>our newsletter',
                $language_id => 'Subscribe to<br>our newsletter',
              ),
              'text' => 
              array (
                1 => 'Sign in to our newsletter and receive coupon',
                $language_id => 'Sign in to our newsletter and receive coupon',
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
); 

$output2 = array();
$output2["advanced_grid_module"] = $this->config->get('advanced_grid_module');

if(!is_array($output["advanced_grid_module"])) $output["advanced_grid_module"] = array();
if(!is_array($output2["advanced_grid_module"])) $output2["advanced_grid_module"] = array();
$output3 = array();
$output3["advanced_grid_module"] = array_merge($output["advanced_grid_module"], $output2["advanced_grid_module"]);

$this->model_setting_setting->editSetting( "advanced_grid", $output3 );		

?>