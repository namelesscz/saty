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
     INSERT INTO `".DB_PREFIX."mega_menu_links` (`id`, `name`, `name_for_autocomplete`, `url`, `label`, `label_text`, `label_background`, `image`) VALUES
     (1, 'a:2:{i:1;s:8:\"Clippers\";i:" . $language_id . ";s:8:\"Clippers\";}', 'Clippers', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (2, 'a:2:{i:1;s:18:\"Andis Professional\";i:" . $language_id . ";s:18:\"Andis Professional\";}', 'Andis Professional', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (3, 'a:2:{i:1;s:18:\"Oster Professional\";i:" . $language_id . ";s:18:\"Oster Professional\";}', 'Oster Professional', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (4, 'a:2:{i:1;s:10:\"Wahl Lorem\";i:" . $language_id . ";s:10:\"Wahl Lorem\";}', 'Wahl Lorem', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (5, 'a:2:{i:1;s:5:\"Parts\";i:" . $language_id . ";s:5:\"Parts\";}', 'Parts', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (6, 'a:2:{i:1;s:16:\"Barber Equipment\";i:" . $language_id . ";s:16:\"Barber Equipment\";}', 'Barber Equipment', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (7, 'a:2:{i:1;s:6:\"Chairs\";i:" . $language_id . ";s:6:\"Chairs\";}', 'Chairs', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (8, 'a:2:{i:1;s:17:\"Jackets and Capes\";i:" . $language_id . ";s:17:\"Jackets and Capes\";}', 'Jackets and Capes', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (9, 'a:2:{i:1;s:5:\"Poles\";i:" . $language_id . ";s:5:\"Poles\";}', 'Poles', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (10, 'a:2:{i:1;s:20:\"Blades &amp; Styptic\";i:" . $language_id . ";s:20:\"Blades &amp; Styptic\";}', 'Blades &amp; Styptic', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (11, 'a:2:{i:1;s:23:\"Hair Dryers and Mirrors\";i:" . $language_id . ";s:23:\"Hair Dryers and Mirrors\";}', 'Hair Dryers and Mirrors', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (12, 'a:2:{i:1;s:27:\"Shop Equipment and Supplies\";i:" . $language_id . ";s:27:\"Shop Equipment and Supplies\";}', 'Shop Equipment and Supplies', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (13, 'a:2:{i:1;s:21:\"Sterilizing Equipment\";i:" . $language_id . ";s:21:\"Sterilizing Equipment\";}', 'Sterilizing Equipment', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (14, 'a:2:{i:1;s:22:\"Towels and Neck Strips\";i:" . $language_id . ";s:22:\"Towels and Neck Strips\";}', 'Towels and Neck Strips', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (15, 'a:2:{i:1;s:16:\"Combs and Shears\";i:" . $language_id . ";s:16:\"Combs and Shears\";}', 'Combs and Shears', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (16, 'a:2:{i:1;s:11:\"Hair Shears\";i:" . $language_id . ";s:11:\"Hair Shears\";}', 'Hair Shears', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (17, 'a:2:{i:1;s:12:\"Hair Brushes\";i:" . $language_id . ";s:12:\"Hair Brushes\";}', 'Hair Brushes', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (18, 'a:2:{i:1;s:10:\"Hair Combs\";i:" . $language_id . ";s:10:\"Hair Combs\";}', 'Hair Combs', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (19, 'a:2:{i:1;s:12:\"Oster Shears\";i:" . $language_id . ";s:12:\"Oster Shears\";}', 'Oster Shears', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (20, 'a:2:{i:1;s:22:\"Razors and Accessories\";i:" . $language_id . ";s:22:\"Razors and Accessories\";}', 'Razors and Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (21, 'a:2:{i:1;s:14:\"Shave Products\";i:" . $language_id . ";s:14:\"Shave Products\";}', 'Shave Products', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (22, 'a:2:{i:1;s:18:\"Hair and Skin Care\";i:" . $language_id . ";s:18:\"Hair and Skin Care\";}', 'Hair and Skin Care', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (23, 'a:2:{i:1;s:8:\"Fantasia\";i:" . $language_id . ";s:8:\"Fantasia\";}', 'Fantasia', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (24, 'a:2:{i:1;s:18:\"Hairpiece Products\";i:" . $language_id . ";s:18:\"Hairpiece Products\";}', 'Hairpiece Products', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (25, 'a:2:{i:1;s:11:\"Lucky Tiger\";i:" . $language_id . ";s:11:\"Lucky Tiger\";}', 'Lucky Tiger', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (26, 'a:2:{i:1;s:7:\"New Era\";i:" . $language_id . ";s:7:\"New Era\";}', 'New Era', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (27, 'a:2:{i:1;s:14:\"Pinaud-Clubman\";i:" . $language_id . ";s:14:\"Pinaud-Clubman\";}', 'Pinaud-Clubman', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (28, 'a:2:{i:1;s:6:\"Sorbie\";i:" . $language_id . ";s:6:\"Sorbie\";}', 'Sorbie', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (29, 'a:2:{i:1;s:7:\"Stephan\";i:" . $language_id . ";s:7:\"Stephan\";}', 'Stephan', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '')
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (9, 0, 0, 0, '', 'a:2:{i:1;s:10:\"Categories\";i:" . $language_id . ";s:10:\"Categories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, 'catalog/barber/bg-megamenu.png', 'bottom right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (10, 0, 0, 3, '', 'a:2:{i:1;s:15:\"Latest products\";i:" . $language_id . ";s:15:\"Latest products\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (17, 0, 9, 2, '', 'a:2:{i:1;s:7:\"Banners\";i:" . $language_id . ";s:7:\"Banners\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:430:\"&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;\r\n &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/barber/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/barber/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n &lt;/div&gt;\";i:" . $language_id . ";s:430:\"&lt;div class=&quot;row banners banners-with-padding-30&quot;&gt;\r\n &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/barber/banner-07.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n &lt;div class=&quot;col-sm-6&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/barber/banner-08.png&quot; alt=&quot;Image&quot;&gt;&lt;/a&gt;&lt;/div&gt;\r\n &lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (12, 0, 0, 4, '', 'a:2:{i:1;s:4:\"Sale\";i:" . $language_id . ";s:4:\"Sale\";}', 'index.php?route=product/special', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (13, 0, 9, 1, '', 'a:2:{i:1;s:10:\"Categories\";i:" . $language_id . ";s:10:\"Categories\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 11, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:4300:\"&lt;div class=&quot;static-menu&quot;&gt;\r\n     &lt;div class=&quot;menu&quot;&gt;\r\n          &lt;ul&gt;\r\n               &lt;li&gt;\r\n                    &lt;a href=&quot;index.php?route=product/category&amp;path=25&quot; class=&quot;main-menu with-submenu&quot;&gt;Watches&lt;p style=&quot;margin: 0px;padding: 0px 0px 6px 0px;color: #c18107;font-size: 12px&quot;&gt;Discover our brands or search by price&lt;/p&gt;&lt;/a&gt;\r\n                    &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                    &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                    \r\n                    &lt;div class=&quot;row visible&quot;&gt;\r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;New Watches&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,750]&quot;&gt;Watches $750 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,500]&quot;&gt;Watches $500 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,250]&quot;&gt;Watches $250 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                         \r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Automatic&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Luxury&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Dress&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Casual&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Diving&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Chronographic&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                         \r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Baume &amp; Mercier&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Breitling&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Cartier&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Casio&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Citizen&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Gucci&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot; style=&quot;font-size: 12px;text-decoration: underline;font-weight:700&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                    &lt;/div&gt;\r\n               &lt;/li&gt;\r\n          &lt;/ul&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:4300:\"&lt;div class=&quot;static-menu&quot;&gt;\r\n     &lt;div class=&quot;menu&quot;&gt;\r\n          &lt;ul&gt;\r\n               &lt;li&gt;\r\n                    &lt;a href=&quot;index.php?route=product/category&amp;path=25&quot; class=&quot;main-menu with-submenu&quot;&gt;Watches&lt;p style=&quot;margin: 0px;padding: 0px 0px 6px 0px;color: #c18107;font-size: 12px&quot;&gt;Discover our brands or search by price&lt;/p&gt;&lt;/a&gt;\r\n                    &lt;div class=&quot;open-categories&quot;&gt;&lt;/div&gt;\r\n                    &lt;div class=&quot;close-categories&quot;&gt;&lt;/div&gt;\r\n                    \r\n                    &lt;div class=&quot;row visible&quot;&gt;\r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;New Watches&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,750]&quot;&gt;Watches $750 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,500]&quot;&gt;Watches $500 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&amp;mfp=price[0,250]&quot;&gt;Watches $250 &amp; Under&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                         \r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Automatic&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Luxury&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Dress&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Sports&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Casual&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Diving&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Chronographic&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                         \r\n                         &lt;div class=&quot;col-sm-4&quot;&gt;\r\n                              &lt;ul&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Baume &amp; Mercier&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Breitling&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Cartier&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Casio&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Citizen&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot;&gt;Gucci&lt;/a&gt;&lt;/li&gt;\r\n                                   &lt;li&gt;&lt;a href=&quot;index.php?route=product/category&amp;path=25_29&quot; style=&quot;font-size: 12px;text-decoration: underline;font-weight:700&quot;&gt;All brands&lt;/a&gt;&lt;/li&gt;\r\n                              &lt;/ul&gt;\r\n                         &lt;/div&gt;\r\n                    &lt;/div&gt;\r\n               &lt;/li&gt;\r\n          &lt;/ul&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:4:{i:0;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Barber Equipment\";s:2:\"id\";i:6;s:8:\"children\";a:8:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Chairs\";s:2:\"id\";i:7;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:17:\"Jackets and Capes\";s:2:\"id\";i:8;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Poles\";s:2:\"id\";i:9;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:16:\"Blades & Styptic\";s:2:\"id\";i:10;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:23:\"Hair Dryers and Mirrors\";s:2:\"id\";i:11;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:27:\"Shop Equipment and Supplies\";s:2:\"id\";i:12;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:21:\"Sterilizing Equipment\";s:2:\"id\";i:13;}i:7;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:22:\"Towels and Neck Strips\";s:2:\"id\";i:14;}}}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:24:\"Combs, Razors and Shears\";s:2:\"id\";i:15;s:8:\"children\";a:6:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Hair Shears\";s:2:\"id\";i:16;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Hair Brushes\";s:2:\"id\";i:17;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:10:\"Hair Combs\";s:2:\"id\";i:18;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:12:\"Oster Shears\";s:2:\"id\";i:19;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:22:\"Razors and Accessories\";s:2:\"id\";i:20;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Shave Products\";s:2:\"id\";i:21;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"Hair and Skin Care\";s:2:\"id\";i:22;s:8:\"children\";a:7:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Fantasia\";s:2:\"id\";i:23;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:18:\"Hairpiece Products\";s:2:\"id\";i:24;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Lucky Tiger\";s:2:\"id\";i:25;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"New Era\";s:2:\"id\";i:26;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:14:\"Pinaud-Clubman\";s:2:\"id\";i:27;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Sorbie\";s:2:\"id\";i:28;}i:6;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"Stephan\";s:2:\"id\";i:29;}}}i:3;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:8:\"Clippers\";s:2:\"id\";i:1;s:8:\"children\";a:4:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Andis\";s:2:\"id\";i:2;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Oster\";s:2:\"id\";i:3;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:4:\"Wahl\";s:2:\"id\";i:4;}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Parts\";s:2:\"id\";i:5;}}}}s:7:\"columns\";s:1:\"4\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>