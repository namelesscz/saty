<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["custom_module_module"] = array (
  1 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-8"><a href="#"><img src="image/catalog/toys3/banner-01.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-02.jpg" alt="Banner"></a></div>
</div>

<div class="row banners banners-with-padding-30">
     <div class="col-sm-5"><a href="#"><img src="image/catalog/toys3/banner-03.jpg" alt="Banner"></a></div>
     <div class="col-sm-7"><a href="#"><img src="image/catalog/toys3/banner-04.jpg" alt="Banner"></a></div>
</div>',
      $language_id => '<div class="row banners banners-with-padding-30">
     <div class="col-sm-8"><a href="#"><img src="image/catalog/toys3/banner-01.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-02.jpg" alt="Banner"></a></div>
</div>

<div class="row banners banners-with-padding-30">
     <div class="col-sm-5"><a href="#"><img src="image/catalog/toys3/banner-03.jpg" alt="Banner"></a></div>
     <div class="col-sm-7"><a href="#"><img src="image/catalog/toys3/banner-04.jpg" alt="Banner"></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '1',
  ),
  2 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="container hidden-xs hidden-sm"><div class="toys3-categories clearfix">
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/action-figures.png) top right no-repeat">Action<br>Figures</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/clothes.png) top left no-repeat">Clothes</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/dolls.png) top left no-repeat">Dolls</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/electronics.png) top left no-repeat">Electronics</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/games-and-puzzles.png) top left no-repeat">Games<br>& Puzzles</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/learning-toys.png) top left no-repeat">Learning<br>Toys</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/stuffed-animals.png) top left no-repeat">Stuffed<br>animals</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/video-games.png) top right no-repeat">Video<br>Games</a></div>
</div></div>',
      $language_id => '<div class="container hidden-xs hidden-sm"><div class="toys3-categories clearfix">
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/action-figures.png) top right no-repeat">Action<br>Figures</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/clothes.png) top left no-repeat">Clothes</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/dolls.png) top left no-repeat">Dolls</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/electronics.png) top left no-repeat">Electronics</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/games-and-puzzles.png) top left no-repeat">Games<br>& Puzzles</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/learning-toys.png) top left no-repeat">Learning<br>Toys</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/stuffed-animals.png) top left no-repeat">Stuffed<br>animals</a></div>
     <div><a href="index.php?route=product/category&amp;path=20" style="background: url(image/catalog/toys3/video-games.png) top right no-repeat">Video<br>Games</a></div>
</div></div>',
    ),
    'layout_id' => '99999',
    'position' => 'slideshow',
    'status' => '1',
    'sort_order' => '0',
  ),
  3 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-05.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-06.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-07.jpg" alt="Banner"></a></div>
</div>',
      $language_id => '<div class="row banners">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-05.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-06.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-07.jpg" alt="Banner"></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'preface_fullwidth',
    'status' => '1',
    'sort_order' => '4',
  ),
  4 => 
  array (
    'type' => '2',
    'block_heading' => 
    array (
      1 => '',
      $language_id => '',
    ),
    'block_content' => 
    array (
      1 => '<p><br></p>',
      $language_id => '<p><br></p>',
    ),
    'html' => 
    array (
      1 => '<div class="row banners banners-with-padding-30" style="margin-bottom: 10px">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-05.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-06.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-07.jpg" alt="Banner"></a></div>
</div>',
      $language_id => '<div class="row banners banners-with-padding-30" style="margin-bottom: 10px">
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-05.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-06.jpg" alt="Banner"></a></div>
     <div class="col-sm-4"><a href="#"><img src="image/catalog/toys3/banner-07.jpg" alt="Banner"></a></div>
</div>',
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '10',
  ),
); 

$output2 = array();
$output2["custom_module_module"] = $this->config->get('custom_module_module');

if(!is_array($output["custom_module_module"])) $output["custom_module_module"] = array();
if(!is_array($output2["custom_module_module"])) $output2["custom_module_module"] = array();
$output3 = array();
$output3["custom_module_module"] = array_merge($output["custom_module_module"], $output2["custom_module_module"]);

$this->model_setting_setting->editSetting( "custom_module", $output3 );	

?>