<div class="box box-no-advanced">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="strip-line"></div>
  <div class="box-content">
    <ul class="box-filter">
			<?php if ($category_id != 196 ) { ?>
      <li><span id="filter-group0"><?php echo $filter_size_label; ?></span>
				<br />
				<label for="filter_breast"><?php echo $filter_breast_label; ?></label> <input type="text" id="filter_breast" name="filter_breast" value="<?php echo $filter_breast;?>" size="3"/><br />
				<label for="filter_waist"><?php echo $filter_waist_label; ?></label> <input type="text" id="filter_waist" name="filter_waist" value="<?php echo $filter_waist;?>" size="3"/><br />
				<?php if (isset($filter_size_selected)) { echo '<br />'.$filter_size_selected_label.': <strong>'.$filter_size_selected.'</strong>'; }?>
			</li>
      <?php }
			foreach ($filter_groups as $filter_group) { ?>
      <li><span id="filter-group<?php echo $filter_group['filter_group_id']; ?>"><?php echo $filter_group['name']; ?></span>
        <ul>
          <?php foreach ($filter_group['filter'] as $filter) { ?>
          <?php if (in_array($filter['filter_id'], $filter_category)) { ?>
          <li>
            <input type="checkbox" value="<?php echo $filter['filter_id']; ?>" id="filter<?php echo $filter['filter_id']; ?>" checked="checked" />
            <label for="filter<?php echo $filter['filter_id']; ?>"><?php echo $filter['name']; ?></label>
          </li>
          <?php } else { ?>
          <li>
            <input type="checkbox" value="<?php echo $filter['filter_id']; ?>" id="filter<?php echo $filter['filter_id']; ?>" />
            <label for="filter<?php echo $filter['filter_id']; ?>"><?php echo $filter['name']; ?></label>
          </li>
          <?php } ?>
          <?php } ?>
        </ul>
      </li>
      <?php } ?>
    </ul>
    <a id="button-filter" class="button"><?php echo $button_filter; ?></a>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-filter').bind('click', function() {
	filter     = [];
	$('.box-filter input[type=\'checkbox\']:checked').each(function(element) {
		filter.push(this.value);
	});
	val_waist= $('#filter_waist').val();
	val_breast= $('#filter_breast').val();
	console.log(val_waist);
	console.log(val_breast);
	location = '<?php echo $action; ?>&filter=' + filter.join(',')+(val_waist? '&fw='+val_waist :'')+(val_breast? '&fb='+val_breast : '');
});
//--></script> 
