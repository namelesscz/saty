<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-facebook-catalog" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>
        </div>
        <div class="panel-body">
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-facebook-catalog" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_status" id="input-status" class="form-control">
                  <?php if ($facebook_catalog_status) { ?>
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
              <label class="col-sm-2 control-label" for="input-file"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_file); ?>"><?php echo $entry_file; ?></span></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_file" id="input-file" class="form-control">
                  <?php if ($facebook_catalog_file) { ?>
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
              <label class="col-sm-2 control-label" for="input-data-feed"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_data_feed); ?>"><?php echo $entry_data_feed; ?></span></label>
              <div class="col-sm-10">
                <textarea rows="5" id="input-data-feed" class="form-control" readonly><?php echo $data_feed; ?></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="facebook-catalog-availability"><?php echo $entry_facebook_catalog_availability; ?></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_availability" id="facebook-catalog-availability" class="form-control">
                  <?php if ($facebook_catalog_availability==1) { ?>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="0"><?php echo $text_disabled; ?></option>
                    <option value="2"><?php echo 'skip products'; ?></option>
                  <?php } elseif ($facebook_catalog_availability==2) { ?>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="0"><?php echo $text_disabled; ?></option>
                    <option value="2" selected="selected"><?php echo 'skip products'; ?></option>
                  <?php } else { ?>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                    <option value="2"><?php echo 'skip products'; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="facebook-catalog-description"><?php echo $entry_facebook_catalog_description; ?></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_description" id="facebook-catalog-description" class="form-control">
                  <?php if ($facebook_catalog_description) { ?>
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
              <label class="col-sm-2 control-label" for="facebook-catalog-description-html"><?php echo $entry_facebook_catalog_description_html; ?></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_description_html" id="facebook-catalog-description-html" class="form-control">
                  <?php if ($facebook_catalog_description_html) { ?>
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
              <label class="col-sm-2 control-label" for="facebook-catalog-attribute-type"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_facebook_attribute_type); ?>"><?php echo $entry_facebook_attribute_type; ?></span></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_attribute_type" id="facebook-catalog-attribute-type" class="form-control">
                  <?php foreach ($facebook_attributes_type as $facebook_type) {
                    if ($facebook_catalog_attribute_type==$facebook_type['attribute_id']) { ?>
                      <option value="<?php echo $facebook_type['attribute_id']; ?>" selected="selected"><?php echo $facebook_type['name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $facebook_type['attribute_id']; ?>"><?php echo $facebook_type['name']; ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="facebook-catalog-feed-id1"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_facebook_catalog_feed_id1); ?>"><?php echo $entry_facebook_catalog_feed_id1; ?></span></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_feed_id1" id="facebook-catalog-feed-id1" class="form-control">
                  <?php if ($facebook_catalog_feed_id1 == 'model') { ?>
                    <option value="model" selected="selected"><?php echo 'model'; ?></option>
                    <option value="product_id"><?php echo 'product_id'; ?></option>
                  <?php } else { ?>
                    <option value="product_id" selected="selected"><?php echo 'product_id'; ?></option>
                    <option value="model"><?php echo 'model'; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="facebook-catalog-use-taxes"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_facebook_catalog_use_taxes); ?>"><?php echo $entry_facebook_catalog_use_taxes; ?></span></label>
              <div class="col-sm-10">
                <select name="facebook_catalog_use_taxes" id="facebook-catalog-use-taxes" class="form-control">
                  <?php if ($facebook_catalog_use_taxes==1) { ?>
                    <option value="0"><?php echo $text_default; ?></option>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="2"><?php echo $text_disabled; ?></option>
                  <?php } elseif ($facebook_catalog_use_taxes==2) { ?>
                    <option value="0"><?php echo $text_default; ?></option>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="2" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                    <option value="0" selected="selected"><?php echo $text_default; ?></option>
                    <option value="1"><?php echo $text_enabled; ?></option>
                    <option value="2"><?php echo $text_disabled; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php echo $footer; ?>
