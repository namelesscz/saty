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
                    1 => 'Camera, Photo & Video',
                    $language_id => 'Camera, Photo & Video',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'Cell Phones & Accessories',
                    $language_id => 'Cell Phones & Accessories',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'Laptops & Notebooks',
                    $language_id => 'Laptops & Notebooks',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Musical Instruments',
                    $language_id => 'Musical Instruments',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tablets',
                    $language_id => 'Tablets',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'TV & Video',
                    $language_id => 'TV & Video',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
                1 => 'Clothing & shoes',
                $language_id => 'Clothing & shoes',
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
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Boys',
                    $language_id => 'Boys',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Girls',
                    $language_id => 'Girls',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'Men',
                    $language_id => 'Men',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Uniforms, Work & Safety',
                    $language_id => 'Uniforms, Work & Safety',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Shoes',
                    $language_id => 'Shoes',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '6',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Women',
                    $language_id => 'Women',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Arts',
                    $language_id => 'Arts',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Bedding & Bath',
                    $language_id => 'Bedding & Bath',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                17 => 
                array (
                  'name' => 
                  array (
                    1 => 'Furniture',
                    $language_id => 'Furniture',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                18 => 
                array (
                  'name' => 
                  array (
                    1 => 'Kitchen & Dining',
                    $language_id => 'Kitchen & Dining',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                19 => 
                array (
                  'name' => 
                  array (
                    1 => 'Living room',
                    $language_id => 'Living room',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
                1 => 'Sports & Outdoors',
                $language_id => 'Sports & Outdoors',
              ),
              'limit' => '6',
              'array' => 
              array (
                20 => 
                array (
                  'name' => 
                  array (
                    1 => 'Exercise & Fitness',
                    $language_id => 'Exercise & Fitness',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                21 => 
                array (
                  'name' => 
                  array (
                    1 => 'Leisure Sports',
                    $language_id => 'Leisure Sports',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                22 => 
                array (
                  'name' => 
                  array (
                    1 => 'Running',
                    $language_id => 'Running',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                23 => 
                array (
                  'name' => 
                  array (
                    1 => 'Team Sports',
                    $language_id => 'Team Sports',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                24 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tennis & Racquet Sports',
                    $language_id => 'Tennis & Racquet Sports',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                25 => 
                array (
                  'name' => 
                  array (
                    1 => 'Yoga',
                    $language_id => 'Yoga',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
                1 => 'Beauty & health',
                $language_id => 'Beauty & health',
              ),
              'limit' => '6',
              'array' => 
              array (
                26 => 
                array (
                  'name' => 
                  array (
                    1 => 'Bath & Body Care',
                    $language_id => 'Bath & Body Care',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                27 => 
                array (
                  'name' => 
                  array (
                    1 => 'Fragrance',
                    $language_id => 'Fragrance',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                28 => 
                array (
                  'name' => 
                  array (
                    1 => 'Hair Care',
                    $language_id => 'Hair Care',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                29 => 
                array (
                  'name' => 
                  array (
                    1 => 'Makeup',
                    $language_id => 'Makeup',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                30 => 
                array (
                  'name' => 
                  array (
                    1 => 'Skin Care',
                    $language_id => 'Skin Care',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                31 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tools & Accessories',
                    $language_id => 'Tools & Accessories',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '1',
                ),
                33 => 
                array (
                  'name' => 
                  array (
                    1 => 'Electronics & GPS',
                    $language_id => 'Electronics & GPS',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '2',
                ),
                34 => 
                array (
                  'name' => 
                  array (
                    1 => 'Motorcycle',
                    $language_id => 'Motorcycle',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '3',
                ),
                35 => 
                array (
                  'name' => 
                  array (
                    1 => 'Parts',
                    $language_id => 'Parts',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '4',
                ),
                36 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tires & Wheels',
                    $language_id => 'Tires & Wheels',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
                  'sort' => '5',
                ),
                37 => 
                array (
                  'name' => 
                  array (
                    1 => 'Tools',
                    $language_id => 'Tools',
                  ),
                  'url' => 'index.php?route=product/category&path=20',
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
              1 => '<div class="footer-about-us market-about-us">
     <img src="image/catalog/toys3/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>',
              $language_id => '<div class="footer-about-us market-about-us">
     <img src="image/catalog/toys3/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>',
            ),
          ),
          2 => 
          array (
            'status' => '1',
            'sort' => '2',
            'type' => 'html',
            'html' => 
            array (
              1 => '<a href="#" style="display: block;margin-top: 50px" class="responsive-margin-top-30"><img src="image/catalog/toys3/banner-08.jpg" alt="Banner"></a>',
              $language_id => '<a href="#" style="display: block;margin-top: 50px" class="responsive-margin-top-30"><img src="image/catalog/toys3/banner-08.jpg" alt="Banner"></a>',
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
    'custom_class' => 'responsive-margin-top-45',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '1',
    'background_color' => '#116ccc',
    'background_image_type' => '1',
    'background_image' => 'catalog/toys3/bg-parallax.jpg',
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
              1 => '<div class="toys3-parallax">
     <div class="first-heading">INSPIRATION<br>AREA</div>
     <div class="second-heading">Need some inspiration<br>for your children room?</div>
     <a href="#" class="button btn-default">Read more</a>
</div>',
              $language_id => '<div class="toys3-parallax">
     <div class="first-heading">INSPIRATION<br>AREA</div>
     <div class="second-heading">Need some inspiration<br>for your children room?</div>
     <a href="#" class="button btn-default">Read more</a>
</div>',
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
    'sort_order' => '1',
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
            'products' => 
            array (
              'module_layout' => 'toys3_products.tpl',
              'title' => 
              array (
                1 => 'Clothes',
                $language_id => 'Clothes',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '28,42',
              'category' => '',
              'categories' => '',
              'width' => '103',
              'height' => '103',
              'limit' => '2',
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
            'products' => 
            array (
              'module_layout' => 'toys3_products.tpl',
              'title' => 
              array (
                1 => 'Electronics',
                $language_id => 'Electronics',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '43,45',
              'category' => '',
              'categories' => '',
              'width' => '103',
              'height' => '103',
              'limit' => '2',
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
            'products' => 
            array (
              'module_layout' => 'toys3_products.tpl',
              'title' => 
              array (
                1 => 'Learning Toys',
                $language_id => 'Learning Toys',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '47,28',
              'category' => '',
              'categories' => '',
              'width' => '103',
              'height' => '103',
              'limit' => '2',
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
            'products' => 
            array (
              'module_layout' => 'toys3_products.tpl',
              'title' => 
              array (
                1 => 'Stuffed Animals',
                $language_id => 'Stuffed Animals',
              ),
              'get_products_from' => 'products',
              'product' => '',
              'products' => '46,30',
              'category' => '',
              'categories' => '',
              'width' => '103',
              'height' => '103',
              'limit' => '2',
            ),
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'custom_class' => 'responsive-margin-top-45',
    'margin_top' => '60',
    'margin_right' => '0',
    'margin_bottom' => '0',
    'margin_left' => '0',
    'padding_top' => '0',
    'padding_right' => '0',
    'padding_bottom' => '0',
    'padding_left' => '0',
    'force_full_width' => '0',
    'background_color' => '#f2f2f2',
    'background_image_type' => '0',
    'background_image' => '',
    'background_image_position' => 'top left',
    'background_image_repeat' => 'no-repeat',
    'background_image_attachment' => 'scroll',
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '4',
    'disable_on_mobile' => '1',
    'column' => 
    array (
      11 => 
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
              'module_layout' => 'toys3_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe<br>our newsletter',
                $language_id => 'Subscribe<br>our newsletter',
              ),
              'text' => 
              array (
                1 => 'Sign in to our newsletter and receive coupon',
                $language_id => 'Sign in to our newsletter and receive coupon',
              ),
              'input_placeholder' => 
              array (
                1 => 'E-mail',
                $language_id => 'E-mail',
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