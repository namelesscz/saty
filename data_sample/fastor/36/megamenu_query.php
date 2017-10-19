<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["megamenu_module"] = array (
  0 => 
  array (
    'module_id' => 0,
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '0',
    'sort_order' => 1,
    'orientation' => '0',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      1 => '',
      2 => '',
    ),
    'home_text' => 
    array (
      1 => '',
      2 => '',
    ),
    'full_width' => '1',
    'home_item' => 'disabled',
    'animation' => 'shift-up',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
  1 => 
  array (
    'module_id' => '1',
    'layout_id' => '99999',
    'position' => 'menu',
    'status' => '1',
    'display_on_mobile' => '0',
    'sort_order' => 0,
    'orientation' => '1',
    'search_bar' => 0,
    'navigation_text' => 
    array (
      1 => 'Categories',
      $language_id => 'Categories',
    ),
    'home_text' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'full_width' => '0',
    'home_item' => 'disabled',
    'animation' => 'shift-left',
    'animation_time' => 200,
    'status_cache' => 0,
    'cache_time' => 1,
  ),
);
 
$this->model_setting_setting->editSetting( "megamenu", $output );

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_modules`
");

$query = $this->db->query("
	DROP TABLE IF EXISTS `".DB_PREFIX ."mega_menu_links`
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`module_id` int(11) NOT NULL DEFAULT '0',
		`parent_id` int(11) NOT NULL,
		`rang` int(11) NOT NULL,
		`icon` varchar(255) NOT NULL DEFAULT '',
		`name` text,
		`link` text,
		`description` text,
		`label` text,
		`label_text_color` text,
		`label_background_color` text,
		`custom_class` text,
		`new_window` int(11) NOT NULL DEFAULT '0',
		`status` int(11) NOT NULL DEFAULT '0',
		`display_on_mobile` int(11) NOT NULL DEFAULT '0',
		`position` int(11) NOT NULL DEFAULT '0',
		`submenu_width` text,
		`submenu_type` int(11) NOT NULL DEFAULT '0',
		`submenu_background` text,
		`submenu_background_position` text,
		`submenu_background_repeat` text,
		`content_width` int(11) NOT NULL DEFAULT '12',
		`content_type` int(11) NOT NULL DEFAULT '0',
		`content` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_modules` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
	CREATE TABLE IF NOT EXISTS `".DB_PREFIX."mega_menu_links` (
		`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
		`name` text,
		`name_for_autocomplete` text,
		`url` text,
		`label` text,
		`label_text` text,
		`label_background` text,
		`image` text,
		PRIMARY KEY (`id`)
	) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu_modules` (`id`, `name`) VALUES
     (1, 'Vertical MegaMenu')
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (2, 0, 0, 0, '', 'a:2:{i:1;s:8:\"About us\";i:" . $language_id . ";s:8:\"About us\";}', 'index.php?route=information/information&amp;information_id=4', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '750px', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (27, 1, 15, 4, '', 'a:2:{i:1;s:8:\"Products\";i:" . $language_id . ";s:8:\"Products\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:1505:\"&lt;div class=&quot;matrialarts-products&quot;&gt;\r\n     &lt;div class=&quot;matrial-product&quot;&gt;\r\n          &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/product-01.png&quot; alt=&quot;Product&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n          &lt;div class=&quot;right&quot;&gt;\r\n               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;Super colorfull bag&lt;/a&gt;&lt;/div&gt;\r\n               &lt;div class=&quot;price&quot;&gt;$195.00&lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;matrial-product&quot;&gt;\r\n          &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/product-02.png&quot; alt=&quot;Product&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n          &lt;div class=&quot;right&quot;&gt;\r\n               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;Super colorfull bag&lt;/a&gt;&lt;/div&gt;\r\n               &lt;div class=&quot;price&quot;&gt;$195.00&lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;button-right&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;All&lt;br&gt;Gloves&lt;/a&gt;&lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:1505:\"&lt;div class=&quot;matrialarts-products&quot;&gt;\r\n     &lt;div class=&quot;matrial-product&quot;&gt;\r\n          &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/product-01.png&quot; alt=&quot;Product&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n          &lt;div class=&quot;right&quot;&gt;\r\n               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;Super colorfull bag&lt;/a&gt;&lt;/div&gt;\r\n               &lt;div class=&quot;price&quot;&gt;$195.00&lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;matrial-product&quot;&gt;\r\n          &lt;div class=&quot;image&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;&lt;img src=&quot;image/catalog/matrialarts/product-02.png&quot; alt=&quot;Product&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n          &lt;div class=&quot;right&quot;&gt;\r\n               &lt;div class=&quot;name&quot;&gt;&lt;a href=&quot;index.php?route=product/product&amp;path=20&amp;product_id=30&quot;&gt;Super colorfull bag&lt;/a&gt;&lt;/div&gt;\r\n               &lt;div class=&quot;price&quot;&gt;$195.00&lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;button-right&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;button&quot;&gt;All&lt;br&gt;Gloves&lt;/a&gt;&lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (4, 0, 0, 1, '', 'a:2:{i:1;s:6:\"Brands\";i:" . $language_id . ";s:6:\"Brands\";}', 'index.php?route=product/manufacturer', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '400px', 1, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (5, 0, 0, 2, '', 'a:2:{i:1;s:15:\"Latest products\";i:" . $language_id . ";s:15:\"Latest products\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (6, 0, 0, 3, '', 'a:2:{i:1;s:4:\"Sale\";i:" . $language_id . ";s:4:\"Sale\";}', 'index.php?route=product/special', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (7, 0, 0, 4, '', 'a:2:{i:1;s:8:\"Wishlist\";i:" . $language_id . ";s:8:\"Wishlist\";}', 'index.php?route=account/wishlist', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (25, 0, 0, 5, '', 'a:2:{i:1;s:7:\"Contact\";i:" . $language_id . ";s:7:\"Contact\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (26, 1, 15, 3, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 6, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:1835:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;hover-menu matrialarts-menu&quot; style=&quot;padding-left: 20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bag Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Training Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Pro Fight Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Amateur Gloves&lt;/a&gt;&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;hover-menu matrialarts-menu&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Youth Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Fitness Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;MMA Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Glove Accessories&lt;/a&gt;&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:1835:\"&lt;div class=&quot;row&quot;&gt;\r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;hover-menu matrialarts-menu&quot; style=&quot;padding-left: 20px&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bag Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Training Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Pro Fight Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Amateur Gloves&lt;/a&gt;&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;col-sm-6&quot;&gt;\r\n          &lt;div class=&quot;hover-menu matrialarts-menu&quot;&gt;\r\n               &lt;div class=&quot;menu&quot;&gt;\r\n                    &lt;ul&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Youth Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Fitness Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;MMA Gloves&lt;/a&gt;&lt;/li&gt;\r\n                         &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Glove Accessories&lt;/a&gt;&lt;/li&gt;\r\n                    &lt;/ul&gt;\r\n               &lt;/div&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (13, 1, 0, 0, '', 'a:2:{i:1;s:8:\"Uniforms\";i:" . $language_id . ";s:8:\"Uniforms\";}', 'index.php?route=product/category&amp;path=25', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"NEW\";i:" . $language_id . ";s:3:\"NEW\";}', '#ffffff', '#ba1010', 0, 0, 0, 0, '190px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (14, 1, 0, 1, '', 'a:2:{i:1;s:10:\"Fight Wear\";i:" . $language_id . ";s:10:\"Fight Wear\";}', 'index.php?route=product/category&amp;path=18', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '190px', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (15, 1, 0, 2, '', 'a:2:{i:1;s:6:\"Gloves\";i:" . $language_id . ";s:6:\"Gloves\";}', 'index.php?route=product/category&amp;path=25', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"HOT\";i:" . $language_id . ";s:3:\"HOT\";}', '#ffffff', '#252525', 0, 0, 0, 0, '795px', 0, 'catalog/matrialarts/bg-gloves.png', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (16, 1, 0, 5, '', 'a:2:{i:1;s:8:\"Footwear\";i:" . $language_id . ";s:8:\"Footwear\";}', 'index.php?route=product/category&amp;path=25', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (17, 1, 0, 6, '', 'a:2:{i:1;s:18:\"Sparring Equipment\";i:" . $language_id . ";s:18:\"Sparring Equipment\";}', 'index.php?route=account/wishlist', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (18, 1, 0, 7, '', 'a:2:{i:1;s:20:\"Protective Equipment\";i:" . $language_id . ";s:20:\"Protective Equipment\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (23, 1, 0, 8, '', 'a:2:{i:1;s:18:\"Training Equipment\";i:" . $language_id . ";s:18:\"Training Equipment\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (24, 1, 0, 9, '', 'a:2:{i:1;s:10:\"Punch Bags\";i:" . $language_id . ";s:10:\"Punch Bags\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>