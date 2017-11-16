<?php echo $header; ?><?php echo $column_left; ?>
<?php
function fieldSelect($key, $data, $custom_fields) {
	?>
	<select name="twisto[0][twisto_fields][<?php echo $key; ?>]" id="input-field-<?php echo $key; ?>" class="form-control">
	  <?php foreach ($custom_fields as $custom_field) { ?>
	  <option value="<?php echo $custom_field['custom_field_id']; ?>"<?php if (isset($data[$key]) && $data[$key] == $custom_field['custom_field_id']) echo ' selected="selected"'; ?>><?php echo $custom_field['name']; ?></option>
	  <?php } ?>
	</select>
	<?php
}
?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-twisto" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if (!empty($error['currency'])) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error['currency']; ?></div>
    <?php } ?>
    <?php if (!empty($error['warning'])) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error['warning']; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-twisto" class="form-horizontal">
		  <div class="col-sm-2">
		    <ul class="nav nav-pills nav-stacked" id="stores">
			  <?php foreach ($stores as $store) { ?>
			  <li><a href="#tab-store-<?php echo $store['store_id']; ?>" data-toggle="tab"><?php echo $store['name']; ?></a></li>
			  <?php } ?>
			  <li><a href="#tab-common" data-toggle="tab"><?php echo $text_common; ?></a></li>
		    </ul>
		  </div>
		  <div class="col-sm-10">
            <div class="tab-content">
			  <?php foreach ($stores as $store) { ?>
			  <?php $store_id = $store['store_id']; ?>
			  <div class="tab-pane" id="tab-store-<?php echo $store_id; ?>">
			    <?php $store_data = (isset($twisto[$store_id]) ? $twisto[$store_id] : array()); ?>
			    <?php $twisto_data = (isset($store_data['twisto']) ? $store_data['twisto'] : array()); ?>
			    <?php $error_data = (isset($error[$store_id]) ? $error[$store_id] : array()); ?>
			    <?php if ($store_id !== 0) { ?>
				<p><label><input type="checkbox" name="twisto[<?php echo $store_id; ?>][twisto][as_default]" value="1" class="as_default"<?php if (!empty($twisto_data['as_default']) || empty($twisto_data)) echo ' checked="checked"'; ?> /> <?php echo $text_as_default; ?></label></p>
				<?php } ?>
				<div class="form-group required">
				  <label class="col-sm-2 control-label" for="input-public-key-<?php echo $store_id; ?>"><?php echo $entry_public_key; ?></label>
				  <div class="col-sm-10">
				    <input type="text" name="twisto[<?php echo $store_id; ?>][twisto][public_key]" value="<?php if (isset($twisto_data['public_key'])) echo $twisto_data['public_key']; ?>" placeholder="<?php echo $entry_public_key; ?>" id="input-public-key-<?php echo $store_id; ?>"  class="form-control" />
					<?php if (!empty($error_data['public_key'])) { ?>
					<div class="text-danger"><?php echo $error_data['public_key']; ?></div>
					<?php } ?>
				  </div>
				</div>
				<div class="form-group required">
				  <label class="col-sm-2 control-label" for="input-private-key-<?php echo $store_id; ?>"><?php echo $entry_private_key; ?></label>
				  <div class="col-sm-10">
				    <input type="text" name="twisto[<?php echo $store_id; ?>][twisto][private_key]" value="<?php if (isset($twisto_data['private_key'])) echo $twisto_data['private_key']; ?>" placeholder="<?php echo $entry_private_key; ?>" id="input-private-key-<?php echo $store_id; ?>" class="form-control" />
					<?php if (!empty($error_data['private_key'])) { ?>
					<div class="text-danger"><?php echo $error_data['private_key']; ?></div>
					<?php } ?>
				  </div>
				</div>
				<div class="form-group">
                  <label class="col-sm-2 control-label" for="input-total-<?php echo $store_id; ?>"><span data-toggle="tooltip" title="<?php echo $help_total; ?>"><?php echo $entry_total; ?></span></label>
                  <div class="col-sm-10">
                    <input type="text" name="twisto[<?php echo $store_id; ?>][twisto][total]" value="<?php if (isset($twisto_data['total'])) echo $twisto_data['total']; ?>" placeholder="<?php echo $entry_total; ?>" id="input-total-<?php echo $store_id; ?>" class="form-control" />
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label" for="input-geo-zone-<?php echo $store_id; ?>"><?php echo $entry_geo_zone; ?></label>
                  <div class="col-sm-10">
                    <select name="twisto[<?php echo $store_id; ?>][twisto][geo_zone_id]" id="input-geo-zone-<?php echo $store_id; ?>" class="form-control">
                      <option value="0"><?php echo $text_all_zones; ?></option>
                      <?php foreach ($geo_zones as $geo_zone) { ?>
                      <option value="<?php echo $geo_zone['geo_zone_id']; ?>"<?php if (isset($twisto_data['geo_zone_id']) && $geo_zone['geo_zone_id'] == $twisto_data['geo_zone_id']) echo ' selected="selected"'; ?>><?php echo $geo_zone['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label" for="input-order-status-<?php echo $store_id; ?>"><?php echo $entry_order_status; ?></label>
                  <div class="col-sm-10">
                    <select name="twisto[<?php echo $store_id; ?>][twisto][order_status_id]" id="input-order-status-<?php echo $store_id; ?>" class="form-control">
                      <?php foreach ($order_statuses as $order_status) { ?>
                      <option value="<?php echo $order_status['order_status_id']; ?>"<?php if (isset($twisto_data['order_status_id']) && $order_status['order_status_id'] == $twisto_data['order_status_id']) echo ' selected="selected"'; ?>><?php echo $order_status['name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label" for="input-status-<?php echo $store_id; ?>"><?php echo $entry_status; ?></label>
                  <div class="col-sm-10">
                    <select name="twisto[<?php echo $store_id; ?>][twisto_status]" id="input-status-<?php echo $store_id; ?>" class="form-control">
                      <option value="1"<?php if (!empty($store_data['twisto_status'])) echo ' selected="selected"'; ?>><?php echo $text_enabled; ?></option>
                      <option value="0"<?php if (empty($store_data['twisto_status'])) echo ' selected="selected"'; ?>><?php echo $text_disabled; ?></option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-sort-order-<?php echo $store_id; ?>"><?php echo $entry_sort_order; ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="twisto[<?php echo $store_id; ?>][twisto_sort_order]" value="<?php if (isset($store_data['twisto_sort_order'])) echo $store_data['twisto_sort_order']; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order-<?php echo $store_id; ?>" class="form-control" />
                  </div>
                </div>
			  </div>
			  <?php } ?>
			  <div class="tab-pane" id="tab-common">
			    <fieldset>
				  <legend><?php echo $text_fields_mapping; ?></legend>
			      <?php $fieldsData = (isset($twisto[0]) && isset($twisto[0]['twisto_fields']) ? $twisto[0]['twisto_fields'] : array()); ?>
			      <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-field-facebook_id"><?php echo $entry_field_facebook_id; ?></label>
                    <div class="col-sm-10">
				      <?php fieldSelect('facebook_id', $fieldsData, $custom_fields); ?>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-field-company_id"><?php echo $entry_field_company_id; ?></label>
                    <div class="col-sm-10">
				      <?php fieldSelect('company_id', $fieldsData, $custom_fields); ?>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-field-vat_id"><?php echo $entry_field_vat_id; ?></label>
                    <div class="col-sm-10">
				      <?php fieldSelect('vat_id', $fieldsData, $custom_fields); ?>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-field-vat_id"><?php echo $entry_field_payment_telephone; ?></label>
                    <div class="col-sm-10">
				      <?php fieldSelect('payment_telephone', $fieldsData, $custom_fields); ?>
                    </div>
                  </div>
				  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-field-vat_id"><?php echo $entry_field_shipping_telephone; ?></label>
                    <div class="col-sm-10">
				      <?php fieldSelect('shipping_telephone', $fieldsData, $custom_fields); ?>
                    </div>
                  </div>
				</fieldset>
			  </div>
	        </div>
		  </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('#stores a:first').tab('show');

$('.as_default').click(function() {
	as_default(this);
}).each(function() {
	as_default(this);
});

function as_default(chb) {
	var checked = chb.checked;
	var $inputs = $(chb).closest('.tab-pane').find('.form-group');

	if (checked) {
		$inputs.fadeTo(200, 0.3);
	} else {
		$inputs.fadeTo(200, 1);
	}
}
</script>
<?php echo $footer; ?>