<div class="box box-no-advanced">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="strip-line"></div>
  <div class="box-content">
    <ul class="box-filter">
			<?php if ($category_id != 196 ) { ?>
			<li><span id="filter-group0"><?php echo $filter_size_label; ?></span>
				<ul>
				<?php foreach ($filter_sizes as $key => $filter) { ?>
					<li><input type="checkbox" id="id_filter_size_<?php echo $key;?>" value="<?php echo $filter['ids'];?>" <?php $a = explode(',',$filter['ids']); if ( in_array($a[0],$filter_size )){ echo 'checked="checked"';} ?> /><label for="id_filter_avalibity_<?php echo $key;?>"><?php echo $filter['name'];?></label></li>
				<?php }?>
				</ul>
			</li>
			<li><span id="filter-group1"><?php echo $filter_availability_label; ?></span>
				<ul>
				<?php foreach ($filter_availabilities as $key => $filter) { ?>
					<li><input type="checkbox" id="id_filter_availability_<?php echo $key;?>" value="<?php echo $filter['ids'];?>" <?php $a = explode(',',$filter['ids']); if ( in_array($a[0],$filter_availability )){ echo 'checked="checked"';} ?> /><label for="id_filter_availability_<?php echo $key;?>"><?php echo $filter['name'];?></label></li>
				<?php }?>
				</ul>
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
	filter_avail = [];
	filter_size = [];
	$('.box-filter input[type=\'checkbox\']:checked').each(function(element) {
		if (this.id.indexOf('id_filter_size_') !== -1) {
			filter_size.push(this.value);
		} else if (this.id.indexOf('id_filter_availability_') !== -1) {
			filter_avail.push(this.value);
		} else {
			filter.push(this.value);
		}
	});

	location = '<?php echo $action; ?>'+(filter.length? '&filter=' + filter.join(',') : '')+(filter_size.length ? '&filter_size='+filter_size.join(',') : '')+(filter_avail.length ? '&filter_availability='+filter_avail.join(',') : '');
});
//--></script> 
