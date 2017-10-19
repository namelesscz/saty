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
              1 => '<div class="text-center">Powered By OpenCart. Your Store © 2015</div>',
              $language_id => '<div class="text-center">Powered By OpenCart. Your Store © 2015</div>',
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
    'padding_bottom' => '143',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '1',
    'background_image' => 'catalog/carparts2/bg-choose-category.png',
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
              1 => '<div class="box box-no-advanced box-with-products no-clear-after">
     <div class="box-heading">Choose your category</div>
     <div class="clear"></div>
</div>

<div class="holidays-countries row">
     <div class="col-sm-3">
          <div class="heading"><a href="index.php?route=product/category&path=20" style="color: #e31d27;border-color: #e31d27;font-size: 20px">Shop by parts</a></div>
          <div class="row">
               <div class="col-xs-12">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Air, Fuel, Emission & Exhaust</a></li>
                         <li><a href="index.php?route=product/category&path=20">Accessories, Body & Wipers</a></li>
                         <li><a href="index.php?route=product/category&path=20">Batteries, Electrical & Wiring</a></li>
                         <li><a href="index.php?route=product/category&path=20">Brakes, Steering & Suspension</a></li>
                         <li><a href="index.php?route=product/category&path=20">Cooling & Heating</a></li>
                         <li><a href="index.php?route=product/category&path=20">Electronics & Navigation</a></li>
                         <li><a href="index.php?route=product/category&path=20">Engines & Ignition</a></li>
                         <li><a href="index.php?route=product/category&path=20">Tools, Fluids & Garage</a></li>
                         <li><a href="index.php?route=product/category&path=20">Transmission & Drivetrain</a></li>
                    </ul>
               </div>
          </div>
          
          <a href="index.php?route=product/category&path=20" class="button" style="margin-top: 30px">Show all parts</a>
     </div>
     
     <div class="col-sm-8">
          <div class="heading"><a href="index.php?route=product/category&path=20" style="color: #3a3a3a;border-color: #3a3a3a;font-size: 20px">Shop by car</a></div>
          <div class="row">
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Acura</a></li>
                         <li><a href="index.php?route=product/category&path=20">Alfa Romeo</a></li>
                         <li><a href="index.php?route=product/category&path=20">Aston Martin</a></li>
                         <li><a href="index.php?route=product/category&path=20">Audi</a></li>
                         <li><a href="index.php?route=product/category&path=20">BMW</a></li>
                         <li><a href="index.php?route=product/category&path=20">Chevrolet</a></li>
                         <li><a href="index.php?route=product/category&path=20">Chrysler</a></li>
                         <li><a href="index.php?route=product/category&path=20">Citroen</a></li>
                         <li><a href="index.php?route=product/category&path=20">Daewoo</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Fiat</a></li>
                         <li><a href="index.php?route=product/category&path=20">Ford</a></li>
                         <li><a href="index.php?route=product/category&path=20">Honda</a></li>
                         <li><a href="index.php?route=product/category&path=20">Hyundai</a></li>
                         <li><a href="index.php?route=product/category&path=20">Jaguar</a></li>
                         <li><a href="index.php?route=product/category&path=20">Kia</a></li>
                         <li><a href="index.php?route=product/category&path=20">Land Rover</a></li>
                         <li><a href="index.php?route=product/category&path=20">Lexus</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mazda</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Mercedes-Benz</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mini</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mitsubishi</a></li>
                         <li><a href="index.php?route=product/category&path=20">Nissan</a></li>
                         <li><a href="index.php?route=product/category&path=20">Opel</a></li>
                         <li><a href="index.php?route=product/category&path=20">Peugeot</a></li>
                         <li><a href="index.php?route=product/category&path=20">Porsche</a></li>
                         <li><a href="index.php?route=product/category&path=20">Renault</a></li>
                         <li><a href="index.php?route=product/category&path=20">Rover</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Seat</a></li>
                         <li><a href="index.php?route=product/category&path=20">Skoda</a></li>
                         <li><a href="index.php?route=product/category&path=20">Toyota</a></li>
                         <li><a href="index.php?route=product/category&path=20">Volkswagen</a></li>
                         <li><a href="index.php?route=product/category&path=20">Volvo</a></li>
                    </ul>
               </div>
          </div>
     </div>
</div>',
              $language_id => '<div class="box box-no-advanced box-with-products no-clear-after">
     <div class="box-heading">Choose your category</div>
     <div class="clear"></div>
</div>

