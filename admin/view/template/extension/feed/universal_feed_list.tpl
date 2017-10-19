<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
		<a href="<?php echo $insert; ?>" class="btn btn-primary" data-toggle="tooltip" title="<?php echo $button_add; ?>"><i class="fa fa-plus"></i></a>
		<button type="button" onclick="if (checkForm()) $('#form-uf').attr('action', '<?php echo $copy; ?>').submit();" class="btn btn-default" data-toggle="tooltip" title="<?php echo $button_copy; ?>"><i class="fa fa-copy"></i></button>
		<button type="button" onclick="if (checkForm()) $('#form-uf').attr('action', '<?php echo $clearcache; ?>').submit();" class="btn btn-danger" data-toggle="tooltip" title="<?php echo $button_clear_cache; ?>"><i class="fa fa-refresh"></i></button>
        <button type="button" onclick="if (checkForm() && confirm('<?php echo $text_confirm; ?>')) $('#form-uf').attr('action', '<?php echo $delete; ?>').submit();" class="btn btn-danger" data-toggle="tooltip" title="<?php echo $button_delete; ?>"><i class="fa fa-trash-o"></i></button>
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
    <?php if (!empty($success)) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $heading_title; ?></h3>
      </div>
      <div class="panel-body">
        <form method="post" enctype="multipart/form-data" id="form-uf">
		  <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php if ($sort == 'uf.name') { ?>
                    <a href="<?php echo $sort_name; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_name; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_name; ?>"><?php echo $column_name; ?></a>
                    <?php } ?></td>
                  <td class="text-left"><?php if ($sort == 'keyword') { ?>
                    <a href="<?php echo $sort_keyword; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_keyword; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_keyword; ?>"><?php echo $column_keyword; ?></a>
                    <?php } ?></td>
                  <td class="text-right"><?php if ($sort == 'uf.date_added') { ?>
                    <a href="<?php echo $sort_date_added; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_date_added; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_date_added; ?>"><?php echo $column_date_added; ?></a>
                    <?php } ?></td>
                  <td class="text-right"><?php if ($sort == 'uf.date_modified') { ?>
                    <a href="<?php echo $sort_date_modified; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_date_modified; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_date_modified; ?>"><?php echo $column_date_modified; ?></a>
                    <?php } ?></td>
                  <td class="text-left"><?php if ($sort == 'uf.status') { ?>
                    <a href="<?php echo $sort_status; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_status; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_status; ?>"><?php echo $column_status; ?></a>
                    <?php } ?></td>
                  <td class="text-right"><?php echo $column_action; ?></td>
                </tr>
              </thead>
              <tbody>
                <tr class="filter">
                  <td></td>
                  <td><input type="text" name="filter[name]" value="<?php if (isset($filter['name'])) echo $filter['name']; ?>" class="form-control" /></td>
                  <td><input type="text" name="filter[keyword]" value="<?php if (isset($filter['keyword'])) echo $filter['keyword']; ?>" class="form-control" /></td>
                  <td></td>
			      <td></td>
                  <td><select name="filter[status]" class="form-control">
                      <option value="*"></option>
                      <option value="1"<?php if (isset($filter['status']) && $filter['status']) echo ' selected="selected"'; ?>><?php echo $text_enabled; ?></option>
                      <option value="0"<?php if (isset($filter['status']) && !$filter['status']) echo ' selected="selected"'; ?>><?php echo $text_disabled; ?></option>
                    </select></td>
                  <td align="right"><button type="button" onclick="filter();" class="btn btn-primary"><i class="fa fa-search"></i> <?php echo $button_filter; ?></a></td>
                </tr>
                <?php if ($feeds) { ?>
                <?php foreach ($feeds as $feed) { ?>
                <tr>
                  <td class="text-center"><input type="checkbox" name="selected[]" value="<?php echo $feed['universal_feed_id']; ?>"<?php if ($feed['selected']) echo ' checked="checked"'; ?> /></td>
                  <td class="text-left"><?php echo $feed['name']; ?></td>
                  <td class="text-left"><?php echo $feed['keyword']; ?></td>
                  <td class="text-right"><?php echo $feed['date_added']; ?></td>
			      <td class="text-right"><?php echo $feed['date_modified']; ?></td>
                  <td class="text-left"><?php echo $feed['status']; ?></td>
                  <td class="text-right"><?php foreach ($feed['action'] as $action) { ?>
                    <a href="<?php echo $action['href']; ?>"  data-toggle="tooltip" title="<?php echo $action['text']; ?>" class="btn btn-primary"<?php if (isset($action['target'])) echo ' target="' . $action['target'] . '"'; ?>><i class="fa fa-<?php echo $action['icon']; ?>"></i></a>
                    <?php } ?></td>
                </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                  <td class="text-center" colspan="7"><?php echo $text_no_results; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
		  </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
          <div class="col-sm-6 text-right"><?php echo $results; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
function filter() {
	url = 'index.php?route=feed/universal_feed&token=<?php echo $token; ?>';

	$('[name^=filter]').each(function() {
		if ($(this).is('select') && $(this).val() != '*') {
			url += '&' + $(this).attr('name') + '=' + encodeURIComponent($(this).val());
		} else if ($(this).is('input[type=text]') && $(this).val()) {
			url += '&' + $(this).attr('name') + '=' + encodeURIComponent($(this).val());
		}
	});

	location = url;
}

function checkForm() {
	if (!$('#form-uf input[name*=selected]:checked').length) {
		alert('<?php echo $text_no_selected; ?>');

		return false;
	}

	return true;
}

$('#form-uf input').keydown(function(e) {
	if (e.keyCode == 13) {
		filter();
	}
});
//--></script>
<?php echo $footer; ?>