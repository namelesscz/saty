<h2><?php echo $text_instructions; ?></h2>
<p><?php echo $text_description; ?></p>
<div id="twisto-response"></div>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo $button_confirm; ?>" id="button-confirm" class="btn btn-primary" data-loading-text="<?php echo $text_loading; ?>" />
  </div>
</div>
<script type="text/javascript"><!--
var _twisto_config = {
	public_key: '<?php echo $public_key; ?>',
	script: 'https://static.twisto.cz/api/v2/twisto.js'
};
(function(e,g,a){function h(a){return function(){b._.push([a,arguments])}}var f=["check"],b=e||{},c=document.createElement(a);a=document.getElementsByTagName(a)[0];b._=[];for(var d=0;d<f.length;d++)b[f[d]]=h(f[d]);this[g]=b;c.type="text/javascript";c.async=!0;c.src=e.script;a.parentNode.insertBefore(c,a);delete e.script}).call(window,_twisto_config,"Twisto","script");

var twisto_sending = false;

$('#button-confirm').on('click', function() {
	if (twisto_sending) {
		return;
	}

	twisto_sending = true;

	$('#button-confirm').button('loading');

	Twisto.check('<?php echo $check_payload; ?>', function(resp) {
		if (resp.status === 'accepted') {
			$.ajax({
				type: 'post',
				url: 'index.php?route=extension/payment/twisto/confirm',
				data: {
					transaction_id: resp.transaction_id
				},
				cache: false,
				success: function() {
					location = '<?php echo $continue; ?>';
				},
				error: function() {
					twistoError('<?php echo $text_error_server; ?>');
				}
			});
		} else {
			twistoError(resp.reason);
		}
	}, function(resp) {
		var errors = [];

		if (resp && resp.order) {
			Object.keys(resp.order).forEach(function(t) {
				Object.keys(resp.order[t]).forEach(function(f) {
					resp.order[t][f].forEach(function(e) {
						errors.push('[' + t + ' > ' + f + ']: ' + e);
					});
				});
			});
		}

		twistoError(errors.length ? errors.join('<br>') : '<?php echo $text_error_server; ?>');
	});
});

function twistoError(err) {
	$('#button-confirm').button('reset');

	$('#twisto-response').html('<p class="alert alert-danger">' + err + '</p>');
	
	twisto_sending = false;
}
//--></script>
