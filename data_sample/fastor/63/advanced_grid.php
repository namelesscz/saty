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
               <img src="image/catalog/fashion4/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6>Do you have any question?</h6>
                    <p>email.example@gmail.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6>800-140-100</h6>
                    <p>Mon - Fri: 8:00 - 17:00</p>
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
               <img src="image/catalog/fashion4/icon-mail.png" alt="Mail">
               <div class="footer-block-content">
                    <h6>Do you have any question?</h6>
                    <p>email.example@gmail.com</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-phone.png" alt="Phone">
               <div class="footer-block-content">
                    <h6>800-140-100</h6>
                    <p>Mon - Fri: 8:00 - 17:00</p>
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
     <img src="image/catalog/logo-footer.png" alt="Fastor">
     <h6>PO Box 16122 Collins Street <br>Victoria 8007 Australia</h6>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
     <ul class="social-icons fashion4-social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>',
              $language_id => '<div class="footer-about-us">
     <img src="image/catalog/logo-footer.png" alt="Fastor">
     <h6>PO Box 16122 Collins Street <br>Victoria 8007 Australia</h6>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
     <ul class="social-icons fashion4-social-icons">
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
                1 => 'Put here',
                $language_id => 'Put here',
              ),
              'limit' => '7',
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
                12 => 
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
              'limit' => '7',
              'array' => 
              array (
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact',
                    $language_id => 'Contact',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '1',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'About us',
                    $language_id => 'About us',
                  ),
                  'url' => 'index.php?route=information/information&information_id=4',
                  'sort' => '2',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Categories',
                    $language_id => 'Categories',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brands',
                    $language_id => 'Brands',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '4',
                ),
                17 => 
                array (
                  'name' => 
                  array (
                    1 => 'Sitemap',
                    $language_id => 'Sitemap',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '5',
                ),
                18 => 
                array (
                  'name' => 
                  array (
                    1 => 'Returns',
                    $language_id => 'Returns',
                  ),
                  'url' => 'index.php?route=account/return/add',
                  'sort' => '6',
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
              1 => '<div class="row footer-blocks-bottom">
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-free-shipping.png" alt="Free shipping">
               <div class="footer-block-content">
                    <h6>Free shipping & Return</h6>
                    <p>For all orders over $500</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-money-back.png" alt="Money back">
               <div class="footer-block-content">
                    <h6>Money back guarantee</h6>
                    <p>100% money back guarante</p>
               </div>
          </div>
     </div>

     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-support.png" alt="Support">
               <div class="footer-block-content">
                    <h6>Support 24/7</h6>
                    <p>We answer for question all time</p>
               </div>
          </div>
     </div>
</div>',
              $language_id => '<div class="row footer-blocks-bottom">
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-free-shipping.png" alt="Free shipping">
               <div class="footer-block-content">
                    <h6>Free shipping & Return</h6>
                    <p>For all orders over $500</p>
               </div>
          </div>
     </div>
     
     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-money-back.png" alt="Money back">
               <div class="footer-block-content">
                    <h6>Money back guarantee</h6>
                    <p>100% money back guarante</p>
               </div>
          </div>
     </div>

     <div class="col-sm-4 text-center">
          <div class="footer-block">
               <img src="image/catalog/fashion4/icon-support.png" alt="Support">
               <div class="footer-block-content">
                    <h6>Support 24/7</h6>
                    <p>We answer for question all time</p>
               </div>
          </div>
     </div>
</div>',
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
              1 => '<div style="text-align: center">Copyright © 2015, Your Store, All Rights Reserved.</div>',
              $language_id => '<div style="text-align: center">Copyright © 2015, Your Store, All Rights Reserved.</div>',
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