<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-google-business-data" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-google-merchant-center" class="form-horizontal">

            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_status" id="input-google-merchant-center-status" class="form-control">
                  <?php if ($google_merchant_center_status) { ?>
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
                <select name="google_merchant_center_file" id="input-google-merchant-center-file" class="form-control">
                  <?php if ($google_merchant_center_file) { ?>
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
              <label class="col-sm-2 control-label" for="input-google-merchant-base"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_base); ?>"><?php echo $entry_google_merchant_base; ?></span></label>
              <div class="col-sm-10">
                <div class="well well-sm" style="height: 150px; overflow: auto;">
                  <?php foreach ($google_merchant_base_category as $merchant_category) { ?>
                    <div class="checkbox">
                      <label>
                        <?php if ($merchant_category['status']=="1") { ?>
                          <input type="checkbox" name="google_merchant_base[]" value="<?php echo $merchant_category['taxonomy_id']; ?>" checked="checked" />
                          <?php echo $merchant_category['name']; ?>
                        <?php } else { ?>
                          <input type="checkbox" name="google_merchant_base[]" value="<?php echo $merchant_category['taxonomy_id']; ?>" />
                          <?php echo $merchant_category['name']; ?>
                        <?php } ?>
                      </label>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="google-merchant-center-description"><?php echo $entry_google_merchant_center_description; ?></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_description" id="google-merchant-center-description" class="form-control">
                  <?php if ($google_merchant_center_description) { ?>
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
              <label class="col-sm-2 control-label" for="google-merchant-center-description-html"><?php echo $entry_google_merchant_center_description_html; ?></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_description_html" id="google-merchant-center-description-html" class="form-control">
                  <?php if ($google_merchant_center_description_html) { ?>
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
              <label class="col-sm-2 control-label" for="input-google-merchant-center-attribute"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_attribute); ?>"><?php echo $entry_google_merchant_center_attribute; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_attribute" id="input-google-merchant-center-attribute" class="form-control" style="max-width: 90%;">
                  <?php foreach ($merchant_center_attributes as $merchant_center_attribute) {
                    if ($google_merchant_center_attribute==$merchant_center_attribute['attribute_id']) { ?>
                      <option value="<?php echo $merchant_center_attribute['attribute_id']; ?>" selected="selected"><?php echo $merchant_center_attribute['name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $merchant_center_attribute['attribute_id']; ?>"><?php echo $merchant_center_attribute['name']; ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-google-merchant-center-attribute-type"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_attribute_type); ?>"><?php echo $entry_google_merchant_center_attribute_type; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_attribute_type" id="input-google-merchant-center-attribute-type" class="form-control" style="max-width: 90%;">
                  <?php foreach ($merchant_center_attributes_type as $merchant_center_type) {
                    if ($google_merchant_center_attribute_type==$merchant_center_type['attribute_id']) { ?>
                      <option value="<?php echo $merchant_center_type['attribute_id']; ?>" selected="selected"><?php echo $merchant_center_type['name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $merchant_center_type['attribute_id']; ?>"><?php echo $merchant_center_type['name']; ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-google-merchant-center-option"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_option); ?>"><?php echo $entry_google_merchant_center_option; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_option" id="input-google-merchant-center-option" class="form-control" style="max-width: 90%;">
                  <?php foreach ($merchant_center_option as $merchant_option) {
                    if ($google_merchant_center_option==$merchant_option['option_id']) { ?>
                      <option value="<?php echo $merchant_option['option_id']; ?>" selected="selected"><?php echo $merchant_option['name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $merchant_option['option_id']; ?>"><?php echo $merchant_option['name']; ?></option>
                    <?php } ?>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-google-merchant-center-availability"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_availability); ?>"><?php echo $entry_google_merchant_center_availability; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_availability" id="input-google-merchant-center-availability" class="form-control">
                  <?php if ($google_merchant_center_availability=='in stock') { ?>
                    <option value="in stock" selected="selected"><?php echo 'in stock'; ?></option>
                    <option value="out of stock"><?php echo 'out of stock'; ?></option>
                    <option value="preorder"><?php echo 'preorder'; ?></option>
                    <option value="skip products"><?php echo 'skip products'; ?></option>
                  <?php } elseif ($google_merchant_center_availability=='out of stock') { ?>
                    <option value="in stock"><?php echo 'in stock'; ?></option>
                    <option value="out of stock" selected="selected"><?php echo 'out of stock'; ?></option>
                    <option value="preorder"><?php echo 'preorder'; ?></option>
                    <option value="skip products"><?php echo 'skip products'; ?></option>
                  <?php } elseif ($google_merchant_center_availability=='preorder') { ?>
                    <option value="in stock"><?php echo 'in stock'; ?></option>
                    <option value="out of stock"><?php echo 'out of stock'; ?></option>
                    <option value="preorder" selected="selected"><?php echo 'preorder'; ?></option>
                    <option value="skip products"><?php echo 'skip products'; ?></option>
                  <?php } else { ?>
                    <option value="in stock"><?php echo 'in stock'; ?></option>
                    <option value="out of stock"><?php echo 'out of stock'; ?></option>
                    <option value="preorder"><?php echo 'preorder'; ?></option>
                    <option value="skip products" selected="selected"><?php echo 'skip products'; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-google-merchant-center-shipping-flat"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_shipping_flat); ?>"><?php echo $entry_google_merchant_center_shipping_flat; ?></span></label>
              <div class="col-sm-10">
                <input type="text" name="google_merchant_center_shipping_flat" value="<?php echo $google_merchant_center_shipping_flat; ?>" placeholder="<?php echo $entry_google_merchant_center_shipping_flat; ?>" id="input-google-merchant-center-shipping-flat" class="form-control" />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="google-merchant-center-feed-id1"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_feed_id1); ?>"><?php echo $entry_google_merchant_center_feed_id1; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_feed_id1" id="google-merchant-center-feed-id1" class="form-control">
                  <?php if ($google_merchant_center_feed_id1 == 'model') { ?>
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
              <label class="col-sm-2 control-label" for="google-merchant-center-use-taxes"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_merchant_center_use_taxes); ?>"><?php echo $entry_google_merchant_center_use_taxes; ?></span></label>
              <div class="col-sm-10">
                <select name="google_merchant_center_use_taxes" id="google-merchant-center-use-taxes" class="form-control">
                  <?php if ($google_merchant_center_use_taxes==2) { ?>
                    <option value="0"><?php echo $text_enabled_default; ?></option>
                    <option value="2" selected="selected"><?php echo $text_disabled; ?></option>
                  <?php } else { ?>
                    <option value="0" selected="selected"><?php echo $text_enabled_default; ?></option>
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
