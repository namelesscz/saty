<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<button type="submit" form="form-uf" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a>
      </div>
	  <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if (!empty($error['warning'])) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error['warning']; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
	<div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-uf" class="form-horizontal">
		  <ul class="nav nav-tabs">
	        <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
		    <li><a href="#tab-fields" data-toggle="tab"><?php echo $tab_fields; ?></a></li>
		    <li><a href="#tab-stock_statuses" data-toggle="tab"><?php echo $tab_stock_statuses; ?></a></li>
		    <li><a href="#tab-shipping_methods" data-toggle="tab"><?php echo $tab_shipping_methods; ?></a></li>
	      </ul>
		  <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
		      <div class="form-group">
			    <label class="col-sm-2 control-label"><?php echo $entry_reloaded; ?></label>
			    <div class="col-sm-10">
			      <?php foreach ($stores as $store) { ?>
			      <div class="form-group">
				    <label class="col-sm-2"><?php echo $store['name']; ?></label>
					<div class="col-sm-10">
					  <?php if (empty($feed['date_reloaded'][$store['store_id']])) { ?>
					  <?php echo $text_not_cached; ?>
					  <?php } else { ?>
					  <?php echo date($date_time_format, $feed['date_reloaded'][$store['store_id']]); ?>
					  <?php } ?>
					</div>
				  </div>
				  <?php } ?>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="preset-feed"><?php echo $entry_preset_feed; ?></label>
			    <div class="col-sm-10">
				  <select id="preset-feed" class="form-control">
			        <option value=""></option>
				    <?php foreach ($preset_feeds as $preset_feed_key => $preset_feed_data) { ?>
				    <option value="<?php echo $preset_feed_key; ?>"><?php echo $preset_feed_data['title']; ?></option>
				    <?php } ?>
			      </select>
				  <div id="preset-feed-specs" style="display:none;"><a target="_blank"><?php echo $text_feed_specs; ?></a></div>
			    </div>
			  </div>
		      <div class="form-group required">
			    <label class="col-sm-2 control-label" for="input-name"><?php echo $entry_name; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[name]" value="<?php if (isset($feed['name'])) echo $feed['name']; ?>" placeholder="<?php echo $entry_name; ?>" class="form-control" id="input-name" />
			      <?php if (!empty($error['name'])) { ?>
				  <div class="text-danger"><?php echo $error['name']; ?></div>
				  <?php } ?>
				</div>
		      </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-keyword"><?php echo $entry_keyword; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[keyword]" value="<?php if (isset($feed['keyword'])) echo $feed['keyword']; ?>" placeholder="<?php echo $entry_keyword; ?>" class="form-control" id="input-keyword" />
			      <?php if (!empty($error['keyword'])) { ?>
				  <div class="text-danger"><?php echo $error['keyword']; ?></div>
				  <?php } ?>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-free-text-before"><?php echo $entry_free_text_before; ?></label>
			    <div class="col-sm-10">
				  <textarea name="feed[free_text_before]" rows="5" placeholder="<?php echo $entry_free_text_before; ?>" class="form-control" id="input-free-text-before"><?php if (isset($feed['free_text_before'])) echo $feed['free_text_before']; ?></textarea>
				</div>
			  </div>
			  <div class="form-group required">
			    <label class="col-sm-2 control-label" for="input-tag-top"><?php echo $entry_tag_top; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[tag_top]" value="<?php if (isset($feed['tag_top'])) echo $feed['tag_top']; ?>" placeholder="<?php echo $entry_tag_top; ?>" class="form-control" id="input-tag-top" />
			      <?php if (!empty($error['tag_top'])) { ?>
				  <div class="text-danger"><?php echo $error['tag_top']; ?></div>
				  <?php } ?>
				</div>
			  </div>
			  <div class="form-group required">
			    <label class="col-sm-2 control-label" for="input-tag-item"><?php echo $entry_tag_item; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[tag_item]" value="<?php if (isset($feed['tag_item'])) echo $feed['tag_item']; ?>" placeholder="<?php echo $entry_tag_item; ?>" class="form-control" id="input-tag-item" />
			      <?php if (!empty($error['tag_item'])) { ?>
				  <div class="text-danger"><?php echo $error['tag_item']; ?></div>
				  <?php } ?>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-tag-variant"><?php echo $entry_tag_variant; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[tag_variant]" value="<?php if (isset($feed['tag_variant'])) echo $feed['tag_variant']; ?>" placeholder="<?php echo strip_tags($entry_tag_variant); ?>" class="form-control" id="input-tag-variant" />
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-variant-type"><?php echo $entry_variant_type; ?></label>
			    <div class="col-sm-10">
				  <select name="feed[variant_type]" class="form-control" id="input-variant-type">
			        <option value="S"<?php if (isset($feed['variant_type']) && $feed['variant_type'] == 'S') echo ' selected="selected"'; ?>><?php echo $text_standalone_product; ?></option>
				    <option value="I"<?php if (isset($feed['variant_type']) && $feed['variant_type'] == 'I') echo ' selected="selected"'; ?>><?php echo $text_inner_product; ?></option>
			      </select>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-free-text-after"><?php echo $entry_free_text_after; ?></label>
			    <div class="col-sm-10">
				  <textarea name="feed[free_text_after]" rows="5" placeholder="<?php echo $entry_free_text_after; ?>" class="form-control" id="input-free-text-after"><?php if (isset($feed['free_text_after'])) echo $feed['free_text_after']; ?></textarea>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-cache"><?php echo $entry_cache; ?></label>
			    <div class="col-sm-10">
				  <input type="text" name="feed[cache]" value="<?php if (isset($feed['cache'])) echo $feed['cache']; ?>" placeholder="<?php echo strip_tags($entry_cache); ?>" class="form-control" id="input-cache" />
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-language"><?php echo $entry_language; ?></label>
			    <div class="col-sm-10">
				  <select name="feed[language_id]" class="form-control" id="input-language">
			        <option value="0"><?php echo $text_store_default; ?></option>
				    <?php foreach ($languages as $language) { ?>
				    <option value="<?php echo $language['language_id']; ?>"<?php if (isset($feed['language_id']) && $feed['language_id'] == $language['language_id']) echo ' selected="selected"'; ?>><?php echo $language['name']; ?></option>
				    <?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-currency"><?php echo $entry_currency; ?></label>
			    <div class="col-sm-10">
				  <select name="feed[currency_code]" class="form-control" id="input-currency">
			        <option value="0"><?php echo $text_store_default; ?></option>
				    <?php foreach ($currencies as $currency_code => $currency) { ?>
				    <option value="<?php echo $currency_code; ?>"<?php if (isset($feed['currency_code']) && $feed['currency_code'] == $currency_code) echo ' selected="selected"'; ?>><?php echo $currency['title']; ?></option>
				    <?php } ?>
				  </select>
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-only-in-stock"><?php echo $entry_only_in_stock; ?></label>
			    <div class="col-sm-10">
				  <input type="checkbox" name="feed[only_in_stock]" value="1" class="form-control" id="input-only-in-stock"<?php if (!empty($feed['only_in_stock'])) echo ' checked="checked"'; ?> />
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-only-priced"><?php echo $entry_only_priced; ?></label>
			    <div class="col-sm-10">
				  <input type="checkbox" name="feed[only_priced]" value="1" class="form-control" id="input-only-priced"<?php if (!empty($feed['only_priced'])) echo ' checked="checked"'; ?> />
				</div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label"><?php echo $entry_filter_manufacturer; ?></label>
			    <div class="col-sm-10">
				  <div class="well well-sm" style="height: 150px; overflow: auto;">
                    <?php foreach ($manufacturers as $manufacturer) { ?>
                    <div class="checkbox">
					  <label>
                        <input type="checkbox" name="feed[filter_manufacturer][]" value="<?php echo $manufacturer['manufacturer_id']; ?>"<?php if (!empty($feed['filter_manufacturer']) && in_array($manufacturer['manufacturer_id'], $feed['filter_manufacturer'])) echo ' checked="checked"'; ?> />
                        <?php echo $manufacturer['name']; ?>
					  </label>
                    </div>
                    <?php } ?>
                  </div>
                  <a onclick="$(this).parent().find(':checkbox').prop('checked', true);return false;" href="#"><?php echo $text_select_all; ?></a> / <a onclick="$(this).parent().find(':checkbox').prop('checked', false);return false;" href="#"><?php echo $text_unselect_all; ?></a>
                </div>
			  </div>
			  <div class="form-group">
			    <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
			    <div class="col-sm-10">
				  <select name="feed[status]" class="form-control" id="input-status">
			        <option value="0"<?php if (empty($feed['status'])) echo ' selected="selected"'; ?>><?php echo $text_disabled; ?></option>
				    <option value="1"<?php if (!empty($feed['status'])) echo ' selected="selected"'; ?>><?php echo $text_enabled; ?></option>
				  </select>
				</div>
			  </div>
		    </div>
		    <div class="tab-pane" id="tab-fields">
			  <div class="table-responsive">
                <table class="table table-bordered table-hover" id="fields">
		          <thead>
			        <tr>
			          <td style="width: 1px;" class="text-center"></td>
			          <td class="text-left"><?php echo $column_tag; ?></td>
				      <td class="text-left"><?php echo $column_type; ?></td>
				      <td class="text-left"><?php echo $column_setting; ?></td>
				      <td style="width: 1px;" class="text-left"><?php echo $column_in_product; ?></td>
				      <td style="width: 1px;" class="text-left"><?php echo $column_in_variant; ?></td>
				      <td style="width: 1px;" class="text-left"><?php echo $column_cdata; ?></td>
				      <td class="text-left"><?php echo $column_description; ?></td>
			        </tr>
				  </thead>
				  <tbody>
			        <?php $field_num = 0; ?>
			        <?php if (!empty($feed['fields'])) { ?>
			        <?php foreach ($feed['fields'] as $field) { ?>
				    <tr id="feed-tag-row-<?php echo $field_num; ?>">
				      <td class="text-center">
					    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger field_delete"><i class="fa fa-minus-circle"></i></button>
					  </td>
					  <td class="text-left">
					    <input type="text" name="feed[fields][<?php echo $field_num; ?>][tag]" value="<?php echo $field['tag']; ?>" placeholder="<?php echo $column_tag; ?>" class="tag-tag form-control" />
					  </td>
					  <td class="text-left">
					    <select name="feed[fields][<?php echo $field_num; ?>][type]" class="tag-type field_type form-control">
					      <?php foreach ($field_types as $type_id => $type_data) { ?>
					      <option value="<?php echo $type_id; ?>" longdesc="<?php echo $type_data['desc']; ?>"<?php if ($type_id == $field['type']) echo ' selected="selected"'; ?>><?php echo $type_data['name']; ?></option>
					      <?php } ?>
					    </select>
					  </td>
					  <td class="text-left">
					    <textarea name="feed[fields][<?php echo $field_num; ?>][setting]" rows="2" class="tag-params form-control" placeholder="<?php echo $column_setting; ?>"><?php if (isset($field['setting'])) echo $field['setting']; ?></textarea>
					  </td>
					  <td class="text-center">
					    <input type="checkbox" name="feed[fields][<?php echo $field_num; ?>][in_product]" value="1" class="tag-product form-control"<?php if (!empty($field['in_product'])) echo ' checked="checked"'; ?> />
					  </td>
					  <td class="text-center">
					    <input type="checkbox" name="feed[fields][<?php echo $field_num; ?>][in_variant]" value="1" class="tag-variant form-control"<?php if (!empty($field['in_variant'])) echo ' checked="checked"'; ?> />
					  </td>
					  <td class="text-center">
					    <input type="checkbox" name="feed[fields][<?php echo $field_num; ?>][cdata]" value="1" class="tag-cdata form-control"<?php if (!empty($field['cdata'])) echo ' checked="checked"'; ?> />
					  </td>
				      <td class="text-left field_desc"><?php echo $field_types[$field['type']]['desc']; ?></td>
				    </tr>
				    <?php $field_num++; ?>
				    <?php } ?>
			        <?php } ?>
			      </tbody>
			      <tfoot>
			        <tr>
				      <td colspan="8" class="text-left">
					    <button type="button" onclick="addField();" data-toggle="tooltip" title="<?php echo $button_add_field; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
				      </td>
				    </tr>
			      </tfoot>
		        </table>
		      </div>
			</div>
		    <div class="tab-pane" id="tab-stock_statuses">
			  <fieldset>
		        <legend><?php echo $text_stock_status_setting; ?></legend>
		        <div class="form-group">
			      <label class="col-sm-2 control-label" for="input-stock-in-stock"><?php echo $entry_stock_in_stock; ?></label>
			      <div class="col-sm-10">
				    <input type="text" name="feed[stock_status][setting][in_stock]" value="<?php if (isset($feed['stock_status']['setting']['in_stock'])) echo $feed['stock_status']['setting']['in_stock']; ?>" placeholder="<?php echo strip_tags($entry_stock_in_stock); ?>" class="form-control" id="input-stock-in-stock" />
				  </div>
			    </div>
			    <div class="form-group">
			      <label class="col-sm-2 control-label" for="input-stock-date-available"><?php echo $entry_stock_date_available; ?></label>
			      <div class="col-sm-10">
				    <input type="checkbox" name="feed[stock_status][setting][date_available]" value="1" class="form-control" id="input-stock-date-available"<?php if (!empty($feed['stock_status']['setting']['date_available'])) echo ' checked="checked"'; ?> />
				  </div>
			    </div>
			  </fieldset>
			  <fieldset>
		        <legend><?php echo $text_stock_status_alias; ?></legend>
		        <div class="form-group">
		          <div class="col-sm-2"><strong><?php echo $column_order_status; ?></strong></div>
			      <div class="col-sm-10"><strong><?php echo $column_tag_value; ?></strong></div>
                </div>
			    <?php foreach ($stock_statuses as $stock_status) { ?>
			    <div class="form-group">
			      <label class="col-sm-2 control-label" for="input-stock-alias-<?php echo $stock_status['stock_status_id']; ?>"><?php echo $stock_status['name']; ?></label>
				  <div class="col-sm-10">
				    <input type="text" name="feed[stock_status][alias][<?php echo $stock_status['stock_status_id']; ?>]" value="<?php if (isset($feed['stock_status']['alias'][$stock_status['stock_status_id']])) echo $feed['stock_status']['alias'][$stock_status['stock_status_id']]; ?>" placeholder="<?php echo $column_tag_value; ?>" class="form-control" id="input-stock-alias-<?php echo $stock_status['stock_status_id']; ?>" />
				  </div>
			    </div>
			    <?php } ?>
			  </fieldset>
		    </div>
		    <div class="tab-pane" id="tab-shipping_methods">
		      <div class="table-responsive">
                <table class="table table-bordered table-hover">
		          <thead>
			        <tr>
			          <td class="text-center" style="width:1px;"></td>
				      <td class="text-left"><?php echo $column_code; ?></td>
				      <td class="text-left"><?php echo $column_count; ?></td>
				      <td class="text-left"><?php echo $column_start; ?></td>
				      <td class="text-left"><?php echo $column_end; ?></td>
				      <td class="text-left"><?php echo $column_price; ?></td>
				      <td class="text-left"><?php echo $column_price_cod; ?></td>
			        </tr>
			      </thead>
			      <tbody id="shipping_method">
			        <?php $shipping_method_row = 0; ?>
			        <?php if (!empty($feed['shipping_methods'])) { ?>
			        <?php foreach ($feed['shipping_methods'] as $shipping_method) { ?>
			        <tr>
			          <td class="text-center">
					    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger remove-tr"><i class="fa fa-minus-circle"></i></button>
					  </td>
				      <td class="text-left">
					    <input type="text" name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][code]" value="<?php echo $shipping_method['code']; ?>" placeholder="<?php echo $column_code; ?>" class="form-control" />
					  </td>
				      <td class="text-left">
					    <select name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][count]" class="form-control">
				          <option value="price"<?php if ($shipping_method['count'] == 'price') echo ' selected="selected"'; ?>><?php echo $text_price; ?></option>
				          <option value="weight"<?php if ($shipping_method['count'] == 'weight') echo ' selected="selected"'; ?>><?php echo $text_weight; ?></option>
				        </select>
					  </td>
				      <td class="text-left">
					    <input type="text" name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][start]" value="<?php echo $shipping_method['start']; ?>" placeholder="<?php echo $column_start; ?>" class="form-control" />
					  </td>
				      <td class="text-left">
					    <input type="text" name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][end]" value="<?php echo $shipping_method['end']; ?>" placeholder="<?php echo $column_end; ?>" class="form-control" />
					  </td>
				      <td class="text-left">
					    <input type="text" name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][price]" value="<?php echo $shipping_method['price']; ?>" placeholder="<?php echo $column_price; ?>" class="form-control" />
					  </td>
				      <td class="text-left">
					    <input type="text" name="feed[shipping_methods][<?php echo $shipping_method_row; ?>][cod]" value="<?php echo $shipping_method['cod']; ?>" placeholder="<?php echo $column_price_cod; ?>" class="form-control" />
					  </td>
			        </tr>
			        <?php $shipping_method_row++; ?>
			        <?php } ?>
			        <?php } ?>
			      </tbody>
			      <tfoot>
			        <tr>
					  <td colspan="7" class="text-left">
					    <button type="button" onclick="addShippingMethod();" data-toggle="tooltip" title="<?php echo $button_add_shipping_method; ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button>
					  </td>
					</tr>
			      </tfoot>
		        </table>
		      </div>
			</div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$().ready(function() {
	$(document).on('change', '.field_type', function() {
		$(this).closest('tr').find('.field_desc').html($('option:selected', this).attr('longdesc'));
	}).on('click', '.field_delete', function() {
		$(this).closest('tr').remove();
	});
});

