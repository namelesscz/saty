<?php echo $header; ?>
<div class="container">
  <ul class="breadcrumb">
    <?php foreach ($breadcrumbs as $breadcrumb) { ?>
    <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
    <?php } ?>
  </ul>
  <div class="row"><?php echo $column_left; ?>
    <?php if ($column_left && $column_right) { ?>
    <?php $class = 'col-sm-6'; ?>
    <?php } elseif ($column_left || $column_right) { ?>
    <?php $class = 'col-sm-9'; ?>
    <?php } else { ?>
    <?php $class = 'col-sm-12'; ?>
    <?php } ?>
    <div id="content" class="<?php echo $class; ?>"><?php echo $content_top; ?>
      <h1><?php echo $heading_title; ?></h1>
      <?php echo $text_message; ?>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
      </div>
      <?php echo $content_bottom; ?></div>
    <?php echo $column_right; ?></div>
</div>
<?php if (isset($cart_total)) { ?>

<script>
glami('track', 'Purchase', {
<?php if (isset($order_id) && isset($products)){ ?>
    item_ids: ['<?php echo implode("', '",$products); ?>'],
<?php }?>
    value: <?php echo $cart_total; ?>,
    currency: 'CZK',
    transaction_id: '<?php echo $order_id;?>'
});

</script>
<img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=339431586504119&ev=Purchase&cd[currency]=CZK&cd[value]=<?php echo $cart_total; ?>"/>
<?php } ?>
<?php echo $footer; ?>