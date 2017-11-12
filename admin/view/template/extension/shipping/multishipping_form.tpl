<?php echo $header; ?><?php echo $column_left; ?> 
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-shipping" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
    <?php if ($error_warning) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php }?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $heading_title;?></h3>
      </div>
	</div>
    <div class="panel-body">
	  <form action="<?php echo $action;?>" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">
        <ul class="nav nav-tabs">
	      <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
		  <li><a href="#tab-price" data-toggle="tab"><?php echo $tab_price; ?></a></li>
		  <li><a href="#tab-cod" data-toggle="tab"><?php echo $tab_cod; ?></a></li>
        </ul>
	    <div class="tab-content">
          <div class="tab-pane active in" id="tab-general">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-real"><?php echo $entry_real_service; ?></label>
		      <div class="col-sm-10">
                <select name="real_service_id" id="input-real" class="form-control">
				  <option value="0"><?php echo $text_none; ?></option>
		          <?php foreach ($real_services as $real_id => $real_name) { ?>
		          <?php if ($real_id == $real_service_id) { ?>
		          <option value="<?php echo $real_id;?>" selected="selected"><?php echo $real_name;?></option>
		          <?php } else {?>
		          <option value="<?php echo $real_id;?>"><?php echo $real_name;?></option>
		          <?php }?>
		          <?php }?>
		        </select>
			  </div>
		    </div>
            <ul class="nav nav-tabs" id="language">
              <?php foreach ($languages as $language) { ?>
              <li><a href="#language<?php echo $language['language_id']; ?>" data-toggle="tab"><img src="language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" title="<?php echo $language['name']; ?>" /> <?php echo $language['name']; ?></a></li>
              <?php } ?>
            </ul>
		    <div class="tab-content">
              <?php foreach ($languages as $language) { ?>
              <div class="tab-pane" id="language<?php echo $language['language_id']; ?>">
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-name<?php echo $language['language_id']; ?>"><?php echo $entry_name; ?></label>
				  <div class="col-sm-10">
                    <input type="text" name="custom_service_description[<?php echo $language['language_id']; ?>][name]" value="<?php echo isset($multishipping_description[$language['language_id']]) ? $multishipping_description[$language['language_id']]['name'] : ''; ?>" placeholder="<?php echo $entry_name; ?>" class="cp-name form-control" id="input-name<?php echo $language['language_id']; ?>" />
                    <?php if (isset($error_name[$language['language_id']])) { ?>
                    <div class="text-danger"><?php echo $error_name[$language['language_id']]; ?></div>
                    <?php } ?>
				  </div>
                </div>
                <div class="form-group">
			      <label class="col-sm-2 control-label" for="input-description<?php echo $language['language_id']; ?>"><?php echo $entry_description; ?></label>
                  <div class="col-sm-10">
				    <textarea name="custom_service_description[<?php echo $language['language_id']; ?>][description]" id="input-description<?php echo $language['language_id']; ?>" class="form-control" placeholder="<?php echo $entry_description; ?>" rows="5"><?php echo isset($multishipping_description[$language['language_id']]) ? $multishipping_description[$language['language_id']]['description'] : ''; ?></textarea>
				  </div>
                </div>
              </div>
              <?php } ?>
			</div>
          </div>
          <div class="tab-pane fade" id="tab-price">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
				  <tr>
				    <td class="text-center" colspan="2"><?php echo $column_price; ?></td>
				    <td class="text-center" colspan="2"><?php echo $column_weight; ?></td>
				    <td class="text-left" rowspan="2"><?php echo $column_price; ?></td>
					<td style="width:1px;" rowspan="2"></td>
				  </tr>
				  <tr>
				    <td class="text-left"><?php echo $column_from; ?></td>
				    <td class="text-left"><?php echo $column_to; ?></td>
				    <td class="text-left"><?php echo $column_from; ?></td>
				    <td class="text-left"><?php echo $column_to; ?></td>
				  </tr>
			    </thead>
			    <tbody>
			      <?php $price_row = 0; ?>
			      <?php foreach ($price as $p) { ?>
				  <tr>
				    <td class="text-left"><input type="text" name="price[<?php echo $price_row; ?>][p][from]" value="<?php echo $p['p']['from']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="price[<?php echo $price_row; ?>][p][to]" value="<?php echo $p['p']['to']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="price[<?php echo $price_row; ?>][w][from]" value="<?php echo $p['w']['from']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="price[<?php echo $price_row; ?>][w][to]" value="<?php echo $p['w']['to']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="price[<?php echo $price_row; ?>][price]" value="<?php echo $p['price']; ?>" class="form-control" /></td>
					<td class="text-center"><button type="button" onclick="$(this).closest('tr').remove();"  data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
				  </tr>
				  <?php $price_row++; ?>
				  <?php } ?>
			    </tbody>
			    <tfoot>
			      <tr>
				    <td colspan="5"></td>
				    <td class="text-left"><button type="button" onclick="addPrice($(this).closest('table').find('tbody'), 'price');" title="<?php echo $button_add_price; ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i></button></td>
				  </tr>
			    </tfoot>
			  </table>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label"><?php echo $entry_price_inc_tax; ?></label>
			  <div class="col-sm-10">
			    <label class="radio-inline">
                  <input type="radio" name="shipping_price_inc_tax" value="1"<?php if (!empty($shipping_price_inc_tax)) echo ' checked="checked"'; ?> />
				  <?php echo $text_yes; ?>
			    </label>
			    <label class="radio-inline">
				  <input type="radio" name="shipping_price_inc_tax" value="0"<?php if (empty($shipping_price_inc_tax)) echo ' checked="checked"'; ?> />
				  <?php echo $text_no; ?>
			    </label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="select-tax"><?php echo $entry_tax;?></label>
              <div class="col-sm-10">
			    <select name="tax_class_id" id="select-tax" class="form-control">
                  <option value="0"><?php echo $text_none;?></option>
                  <?php foreach ($tax_classes as $tax_class) { ?>
                  <?php if ($tax_class['tax_class_id'] == $tax_class_id) { ?>
                  <option value="<?php echo $tax_class['tax_class_id'];?>" selected="selected"><?php echo $tax_class['title'];?></option>
                  <?php } else {?>
                  <option value="<?php echo $tax_class['tax_class_id'];?>"><?php echo $tax_class['title'];?></option>
                  <?php }?>
                  <?php }?>
		        </select>
		      </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-customer-group"><?php echo $entry_customer_group; ?></label>
              <div class="col-sm-10">
			    <select name="customer_group_id" id="input-customer-group" class="form-control">
                  <?php foreach ($customer_groups as $customer_group) { ?>
                  <?php if ($customer_group['customer_group_id'] == $customer_group_id) { ?>
                  <option value="<?php echo $customer_group['customer_group_id']; ?>" selected="selected"><?php echo $customer_group['name']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $customer_group['customer_group_id']; ?>"><?php echo $customer_group['name']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-geo-zone"><?php echo $entry_geo_zone;?></label>
              <div class="col-sm-10">
			    <select name="geo_zone_id" id="input-geo-zone" class="form-control">
                  <option value="0"><?php echo $text_all_zones;?></option>
                  <?php foreach ($geo_zones as $geo_zone) { ?>
                  <?php if ($geo_zone['geo_zone_id'] == $geo_zone_id) {?>
                  <option value="<?php echo $geo_zone['geo_zone_id'];?>" selected="selected"><?php echo $geo_zone['name'];?></option>
                  <?php } else {?>
                  <option value="<?php echo $geo_zone['geo_zone_id'];?>"><?php echo $geo_zone['name'];?></option>
                  <?php }?>
                  <?php }?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order;?></label>
              <div class="col-sm-10">
                <input type="text" name="sort_order" value="<?php echo $sort_order;?>" class="form-control" id="input-sort-order" placeholder="<?php echo $entry_sort_order; ?>" />
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab-cod">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
			    <thead>
			      <tr>
				    <td class="text-center" colspan="2"><?php echo $column_price; ?></td>
				    <td class="text-center" colspan="2"><?php echo $column_weight; ?></td>
				    <td class="text-left" rowspan="2"><?php echo $column_price; ?></td>
					<td style="width:1px;" rowspan="2"></td>
				  </tr>
				  <tr>
				    <td class="text-left"><?php echo $column_from; ?></td>
				    <td class="text-left"><?php echo $column_to; ?></td>
				    <td class="text-left"><?php echo $column_from; ?></td>
				    <td class="text-left"><?php echo $column_to; ?></td>
				  </tr>
			    </thead>
			    <tbody>
			      <?php $cod_price_row = 0; ?>
			      <?php foreach ($cod_price as $p) { ?>
				  <tr>
				    <td class="text-left"><input type="text" name="cod_price[<?php echo $cod_price_row; ?>][p][from]" value="<?php echo $p['p']['from']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="cod_price[<?php echo $cod_price_row; ?>][p][to]" value="<?php echo $p['p']['to']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="cod_price[<?php echo $cod_price_row; ?>][w][from]" value="<?php echo $p['w']['from']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="cod_price[<?php echo $cod_price_row; ?>][w][to]" value="<?php echo $p['w']['to']; ?>" class="form-control" /></td>
				    <td class="text-left"><input type="text" name="cod_price[<?php echo $cod_price_row; ?>][price]" value="<?php echo $p['price']; ?>" class="form-control" /></td>
				    <td class="text-center"><button type="button" onclick="$(this).closest('tr').remove();"  data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
				  </tr>
				  <?php $cod_price_row++; ?>
				  <?php } ?>
			    </tbody>
			    <tfoot>
			      <tr>
				    <td colspan="5"></td>
				    <td class="text-left"><button type="button" onclick="addPrice($(this).closest('table').find('tbody'), 'cod_price');" title="<?php echo $button_add_price; ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i></button></td>
				  </tr>
			    </tfoot>
			  </table>
            </div>
		    <div class="form-group">
		      <label class="col-sm-2 control-label"><?php echo $entry_price_inc_tax; ?></label>
			  <div class="col-sm-10">
			    <div class="row">
			      <label class="radio-inline">
                    <input type="radio" name="payment_price_inc_tax" value="1"<?php if (!empty($payment_price_inc_tax)) echo ' checked="checked"'; ?> /> <?php echo $text_yes; ?>
			      </label>
			      <label class="radio-inline">
				    <input type="radio" name="payment_price_inc_tax" value="0"<?php if (empty($payment_price_inc_tax)) echo ' checked="checked"'; ?> /> <?php echo $text_no; ?>
			      </label>
				</div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="select-order-status"><?php echo $entry_order_status; ?></label>
              <div class="col-sm-10">
			    <select name="order_status_id" class="form-control" id="select-order-status">
                  <?php foreach ($order_statuses as $order_status) { ?>
                  <?php if ($order_status['order_status_id'] == $order_status_id) { ?>
                  <option value="<?php echo $order_status['order_status_id']; ?>" selected="selected"><?php echo $order_status['name']; ?></option>
                  <?php } else { ?>
                  <option value="<?php echo $order_status['order_status_id']; ?>"><?php echo $order_status['name']; ?></option>
                  <?php } ?>
                  <?php } ?>
                </select>            
              </div>
            </div>
          </div>
		</div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
var price_row = {
	price : <?php echo $price_row; ?>,
	cod_price : <?php echo $cod_price_row; ?>
};

function addPrice(el, name) {
	var html = '';

	var id = price_row[name];

	price_row[name]++;
                                                      
	html += '<tr>';
	html += '  <td class="left"><input type="text" name="' + name + '[' + id + '][p][from]" value="" class="form-control" /></td>';
	html += '  <td class="left"><input type="text" name="' + name + '[' + id + '][p][to]" value="" class="form-control" /></td>';
	html += '  <td class="left"><input type="text" name="' + name + '[' + id + '][w][from]" value="" class="form-control" /></td>';
	html += '  <td class="left"><input type="text" name="' + name + '[' + id + '][w][to]" value="" class="form-control" /></td>';
	html += '  <td class="left"><input type="text" name="' + name + '[' + id + '][price]" value="" class="form-control" /></td>';
	html += '  <td class="text-center"><button type="button" onclick="$(this).closest(\'tr\').remove();"  data-toggle="tooltip" title="<?php echo $button_remove; ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';

	$(el).append(html);
}

$('select[name=real_service_id]').change(function() {
	if ($(this).val() != '0') {
		var txt = $('option:selected', this).text();

		$('.cp-name').each(function() {
			if (!$(this).val()) {
				$(this).val(txt);
			}
		});
	}
});

$('#language a:first').tab('show');
//--></script>
<?php echo $footer; ?>