var field_num = <?php echo $field_num; ?>;

function addField() {
	var html = '<tr id="feed-tag-row-' + field_num + '">' +
		'<td class="text-center"><button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger field_delete"><i class="fa fa-minus-circle"></i></button></td>' +
		'<td class="text-left"><input type="text" name="feed[fields][' + field_num + '][tag]" value="" placeholder="<?php echo $column_tag; ?>" class="tag-tag form-control" /></td>' +
		'<td class="text-left"><select name="feed[fields][' + field_num + '][type]" class="tag-type field_type form-control">';

	<?php foreach ($field_types as $type_id => $type_data) { ?>
	html += '<option value="<?php echo $type_id; ?>" longdesc="<?php echo $type_data['desc']; ?>"><?php echo $type_data['name']; ?></option>';
	<?php } ?>

	html += '</select></td>' +
		'<td class="text-left"><textarea name="feed[fields][' + field_num + '][setting]" rows="2" class="tag-params form-control" placeholder="<?php echo $column_setting; ?>"></textarea></td>' +
		'<td class="text-center"><input type="checkbox" name="feed[fields][' + field_num + '][in_product]" value="1" class="tag-product form-control" /></td>' +
		'<td class="text-center"><input type="checkbox" name="feed[fields][' + field_num + '][in_variant]" value="1" class="tag-variant form-control" /></td>' +
		'<td class="text-center"><input type="checkbox" name="feed[fields][' + field_num + '][cdata]" value="1" class="tag-cdata form-control" /></td>' +
		'<td class="text-left field_desc"></td></tr>';

	$('#fields tbody').append(html);

	$('.field_type:last').change();

	field_num++;
}

