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
                1 => 'Categories',
                $language_id => 'Categories',
              ),
              'limit' => '9',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'Air, Fuel, Emission &amp; Exhaust',
                    $language_id => 'Air, Fuel, Emission &amp; Exhaust',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Accessories, Body &amp; Wipers',
                    $language_id => 'Accessories, Body &amp; Wipers',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Batteries, Electrical &amp; Wiring',
                    $language_id => 'Batteries, Electrical &amp; Wiring',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brakes, Steering &amp; Suspension',
                    $language_id => 'Brakes, Steering &amp; Suspension',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Cooling &amp; Heating',
                    $language_id => 'Cooling &amp; Heating',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'Electronics &amp; Navigation',
                    $language_id => 'Electronics &amp; Navigation',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Engines &amp; Ignition',
                    $language_id => 'Engines &amp; Ignition',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '7',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tools, Fluids &amp; Garage',
                    $language_id => 'Tools, Fluids &amp; Garage',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '8',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Transmission &amp; Drivetrain',
                    $language_id => 'Transmission &amp; Drivetrain',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '9',
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
              'module_layout' => 'brands_links.tpl',
              'title' => 
              array (
                1 => 'Brands',
                $language_id => 'Brands',
              ),
              'limit' => '11',
              'array' => 
              array (
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'ACDelco',
                    $language_id => 'ACDelco',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&amp;manufacturer_id=8',
                  'sort' => '1',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Bosch',
                    $language_id => 'Bosch',
                  ),
                  'url' => 'index.php?route=product/manufacturer/info&amp;manufacturer_id=9',
                  'sort' => '2',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Brembo',
                    $language_id => 'Brembo',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '3',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Castrol',
                    $language_id => 'Castrol',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '4',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Dorman',
                    $language_id => 'Dorman',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '5',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Fenco',
                    $language_id => 'Fenco',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '6',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Monroe',
                    $language_id => 'Monroe',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '7',
                ),
                17 => 
                array (
                  'name' => 
                  array (
                    1 => 'Moog',
                    $language_id => 'Moog',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '8',
                ),
                18 => 
                array (
                  'name' => 
                  array (
                    1 => 'NTN',
                    $language_id => 'NTN',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '9',
                ),
                19 => 
                array (
                  'name' => 
                  array (
                    1 => 'Shell',
                    $language_id => 'Shell',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '10',
                ),
                20 => 
                array (
                  'name' => 
                  array (
                    1 => '&lt;span style=&quot;font-weight: bold;color: #2171c6&quot;&gt;All brands&lt;/span&gt;',
                    $language_id => '&lt;span style=&quot;font-weight: bold;color: #2171c6&quot;&gt;All brands&lt;/span&gt;',
                  ),
                  'url' => 'index.php?route=product/manufacturer',
                  'sort' => '11',
                ),
              ),
            ),
          ),
        ),
      ),
      3 => 
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
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'cars_links.tpl',
              'title' => 
              array (
                1 => 'Cars',
                $language_id => 'Cars',
              ),
              'limit' => '16',
              'array' => 
              array (
                21 => 
                array (
                  'name' => 
                  array (
                    1 => 'Acura',
                    $language_id => 'Acura',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                22 => 
                array (
                  'name' => 
                  array (
                    1 => 'Alfa Romeo',
                    $language_id => 'Alfa Romeo',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                23 => 
                array (
                  'name' => 
                  array (
                    1 => 'Aston Martin',
                    $language_id => 'Aston Martin',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                24 => 
                array (
                  'name' => 
                  array (
                    1 => 'Audi',
                    $language_id => 'Audi',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                25 => 
                array (
                  'name' => 
                  array (
                    1 => 'BMW',
                    $language_id => 'BMW',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                26 => 
                array (
                  'name' => 
                  array (
                    1 => 'Chevrolet',
                    $language_id => 'Chevrolet',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
                27 => 
                array (
                  'name' => 
                  array (
                    1 => 'Chrysler',
                    $language_id => 'Chrysler',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '7',
                ),
                28 => 
                array (
                  'name' => 
                  array (
                    1 => 'Citroen',
                    $language_id => 'Citroen',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '8',
                ),
                29 => 
                array (
                  'name' => 
                  array (
                    1 => 'Daewoo',
                    $language_id => 'Daewoo',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '9',
                ),
                30 => 
                array (
                  'name' => 
                  array (
                    1 => 'Fiat',
                    $language_id => 'Fiat',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '10',
                ),
                31 => 
                array (
                  'name' => 
                  array (
                    1 => 'Ford',
                    $language_id => 'Ford',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '11',
                ),
                32 => 
                array (
                  'name' => 
                  array (
                    1 => 'Honda',
                    $language_id => 'Honda',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '12',
                ),
                33 => 
                array (
                  'name' => 
                  array (
                    1 => 'Hyundai',
                    $language_id => 'Hyundai',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '13',
                ),
                34 => 
                array (
                  'name' => 
                  array (
                    1 => 'Jaguar',
                    $language_id => 'Jaguar',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '14',
                ),
                35 => 
                array (
                  'name' => 
                  array (
                    1 => 'Kia',
                    $language_id => 'Kia',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '15',
                ),
                36 => 
                array (
                  'name' => 
                  array (
                    1 => 'Land Rover',
                    $language_id => 'Land Rover',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '16',
                ),
                37 => 
                array (
                  'name' => 
                  array (
                    1 => 'Lexus',
                    $language_id => 'Lexus',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '17',
                ),
                38 => 
                array (
                  'name' => 
                  array (
                    1 => 'Mazda',
                    $language_id => 'Mazda',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '18',
                ),
                39 => 
                array (
                  'name' => 
                  array (
                    1 => 'Mercedes-Benz',
                    $language_id => 'Mercedes-Benz',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '19',
                ),
                40 => 
                array (
                  'name' => 
                  array (
                    1 => 'Mini',
                    $language_id => 'Mini',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '20',
                ),
                41 => 
                array (
                  'name' => 
                  array (
                    1 => 'Mitsubishi',
                    $language_id => 'Mitsubishi',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '21',
                ),
                42 => 
                array (
                  'name' => 
                  array (
                    1 => 'Nissan',
                    $language_id => 'Nissan',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '22',
                ),
                43 => 
                array (
                  'name' => 
                  array (
                    1 => 'Opel',
                    $language_id => 'Opel',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '23',
                ),
                44 => 
                array (
                  'name' => 
                  array (
                    1 => 'Peugeot',
                    $language_id => 'Peugeot',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '24',
                ),
                45 => 
                array (
                  'name' => 
                  array (
                    1 => 'Porsche',
                    $language_id => 'Porsche',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '25',
                ),
                46 => 
                array (
                  'name' => 
                  array (
                    1 => 'Renault',
                    $language_id => 'Renault',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '26',
                ),
                47 => 
                array (
                  'name' => 
                  array (
                    1 => 'Rover',
                    $language_id => 'Rover',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '27',
                ),
                48 => 
                array (
                  'name' => 
                  array (
                    1 => 'Seat',
                    $language_id => 'Seat',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '28',
                ),
                49 => 
                array (
                  'name' => 
                  array (
                    1 => 'Skoda',
                    $language_id => 'Skoda',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '29',
                ),
                50 => 
                array (
                  'name' => 
                  array (
                    1 => 'Toyota',
                    $language_id => 'Toyota',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '30',
                ),
                51 => 
                array (
                  'name' => 
                  array (
                    1 => 'Volkswagen',
                    $language_id => 'Volkswagen',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '31',
                ),
                52 => 
                array (
                  'name' => 
                  array (
                    1 => 'Volvo',
                    $language_id => 'Volvo',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '32',
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;footer-about-us market-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/carparts/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;p&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/p&gt;
     &lt;p&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
     &lt;ul class=&quot;social-icons&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;footer-about-us market-about-us&quot;&gt;
     &lt;img src=&quot;image/catalog/carparts/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
     &lt;p&gt;PO Box 16122 Collins Street &lt;br&gt;Victoria 8007 Australia&lt;/p&gt;
     &lt;p&gt;(+800) 1234 5678 90&lt;br&gt;info@company.com&lt;/p&gt;
     &lt;ul class=&quot;social-icons&quot;&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-youtube-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-github&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;i class=&quot;fa fa-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
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
              1 => 'Powered by OpenCart.',
              $language_id => 'Powered by OpenCart.',
            ),
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'custom_class' => 'border-top-1-grey',
    'margin_top' => '10',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '99999',
    'position' => 'customfooter',
    'status' => '1',
    'sort_order' => '',
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
              1 => '&lt;div class=&quot;market-contact&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p style=&quot;color: #ffcd00&quot;&gt;500-100-100&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-5&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Orders&lt;br&gt;support&lt;/div&gt;
               &lt;p style=&quot;color: #2171c6&quot;&gt;orders@example.com&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-skype.png&quot; alt=&quot;Skype&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p style=&quot;color: #000&quot;&gt;example&lt;/p&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-contact&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-phone2.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p style=&quot;color: #ffcd00&quot;&gt;500-100-100&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-5&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Orders&lt;br&gt;support&lt;/div&gt;
               &lt;p style=&quot;color: #2171c6&quot;&gt;orders@example.com&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;img src=&quot;image/catalog/carparts/icon-skype.png&quot; alt=&quot;Skype&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p style=&quot;color: #000&quot;&gt;example&lt;/p&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'custom_class' => 'responsive-margin-top-30',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#ffcd00',
    'background_image_type' => '1',
    'background_image' => 'catalog/carparts/bg-newsletter.png',
    'background_image_position' => 'top right',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '6',
    'disable_on_mobile' => '1',
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
            'type' => 'newsletter',
            'newsletter' => 
            array (
              'module_layout' => 'carparts_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe newsletter&lt;br&gt;and get discount',
                $language_id => 'Subscribe newsletter&lt;br&gt;and get discount',
              ),
              'text' => 
              array (
                1 => '',
                $language_id => '',
              ),
              'input_placeholder' => 
              array (
                1 => 'e-mail address',
                $language_id => 'e-mail address',
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
  4 => 
  array (
    'custom_class' => 'responsive-margin-top-40',
    'margin_top' => '60',
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
    'background_image' => 'catalog/carparts/bg-parallax.png',
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;carparts-parallax&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Super offer&lt;/div&gt;
     &lt;div class=&quot;heading2&quot;&gt;Join our newsletter&lt;/div&gt;
     &lt;div class=&quot;heading3&quot;&gt;And get discount&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button carparts-button&quot;&gt;Show products&lt;/a&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;carparts-parallax&quot;&gt;
     &lt;div class=&quot;heading&quot;&gt;Super offer&lt;/div&gt;
     &lt;div class=&quot;heading2&quot;&gt;Join our newsletter&lt;/div&gt;
     &lt;div class=&quot;heading3&quot;&gt;And get discount&lt;/div&gt;
     &lt;a href=&quot;#&quot; class=&quot;button carparts-button&quot;&gt;Show products&lt;/a&gt;
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