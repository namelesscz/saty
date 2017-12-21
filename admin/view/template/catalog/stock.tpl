<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <h1><?php echo $heading_title; ?></h1>
    </div>
  </div>
  <div class="container-fluid">
    <?php if (count($errors)) { ?>
    <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php foreach ($errors as $k=>$v) { echo "${v}<br />";} ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $import_file; ?></h3>
      </div>
      <div class="panel-body">
				<?php echo $out_table; ?>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>