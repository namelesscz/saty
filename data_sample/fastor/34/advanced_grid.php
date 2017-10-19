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
                1 => 'Electronics',
                $language_id => 'Electronics',
              ),
              'limit' => '6',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'Camera, Photo &amp; Video',
                    $language_id => 'Camera, Photo &amp; Video',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Cell Phones &amp; Accessories',
                    $language_id => 'Cell Phones &amp; Accessories',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Laptops &amp; Notebooks',
                    $language_id => 'Laptops &amp; Notebooks',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Musical Instruments',
                    $language_id => 'Musical Instruments',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tablets',
                    $language_id => 'Tablets',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'TV &amp; Video',
                    $language_id => 'TV &amp; Video',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Clothing &amp; shoes',
                $language_id => 'Clothing &amp; shoes',
              ),
              'limit' => '7',
              'array' => 
              array (
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Baby',
                    $language_id => 'Baby',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Boys',
                    $language_id => 'Boys',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Girls',
                    $language_id => 'Girls',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Men',
                    $language_id => 'Men',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Uniforms, Work &amp; Safety',
                    $language_id => 'Uniforms, Work &amp; Safety',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Shoes',
                    $language_id => 'Shoes',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Women',
                    $language_id => 'Women',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '7',
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
                1 => 'Home',
                $language_id => 'Home',
              ),
              'limit' => '6',
              'array' => 
              array (
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Accessories',
                    $language_id => 'Accessories',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Arts',
                    $language_id => 'Arts',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Bedding &amp; Bath',
                    $language_id => 'Bedding &amp; Bath',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                17 => 
                array (
                  'name' => 
                  array (
                    1 => 'Furniture',
                    $language_id => 'Furniture',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                18 => 
                array (
                  'name' => 
                  array (
                    1 => 'Kitchen &amp; Dining',
                    $language_id => 'Kitchen &amp; Dining',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                19 => 
                array (
                  'name' => 
                  array (
                    1 => 'Living room',
                    $language_id => 'Living room',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Sports &amp; Outdoors',
                $language_id => 'Sports &amp; Outdoors',
              ),
              'limit' => '6',
              'array' => 
              array (
                20 => 
                array (
                  'name' => 
                  array (
                    1 => 'Exercise &amp; Fitness',
                    $language_id => 'Exercise &amp; Fitness',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                21 => 
                array (
                  'name' => 
                  array (
                    1 => 'Leisure Sports',
                    $language_id => 'Leisure Sports',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                22 => 
                array (
                  'name' => 
                  array (
                    1 => 'Running',
                    $language_id => 'Running',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                23 => 
                array (
                  'name' => 
                  array (
                    1 => 'Team Sports',
                    $language_id => 'Team Sports',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                24 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tennis &amp; Racquet Sports',
                    $language_id => 'Tennis &amp; Racquet Sports',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                25 => 
                array (
                  'name' => 
                  array (
                    1 => 'Yoga',
                    $language_id => 'Yoga',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
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
                1 => 'Beauty &amp; health',
                $language_id => 'Beauty &amp; health',
              ),
              'limit' => '6',
              'array' => 
              array (
                26 => 
                array (
                  'name' => 
                  array (
                    1 => 'Bath &amp; Body Care',
                    $language_id => 'Bath &amp; Body Care',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                27 => 
                array (
                  'name' => 
                  array (
                    1 => 'Fragrance',
                    $language_id => 'Fragrance',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                28 => 
                array (
                  'name' => 
                  array (
                    1 => 'Hair Care',
                    $language_id => 'Hair Care',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                29 => 
                array (
                  'name' => 
                  array (
                    1 => 'Makeup',
                    $language_id => 'Makeup',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                30 => 
                array (
                  'name' => 
                  array (
                    1 => 'Skin Care',
                    $language_id => 'Skin Care',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                31 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tools &amp; Accessories',
                    $language_id => 'Tools &amp; Accessories',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '6',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'links',
            'links' => 
            array (
              'module_layout' => 'default.tpl',
              'title' => 
              array (
                1 => 'Automotive',
                $language_id => 'Automotive',
              ),
              'limit' => '6',
              'array' => 
              array (
                32 => 
                array (
                  'name' => 
                  array (
                    1 => 'Accessories',
                    $language_id => 'Accessories',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '1',
                ),
                33 => 
                array (
                  'name' => 
                  array (
                    1 => 'Electronics &amp; GPS',
                    $language_id => 'Electronics &amp; GPS',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '2',
                ),
                34 => 
                array (
                  'name' => 
                  array (
                    1 => 'Motorcycle',
                    $language_id => 'Motorcycle',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '3',
                ),
                35 => 
                array (
                  'name' => 
                  array (
                    1 => 'Parts',
                    $language_id => 'Parts',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '4',
                ),
                36 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tires &amp; Wheels',
                    $language_id => 'Tires &amp; Wheels',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
                  'sort' => '5',
                ),
                37 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tools',
                    $language_id => 'Tools',
                  ),
                  'url' => 'index.php?route=product/category&amp;path=20',
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
     &lt;img src=&quot;image/catalog/market/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
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
     &lt;img src=&quot;image/catalog/market/logo-footer.png&quot; alt=&quot;Fastor&quot;&gt;
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
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;#&quot; style=&quot;display: block;margin-top: 50px&quot; class=&quot;responsive-margin-top-30&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;#&quot; style=&quot;display: block;margin-top: 50px&quot; class=&quot;responsive-margin-top-30&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;',
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
               &lt;img src=&quot;image/catalog/market/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p&gt;500-100-100&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-5&quot;&gt;
               &lt;img src=&quot;image/catalog/market/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Orders&lt;br&gt;support&lt;/div&gt;
               &lt;p&gt;orders@example.com&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;img src=&quot;image/catalog/market/icon-skype.png&quot; alt=&quot;Skype&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p&gt;example&lt;/p&gt;
          &lt;/div&gt;
     &lt;/div&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-contact&quot;&gt;
     &lt;div class=&quot;row&quot;&gt;
          &lt;div class=&quot;col-sm-4&quot;&gt;
               &lt;img src=&quot;image/catalog/market/icon-phone.png&quot; alt=&quot;Phone&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p&gt;500-100-100&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-5&quot;&gt;
               &lt;img src=&quot;image/catalog/market/icon-mail.png&quot; alt=&quot;Mail&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Orders&lt;br&gt;support&lt;/div&gt;
               &lt;p&gt;orders@example.com&lt;/p&gt;
          &lt;/div&gt;
          
          &lt;div class=&quot;col-sm-3&quot;&gt;
               &lt;img src=&quot;image/catalog/market/icon-skype.png&quot; alt=&quot;Skype&quot;&gt;
               &lt;div class=&quot;heading&quot;&gt;Mon - Fri&lt;br&gt;8:00 - 18:00&lt;/div&gt;
               &lt;p&gt;example&lt;/p&gt;
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
    'custom_class' => 'market-products',
    'margin_top' => '30',
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
    'sort_order' => '0',
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/electronics2.png&quot; alt=&quot;Electronics&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Electronics&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Camera, Photo &amp; Video&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cell Phones &amp; Accessories&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laptops &amp; Notebooks&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Musical Instruments&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tablets&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;TV &amp; Video&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/electronics2.png&quot; alt=&quot;Electronics&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Electronics&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Camera, Photo &amp; Video&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Cell Phones &amp; Accessories&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Laptops &amp; Notebooks&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Musical Instruments&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tablets&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;TV &amp; Video&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      8 => 
      array (
        'status' => '1',
        'width' => '9',
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
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'most_viewed',
              'product' => '',
              'products' => '',
              'category' => '',
              'categories' => '',
              'width' => '170',
              'height' => '170',
              'limit' => '4',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-03.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-03.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => 'market-products',
    'margin_top' => '30',
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
    'sort_order' => '1',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      9 => 
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/home2.png&quot; alt=&quot;Home&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Home&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Arts&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bedding &amp; Bath&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Furniture&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kitchen &amp; Dining&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Living room&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/home2.png&quot; alt=&quot;Home&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Home&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Accessories&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Arts&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bedding &amp; Bath&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Furniture&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kitchen &amp; Dining&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Living room&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      10 => 
      array (
        'status' => '1',
        'width' => '9',
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
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '49,43,29,30',
              'category' => '',
              'categories' => '',
              'width' => '170',
              'height' => '170',
              'limit' => '4',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-04.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-04.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'custom_class' => 'market-products',
    'margin_top' => '30',
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
    'sort_order' => '4',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      11 => 
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/beauty2.png&quot; alt=&quot;Beauty&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Beauty &amp; health&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bath &amp; Body Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Fragrance&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Hair Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Makeup&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Skin Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tools &amp; Accessories&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/beauty2.png&quot; alt=&quot;Beauty&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Beauty &amp; health&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bath &amp; Body Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Fragrance&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Hair Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Makeup&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Skin Care&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Tools &amp; Accessories&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      12 => 
      array (
        'status' => '1',
        'width' => '9',
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
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '28,41,30,29',
              'category' => '',
              'categories' => '',
              'width' => '170',
              'height' => '170',
              'limit' => '4',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-08.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-08.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'custom_class' => 'market-products',
    'margin_top' => '30',
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
    'sort_order' => '5',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      13 => 
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
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/clothing2.png&quot; alt=&quot;Clothing&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clothing &amp; Shoes&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Baby&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Boys&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Girls&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Men&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Uniforms, Work &amp; Safety&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Shoes&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Women&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
              $language_id => '&lt;div class=&quot;market-products-categories&quot;&gt;
     &lt;div class=&quot;image&quot;&gt;&lt;img src=&quot;image/catalog/market/clothing2.png&quot; alt=&quot;Clothing&quot;&gt;&lt;/div&gt;
     &lt;ul&gt;
          &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clothing &amp; Shoes&lt;/a&gt;
               &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Baby&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Boys&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Girls&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Men&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Uniforms, Work &amp; Safety&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Shoes&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Women&lt;/a&gt;&lt;/li&gt;
               &lt;/ul&gt;
          &lt;/li&gt;
     &lt;/ul&gt;
&lt;/div&gt;',
            ),
          ),
        ),
      ),
      14 => 
      array (
        'status' => '1',
        'width' => '9',
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
                1 => '',
                $language_id => '',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '30,43,46,29',
              'category' => '',
              'categories' => '',
              'width' => '170',
              'height' => '170',
              'limit' => '4',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-09.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
              $language_id => '&lt;a href=&quot;#&quot; style=&quot;display: block;position: relative;margin: 0px -1px -1px -1px&quot;&gt;&lt;img src=&quot;image/catalog/market/banner-09.png&quot; alt=&quot;Banner&quot; style=&quot;display: block&quot;&gt;&lt;/a&gt;',
            ),
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'custom_class' => 'border-1px',
    'margin_top' => '30',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#fafafa',
    'background_image_type' => '1',
    'background_image' => 'catalog/market/bg-newsletter.png',
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
      15 => 
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
              'module_layout' => 'market_newsletter.tpl',
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
); 

$output2 = array();
$output2["advanced_grid_module"] = $this->config->get('advanced_grid_module');

if(!is_array($output["advanced_grid_module"])) $output["advanced_grid_module"] = array();
if(!is_array($output2["advanced_grid_module"])) $output2["advanced_grid_module"] = array();
$output3 = array();
$output3["advanced_grid_module"] = array_merge($output["advanced_grid_module"], $output2["advanced_grid_module"]);

$this->model_setting_setting->editSetting( "advanced_grid", $output3 );		

?>