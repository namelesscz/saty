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
    'display_on_mobile' => '1',
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
     (1, 0, 0, 0, '', 'a:2:{i:1;s:3:\"Men\";i:" . $language_id . ";s:3:\"Men\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"NEW\";i:" . $language_id . ";s:3:\"NEW\";}', '#000', '#acdd13', 0, 0, 0, 0, '190px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (2, 0, 0, 2, '', 'a:2:{i:1;s:5:\"Women\";i:" . $language_id . ";s:5:\"Women\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '210px', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (3, 0, 0, 4, '', 'a:2:{i:1;s:11:\"Accessories\";i:" . $language_id . ";s:11:\"Accessories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:3:\"HOT\";i:" . $language_id . ";s:3:\"HOT\";}', '#000', '#ff9209', 0, 0, 0, 0, '190px', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (4, 0, 0, 6, '', 'a:2:{i:1;s:8:\"Lookbook\";i:" . $language_id . ";s:8:\"Lookbook\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '400px', 1, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (5, 0, 0, 7, '', 'a:2:{i:1;s:8:\"Wishlist\";i:" . $language_id . ";s:8:\"Wishlist\";}', 'index.php?route=account/wishlist', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (6, 0, 0, 8, '', 'a:2:{i:1;s:7:\"Contact\";i:" . $language_id . ";s:7:\"Contact\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (7, 0, 0, 9, '', 'a:2:{i:1;s:4:\"Blog\";i:" . $language_id . ";s:4:\"Blog\";}', 'index.php?route=blog/blog', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 1, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (8, 0, 1, 1, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:7:{i:0;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:1;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:2;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}i:3;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}i:4;a:2:{s:4:\"name\";s:13:\"Phones & PDAs\";s:2:\"id\";i:24;}i:5;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:6;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (33, 1, 26, 8, '', 'a:2:{i:1;s:6:\"Banner\";i:" . $language_id . ";s:6:\"Banner\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 5, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-03.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (9, 0, 2, 3, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:6:{i:0;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:1;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:2;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:3;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:4;a:2:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;}i:5;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (23, 0, 3, 5, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:6:{i:0;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:1;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:2;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:3;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}i:4;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:5;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (32, 1, 26, 7, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 7, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:2:{i:0;a:3:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;s:8:\"children\";a:15:{i:0;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:1;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:2;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:3;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}i:4;a:2:{s:4:\"name\";s:8:\"Desktops\";s:2:\"id\";i:20;}i:5;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}i:6;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:7;a:2:{s:4:\"name\";s:13:\"Phones & PDAs\";s:2:\"id\";i:24;}i:8;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:9;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:10;a:2:{s:4:\"name\";s:20:\"Desktops  >  Mac\";s:2:\"id\";i:27;}i:11;a:2:{s:4:\"name\";s:20:\"Laptops  >  Macs\";s:2:\"id\";i:46;}i:12;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}i:13;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}i:14;a:2:{s:4:\"name\";s:27:\"MP3 Players  >  test 11\";s:2:\"id\";i:43;}}}i:1;a:3:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;s:8:\"children\";a:9:{i:0;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}i:1;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:2;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:3;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}i:4;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 2\";s:2:\"id\";i:36;}i:5;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:6;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}i:7;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:8;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}}}}s:7:\"columns\";s:1:\"2\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (31, 1, 25, 5, '', 'a:2:{i:1;s:6:\"Banner\";i:" . $language_id . ";s:6:\"Banner\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 5, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-02.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (30, 1, 25, 4, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 7, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:2:{i:0;a:3:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;s:8:\"children\";a:15:{i:0;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:1;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:2;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:3;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:4;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}i:5;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:6;a:2:{s:4:\"name\";s:13:\"Phones & PDAs\";s:2:\"id\";i:24;}i:7;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:8;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:9;a:2:{s:4:\"name\";s:20:\"Desktops  >  Mac\";s:2:\"id\";i:27;}i:10;a:2:{s:4:\"name\";s:20:\"Laptops  >  Macs\";s:2:\"id\";i:46;}i:11;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}i:12;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}i:13;a:2:{s:4:\"name\";s:27:\"MP3 Players  >  test 12\";s:2:\"id\";i:44;}i:14;a:2:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;}}}i:1;a:3:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;s:8:\"children\";a:9:{i:0;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:1;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:2;a:2:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;}i:3;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}i:4;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:5;a:2:{s:4:\"name\";s:20:\"Laptops  >  Macs\";s:2:\"id\";i:46;}i:6;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:7;a:2:{s:4:\"name\";s:13:\"Phones & PDAs\";s:2:\"id\";i:24;}i:8;a:2:{s:4:\"name\";s:42:\"Components  >  Monitors  >  test 1\";s:2:\"id\";i:35;}}}}s:7:\"columns\";s:1:\"2\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (24, 1, 0, 0, '', 'a:2:{i:1;s:9:\"X-Console\";i:" . $language_id . ";s:9:\"X-Console\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '300%', 0, 'catalog/games/bg-megamenu-01.png', 'bottom right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (25, 1, 0, 3, '', 'a:2:{i:1;s:9:\"Psplaying\";i:" . $language_id . ";s:9:\"Psplaying\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '300%', 0, 'catalog/games/bg-megamenu-02.png', 'bottom right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (26, 1, 0, 6, '', 'a:2:{i:1;s:2:\"Pc\";i:" . $language_id . ";s:2:\"Pc\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '300%', 0, 'catalog/games/bg-megamenu-03.png', 'bottom right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (27, 1, 0, 9, '', 'a:2:{i:1;s:5:\"Other\";i:" . $language_id . ";s:5:\"Other\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (28, 1, 24, 1, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 7, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:2:{i:0;a:3:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;s:8:\"children\";a:15:{i:0;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:1;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:2;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:3;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:4;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:5;a:2:{s:4:\"name\";s:20:\"Desktops  >  Mac\";s:2:\"id\";i:27;}i:6;a:2:{s:4:\"name\";s:20:\"Laptops  >  Macs\";s:2:\"id\";i:46;}i:7;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}i:8;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}i:9;a:2:{s:4:\"name\";s:19:\"Desktops  >  PC\";s:2:\"id\";i:26;}i:10;a:2:{s:4:\"name\";s:13:\"Phones & PDAs\";s:2:\"id\";i:24;}i:11;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:12;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:13;a:2:{s:4:\"name\";s:27:\"MP3 Players  >  test 11\";s:2:\"id\";i:43;}i:14;a:2:{s:4:\"name\";s:27:\"MP3 Players  >  test 12\";s:2:\"id\";i:44;}}}i:1;a:3:{s:4:\"name\";s:27:\"MP3 Players  >  test 15\";s:2:\"id\";i:47;s:8:\"children\";a:9:{i:0;a:2:{s:4:\"name\";s:27:\"Components  >  Scanners\";s:2:\"id\";i:31;}i:1;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}i:2;a:2:{s:4:\"name\";s:8:\"Desktops\";s:2:\"id\";i:20;}i:3;a:2:{s:4:\"name\";s:38:\"Components  >  Mice and Trackballs\";s:2:\"id\";i:29;}i:4;a:2:{s:4:\"name\";s:20:\"Desktops  >  Mac\";s:2:\"id\";i:27;}i:5;a:2:{s:4:\"name\";s:8:\"Desktops\";s:2:\"id\";i:20;}i:6;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:7;a:2:{s:4:\"name\";s:10:\"Components\";s:2:\"id\";i:25;}i:8;a:2:{s:4:\"name\";s:27:\"Components  >  Printers\";s:2:\"id\";i:30;}}}}s:7:\"columns\";s:1:\"2\";s:7:\"submenu\";s:1:\"2\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (29, 1, 24, 2, '', 'a:2:{i:1;s:6:\"Banner\";i:" . $language_id . ";s:6:\"Banner\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 5, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:214:\"&lt;div style=&quot;text-align: right;padding-top: 10px&quot;&gt;\r\n  &lt;a href=&quot;#&quot;&gt;&lt;img src=&quot;image/catalog/games/megamenu-banner-01.png&quot; alt=&quot;Banner&quot;&gt;&lt;/a&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>