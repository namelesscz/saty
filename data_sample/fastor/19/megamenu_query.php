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
     INSERT INTO `".DB_PREFIX."mega_menu` (`id`, `module_id`, `parent_id`, `rang`, `icon`, `name`, `link`, `description`, `label`, `label_text_color`, `label_background_color`, `new_window`, `status`, `display_on_mobile`, `position`, `submenu_width`, `submenu_type`, `submenu_background`, `submenu_background_position`, `submenu_background_repeat`, `content_width`, `content_type`, `content`) VALUES
     (1, 0, 0, 1, '', 'a:2:{i:1;s:10:\"Categories\";i:" . $language_id . ";s:10:\"Categories\";}', 'index.php?route=product/category&amp;path=20', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '200px', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (2, 0, 0, 3, '', 'a:2:{i:1;s:11:\"Collections\";i:" . $language_id . ";s:11:\"Collections\";}', 'index.php?route=product/category&amp;path=18', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (31, 0, 2, 4, '', 'a:2:{i:1;s:11:\"Collections\";i:" . $language_id . ";s:11:\"Collections\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:2548:\"&lt;div style=&quot;position: relative;margin: -30px -45px 0px -45px&quot;&gt;\r\n     &lt;div class=&quot;furniture-collections row row-no-padding&quot;&gt;\r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-01.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Natural&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-02.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bright wood&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-03.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clean white&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-04.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Rustical beige&lt;/a&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;furniture-collections row row-no-padding&quot;&gt;\r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-05.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Natural 2014&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-06.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Dark shadow&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-07.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kitchen&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Show&lt;br&gt;all collections&lt;/a&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";i:" . $language_id . ";s:2548:\"&lt;div style=&quot;position: relative;margin: -30px -45px 0px -45px&quot;&gt;\r\n     &lt;div class=&quot;furniture-collections row row-no-padding&quot;&gt;\r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-01.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Natural&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-02.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Bright wood&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-03.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Clean white&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-04.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Rustical beige&lt;/a&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n     \r\n     &lt;div class=&quot;furniture-collections row row-no-padding&quot;&gt;\r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-05.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Natural 2014&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-06.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Dark shadow&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot; style=&quot;background: url(image/catalog/furniture/collection-07.png) bottom center no-repeat&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Kitchen&lt;/a&gt;\r\n          &lt;/div&gt;\r\n          \r\n          &lt;div class=&quot;col-sm-3&quot;&gt;\r\n               &lt;a href=&quot;index.php?route=product/category&amp;path=20&quot;&gt;Show&lt;br&gt;all collections&lt;/a&gt;\r\n          &lt;/div&gt;\r\n     &lt;/div&gt;\r\n&lt;/div&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (3, 0, 0, 6, '', 'a:2:{i:1;s:7:\"Contact\";i:" . $language_id . ";s:7:\"Contact\";}', 'index.php?route=information/contact', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top right', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (4, 0, 0, 5, '', 'a:2:{i:1;s:4:\"Sale\";i:" . $language_id . ";s:4:\"Sale\";}', 'index.php?route=product/special', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";i:" . $language_id . ";s:29:\"&lt;p&gt;&lt;br&gt;&lt;/p&gt;\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (30, 0, 1, 2, '', 'a:2:{i:1;s:5:\"Links\";i:" . $language_id . ";s:5:\"Links\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 0, 0, '100%', 0, '', 'top left', 'no-repeat', 12, 2, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:5:{i:0;a:2:{s:4:\"name\";s:7:\"Cameras\";s:2:\"id\";i:33;}i:1;a:2:{s:4:\"name\";s:27:\"Components  >  Monitors\";s:2:\"id\";i:28;}i:2;a:2:{s:4:\"name\";s:8:\"Software\";s:2:\"id\";i:17;}i:3;a:2:{s:4:\"name\";s:11:\"MP3 Players\";s:2:\"id\";i:34;}i:4;a:2:{s:4:\"name\";s:23:\"Laptops  >  Windows\";s:2:\"id\";i:45;}}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}'),
     (29, 0, 0, 0, '', 'a:2:{i:1;s:30:\"&amp;nbsp;&amp;nbsp;&amp;nbsp;\";i:" . $language_id . ";s:30:\"&amp;nbsp;&amp;nbsp;&amp;nbsp;\";}', '', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', 'a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}', '', '', 0, 0, 1, 0, '100%', 0, '', 'top left', 'no-repeat', 4, 0, 'a:4:{s:4:\"html\";a:1:{s:4:\"text\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}}s:7:\"product\";a:4:{s:2:\"id\";s:0:\"\";s:4:\"name\";s:0:\"\";s:5:\"width\";s:3:\"400\";s:6:\"height\";s:3:\"400\";}s:10:\"categories\";a:7:{s:10:\"categories\";a:0:{}s:7:\"columns\";s:1:\"1\";s:7:\"submenu\";s:1:\"1\";s:14:\"image_position\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";s:15:\"submenu_columns\";s:1:\"1\";}s:8:\"products\";a:5:{s:7:\"heading\";a:2:{i:1;s:0:\"\";i:" . $language_id . ";s:0:\"\";}s:8:\"products\";a:0:{}s:7:\"columns\";s:1:\"1\";s:11:\"image_width\";s:0:\"\";s:12:\"image_height\";s:0:\"\";}}')
");

?>