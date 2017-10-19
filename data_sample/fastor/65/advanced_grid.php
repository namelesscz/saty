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
              1 => 'Copyright © 2016, Your Store, All Rights Reserved.',
              $language_id => 'Copyright © 2016, Your Store, All Rights Reserved.',
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
        'sort' => '0',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="stationery-contact">
     <div class="row">
          <div class="col-sm-3">
               <img src="image/catalog/stationery/icon-phone2.png" alt="Phone">
               <div class="heading" style="color: #00abe0">Do you have<br>a question?</div>
               <p>500-130-120</p>
          </div>
          
          <div class="col-sm-5" style="padding-left: 45px">
               <img src="image/catalog/stationery/icon-mail2.png" alt="Mail">
               <div class="heading" style="color: #f8721f">Offer<br>question?</div>
               <p>contact@example.com</p>
          </div>
          
          <div class="col-sm-4" style="padding-left: 0px">
               <img src="image/catalog/stationery/icon-support2.png" alt="Support">
               <div class="heading">Support<br>question?</div>
               <p>support@example.com</p>
          </div>
     </div>
</div>

<a href="#"><img src="image/catalog/stationery/banner-01.png" style="margin-top: 44px;margin-bottom: 31px" class="responsive-margin-top-30 responsive-margin-bottom-15" alt="Banner"></a>',
              $language_id => '<div class="stationery-contact">
     <div class="row">
          <div class="col-sm-3">
               <img src="image/catalog/stationery/icon-phone2.png" alt="Phone">
               <div class="heading" style="color: #00abe0">Do you have<br>a question?</div>
               <p>500-130-120</p>
          </div>
          
          <div class="col-sm-5" style="padding-left: 45px">
               <img src="image/catalog/stationery/icon-mail2.png" alt="Mail">
               <div class="heading" style="color: #f8721f">Offer<br>question?</div>
               <p>contact@example.com</p>
          </div>
          
          <div class="col-sm-4" style="padding-left: 0px">
               <img src="image/catalog/stationery/icon-support2.png" alt="Support">
               <div class="heading">Support<br>question?</div>
               <p>support@example.com</p>
          </div>
     </div>
</div>

<a href="#"><img src="image/catalog/stationery/banner-01.png" style="margin-top: 44px;margin-bottom: 31px" class="responsive-margin-top-30 responsive-margin-bottom-15" alt="Banner"></a>',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'stationery-back-to-school responsive-margin-top-45',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '43',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/stationery/bg-back-to-school.jpg',
    'background_image_position' => 'top center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '6',
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
              1 => '<div class="back-to-school clearfix">     
     <div class="left">
          <div class="first-heading">Back to school</div>
          <div class="second-heading">Sale -30%</div>
     </div>
     
     <div class="right"><a href="#" class="button">All products</a></div>
     
     <div class="line"></div>
</div>',
              $language_id => '<div class="back-to-school clearfix">     
     <div class="left">
          <div class="first-heading">Back to school</div>
          <div class="second-heading">Sale -30%</div>
     </div>
     
     <div class="right"><a href="#" class="button">All products</a></div>
     
     <div class="line"></div>
</div>',
            ),
          ),
        ),
      ),
      8 => 
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
                1 => 'Featured products',
                $language_id => 'Featured products',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '42,47,30,28,41,43',
              'category' => '',
              'categories' => '',
              'width' => '164',
              'height' => '172',
              'limit' => '6',
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