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
          <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-google-business-data" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="input-status"><?php echo $entry_status; ?></label>
              <div class="col-sm-10">
                <select name="google_business_data_status" id="input-status" class="form-control">
                  <?php if ($google_business_data_status) { ?>
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
                <select name="google_business_data_file" id="input-file" class="form-control">
                  <?php if ($google_business_data_file) { ?>
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
              <label class="col-sm-2 control-label" for="google-business-data-sold-out"><?php echo $entry_google_business_data_sold_out; ?></label>
              <div class="col-sm-10">
                <select name="google_business_data_sold_out" id="google-business-data-sold-out" class="form-control">
                  <?php if ($google_business_data_sold_out) { ?>
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
              <label class="col-sm-2 control-label" for="google-business-data-description"><?php echo $entry_google_business_data_description; ?></label>
              <div class="col-sm-10">
                <select name="google_business_data_description" id="google-business-data-description" class="form-control">
                  <?php if ($google_business_data_description) { ?>
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
              <label class="col-sm-2 control-label" for="google-business-data-description-html"><?php echo $entry_google_business_data_description_html; ?></label>
              <div class="col-sm-10">
                <select name="google_business_data_description_html" id="google-business-data-description-html" class="form-control">
                  <?php if ($google_business_data_description_html) { ?>
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
              <label class="col-sm-2 control-label" for="google-business-data-feed-id1"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_business_data_feed_id1); ?>"><?php echo $entry_google_business_data_feed_id1; ?></span></label>
              <div class="col-sm-10">
                <select name="google_business_data_feed_id1" id="feed-business-data-id1" class="form-control">
                  <?php if ($google_business_data_feed_id1 == 'model') { ?>
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
              <label class="col-sm-2 control-label" for="business-data-id2"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_business_data_feed_id2); ?>"><?php echo $entry_google_business_data_feed_id2; ?></span></label>
              <div class="col-sm-10">
                <select name="google_business_data_feed_id2" id="business-data-id2" class="form-control">
                  <?php if ($google_business_data_feed_id2 == '') { ?>
                    <option value="" selected="selected"><?php echo ''; ?></option>
                    <option value="model"><?php echo 'model'; ?></option>
                    <option value="product_id"><?php echo 'product_id'; ?></option>
                  <?php } elseif ($google_business_data_feed_id2 == 'model') { ?>
                    <option value=""><?php echo ''; ?></option>
                    <option value="model" selected="selected"><?php echo 'model'; ?></option>
                    <option value="product_id"><?php echo 'product_id'; ?></option>
                  <?php } else { ?>
                    <option value=""><?php echo ''; ?></option>
                    <option value="model"><?php echo 'model'; ?></option>
                    <option value="product_id" selected="selected"><?php echo 'product_id'; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label" for="google-business-data-use-taxes"><span data-toggle="tooltip" data-html="true" title="<?php echo htmlspecialchars($help_google_business_data_use_taxes); ?>"><?php echo $entry_google_business_data_use_taxes; ?></span></label>
              <div class="col-sm-10">
                <select name="google_business_data_use_taxes" id="google-business-data-use-taxes" class="form-control">
                  <?php if ($google_business_data_use_taxes==1) { ?>
                    <option value="0"><?php echo $text_default; ?></option>
                    <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                    <option value="2"><?php echo $text_disabled; ?></option>
                  <?php } elseif ($google_business_data_use_taxes==2) { ?>
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
