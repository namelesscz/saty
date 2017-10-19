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
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `custom_class`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (46, 0, 0, 4, '', 'a:2:{i:1;s:8:\"Checkout\";i:" . $language_id . ";s:8:\"Checkout\";}', 'index.php?route=checkout/checkout', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (45, 0, 0, 3, '', 'a:2:{i:1;s:13:\"Shopping Cart\";i:" . $language_id . ";s:13:\"Shopping Cart\";}', 'index.php?route=checkout/cart', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (44, 0, 0, 2, '', 'a:2:{i:1;s:9:\"Wish List\";i:" . $language_id . ";s:9:\"Wish List\";}', 'index.php?route=account/login', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (43, 0, 0, 1, '', 'a:2:{i:1;s:8:\"Register\";i:" . $language_id . ";s:8:\"Register\";}', 'index.php?route=account/register', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (41, 0, 0, 5, 'catalog/computer6/icon-phone.png', 'a:2:{i:1;s:82:\"Call us: &lt;span style=&quot;color: #cb2d41&quot;&gt;+48 500-500-100&lt;/span&gt;\";i:" . $language_id . ";s:82:\"Call us: &lt;span style=&quot;color: #cb2d41&quot;&gt;+48 500-500-100&lt;/span&gt;\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 1, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (47, 1, 0, 0, 'catalog/computer6/desktops.png', 'a:2:{i:1;s:8:\"Desktops\";i:" . $language_id . ";s:8:\"Desktops\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (48, 1, 0, 1, 'catalog/computer6/laptops.png', 'a:2:{i:1;s:23:\"Laptops &amp; Notebooks\";i:" . $language_id . ";s:23:\"Laptops &amp; Notebooks\";}', 'index.php?route=product/category&amp;path=18', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (49, 1, 0, 2, 'catalog/computer6/components.png', 'a:2:{i:1;s:10:\"Components\";i:" . $language_id . ";s:10:\"Components\";}', 'index.php?route=product/category&amp;path=25', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (50, 1, 0, 3, 'catalog/computer6/tablets.png', 'a:2:{i:1;s:7:\"Tablets\";i:" . $language_id . ";s:7:\"Tablets\";}', 'index.php?route=product/category&amp;path=57', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (51, 1, 0, 4, 'catalog/computer6/software.png', 'a:2:{i:1;s:8:\"Software\";i:" . $language_id . ";s:8:\"Software\";}', 'index.php?route=product/category&amp;path=17', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (53, 1, 0, 6, 'catalog/computer6/cameras.png', 'a:2:{i:1;s:7:\"Cameras\";i:" . $language_id . ";s:7:\"Cameras\";}', 'index.php?route=product/category&amp;path=33', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', NULL, 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (52, 1, 0, 5, 'catalog/computer6/phones.png', 'a:2:{i:1;s:17:\"Phones &amp; PDAs\";i:" . $language_id . ";s:17:\"Phones &amp; PDAs\";}', 'index.php?route=product/category&amp;path=24', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (42, 0, 0, 0, '', 'a:2:{i:1;s:5:\"Login\";i:" . $language_id . ";s:5:\"Login\";}', 'index.php?route=account/login', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (54, 1, 0, 7, 'catalog/computer6/mp3.png', 'a:2:{i:1;s:11:\"MP3 Players\";i:" . $language_id . ";s:11:\"MP3 Players\";}', 'index.php?route=product/category&amp;path=34', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', NULL, 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>