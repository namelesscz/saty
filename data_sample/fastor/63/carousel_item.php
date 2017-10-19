<?php 

$language_id = 2;
foreach($data['languages'] as $language) {
	if($language['language_id'] != 1) {
		$language_id = $language['language_id'];
	}
}

$output = array();
$output["carousel_item_module"] = array (
  1 => 
  array (
    'heading' => 
    array (
      1 => 'Testimonials',
      $language_id => 'Testimonials',
    ),
    'items' => 
    array (
      1 => 
      array (
        1 => 
        array (
          'html' => '<div class="testimonial clearfix">     <img src="image/catalog/fashion4/avatar.png" align="left" alt="Avatar">          <div class="author">          <span>John Doe</span>          <p>Themeforest comment</p>

     </div>

          <div class="description">          “ This template is great. If anyone is looking for a nice and quick to set up a template, should choose it. ”     </div>

</div>',
        ),
        $language_id => 
        array (
          'html' => '<div class="testimonial clearfix">     <img src="image/catalog/fashion4/avatar.png" align="left" alt="Avatar">          <div class="author">          <span>John Doe</span>          <p>Themeforest comment</p>

     </div>

          <div class="description">          “ This template is great. If anyone is looking for a nice and quick to set up a template, should choose it. ”     </div>

</div>',
        ),
      ),
      2 => 
      array (
        1 => 
        array (
          'html' => '<div class="testimonial clearfix">     <img src="image/catalog/fashion4/avatar.png" align="left" alt="Avatar">          <div class="author">          <span>Tom Novak</span>          <p>Themeforest comment</p>

     </div>

          <div class="description">          “ This template is great. If anyone is looking for a nice and quick to set up a template, should choose it. ”     </div>

</div>',
        ),
        $language_id => 
        array (
          'html' => '<div class="testimonial clearfix">     <img src="image/catalog/fashion4/avatar.png" align="left" alt="Avatar">          <div class="author">          <span>Tom Novak</span>          <p>Themeforest comment</p>

     </div>

          <div class="description">          “ This template is great. If anyone is looking for a nice and quick to set up a template, should choose it. ”     </div>

</div>',
        ),
      ),
    ),
    'layout_id' => '1',
    'position' => 'content_bottom',
    'status' => '1',
    'sort_order' => '1',
  ),
); 

$output2 = array();
$output2["carousel_item_module"] = $this->config->get('carousel_item_module');

if(!is_array($output["carousel_item_module"])) $output["carousel_item_module"] = array();
if(!is_array($output2["carousel_item_module"])) $output2["carousel_item_module"] = array();
$output3 = array();
$output3["carousel_item_module"] = array_merge($output["carousel_item_module"], $output2["carousel_item_module"]);

$this->model_setting_setting->editSetting( "carousel_item", $output3 );	

?>