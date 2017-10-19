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
  )
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
     (1, 'a:2:{i:1;s:5:\"Shirt\";i:" . $language_id . ";s:5:\"Shirt\";}', 'Shirt', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (2, 'a:2:{i:1;s:5:\"Pants\";i:" . $language_id . ";s:5:\"Pants\";}', 'Pants', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:3:\"NEW\";i:" . $language_id . ";s:3:\"NEW\";}', '#ffffff', '#bf3727', ''),
     (3, 'a:2:{i:1;s:5:\"Jeans\";i:" . $language_id . ";s:5:\"Jeans\";}', 'Jeans', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (4, 'a:2:{i:1;s:5:\"Socks\";i:" . $language_id . ";s:5:\"Socks\";}', 'Socks', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:3:\"HOT\";i:" . $language_id . ";s:3:\"HOT\";}', '#fff', '#423c36', ''),
     (5, 'a:2:{i:1;s:4:\"Hats\";i:" . $language_id . ";s:4:\"Hats\";}', 'Hats', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (6, 'a:2:{i:1;s:11:\"Accessories\";i:" . $language_id . ";s:11:\"Accessories\";}', 'Accessories', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (7, 'a:2:{i:1;s:4:\"Long\";i:" . $language_id . ";s:4:\"Long\";}', 'Long', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (8, 'a:2:{i:1;s:5:\"Short\";i:" . $language_id . ";s:5:\"Short\";}', 'Short', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (9, 'a:2:{i:1;s:6:\"Medium\";i:" . $language_id . ";s:6:\"Medium\";}', 'Medium', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (10, 'a:2:{i:1;s:3:\"New\";i:" . $language_id . ";s:3:\"New\";}', 'New', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', ''),
     (11, 'a:2:{i:1;s:7:\"Popular\";i:" . $language_id . ";s:7:\"Popular\";}', 'Popular', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', '')
");

$query = $this->db->query("
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (1, 0, 0, 0, '', 'a:2:{i:1;s:3:\"Men\";i:" . $language_id . ";s:3:\"Men\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '190px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (2, 0, 0, 2, '', 'a:2:{i:1;s:5:\"Women\";i:" . $language_id . ";s:5:\"Women\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '750px', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (3, 0, 0, 3, '', 'a:2:{i:1;s:11:\"Accessories\";i:" . $language_id . ";s:11:\"Accessories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (4, 0, 0, 4, '', 'a:2:{i:1;s:8:\"Lookbook\";i:" . $language_id . ";s:8:\"Lookbook\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '400px', 1, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (5, 0, 0, 5, '', 'a:2:{i:1;s:8:\"Wishlist\";i:" . $language_id . ";s:8:\"Wishlist\";}', 'index.php?route=account/wishlist', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (6, 0, 0, 6, '', 'a:2:{i:1;s:7:\"Contact\";i:" . $language_id . ";s:7:\"Contact\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (7, 0, 0, 7, '', 'a:2:{i:1;s:4:\"Blog\";i:" . $language_id . ";s:4:\"Blog\";}', 'index.php?route=blog/blog', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 1, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (8, 0, 1, 1, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:6:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Shirt\";s:2:\"id\";i:1;}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Pants\";s:2:\"id\";i:2;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:4:\"Long\";s:2:\"id\";i:7;}i:1;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Short\";s:2:\"id\";i:8;s:8:\"children\";a:2:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:3:\"New\";s:2:\"id\";i:10;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"Popular\";s:2:\"id\";i:11;}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Medium\";s:2:\"id\";i:9;s:8:\"children\";a:2:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:3:\"New\";s:2:\"id\";i:10;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:7:\"Popular\";s:2:\"id\";i:11;}}}}}i:2;a:4:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Jeans\";s:2:\"id\";i:3;s:8:\"children\";a:3:{i:0;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:4:\"Long\";s:2:\"id\";i:7;}i:1;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Short\";s:2:\"id\";i:8;}i:2;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:6:\"Medium\";s:2:\"id\";i:9;}}}i:3;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:5:\"Socks\";s:2:\"id\";i:4;}i:4;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:4:\"Hats\";s:2:\"id\";i:5;}i:5;a:3:{s:4:\"type\";s:4:\"link\";s:4:\"name\";s:11:\"Accessories\";s:2:\"id\";i:6;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>