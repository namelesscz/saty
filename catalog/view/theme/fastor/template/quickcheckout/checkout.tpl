<?php echo $header;
$theme_options = $registry->get('theme_options');
$config = $registry->get('config'); ?>
<?php $grid_center = 12;
if($column_left != '') $grid_center = $grid_center-3;
if($column_right != '') $grid_center = $grid_center-3;
$modules_old_opencart = new Modules($registry); ?>

<!-- BREADCRUMB
	================================================== -->
<div class="breadcrumb <?php if($theme_options->get( 'breadcrumb_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'breadcrumb_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'breadcrumb_layout' ) == 3) { echo 'fixed2'; } else { echo 'fixed'; } ?>">
	<div class="background-breadcrumb"></div>
	<div class="background" <?php $breadcrumb = $modules_old_opencart->getModules('breadcrumb'); if( count($breadcrumb) ) { foreach ($breadcrumb as $module) { echo $module; } } ?>>
		<div class="shadow"></div>
		<div class="pattern">
			<div class="container">
				<div class="clearfix">
				     <?php if(isset($product_page) && $theme_options->get( 'product_breadcrumb' ) != '2') { ?>
				     <?php $product_prev_next = $theme_options->getNextPrevProduct( $product_id ); ?>
				          <div class="row">
				               <div class="col-md-3 hidden-xs hidden-sm">
				                    <?php if(is_array($product_prev_next['prev'])) { ?>
				                         <?php if($theme_options->get( 'product_breadcrumb' ) == '1') { ?>
     				                    <div class="next-product-2 clearfix">
     				                         <a href="<?php echo $product_prev_next['prev']['href']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $product_prev_next['prev']['name']; ?>" class="button-previous-next"><?php if($theme_options->get( 'previous_product_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'previous_product_text', $config->get( 'config_language_id' ) ); } else { echo 'Previous product'; } ?></a>
     				                    </div>
     				                    <?php } else { ?>
     				                    <div class="next-product clearfix">
     				                         <div class="image"><a href="<?php echo $product_prev_next['prev']['href']; ?>"><img src="<?php echo $product_prev_next['prev']['thumb']; ?>" alt="<?php echo $product_prev_next['prev']['name']; ?>"></a></div>
     				                         <div class="right">
     				                              <div class="name"><a href="<?php echo $product_prev_next['prev']['href']; ?>"><?php echo $product_prev_next['prev']['name']; ?></a></div>
     				                              <div class="price"><?php if($product_prev_next['prev']['special']) { echo $product_prev_next['prev']['special']; } else { echo $product_prev_next['prev']['price']; } ?></div>
     				                         </div>
     				                    </div>
     				                    <?php } ?>
				                    <?php } ?>
				               </div>

				               <div class="col-md-6">
				                    <h1 id="title-page"><?php echo $heading_title; ?>
				                    	<?php if(isset($weight)) { if ($weight) { ?>
				                    	&nbsp;(<?php echo $weight; ?>)
				                    	<?php } } ?>
				                    </h1>

				                    <ul>
				                    	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
				                    	<li><a href="<?php echo $breadcrumb['href']; ?>"><?php if($breadcrumb['text'] != '<i class="fa fa-home"></i>') { echo $breadcrumb['text']; } else { if($theme_options->get( 'home_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'home_text', $config->get( 'config_language_id' ) ); } else { echo 'Home'; } } ?></a></li>
				                    	<?php } ?>
				                    </ul>
				               </div>

     					     <div class="col-md-3 hidden-xs hidden-sm">
     					          <?php if(is_array($product_prev_next['next'])) { ?>
          					          <?php if($theme_options->get( 'product_breadcrumb' ) == '1') { ?>
          					          <div class="next-product-2 right clearfix">
          					               <a href="<?php echo $product_prev_next['next']['href']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $product_prev_next['next']['name']; ?>" class="button-previous-next"><?php if($theme_options->get( 'next_product_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'next_product_text', $config->get( 'config_language_id' ) ); } else { echo 'Next product'; } ?></a>
          					          </div>
          					          <?php } else { ?>
          					          <div class="next-product right clearfix">
          					               <div class="image"><a href="<?php echo $product_prev_next['next']['href']; ?>"><img src="<?php echo $product_prev_next['next']['thumb']; ?>" alt="<?php echo $product_prev_next['next']['name']; ?>"></a></div>
          					               <div class="right">
          					                    <div class="name"><a href="<?php echo $product_prev_next['next']['href']; ?>"><?php echo $product_prev_next['next']['name']; ?></a></div>
          					                    <div class="price"><?php if($product_prev_next['next']['special']) { echo $product_prev_next['next']['special']; } else { echo $product_prev_next['next']['price']; } ?></div>
          					               </div>
          					          </div>
          					          <?php } ?>
     					          <?php } ?>
     					     </div>
     					</div>
					<?php } else { ?>
					     <h1 id="title-page"><?php echo $heading_title; ?>
					     	<?php if(isset($weight)) { if ($weight) { ?>
					     	&nbsp;(<?php echo $weight; ?>)
					     	<?php } } ?>
					     </h1>

					     <ul>
					     	<?php foreach ($breadcrumbs as $breadcrumb) { ?>
					     	<li><a href="<?php echo $breadcrumb['href']; ?>"><?php if($breadcrumb['text'] != '<i class="fa fa-home"></i>') { echo $breadcrumb['text']; } else { if($theme_options->get( 'home_text', $config->get( 'config_language_id' ) ) != '') { echo $theme_options->get( 'home_text', $config->get( 'config_language_id' ) ); } else { echo 'Home'; } } ?></a></li>
					     	<?php } ?>
					     </ul>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MAIN CONTENT
	================================================== -->
<div class="main-content <?php if($theme_options->get( 'content_layout' ) == 1) { echo 'full-width'; } elseif($theme_options->get( 'content_layout' ) == 4) { echo 'fixed3 fixed2'; } elseif($theme_options->get( 'content_layout' ) == 3) { echo 'fixed2'; } else { echo 'fixed'; } ?> inner-page">
	<div class="background-content"></div>
	<div class="background">
		<div class="shadow"></div>
		<div class="pattern">
			<div class="container">
				<?php
				$preface_left = $modules_old_opencart->getModules('preface_left');
				$preface_right = $modules_old_opencart->getModules('preface_right');
				?>
				<?php if( count($preface_left) || count($preface_right) ) { ?>
				<div class="row">
					<div class="col-sm-9">
						<?php
						if( count($preface_left) ) {
							foreach ($preface_left as $module) {
								echo $module;
							}
						} ?>
					</div>

					<div class="col-sm-3">
						<?php
						if( count($preface_right) ) {
							foreach ($preface_right as $module) {
								echo $module;
							}
						} ?>
					</div>
				</div>
				<?php } ?>

				<?php
				$preface_fullwidth = $modules_old_opencart->getModules('preface_fullwidth');
				if( count($preface_fullwidth) ) {
					echo '<div class="row"><div class="col-sm-12">';
					foreach ($preface_fullwidth as $module) {
						echo $module;
					}
					echo '</div></div>';
				} ?>

				<div class="row">
					<?php
					$columnleft = $modules_old_opencart->getModules('column_left');
					if( count($columnleft) ) { ?>
					<div class="col-md-3" id="column-left">
						<?php
						foreach ($columnleft as $module) {
							echo $module;
						}
						?>
					</div>
					<?php } ?>

					<?php $grid_center = 12; if( count($columnleft) ) { $grid_center = 9; } ?>
					<div class="col-md-<?php echo $grid_center; ?>">
						<?php
						$content_big_column = $modules_old_opencart->getModules('content_big_column');
						if( count($content_big_column) ) {
							foreach ($content_big_column as $module) {
								echo $module;
							}
						} ?>

						<?php
						$content_top = $modules_old_opencart->getModules('content_top');
						if( count($content_top) ) {
							foreach ($content_top as $module) {
								echo $module;
							}
						} ?>

						<div class="row">
							<?php
							$grid_content_top = 12;
							$grid_content_right = 3;
							$column_right = $modules_old_opencart->getModules('column_right');
							if( count($column_right) ) {
								if($grid_center == 9) {
									$grid_content_top = 8;
									$grid_content_right = 4;
								} else {
									$grid_content_top = 9;
									$grid_content_right = 3;
								}
							}
							?>
							<div class="col-md-<?php echo $grid_content_top; ?> center-column <?php if(isset($background_status)) { echo 'content-without-background'; } else { echo 'content-with-background'; } ?>" id="content">

<div class="container">
  <div class="row">
    <div id="content" class="col-sm-12">
	  <!-- Start -->
	  <?php /* FontAwesome for themes that require it ?>
	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	  <?php */ ?>
	  <div id="warning-messages"></div>
	  <div id="success-messages"></div>
	  <?php if ($mobile_stylesheet) { ?>
	  <link rel="stylesheet" media="screen and (min-width: 701px) and (max-width: 99999px)" href="<?php echo $stylesheet; ?>" />
	  <link rel="stylesheet" media="screen and (min-width: 1px) and (max-width: 700px)" href="<?php echo $mobile_stylesheet; ?>" />
	  <?php } else { ?>
	  <link rel="stylesheet" href="<?php echo $stylesheet; ?>" />
	  <?php } ?>

	  <?php if ($html_header) { ?>
	  <?php echo $html_header; ?>
	  <?php } ?>

	  <div id="quickcheckout-countdown"></div>

	  <div id="quickcheckoutconfirm">
		<div id="quickcheckout-disable">
		  <?php if (!$logged && $login_module) { ?>
		  <div class="quickcheckoutmid" id="login-box">
			<div id="checkout">
			  <div class="quickcheckout-heading"><i class="fa fa-sign-in"></i> <?php echo $text_checkout_option; ?></div>
			  <div class="quickcheckout-content"><?php echo $login; ?></div>
			</div>
			<div class="or"><?php echo $text_or; ?></div>
		  </div>
		  <?php } ?>
		  <div class="quickcheckoutleft">
			<div id="payment-address">
			  <div class="quickcheckout-heading"><i class="fa fa-user"></i> <?php echo !$logged ? $text_checkout_account : $text_checkout_payment_address; ?></div>
			  <div class="quickcheckout-content"><?php echo isset($guest) ? $guest : $payment_address; ?></div>
			</div>
			<?php if ($shipping_required) { ?>
			<div id="shipping-address">
			  <div class="quickcheckout-heading"><i class="fa fa-user"></i> <?php echo $text_checkout_shipping_address; ?></div>
			  <div class="quickcheckout-content"><?php echo isset($shipping_address) ? $shipping_address : ''; ?></div>
			</div>
			<?php } ?>
		  </div>
		  <div class="quickcheckoutright">
			<?php if ($shipping_required) { ?>
			<div id="shipping-method"<?php echo !$shipping_module ? ' style="display:none;"' : ''; ?>>
			  <div class="quickcheckout-heading"><i class="fa fa-truck"></i> <?php echo $text_checkout_shipping_method; ?></div>
			  <div class="quickcheckout-content"></div>
			</div>
			<?php } ?>
			<div id="payment-method"<?php echo !$payment_module ? ' style="display:none;"' : ''; ?>>
			  <div class="quickcheckout-heading"><i class="fa fa-credit-card"></i> <?php echo $text_checkout_payment_method; ?></div>
			  <div class="quickcheckout-content"></div>
			</div>
		  </div>
		  <?php if ($quickcheckout_layout == '2') { ?>
			<div class="quickcheckoutleft">
			  <?php if ($cart_module) { ?>
			  <div id="cart1">
				<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>
			  </div>
			  <?php } ?>
			</div>
			<div style="clear:right;"></div>
			<div class="quickcheckoutright">
			  <?php if ($voucher_module || $coupon_module || $reward_module) { ?>
			  <div id="voucher">
				<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;"><?php echo $voucher; ?></div>
			  </div>
			  <?php } ?>
			</div>
		  <?php } elseif ($quickcheckout_layout == '1' || $quickcheckout_layout == '3') { ?>
			<?php if ($cart_module || $voucher_module || $coupon_module || $reward_module) { ?>
			<div class="quickcheckoutleft extra-width">
			  <?php if ($cart_module) { ?>
			  <div id="cart1">
				<div class="quickcheckout-content" style="border:none; padding: 0px;"></div>
			  </div>
			  <?php } ?>
			  <?php if ($voucher_module || $coupon_module || $reward_module) { ?>
			  <div id="voucher">
				<div class="quickcheckout-content" style="border:none; padding: 0px;overflow: hidden;"><?php echo $voucher; ?></div>
			  </div>
			  <?php } ?>
			</div>
			<?php } ?>
		  <?php } ?>
		  <div style="clear: both;"></div>
		</div><!-- Close Quick Checkout Disable Div -->

		<div class="quickcheckoutmid">
		  <div id="terms">
			<div class="quickcheckout-content text-right"><?php echo $terms; ?>			
		  </div>
		</div>
	  </div><!-- Close QuickCheckoutConfirm div -->

	  <?php if ($html_footer) { ?>
	  <?php echo $html_footer; ?>
	  <?php } ?>
	  <!-- End -->
	 </div>
	</div>
</div>

<?php if ($custom_css) { ?>
<style type="text/css">
<?php echo $custom_css; ?>
</style>
<?php } ?>
<script type="text/javascript"><!--
<?php if ($countdown && $countdown_end) { ?>
$('#quickcheckout-countdown').countdown({
	timezone: <?php echo $timezone; ?>,
	until: new Date('<?php echo $countdown_end; ?>'),
    layout: '<?php echo addslashes($countdown_before); ?><b><?php echo $countdown_timer; ?></b> {desc}',
    description: '<?php echo addslashes($countdown_after); ?>'
});
<?php } ?>
<?php if ($load_screen) { ?>
$(window).load(function() {
    $.blockUI({
		message: '<h1 style="color:#ffffff;"><?php echo $text_please_wait; ?></h1>',
		css: {
			border: 'none',
			padding: '15px',
			backgroundColor: '#000000',
			'-webkit-border-radius': '10px',
			'-moz-border-radius': '10px',
			'-khtml-border-radius': '10px',
			'border-radius': '10px',
			opacity: .8,
			color: '#ffffff'
		}
	});

	setTimeout(function() {
		$.unblockUI();
	}, 2000);
});
<?php } ?>

<?php if (!$logged) { ?>
	<?php if ($save_data) { ?>
	// Save form data
	$(document).on('change', '#payment-address input[type=\'text\'], #payment-address select', function() {
		$.ajax({
			url: 'index.php?route=quickcheckout/checkout/save&type=payment',
			type: 'post',
			data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),
			dataType: 'json',
			cache: false,
			success: function(json) {
				// No action needed
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	});

	$(document).on('change', '#shipping-address input[type=\'text\'], #shipping-address select', function() {
		$.ajax({
			url: 'index.php?route=quickcheckout/checkout/save&type=shipping',
			type: 'post',
			data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea'),
			dataType: 'json',
			cache: false,
			success: function(json) {
				// No action needed
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	});
	<?php } ?>

	<?php if ($login_module) { ?>
	// Login Form Clicked
	$(document).on('click', '#button-login', function() {
		$.ajax({
			url: 'index.php?route=quickcheckout/login/validate',
			type: 'post',
			data: $('#checkout #login :input'),
			dataType: 'json',
			cache: false,
			beforeSend: function() {
				$('#button-login').prop('disabled', true);
				$('#button-login').button('loading');
			},
			complete: function() {
				$('#button-login').prop('disabled', false);
				$('#button-login').button('reset');
			},
			success: function(json) {
				$('.alert').remove();

				if (json['redirect']) {
					location = json['redirect'];
				} else if (json['error']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('html, body').animate({ scrollTop: 0 }, 'slow');

					$('.alert-danger').fadeIn('slow');
				}
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	});
	<?php } ?>

// Validate Register
function validateRegister() {
	$.ajax({
		url: 'index.php?route=quickcheckout/register/validate',
		type: 'post',
		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}

				<?php if ($text_error) { ?>
					if (json['error']['password']) {
						$('#payment-address input[name=\'password\']').after('<div class="text-danger">' + json['error']['password'] + '</div>');
					}

					if (json['error']['confirm']) {
						$('#payment-address input[name=\'confirm\']').after('<div class="text-danger">' + json['error']['confirm'] + '</div>');
					}
				<?php } ?>
				<?php if ($highlight_error) { ?>
					if (json['error']['password']) {
						$('#payment-address input[name=\'password\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
					}

					if (json['error']['confirm']) {
						$('#payment-address input[name=\'confirm\']').css('border', '1px solid #f00').css('background', '#F8ACAC');
					}
				<?php } ?>
			} else {
				<?php if ($shipping_required) { ?>
				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();

				if (shipping_address) {
					validateShippingMethod();
				} else {
					validateGuestShippingAddress();
				}
				<?php } else {?>
				validatePaymentMethod();
				<?php } ?>
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Validate Guest Payment Address
function validateGuestAddress() {
	$.ajax({
		url: 'index.php?route=quickcheckout/guest/validate',
		type: 'post',
		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address select, #payment-address textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}

				<?php if ($text_error) { ?>
					for (i in json['error']) {
						var element = $('#input-payment-' + i.replace('_', '-'));

						if ($(element).parent().hasClass('input-group')) {
							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
						} else {
							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
						}
					}
				<?php } ?>
				<?php if ($highlight_error) { ?>
					for (i in json['error']) {
						var element = $('#input-payment-' + i.replace('_', '-'));

						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
					}
				<?php } ?>
			} else {
				var create_account = $('#payment-address input[name=\'create_account\']:checked').val();

				<?php if ($shipping_required) { ?>
				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').val();

				if (create_account) {
					validateRegister();
				} else {
					if (shipping_address) {
						validateShippingMethod();
					} else {
						validateGuestShippingAddress();
					}
				}
				<?php } else { ?>
				if (create_account) {
					validateRegister();
				} else {
					validatePaymentMethod();
				}
				<?php } ?>
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Validate Guest Shipping Address
function validateGuestShippingAddress() {
	$.ajax({
		url: 'index.php?route=quickcheckout/guest_shipping/validate',
		type: 'post',
		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select, #shipping-address textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}

				<?php if ($text_error) { ?>
					for (i in json['error']) {
						var element = $('#input-shipping-' + i.replace('_', '-'));

						if ($(element).parent().hasClass('input-group')) {
							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
						} else {
							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
						}
					}
				<?php } ?>
				<?php if ($highlight_error) { ?>
					for (i in json['error']) {
						var element = $('#input-shipping-' + i.replace('_', '-'));

						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
					}
				<?php } ?>
			} else {
				validateShippingMethod();
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Confirm Payment
$(document).on('click', '#button-payment-method', function() {
	$('#button-payment-method').prop('disabled', true);
	$('#button-payment-method').button('loading');

	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');

	validateGuestAddress();
});
<?php } else { ?>
// Validate Payment Address
function validatePaymentAddress() {
	$.ajax({
		url: 'index.php?route=quickcheckout/payment_address/validate',
		type: 'post',
		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'password\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}

				<?php if ($text_error) { ?>
					for (i in json['error']) {
						var element = $('#input-payment-' + i.replace('_', '-'));

						if ($(element).parent().hasClass('input-group')) {
							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
						} else {
							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
						}
					}
				<?php } ?>
				<?php if ($highlight_error) { ?>
					for (i in json['error']) {
						var element = $('#input-payment-' + i.replace('_', '-'));

						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
					}
				<?php } ?>
			} else {
				<?php if ($shipping_required) { ?>
					validateShippingAddress();
				<?php } else { ?>
					validatePaymentMethod();
				<?php } ?>
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

<?php if ($shipping_required) { ?>
// Validate Shipping Address
function validateShippingAddress() {
	$.ajax({
		url: 'index.php?route=quickcheckout/shipping_address/validate',
		type: 'post',
		data: $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'password\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address select, #shipping-address textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}

				<?php if ($text_error) { ?>
					for (i in json['error']) {
						var element = $('#input-shipping-' + i.replace('_', '-'));

						if ($(element).parent().hasClass('input-group')) {
							$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');
						} else {
							$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');
						}
					}
				<?php } ?>
				<?php if ($highlight_error) { ?>
					for (i in json['error']) {
						var element = $('#input-shipping-' + i.replace('_', '-'));

						$(element).css('border', '1px solid #f00').css('background', '#F8ACAC');
					}
				<?php } ?>
			} else {
				validateShippingMethod();
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}
<?php } ?>

// Confirm payment
$(document).on('click', '#button-payment-method', function() {
	$('#button-payment-method').prop('disabled', true);
	$('#button-payment-method').button('loading');

	$('#button-payment-method').after('<i class="fa fa-spinner fa-spin"></i>');

	validatePaymentAddress();
});
<?php } ?> // Close if logged php

// Payment Method
function reloadPaymentMethod() {
	$.ajax({
		url: 'index.php?route=quickcheckout/payment_method',
		type: 'post',
		data: $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #payment-method input[type=\'text\'], #payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),
		dataType: 'html',
		cache: false,
		beforeSend: function() {
			moduleLoad($('#payment-method'), <?php echo $loading_display; ?>);
		},
		success: function(html) {
			moduleLoaded($('#payment-method'), <?php echo $loading_display; ?>);

			$('#payment-method .quickcheckout-content').html(html);

			<?php if ($load_screen) { ?>
			$.unblockUI();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

function reloadPaymentMethodById(address_id) {
	$.ajax({
		url: 'index.php?route=quickcheckout/payment_method&address_id=' + address_id,
		type: 'post',
		data: $('#payment-method input[type=\'checkbox\']:checked, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'hidden\'], #payment-method select, #payment-method textarea'),
		dataType: 'html',
		cache: false,
		beforeSend: function() {
			moduleLoad($('#payment-method'), <?php echo $loading_display; ?>);
		},
		success: function(html) {
			moduleLoaded($('#payment-method'), <?php echo $loading_display; ?>);

			$('#payment-method .quickcheckout-content').html(html);

			<?php if ($load_screen) { ?>
			$.unblockUI();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Validate Payment Method
function validatePaymentMethod() {
	$.ajax({
		url: 'index.php?route=quickcheckout/payment_method/validate',
		type: 'post',
		data: $('#payment-method select, #payment-method input[type=\'radio\']:checked, #payment-method input[type=\'checkbox\']:checked, #payment-method textarea'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			$('.alert, .text-danger').remove();

			if (json['redirect']) {
				location = json['redirect'];
			} else if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}
			} else {
				validateTerms();
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Shipping Method
<?php if ($shipping_required) { ?>
	function reloadShippingMethod(type) {
		if (type == 'payment') {
			var post_data = $('#payment-address input[type=\'text\'], #payment-address input[type=\'checkbox\']:checked, #payment-address input[type=\'radio\']:checked, #payment-address input[type=\'hidden\'], #payment-address select, #payment-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');
		} else {
			var post_data = $('#shipping-address input[type=\'text\'], #shipping-address input[type=\'checkbox\']:checked, #shipping-address input[type=\'radio\']:checked, #shipping-address input[type=\'hidden\'], #shipping-address select, #shipping-address textarea, #shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea');
		}

		$.ajax({
			url: 'index.php?route=quickcheckout/shipping_method',
			type: 'post',
			data: post_data,
			dataType: 'html',
			cache: false,
			beforeSend: function() {
				moduleLoad($('#shipping-method'), <?php echo $loading_display; ?>);
			},
			success: function(html) {
				moduleLoaded($('#shipping-method'), <?php echo $loading_display; ?>);

				$('#shipping-method .quickcheckout-content').html(html);
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	}

	function reloadShippingMethodById(address_id) {
		$.ajax({
			url: 'index.php?route=quickcheckout/shipping_method&address_id=' + address_id,
			type: 'post',
			data: $('#shipping-method input[type=\'text\'], #shipping-method input[type=\'checkbox\']:checked, #shipping-method input[type=\'radio\']:checked, #shipping-method input[type=\'hidden\'], #shipping-method select, #shipping-method textarea'),
			dataType: 'html',
			cache: false,
			beforeSend: function() {
				moduleLoad($('#shipping-method'), <?php echo $loading_display; ?>);
			},
			success: function(html) {
				moduleLoaded($('#shipping-method'), <?php echo $loading_display; ?>);

				$('#shipping-method .quickcheckout-content').html(html);
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	}

	// Validate Shipping Method
	function validateShippingMethod() {
		$.ajax({
			url: 'index.php?route=quickcheckout/shipping_method/validate',
			type: 'post',
			data: $('#shipping-method select, #shipping-method input[type=\'radio\']:checked, #shipping-method textarea, #shipping-method input[type=\'text\']'),
			dataType: 'json',
			cache: false,
			success: function(json) {
				$('.alert, .text-danger').remove();

				if (json['redirect']) {
					location = json['redirect'];
				} else if (json['error']) {
					$('#button-payment-method').prop('disabled', false);
					$('#button-payment-method').button('reset');
					$('#terms input[type=\'checkbox\']').prop('checked', false);

					$('.fa-spinner').remove();

					$('html, body').animate({ scrollTop: 0 }, 'slow');

					if (json['error']['warning']) {
						$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

						$('.alert-danger').fadeIn('slow');
					}
				} else {
					validatePaymentMethod();
				}
			},
			<?php if ($debug) { ?>
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
			<?php } ?>
		});
	}
<?php } ?>

// Validate confirm button
function validateTerms() {
	$.ajax({
		url: 'index.php?route=quickcheckout/terms/validate',
		type: 'post',
		data: $('#terms input[type=\'checkbox\']:checked'),
		dataType: 'json',
		cache: false,
		success: function(json) {
			if (json['redirect']) {
				location = json['redirect'];
			}

			if (json['error']) {
				$('#button-payment-method').prop('disabled', false);
				$('#button-payment-method').button('reset');
				$('#terms input[type=\'checkbox\']').prop('checked', false);

				$('.fa-spinner').remove();

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				if (json['error']['warning']) {
					$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

					$('.alert-danger').fadeIn('slow');
				}
			} else {
				loadConfirm();
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Load confirm
function loadConfirm() {
	$.ajax({
		url: 'index.php?route=quickcheckout/confirm',
		dataType: 'html',
		cache: false,
		beforeSend: function() {
			<?php if ($confirmation_page) { ?>
				$('html, body').animate({ scrollTop: 0 }, 'slow');

				<?php if ($slide_effect) { ?>
				$('#quickcheckoutconfirm').slideUp('slow');
				<?php } else { ?>
				$('#quickcheckoutconfirm').html('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
				<?php } ?>

				<?php if ($load_screen) { ?>
				$.blockUI({
					message: '<h1 style="color:#ffffff;"><?php echo $text_please_wait; ?></h1>',
					css: {
						border: 'none',
						padding: '15px',
						backgroundColor: '#000000',
						'-webkit-border-radius': '10px',
						'-moz-border-radius': '10px',
						'-khtml-border-radius': '10px',
						'border-radius': '10px',
						opacity: .8,
						color: '#ffffff'
					}
				});
				<?php } ?>
			<?php } ?>
		},
		success: function(html) {
			<?php if ($confirmation_page) { ?>
				<?php if ($load_screen) { ?>
				$.unblockUI();
				<?php } ?>

				$('#quickcheckoutconfirm').hide().html(html);

				<?php if (!$auto_submit) { ?>
					<?php if ($slide_effect) { ?>
					$('#quickcheckoutconfirm').slideDown('slow');
					<?php } else { ?>
					$('#quickcheckoutconfirm').show();
					<?php } ?>
				<?php } else { ?>
				$('#quickcheckoutconfirm').after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
				<?php } ?>
			<?php } else { ?>
				$('#terms .terms').hide();
				$('#payment').html(html).slideDown('fast');

				<?php if ($auto_submit) { ?>
				$('#payment').hide().after('<div class="text-center"><i class="fa fa-spinner fa-spin fa-5x"></i></div>');
				<?php } ?>

				$('html, body').animate({ scrollTop: $('#terms').offset().top }, 'slow');

				disableCheckout();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

// Load cart
<?php if ($cart_module) { ?>
function loadCart() {
	$.ajax({
		url: 'index.php?route=quickcheckout/cart',
		dataType: 'html',
		cache: false,
		beforeSend: function() {
			$('.tooltip').remove();

			moduleLoad($('#cart1'), <?php echo $loading_display; ?>);
		},
		success: function(html) {
			moduleLoaded($('#cart1'), <?php echo $loading_display; ?>);

			$('#cart1 .quickcheckout-content').html(html);
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
}

	<?php if (!$shipping_required) { ?>
	$(document).ready(function(){
		loadCart();
	});
	<?php } ?>
<?php } ?>

<?php if ($voucher_module || $coupon_module || $reward_module) { ?>
// Validate Coupon
$(document).on('click', '#button-coupon', function() {
	$.ajax({
		url: 'index.php?route=quickcheckout/voucher/validateCoupon',
		type: 'post',
		data: $('#coupon-content :input'),
		dataType: 'json',
		cache: false,
		beforeSend: function() {
			$('#button-coupon').prop('disabled', true);
			$('#button-coupon').after('<i class="fa fa-spinner fa-spin"></i>');
		},
		complete: function() {
			$('#button-coupon').prop('disabled', false);
			$('#coupon-content .fa-spinner').remove();
		},
		success: function(json) {
			$('.alert').remove();

			$('html, body').animate({ scrollTop: 0 }, 'slow');

			if (json['success']) {
				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('.alert-success').fadeIn('slow');
			} else if (json['error']) {
				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

				$('.alert-danger').fadeIn('slow');
			}

			<?php if (!$logged) { ?>
				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('payment');
					<?php } ?>
				} else {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('shipping');
					<?php } ?>
				}
			<?php } else { ?>
				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {
					reloadPaymentMethod();
				} else {
					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());
				}

				<?php if ($shipping_required) { ?>
				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
					reloadShippingMethod('shipping');
				} else {
					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
				}
				<?php } ?>
			<?php } ?>

			<?php if (!$shipping_required) { ?>
			loadCart();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
});

$(document).on('click', '#button-voucher', function() {
	$.ajax({
		url: 'index.php?route=quickcheckout/voucher/validateVoucher',
		type: 'post',
		data: $('#voucher-content :input'),
		dataType: 'json',
		cache: false,
		beforeSend: function() {
			$('#button-voucher').prop('disabled', true);
			$('#button-voucher').after('<i class="fa fa-spinner fa-spin"></i>');
		},
		complete: function() {
			$('#button-voucher').prop('disabled', false);
			$('#voucher-content .fa-spinner').remove();
		},
		success: function(json) {
			$('.alert').remove();

			$('html, body').animate({ scrollTop: 0 }, 'slow');

			if (json['success']) {
				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('.alert-success').fadeIn('slow');
			} else if (json['error']) {
				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

				$('.alert-danger').fadeIn('slow');
			}

			<?php if (!$logged) { ?>
				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('payment');
					<?php } ?>
				} else {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('shipping');
					<?php } ?>
				}
			<?php } else { ?>
				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {
					reloadPaymentMethod();
				} else {
					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());
				}

				<?php if ($shipping_required) { ?>
				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
					reloadShippingMethod('shipping');
				} else {
					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
				}
				<?php } ?>
			<?php } ?>

			<?php if (!$shipping_required) { ?>
			loadCart();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
});

$(document).on('click', '#button-reward', function() {
	$.ajax({
		url: 'index.php?route=quickcheckout/voucher/validateReward',
		type: 'post',
		data: $('#reward-content :input'),
		dataType: 'json',
		cache: false,
		beforeSend: function() {
			$('#button-reward').prop('disabled', true);
			$('#button-reward').after('<i class="fa fa-spinner fa-spin"></i>');
		},
		complete: function() {
			$('#button-reward').prop('disabled', false);
			$('#reward-content .fa-spinner').remove();
		},
		success: function(json) {
			$('.alert').remove();

			$('html, body').animate({ scrollTop: 0 }, 'slow');

			if (json['success']) {
				$('#success-messages').prepend('<div class="alert alert-success" style="display:none;"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('.alert-success').fadeIn('slow');
			} else if (json['error']) {
				$('#warning-messages').prepend('<div class="alert alert-danger" style="display: none;"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '</div>');

				$('.alert-danger').fadeIn('slow');
			}

			<?php if (!$logged) { ?>
				if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('payment');
					<?php } ?>
				} else {
					reloadPaymentMethod();

					<?php if ($shipping_required) { ?>
					reloadShippingMethod('shipping');
					<?php } ?>
				}
			<?php } else { ?>
				if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {
					reloadPaymentMethod();
				} else {
					reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());
				}

				<?php if ($shipping_required) { ?>
				if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
					reloadShippingMethod('shipping');
				} else {
					reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
				}
				<?php } ?>
			<?php } ?>

			<?php if (!$shipping_required) { ?>
			loadCart();
			<?php } ?>
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
});
<?php } ?>

<?php if ($shipping_required) { ?>
$(document).on('focusout', 'input[name=\'postcode\']', function() {
	<?php if (!$logged) { ?>
	if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
		reloadShippingMethod('payment');
	} else {
		reloadShippingMethod('shipping');
	}
	<?php } else { ?>
	if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
		reloadShippingMethod('shipping');
	} else {
		reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
	}
	<?php } ?>
});
<?php } ?>

<?php if ($highlight_error) { ?>
	$(document).on('keydown', 'input', function() {
		$(this).css('background', '').css('border', '');

		$(this).siblings('.text-danger').remove();
	});
	$(document).on('change', 'select', function() {
		$(this).css('background', '').css('border', '');

		$(this).siblings('.text-danger').remove();
	});
<?php } ?>

<?php if ($edit_cart) { ?>
$(document).on('click', '.button-update', function() {
	$.ajax({
		url: 'index.php?route=quickcheckout/cart/update',
		type: 'post',
		data: $('#cart1 :input'),
		dataType: 'json',
		cache: false,
		beforeSend: function() {
			$('#cart1 .button-update').prop('disabled', true);
		},
		success: function(json) {
			if (json['redirect']) {
				location = json['redirect'];
			} else {
				<?php if (!$logged) { ?>
					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
						reloadPaymentMethod();

						<?php if ($shipping_required) { ?>
						reloadShippingMethod('payment');
						<?php } ?>
					} else {
						reloadPaymentMethod();

						<?php if ($shipping_required) { ?>
						reloadShippingMethod('shipping');
						<?php } ?>
					}
				<?php } else { ?>
					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {
						reloadPaymentMethod();
					} else {
						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());
					}

					<?php if ($shipping_required) { ?>
					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
						reloadShippingMethod('shipping');
					} else {
						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
					}
					<?php } ?>
				<?php } ?>

				<?php if (!$shipping_required) { ?>
				loadCart();
				<?php } ?>
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});
});

$(document).on('click', '.button-remove', function() {
	var remove_id = $(this).attr('data-remove');

	$.ajax({
		url: 'index.php?route=quickcheckout/cart/update&remove=' + remove_id,
		type: 'get',
		dataType: 'json',
		cache: false,
		beforeSend: function() {
			$('#cart1 .button-remove').prop('disabled', true);
		},
		success: function(json) {
			if (json['redirect']) {
				location = json['redirect'];
			} else {
				<?php if (!$logged) { ?>
					if ($('#payment-address input[name=\'shipping_address\']:checked').val()) {
						reloadPaymentMethod();

						<?php if ($shipping_required) { ?>
						reloadShippingMethod('payment');
						<?php } ?>
					} else {
						reloadPaymentMethod();

						<?php if ($shipping_required) { ?>
						reloadShippingMethod('shipping');
						<?php } ?>
					}
				<?php } else { ?>
					if ($('#payment-address input[name=\'payment_address\']:checked').val() == 'new') {
						reloadPaymentMethod();
					} else {
						reloadPaymentMethodById($('#payment-address select[name=\'address_id\']').val());
					}

					<?php if ($shipping_required) { ?>
					if ($('#shipping-address input[name=\'shipping_address\']:checked').val() == 'new') {
						reloadShippingMethod('shipping');
					} else {
						reloadShippingMethodById($('#shipping-address select[name=\'address_id\']').val());
					}
					<?php } ?>
				<?php } ?>

				<?php if (!$shipping_required) { ?>
				loadCart();
				<?php } ?>
			}
		},
		<?php if ($debug) { ?>
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
		<?php } ?>
	});

	return false;
});
<?php } ?>

$('.date').datetimepicker({
	format: 'YYYY-MM-DD'
});

$('.time').datetimepicker({
	format: 'HH:mm'
});

$('.datetime').datetimepicker();
//--></script>
<?php include('catalog/view/theme/' . $config->get($config->get('config_theme') . '_directory') . '/template/new_elements/wrapper_bottom.tpl'); ?>
<?php echo $footer; ?>
