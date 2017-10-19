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
    'display_on_mobile' => '1',
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
    'position' => 'slideshow',
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
     (4, 0, 0, 0, '', 'a:2:{i:1;s:6:\"Latest\";i:" . $language_id . ";s:6:\"Latest\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '400px', 1, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (5, 0, 0, 1, '', 'a:2:{i:1;s:8:\"Specials\";i:" . $language_id . ";s:8:\"Specials\";}', 'index.php?route=product/special', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (23, 0, 0, 2, '', 'a:2:{i:1;s:7:\"Contact\";i:" . $language_id . ";s:7:\"Contact\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (58, 1, 0, 0, '', 'a:2:{i:1;s:33:\"Air, Fuel, Emission &amp; Exhaust\";i:" . $language_id . ";s:33:\"Air, Fuel, Emission &amp; Exhaust\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (59, 1, 0, 1, '', 'a:2:{i:1;s:30:\"Accessories, Body &amp; Wipers\";i:" . $language_id . ";s:30:\"Accessories, Body &amp; Wipers\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (60, 1, 0, 2, '', 'a:2:{i:1;s:34:\"Batteries, Electrical &amp; Wiring\";i:" . $language_id . ";s:34:\"Batteries, Electrical &amp; Wiring\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (61, 1, 0, 3, '', 'a:2:{i:1;s:33:\"Brakes, Steering &amp; Suspension\";i:" . $language_id . ";s:33:\"Brakes, Steering &amp; Suspension\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (62, 1, 0, 4, '', 'a:2:{i:1;s:21:\"Cooling &amp; Heating\";i:" . $language_id . ";s:21:\"Cooling &amp; Heating\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (63, 1, 0, 5, '', 'a:2:{i:1;s:28:\"Electronics &amp; Navigation\";i:" . $language_id . ";s:28:\"Electronics &amp; Navigation\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (64, 1, 0, 6, '', 'a:2:{i:1;s:22:\"Engines &amp; Ignition\";i:" . $language_id . ";s:22:\"Engines &amp; Ignition\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (65, 1, 0, 7, '', 'a:2:{i:1;s:26:\"Tools, Fluids &amp; Garage\";i:" . $language_id . ";s:26:\"Tools, Fluids &amp; Garage\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (66, 1, 0, 8, '', 'a:2:{i:1;s:29:\"Transmission &amp; Drivetrain\";i:" . $language_id . ";s:29:\"Transmission &amp; Drivetrain\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>