var shipping_method_row = <?php echo $shipping_method_row; ?>;

var shipping_method_values = false;

function addShippingMethod() {
	var html = '';

	html += '<tr>';
	html += '  <td class="text-center">';
	html += '    <button type="button" data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger remove-tr"><i class="fa fa-minus-circle"></i></button>';
	html += '  </td>';
	html += '  <td class="text-left">';
	
	if (shipping_method_values) {
		html += '    <select name="feed[shipping_methods][' + shipping_method_row + '][code]" class="form-control">';

		for (var i in shipping_method_values) {
			html += '      <option value="' + shipping_method_values[i] + '">' + shipping_method_values[i] + '</option>';
		}

		html += '    </select>';
	} else {
		html += '    <input type="text" name="feed[shipping_methods][' + shipping_method_row + '][code]" value="" placeholder="<?php echo $column_code; ?>" class="form-control" />';
	}
	
	html += '  </td>';
	html += '  <td class="text-left">';
	html += '    <select name="feed[shipping_methods][' + shipping_method_row + '][count]" class="form-control">';
	html += '      <option value="price"><?php echo $text_price; ?></option>';
	html += '      <option value="weight"><?php echo $text_weight; ?></option>';
	html += '    </select>';
	html += '  </td>';
	html += '  <td class="text-left">';
	html += '    <input type="text" name="feed[shipping_methods][' + shipping_method_row + '][start]" value="" placeholder="<?php echo $column_start; ?>" class="form-control" />';
	html += '  </td>';
	html += '  <td class="text-left">';
	html += '    <input type="text" name="feed[shipping_methods][' + shipping_method_row + '][end]" value="" placeholder="<?php echo $column_end; ?>" class="form-control" />';
	html += '  </td>';
	html += '  <td class="text-left">';
	html += '    <input type="text" name="feed[shipping_methods][' + shipping_method_row + '][price]" value="" placeholder="<?php echo $column_price; ?>" class="form-control" />';
	html += '  </td>';
	html += '  <td class="text-left">';
	html += '    <input type="text" name="feed[shipping_methods][' + shipping_method_row + '][cod]" value="" placeholder="<?php echo $column_price_cod; ?>" class="form-control" />';
	html += '  </td>';
	html += '</tr>';

	$('#shipping_method').append(html);

	shipping_method_row++;
}

