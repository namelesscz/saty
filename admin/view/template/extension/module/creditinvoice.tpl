<?php echo $header; ?><?php echo $column_left; ?>
  <div id="content">
    <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="submit" form="form-account" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
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
      <div class="panel panel-default">
        <div class="panel-body">
         <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo $tab_ready; ?></a></li>
          <li><a href="#tab_instructions" data-toggle="tab"><?php echo $tab_instructions; ?></a></li>
          <li><a href="#tab_uninstall" data-toggle="tab"><?php echo $tab_uninstall; ?></a></li>
          <li><a href="#tab_support" data-toggle="tab"><?php echo $tab_support; ?></a></li>
          </ul>
          <div class="tab-content">
           <div class="tab-pane active" id="tab-general">
            <legend><h3><?php echo $text_ready; ?> <i class="fa fa-shopping-cart" style="color:#98c721"></i></h3></legend>
            <div class="form-group">
             <div class="col-sm-12"><?php echo $entry_done; ?></div>
            </div>
           </div>
           <div class="tab-pane" id="tab_instructions">
            <legend><h3><?php echo $text_manually; ?> <i class="fa fa-exclamation" style="color:#98c721"></i></h3></legend>
            <div class="form-group">
             <div class="col-sm-12"><b><?php echo $text_company_details; ?></b></div>
             <div class="col-sm-12"><p><?php echo $entry_company_details; ?></p></div>
            </div>
            <br><br>
            <div class="form-group">
             <div class="col-sm-12"><b><?php echo $text_creditinv_status; ?></b></div>
             <div class="col-sm-12"><p><?php echo $entry_creditinv_setting; ?></p></div>
            </div>
           </div>
           <div class="tab-pane" id="tab_uninstall">
            <legend><h3><?php echo $text_uninstall; ?> <i class="fa fa-minus-circle" style="color:red"></i></h3></legend>
            <div class="form-group">
             <div class="col-sm-12"><?php echo $entry_uninstall; ?></div>
            </div>
           </div>
           <div class="tab-pane" id="tab_support">         
            <legend><h3><?php echo $text_support; ?> <i class="fa fa-life-ring" style="color:#98c721"></i></h3></legend>
            <div class="form-group">
             <div class="col-sm-2"><?php echo $text_extension; ?></div>
             <div class="col-sm-10"><?php echo $entry_extension; ?></div>
            </div>
            <br>
            <div class="form-group">
             <div class="col-sm-2"><?php echo $text_ocp; ?></div>
             <div class="col-sm-10"><?php echo $entry_ocp; ?></div>
            </div>
            <br>
            <div class="form-group">
             <div class="col-sm-2"><?php echo $text_developed; ?></div>
             <div class="col-sm-10"><?php echo $entry_developer; ?></div>
            </div>
             <br>
           <div class="form-group">
             <div class="col-sm-2"><img src="view/image/creditinvoice/dymago.png" alt="Dymago OpenCart partner" title="Dymago OpenCart partner" /></div>
             <div class="col-sm-10"><?php echo $entry_support; ?></div>
             <div class="col-sm-10"><?php echo $entry_mail; ?></div>
             <div class="col-sm-12"><hr></div>
             <div class="col-sm-10"><i><?php echo $entry_copyright; ?></i></div>
            </div>
         </div>
          </div>
          </div>
      </div>
    </div>
  </div>
<?php echo $footer; ?>