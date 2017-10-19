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
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '4',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      1 => 
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
            'sort' => '1',
            'type' => 'products',
            'products' => 
            array (
              'module_layout' => 'petshop2_today_deals.tpl',
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
              'width' => '300',
              'height' => '299',
              'limit' => '1',
            ),
          ),
        ),
      ),
      2 => 
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
              'products' => '42,30,47,28,41,43,44,45',
              'category' => '',
              'categories' => '',
              'width' => '200',
              'height' => '218',
              'limit' => '8',
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
    'layout_id' => '99999',
    'position' => 'footer',
    'status' => '1',
    'sort_order' => '',
    'disable_on_mobile' => '0',
    'column' => 
    array (
      3 => 
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
              1 => '<div class="market-contact petshop2-contact">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-phone.png" alt="Phone">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #000">500-100-100</p>
          </div>
          
          <div class="col-sm-5">
               <img src="image/catalog/market/icon-mail.png" alt="Mail">
               <div class="heading">Orders<br>support</div>
               <p style="color: #a3d032">orders@example.com</p>
          </div>
          
          <div class="col-sm-3">
               <img src="image/catalog/market/icon-skype.png" alt="Skype">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #fe9700">example</p>
          </div>
     </div>
</div>

<a href="#"><img src="image/catalog/petshop2/banner-07.png" alt="Banner"></a>',
              $language_id => '<div class="market-contact petshop2-contact">
     <div class="row">
          <div class="col-sm-4">
               <img src="image/catalog/market/icon-phone.png" alt="Phone">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #000">500-100-100</p>
          </div>
          
          <div class="col-sm-5">
               <img src="image/catalog/market/icon-mail.png" alt="Mail">
               <div class="heading">Orders<br>support</div>
               <p style="color: #a3d032">orders@example.com</p>
          </div>
          
          <div class="col-sm-3">
               <img src="image/catalog/market/icon-skype.png" alt="Skype">
               <div class="heading">Mon - Fri<br>8:00 - 18:00</div>
               <p style="color: #fe9700">example</p>
          </div>
     </div>
</div>

<a href="#"><img src="image/catalog/petshop2/banner-07.png" alt="Banner"></a>',
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
        'sort' => '2',
        'module' => 
        array (
          1 => 
          array (
            'status' => '1',
            'sort' => '1',
            'type' => 'html',
            'html' => 
            array (
              1 => '<div class="footer-about-us market-about-us" style="padding-top: 14px;padding-bottom: 10px">
     <img src="image/catalog/petshop2/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
</div>',
              $language_id => '<div class="footer-about-us market-about-us" style="padding-top: 14px;padding-bottom: 10px">
     <img src="image/catalog/petshop2/logo-footer.png" alt="Fastor">
     <p>PO Box 16122 Collins Street <br>Victoria 8007 Australia</p>
     <p>(+800) 1234 5678 90<br>info@company.com</p>
</div>',
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
                1 => 'Promotions',
                $language_id => 'Promotions',
              ),
              'limit' => '10',
              'array' => 
              array (
                1 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newest toys',
                    $language_id => 'Newest toys',
                  ),
                  'url' => '#',
                  'sort' => '1',
                ),
                2 => 
                array (
                  'name' => 
                  array (
                    1 => 'All food on sale up to 50%',
                    $language_id => 'All food on sale up to 50%',
                  ),
                  'url' => '#',
                  'sort' => '2',
                ),
                3 => 
                array (
                  'name' => 
                  array (
                    1 => 'First litter box for your cat',
                    $language_id => 'First litter box for your cat',
                  ),
                  'url' => '#',
                  'sort' => '3',
                ),
                4 => 
                array (
                  'name' => 
                  array (
                    1 => 'Find best food for your pet',
                    $language_id => 'Find best food for your pet',
                  ),
                  'url' => '#',
                  'sort' => '4',
                ),
                5 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newest clothes collection',
                    $language_id => 'Newest clothes collection',
                  ),
                  'url' => '#',
                  'sort' => '5',
                ),
              ),
            ),
          ),
        ),
      ),
      6 => 
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
                1 => 'Information',
                $language_id => 'Information',
              ),
              'limit' => '10',
              'array' => 
              array (
                6 => 
                array (
                  'name' => 
                  array (
                    1 => 'About Us',
                    $language_id => 'About Us',
                  ),
                  'url' => 'index.php?route=information/information&information_id=4',
                  'sort' => '1',
                ),
                7 => 
                array (
                  'name' => 
                  array (
                    1 => 'Delivery Information',
                    $language_id => 'Delivery Information',
                  ),
                  'url' => 'index.php?route=information/information&information_id=6',
                  'sort' => '2',
                ),
                8 => 
                array (
                  'name' => 
                  array (
                    1 => 'Privacy Policy',
                    $language_id => 'Privacy Policy',
                  ),
                  'url' => 'index.php?route=information/information&information_id=3',
                  'sort' => '3',
                ),
                9 => 
                array (
                  'name' => 
                  array (
                    1 => 'Terms & Conditions',
                    $language_id => 'Terms & Conditions',
                  ),
                  'url' => 'index.php?route=information/information&information_id=5',
                  'sort' => '4',
                ),
                10 => 
                array (
                  'name' => 
                  array (
                    1 => 'My Account',
                    $language_id => 'My Account',
                  ),
                  'url' => 'index.php?route=account/account',
                  'sort' => '5',
                ),
                11 => 
                array (
                  'name' => 
                  array (
                    1 => 'Order History',
                    $language_id => 'Order History',
                  ),
                  'url' => 'index.php?route=account/order',
                  'sort' => '6',
                ),
              ),
            ),
          ),
        ),
      ),
      7 => 
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
                1 => 'Customer Service',
                $language_id => 'Customer Service',
              ),
              'limit' => '5',
              'array' => 
              array (
                12 => 
                array (
                  'name' => 
                  array (
                    1 => 'Contact Us',
                    $language_id => 'Contact Us',
                  ),
                  'url' => 'index.php?route=information/contact',
                  'sort' => '1',
                ),
                13 => 
                array (
                  'name' => 
                  array (
                    1 => 'Returns',
                    $language_id => 'Returns',
                  ),
                  'url' => 'index.php?route=account/return/add',
                  'sort' => '2',
                ),
                14 => 
                array (
                  'name' => 
                  array (
                    1 => 'Site Map',
                    $language_id => 'Site Map',
                  ),
                  'url' => 'index.php?route=information/sitemap',
                  'sort' => '3',
                ),
                15 => 
                array (
                  'name' => 
                  array (
                    1 => 'Wish List',
                    $language_id => 'Wish List',
                  ),
                  'url' => 'index.php?route=account/wishlist',
                  'sort' => '4',
                ),
                16 => 
                array (
                  'name' => 
                  array (
                    1 => 'Newsletter',
                    $language_id => 'Newsletter',
                  ),
                  'url' => 'index.php?route=account/newsletter',
                  'sort' => '5',
                ),
              ),
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
        'sort' => '6',
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
); 

$output2 = array();
$output2["advanced_grid_module"] = $this->config->get('advanced_grid_module');

if(!is_array($output["advanced_grid_module"])) $output["advanced_grid_module"] = array();
if(!is_array($output2["advanced_grid_module"])) $output2["advanced_grid_module"] = array();
$output3 = array();
$output3["advanced_grid_module"] = array_merge($output["advanced_grid_module"], $output2["advanced_grid_module"]);

$this->model_setting_setting->editSetting( "advanced_grid", $output3 );		

?>