$(document).on('click', '.remove-tr', function() {
	$(this).closest('tr').remove();
});

var preset_feeds = <?php echo json_encode($preset_feeds); ?>;

$('#preset-feed').change(function() {
	$('#preset-feed-specs').hide();

	if (!$(this).val()) return;

	var feed = preset_feeds[$(this).val()];

	if (feed.link) {
		$('#preset-feed-specs a').attr('href', feed.link);

		$('#preset-feed-specs').show();
	}

	for (var i in feed.setting) {
		$('#tab-general [name*=' + i + ']').val(feed.setting[i]);
	}

	$('#fields tbody tr:gt(0)').remove();

	for (var i in feed.tags) {
		addField();

		var $tr = $('#feed-tag-row-' + (field_num - 1));

		for (var j in feed.tags[i]) {
			var $el = $('.tag-' + j, $tr);

			if ($el.is('input[type=text], textarea, select')) {
				$el.val(feed.tags[i][j]);
			} else if ($el.is(':checkbox')) {
				if (feed.tags[i][j]) {
					$el.attr('checked', 'checked');
				} else {
					$el.attr('checked', false);
				}
			}
		}
	}

	if ('stock' in feed && feed.stock) {
		if ('in_stock' in feed.stock) {
			$('#tab-stock_statuses input[name*=in_stock]').val(feed.stock.in_stock);
		}

		if ('stock_date' in feed.stock) {
			if (feed.stock.stock_date) {
				$('#tab-stock_statuses input[name*=date_available]').attr('checked', 'checked');
			} else {
				$('#tab-stock_statuses input[name*=date_available]').attr('checked', false);
			}
		}

		if ('stock_status' in feed.stock) {
			$('#tab-stock_statuses [name*=alias]').each(function() {
				var val = $(this).val();

				var html = '';

				html += '<select name="' + $(this).attr('name') + '" class="form-control" id="' + $(this).attr('id') + '">';
				html += '  <option value=""></option>';

				for (var i in feed.stock.stock_status) {
					html += '  <option value="' + feed.stock.stock_status[i] + '"' + (feed.stock.stock_status[i] == val ? ' checked="checked"' : '') + '>' + feed.stock.stock_status[i] + '</option>';
				}

				html += '</select>';

				$(this).replaceWith(html);
			});
		} else {
			$('#tab-stock_statuses [name*=alias]').each(function() {
				var val = $(this).val();

				var html = '';

				html += '<input type="text" name="' + $(this).attr('name') + '" placeholder="<?php echo $column_tag_value; ?>" value="' + val + '" class="form-control" id="' + $(this).attr('id') + '" />';

				$(this).replaceWith(html);
			});
		}
	}

	if ('shipping' in feed && feed.shipping) {
		shipping_method_values = feed.shipping;

		$('#shipping_method [name*=code]').each(function() {
			var val = $(this).val();

			var in_set = false;

			for (var i in feed.shipping) {
				if (val == feed.shipping[i]) {
					in_set = true;

					break;
				}
			}

			if (!in_set) {
				$(this).closest('tr').remove();
			} else {
				var html = '';

				html += '<select name="' + $(this).attr('name') + '" class="form-control" id="' + $(this).attr('id') + '">';

				for (var i in feed.shipping) {
					html += '  <option value="' + feed.shipping[i] + '"' + (feed.shipping[i] == val ? ' checked="checked"' : '') + '>' + feed.shipping[i] + '</option>';
				}

				html += '</select>';

				$(this).replaceWith(html);
			}
		});
	} else {
		shipping_method_values = false;

		$('#shipping_method [name*=code]').each(function() {
			var val = $(this).val();

			var html = '';

			html += '<input type="text" name="' + $(this).attr('name') + '" value="' + val + '" placeholder="<?php echo $column_code; ?>" class="form-control" id="' + $(this).attr('id') + '" />';

			$(this).replaceWith(html);
		});
	}
});
--></script>
<?php echo $footer; ?>