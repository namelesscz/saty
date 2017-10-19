<?php echo $header; 
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); 
include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_top.tpl'); ?>

<?php echo $text_message; ?>
<div class="buttons" style="padding-top: 10px">
  <div class="pull-right"><a href="<?php echo $continue; ?>" class="btn btn-primary"><?php echo $button_continue; ?></a></div>
</div>
  
<?php include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
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