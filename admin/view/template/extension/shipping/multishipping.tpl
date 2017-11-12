<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-free" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo $reload; ?>" data-toggle="tooltip" title="<?php echo $button_reload; ?>" class="btn btn-default"><i class="fa fa-refresh"></i> <?php echo $button_reload; ?></a>
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
    <?php } ?>
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-free" class="form-horizontal">      
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_general; ?></a></li>
            <li><a href="#tab-service" data-toggle="tab"><?php echo $tab_service; ?></a></li>
            <li><a href="#tab-shipping" data-toggle="tab"><?php echo $tab_shipping; ?></a></li>
          </ul>
          
          <div class="tab-content">  
            <div class="tab-pane active in" id="tab-general">
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
                <div class="col-sm-10">
                  <select name="multishipping_status" id="input-status" class="form-control">
                    <?php if ($multishipping_status) { ?>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="0"><?php echo $text_disabled; ?></option>
                    <?php } else { ?>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order"><?php echo $entry_sort_order; ?></label>
                <div class="col-sm-10">
                  <input type="text" name="multishipping_sort_order" value="<?php echo $multishipping_sort_order; ?>" placeholder="<?php echo $entry_sort_order; ?>" id="input-sort-order" class="form-control" />
                </div>
              </div>
            </div>
            
            <div class="tab-pane" id="tab-service">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-heurekapoint" data-toggle="tab"><?php echo $tab_heurekapoint; ?></a></li>
                <li><a href="#tab-zasilkovna" data-toggle="tab"><?php echo $tab_zasilkovna; ?></a></li>
                <li><a href="#tab-dpd" data-toggle="tab"><?php echo $tab_dpd; ?></a></li>
                <li><a href="#tab-ppl" data-toggle="tab"><?php echo $tab_ppl; ?></a></li>
                <li><a href="#tab-geis" data-toggle="tab"><?php echo $tab_geis; ?></a></li>
              </ul>
              
              <div class="tab-content">              
                <div class="tab-pane active in" id="tab-heurekapoint">
            		  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-multishipping_heurekapoint_code"><?php echo $entry_heurekapoint_code; ?></label>
            			
                    <div class="col-sm-10">
                      <input type="text" name="multishipping_heurekapoint_code" value="<?php echo $multishipping_heurekapoint_code; ?>" placeholder="<?php echo $entry_heurekapoint_code; ?>" class="form-control" id="input-multishipping_heurekapoint_code" />
                    </div>
            		  </div>
                  
            		  <div class="form-group">
            		    <label class="col-sm-2 control-label" for="input-multishipping_heurekapoint_country"><?php echo $entry_heurekapoint_country; ?></label>
            			
                    <div class="col-sm-10">
                      <select name="multishipping_heurekapoint_country" id="input-multishipping_heurekapoint_country" class="form-control">
                        <option value="0"><?php echo $text_country_all; ?></option>
                        <option value="1"<?php if ($multishipping_heurekapoint_country == 1) { ?> selected="selected"<?php } ?>><?php echo $text_country_auto; ?></option>
                        <option value="2"<?php if ($multishipping_heurekapoint_country == 2) { ?> selected="selected"<?php } ?>><?php echo $text_country_select; ?></option>
                      </select>
                      
  				            <div class="well well-sm<?php if ($multishipping_heurekapoint_country !== 2) { ?> hidden<?php } ?>" style="height: 80px; overflow: auto;">
                        <?php foreach ($heurekapoint_countries as $country) { ?>
  					            <div class="checkbox">
                          <label><input type="checkbox" name="multishipping_heurekapoint_countries[]" value="<?php echo $country['value']; ?>"<?php if ($country['selected']) echo ' checked="checked"'; ?> /> <?php echo $country['name']; ?></label>
                        </div>
                        <?php } ?>
                      </div>
              			</div>
            		  </div>
                  
            		  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-multishipping_heurekapoint_partner"><?php echo $entry_heurekapoint_partner; ?></label>
            			
                    <div class="col-sm-10">
              			  <select name="multishipping_heurekapoint_partner" class="form-control" id="input-multishipping_heurekapoint_partner">
              			    <option value="0"<?php if (!$multishipping_heurekapoint_partner) { ?> selected="selected"<?php } ?>><?php echo $text_enabled; ?></option>
              			    <option value="1"<?php if ($multishipping_heurekapoint_partner) { ?> selected="selected"<?php } ?>><?php echo $text_disabled; ?></option>
              			  </select>
            			  </div>
            		  </div>
                </div>
                
                <div class="tab-pane" id="tab-zasilkovna">
            		  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-multishipping_zasilkovna_code"><?php echo $entry_zasilkovna_code; ?></label>
            			
                    <div class="col-sm-10">
                      <input type="text" name="multishipping_zasilkovna_code" value="<?php echo $multishipping_zasilkovna_code; ?>" placeholder="<?php echo $entry_zasilkovna_code; ?>" class="form-control" id="input-multishipping_zasilkovna_code" />
                    </div>
            		  </div>
                  
            		  <div class="form-group">
            		    <label class="col-sm-2 control-label" for="input-multishipping_zasilkovna_country"><?php echo $entry_zasilkovna_country; ?></label>
            			
                    <div class="col-sm-10">
                      <select name="multishipping_zasilkovna_country" id="input-multishipping_zasilkovna_country" class="form-control">
                        <option value="0"><?php echo $text_country_all; ?></option>
                        <option value="1"<?php if ($multishipping_zasilkovna_country == 1) { ?> selected="selected"<?php } ?>><?php echo $text_country_auto; ?></option>
                        <option value="2"<?php if ($multishipping_zasilkovna_country == 2) { ?> selected="selected"<?php } ?>><?php echo $text_country_select; ?></option>
                      </select>
                      
  				            <div class="well well-sm<?php if ($multishipping_zasilkovna_country !== 2) { ?> hidden<?php } ?>" style="height: 80px; overflow: auto;">
                        <?php foreach ($zasilkovna_countries as $country) { ?>
  					            <div class="checkbox">
                          <label><input type="checkbox" name="multishipping_zasilkovna_countries[]" value="<?php echo $country['value']; ?>"<?php if ($country['selected']) echo ' checked="checked"'; ?> /> <?php echo $country['name']; ?></label>
                        </div>
                        <?php } ?>
                      </div>
              			</div>
            		  </div>
                </div>
  
                <div class="tab-pane" id="tab-dpd">
            		  <div class="form-group">
            		    <label class="col-sm-2 control-label" for="input-multishipping_dpd_country"><?php echo $entry_dpd_country; ?></label>
            			
                    <div class="col-sm-10">
                      <select name="multishipping_dpd_country" id="input-multishipping_dpd_country" class="form-control">
                        <option value="0"><?php echo $text_country_all; ?></option>
                        <option value="1"<?php if ($multishipping_dpd_country == 1) { ?> selected="selected"<?php } ?>><?php echo $text_country_auto; ?></option>
                        <option value="2"<?php if ($multishipping_dpd_country == 2) { ?> selected="selected"<?php } ?>><?php echo $text_country_select; ?></option>
                      </select>
                      
  				            <div class="well well-sm<?php if ($multishipping_dpd_country !== 2) { ?> hidden<?php } ?>" style="height: 80px; overflow: auto;">
                        <?php foreach ($dpd_countries as $country) { ?>
  					            <div class="checkbox">
                          <label><input type="checkbox" name="multishipping_dpd_countries[]" value="<?php echo $country['value']; ?>"<?php if ($country['selected']) echo ' checked="checked"'; ?> /> <?php echo $country['name']; ?></label>
                        </div>
                        <?php } ?>
                      </div>
              			</div>
            		  </div>
                </div>
  
                <div class="tab-pane" id="tab-ppl">
            		  <div class="form-group">
            		    <label class="col-sm-2 control-label" for="input-multishipping_ppl_country"><?php echo $entry_ppl_country; ?></label>
            			
                    <div class="col-sm-10">
                      <select name="multishipping_ppl_country" id="input-multishipping_ppl_country" class="form-control">
                        <option value="0"><?php echo $text_country_all; ?></option>
                        <option value="1"<?php if ($multishipping_ppl_country == 1) { ?> selected="selected"<?php } ?>><?php echo $text_country_auto; ?></option>
                        <option value="2"<?php if ($multishipping_ppl_country == 2) { ?> selected="selected"<?php } ?>><?php echo $text_country_select; ?></option>
                      </select>
                      
  				            <div class="well well-sm<?php if ($multishipping_ppl_country !== 2) { ?> hidden<?php } ?>" style="height: 80px; overflow: auto;">
                        <?php foreach ($ppl_countries as $country) { ?>
  					            <div class="checkbox">
                          <label><input type="checkbox" name="multishipping_ppl_countries[]" value="<?php echo $country['value']; ?>"<?php if ($country['selected']) echo ' checked="checked"'; ?> /> <?php echo $country['name']; ?></label>
                        </div>
                        <?php } ?>
                      </div>
              			</div>
            		  </div>
                </div>
                
                <div class="tab-pane" id="tab-geis">
            		  <div class="form-group">
            		    <label class="col-sm-2 control-label" for="input-multishipping_geis_country"><?php echo $entry_geis_country; ?></label>
            			
                    <div class="col-sm-10">
                      <select name="multishipping_geis_country" id="input-multishipping_geis_country" class="form-control">
                        <option value="0"><?php echo $text_country_all; ?></option>
                        <option value="1"<?php if ($multishipping_geis_country == 1) { ?> selected="selected"<?php } ?>><?php echo $text_country_auto; ?></option>
                        <option value="2"<?php if ($multishipping_geis_country == 2) { ?> selected="selected"<?php } ?>><?php echo $text_country_select; ?></option>
                      </select>
                      
  				            <div class="well well-sm<?php if ($multishipping_geis_country !== 2) { ?> hidden<?php } ?>" style="height: 80px; overflow: auto;">
                        <?php foreach ($geis_countries as $country) { ?>
  					            <div class="checkbox">
                          <label><input type="checkbox" name="multishipping_geis_countries[]" value="<?php echo $country['value']; ?>"<?php if ($country['selected']) echo ' checked="checked"'; ?> /> <?php echo $country['name']; ?></label>
                        </div>
                        <?php } ?>
                      </div>
              			</div>
            		  </div>
                </div>
              </div>
            </div>
            
            <div class="tab-pane" id="tab-shipping">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left"><?php echo $column_name; ?></td>
                      <td class="text-left" style="width: 80px;"><?php echo $column_sort_order; ?></td>
                      <td class="text-right" style="width: 96px;"></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if ($multishipping_services) { ?>
                    <?php foreach ($multishipping_services as $multishipping_service) { ?>
                    <tr>
                      <td class="text-left"><?php echo $multishipping_service['name']; ?></td>
                      <td class="text-center"><?php echo $multishipping_service['sort_order']; ?></td>
                      <td class="text-right">
                        <a href="<?php echo $multishipping_service['edit']; ?>" data-toggle="tooltip" title="<?php echo $button_edit; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo $multishipping_service['delete']; ?>" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                    <?php } else { ?>
                    <tr>
                      <td class="text-center" colspan="5"><?php echo $text_no_results; ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              
              <div class="pull-right">
                <a href="<?php echo $multishipping_service_add; ?>" data-toggle="tooltip" title="<?php echo $button_add; ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
              </div>
            </div>
          </div>      
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(function () {
  $('select[name="multishipping_heurekapoint_country"], select[name="multishipping_zasilkovna_country"], select[name="multishipping_dpd_country"], select[name="multishipping_ppl_country"], select[name="multishipping_geis_country"]').change(function () {
    if (parseInt($(this).val()) == 2)
    {
      $(this).next().removeClass('hidden');
    } else {
      $(this).next().addClass('hidden');
    }
  });
});
</script>

<?php echo $footer; ?> 