<div class="holidays-countries row">
     <div class="col-sm-3">
          <div class="heading"><a href="index.php?route=product/category&path=20" style="color: #e31d27;border-color: #e31d27;font-size: 20px">Shop by parts</a></div>
          <div class="row">
               <div class="col-xs-12">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Air, Fuel, Emission & Exhaust</a></li>
                         <li><a href="index.php?route=product/category&path=20">Accessories, Body & Wipers</a></li>
                         <li><a href="index.php?route=product/category&path=20">Batteries, Electrical & Wiring</a></li>
                         <li><a href="index.php?route=product/category&path=20">Brakes, Steering & Suspension</a></li>
                         <li><a href="index.php?route=product/category&path=20">Cooling & Heating</a></li>
                         <li><a href="index.php?route=product/category&path=20">Electronics & Navigation</a></li>
                         <li><a href="index.php?route=product/category&path=20">Engines & Ignition</a></li>
                         <li><a href="index.php?route=product/category&path=20">Tools, Fluids & Garage</a></li>
                         <li><a href="index.php?route=product/category&path=20">Transmission & Drivetrain</a></li>
                    </ul>
               </div>
          </div>
          
          <a href="index.php?route=product/category&path=20" class="button" style="margin-top: 30px">Show all parts</a>
     </div>
     
     <div class="col-sm-8">
          <div class="heading"><a href="index.php?route=product/category&path=20" style="color: #3a3a3a;border-color: #3a3a3a;font-size: 20px">Shop by car</a></div>
          <div class="row">
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Acura</a></li>
                         <li><a href="index.php?route=product/category&path=20">Alfa Romeo</a></li>
                         <li><a href="index.php?route=product/category&path=20">Aston Martin</a></li>
                         <li><a href="index.php?route=product/category&path=20">Audi</a></li>
                         <li><a href="index.php?route=product/category&path=20">BMW</a></li>
                         <li><a href="index.php?route=product/category&path=20">Chevrolet</a></li>
                         <li><a href="index.php?route=product/category&path=20">Chrysler</a></li>
                         <li><a href="index.php?route=product/category&path=20">Citroen</a></li>
                         <li><a href="index.php?route=product/category&path=20">Daewoo</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Fiat</a></li>
                         <li><a href="index.php?route=product/category&path=20">Ford</a></li>
                         <li><a href="index.php?route=product/category&path=20">Honda</a></li>
                         <li><a href="index.php?route=product/category&path=20">Hyundai</a></li>
                         <li><a href="index.php?route=product/category&path=20">Jaguar</a></li>
                         <li><a href="index.php?route=product/category&path=20">Kia</a></li>
                         <li><a href="index.php?route=product/category&path=20">Land Rover</a></li>
                         <li><a href="index.php?route=product/category&path=20">Lexus</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mazda</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Mercedes-Benz</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mini</a></li>
                         <li><a href="index.php?route=product/category&path=20">Mitsubishi</a></li>
                         <li><a href="index.php?route=product/category&path=20">Nissan</a></li>
                         <li><a href="index.php?route=product/category&path=20">Opel</a></li>
                         <li><a href="index.php?route=product/category&path=20">Peugeot</a></li>
                         <li><a href="index.php?route=product/category&path=20">Porsche</a></li>
                         <li><a href="index.php?route=product/category&path=20">Renault</a></li>
                         <li><a href="index.php?route=product/category&path=20">Rover</a></li>
                    </ul>
               </div>
               
               <div class="col-xs-3">
                    <ul>
                         <li><a href="index.php?route=product/category&path=20">Seat</a></li>
                         <li><a href="index.php?route=product/category&path=20">Skoda</a></li>
                         <li><a href="index.php?route=product/category&path=20">Toyota</a></li>
                         <li><a href="index.php?route=product/category&path=20">Volkswagen</a></li>
                         <li><a href="index.php?route=product/category&path=20">Volvo</a></li>
                    </ul>
               </div>
          </div>
     </div>
</div>',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
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
    'background_color' => '#ebebeb',
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
              1 => '<div class="holidays-contact clearfix">
     <a href="index.php?route=information/contact" class="button pull-right">Contact form</a>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-phone.png" alt="Phone">
          <div class="heading" style="color: #202020">Sale<br>service</div>
          <p style="color: #202020">801 100 100</p>
     </div>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-phone2.png" alt="Phone">
          <div class="heading" style="color: #202020">Mobile<br>phone</div>
          <p style="color: #202020">77 421 23 12</p>
     </div>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-clock.png" alt="Time">
          <div class="heading" style="color: #202020">Monday<br>Friday</div>
          <p style="color: #202020">9:00-18:00</p>
     </div>
</div>

<a href="#"><img src="image/catalog/carparts2/banner-01.png" alt="Banner" class="responsive-margin-top-30" style="display: block;margin-top: 40px"></a>',
              $language_id => '<div class="holidays-contact clearfix">
     <a href="index.php?route=information/contact" class="button pull-right">Contact form</a>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-phone.png" alt="Phone">
          <div class="heading" style="color: #202020">Sale<br>service</div>
          <p style="color: #202020">801 100 100</p>
     </div>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-phone2.png" alt="Phone">
          <div class="heading" style="color: #202020">Mobile<br>phone</div>
          <p style="color: #202020">77 421 23 12</p>
     </div>
     
     <div class="element">
          <img src="image/catalog/carparts2/icon-clock.png" alt="Time">
          <div class="heading" style="color: #202020">Monday<br>Friday</div>
          <p style="color: #202020">9:00-18:00</p>
     </div>
</div>

<a href="#"><img src="image/catalog/carparts2/banner-01.png" alt="Banner" class="responsive-margin-top-30" style="display: block;margin-top: 40px"></a>',
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
    'padding_top' => '50',
    'padding_right' => '0',
    'padding_bottom' => '80',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#ebebeb',
    'background_image_type' => '1',
    'background_image' => 'catalog/carparts2/bg-featured.png',
    'background_image_position' => 'bottom center',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '10',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      8 => 
      array (
        'status' => '1',
        'width' => '2',
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
              1 => '<div class="carparts2-products-on-sale">
     <div class="heading">Products<br>on sale</div>
     <a href="#" class="button">Show all</a>
</div>',
              $language_id => '<div class="carparts2-products-on-sale">
     <div class="heading">Products<br>on sale</div>
     <a href="#" class="button">Show all</a>
</div>',
            ),
          ),
        ),
      ),
      9 => 
      array (
        'status' => '1',
        'width' => '10',
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
              'module_layout' => 'carparts2_products_grid.tpl',
              'title' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'products',
              'product' => 'a',
              'products' => '41,36,43,42',
              'category' => '',
              'categories' => '',
              'width' => '184',
              'height' => '200',
              'limit' => '4',
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