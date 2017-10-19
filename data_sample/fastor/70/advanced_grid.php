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
     <img src="image/catalog/fashion8/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
     <ul class="social-icons">
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-behance"></i></a></li>
     </ul>
</div>',
              $language_id => '<div class="footer-about-us market-about-us">
     <img src="image/catalog/fashion8/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
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
              1 => '<a href="#" style="display: block;margin-top: 50px" class="responsive-margin-top-30"><img src="image/catalog/market/banner-02.png" alt="Banner"></a>',
              $language_id => '<a href="#" style="display: block;margin-top: 50px" class="responsive-margin-top-30"><img src="image/catalog/market/banner-02.png" alt="Banner"></a>',
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
              1 => '<div class="market-contact">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-phone.png" alt="Phone">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #bf9e50">500-100-100</p>
          </div>
          
          <div class="col-sm-5">
               <img src="image/catalog/market/icon-mail.png" alt="Mail">
               <div class="heading">Orders<br>support</div>
               <p style="color: #bf9e50">orders@example.com</p>
          </div>
          
          <div class="col-sm-3">
               <img src="image/catalog/market/icon-skype.png" alt="Skype">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #bf9e50">example</p>
          </div>
     </div>
</div>',
              $language_id => '<div class="market-contact">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-phone.png" alt="Phone">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #bf9e50">500-100-100</p>
          </div>
          
          <div class="col-sm-5">
               <img src="image/catalog/market/icon-mail.png" alt="Mail">
               <div class="heading">Orders<br>support</div>
               <p style="color: #bf9e50">orders@example.com</p>
          </div>
          
          <div class="col-sm-3">
               <img src="image/catalog/market/icon-skype.png" alt="Skype">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #bf9e50">example</p>
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
              1 => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Women</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Camera, Photo & Video</a></li>
                    <li><a href="index.php?route=product/category&path=20">Cell Phones & Accessories</a></li>
                    <li><a href="index.php?route=product/category&path=20">Laptops & Notebooks</a></li>
                    <li><a href="index.php?route=product/category&path=20">Musical Instruments</a></li>
                    <li><a href="index.php?route=product/category&path=20">Tablets</a></li>
                    <li><a href="index.php?route=product/category&path=20">TV & Video</a></li>
               </ul>
          </li>
     </ul>
</div>',
              $language_id => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Women</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Camera, Photo & Video</a></li>
                    <li><a href="index.php?route=product/category&path=20">Cell Phones & Accessories</a></li>
                    <li><a href="index.php?route=product/category&path=20">Laptops & Notebooks</a></li>
                    <li><a href="index.php?route=product/category&path=20">Musical Instruments</a></li>
                    <li><a href="index.php?route=product/category&path=20">Tablets</a></li>
                    <li><a href="index.php?route=product/category&path=20">TV & Video</a></li>
               </ul>
          </li>
     </ul>
</div>',
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
              1 => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-02.jpg" alt="Banner" style="display: block"></a>',
              $language_id => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-02.jpg" alt="Banner" style="display: block"></a>',
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
              1 => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Men</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Accessories</a></li>
                    <li><a href="index.php?route=product/category&path=20">Arts</a></li>
                    <li><a href="index.php?route=product/category&path=20">Bedding & Bath</a></li>
                    <li><a href="index.php?route=product/category&path=20">Furniture</a></li>
                    <li><a href="index.php?route=product/category&path=20">Kitchen & Dining</a></li>
                    <li><a href="index.php?route=product/category&path=20">Living room</a></li>
               </ul>
          </li>
     </ul>
</div>',
              $language_id => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Men</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Accessories</a></li>
                    <li><a href="index.php?route=product/category&path=20">Arts</a></li>
                    <li><a href="index.php?route=product/category&path=20">Bedding & Bath</a></li>
                    <li><a href="index.php?route=product/category&path=20">Furniture</a></li>
                    <li><a href="index.php?route=product/category&path=20">Kitchen & Dining</a></li>
                    <li><a href="index.php?route=product/category&path=20">Living room</a></li>
               </ul>
          </li>
     </ul>
</div>',
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
              1 => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-03.jpg" alt="Banner" style="display: block"></a>',
              $language_id => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-03.jpg" alt="Banner" style="display: block"></a>',
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
              1 => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Accessories</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Bath & Body Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Fragrance</a></li>
                    <li><a href="index.php?route=product/category&path=20">Hair Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Makeup</a></li>
                    <li><a href="index.php?route=product/category&path=20">Skin Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Tools & Accessories</a></li>
               </ul>
          </li>
     </ul>
</div>',
              $language_id => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Accessories</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Bath & Body Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Fragrance</a></li>
                    <li><a href="index.php?route=product/category&path=20">Hair Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Makeup</a></li>
                    <li><a href="index.php?route=product/category&path=20">Skin Care</a></li>
                    <li><a href="index.php?route=product/category&path=20">Tools & Accessories</a></li>
               </ul>
          </li>
     </ul>
</div>',
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
              1 => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-04.jpg" alt="Banner" style="display: block"></a>',
              $language_id => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-04.jpg" alt="Banner" style="display: block"></a>',
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
              1 => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Shoes</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Baby</a></li>
                    <li><a href="index.php?route=product/category&path=20">Boys</a></li>
                    <li><a href="index.php?route=product/category&path=20">Girls</a></li>
                    <li><a href="index.php?route=product/category&path=20">Men</a></li>
                    <li><a href="index.php?route=product/category&path=20">Uniforms, Work & Safety</a></li>
                    <li><a href="index.php?route=product/category&path=20">Shoes</a></li>
                    <li><a href="index.php?route=product/category&path=20">Women</a></li>
               </ul>
          </li>
     </ul>
</div>',
              $language_id => '<div class="market-products-categories">
     <ul>
          <li><a href="index.php?route=product/category&path=20">Shoes</a>
               <ul>
                    <li><a href="index.php?route=product/category&path=20">Baby</a></li>
                    <li><a href="index.php?route=product/category&path=20">Boys</a></li>
                    <li><a href="index.php?route=product/category&path=20">Girls</a></li>
                    <li><a href="index.php?route=product/category&path=20">Men</a></li>
                    <li><a href="index.php?route=product/category&path=20">Uniforms, Work & Safety</a></li>
                    <li><a href="index.php?route=product/category&path=20">Shoes</a></li>
                    <li><a href="index.php?route=product/category&path=20">Women</a></li>
               </ul>
          </li>
     </ul>
</div>',
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
              1 => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-05.jpg" alt="Banner" style="display: block"></a>',
              $language_id => '<a href="#" style="display: block;position: relative;margin: 0px -1px -1px -1px"><img src="image/catalog/fashion8/banner-05.jpg" alt="Banner" style="display: block"></a>',
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
    'background_image' => 'catalog/fashion8/bg-newsletter.jpg',
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
              'module_layout' => 'fashion8_newsletter.tpl',
              'title' => 
              array (
                1 => 'Subscribe newsletter<br>and get discount',
                $language_id => 'Subscribe newsletter<br>and get discount',
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