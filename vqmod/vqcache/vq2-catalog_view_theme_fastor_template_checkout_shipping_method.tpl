<?php if ($error_warning) { ?>
<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?></div>
<?php } ?>
<?php if ($shipping_methods) { ?>
<p><?php echo $text_shipping_method; ?></p>
<?php foreach ($shipping_methods as $shipping_method) { ?>
<p><strong><?php echo $shipping_method['title']; ?></strong></p>
<?php if (!$shipping_method['error']) { ?>
<?php foreach ($shipping_method['quote'] as $quote) { ?>
<div class="radio">
  <label>
    <?php if ($quote['code'] == $code || !$code) { ?>
    <?php $code = $quote['code']; ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" checked="checked" />
    <?php } else { ?>
    <input type="radio" name="shipping_method" value="<?php echo $quote['code']; ?>" />
    <?php } ?>
    <?php echo $quote['title']; ?> - <?php echo $quote['text']; ?></label>

				<?php if (!empty($quote['description'])) { echo $quote['description']; } ?>
			
</div>
<?php } ?>
<?php } else { ?>
<div class="alert alert-danger"><?php echo $shipping_method['error']; ?></div>
<?php } ?>
<?php } ?>
<?php } ?>
<p style="padding-top: 15px"><strong><?php echo $text_comments; ?></strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"><?php echo $comment; ?></textarea>
</p>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo $button_continue; ?>" id="button-shipping-method" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary" />
  </div>
</div>

				
        <div class="modal fade" id="multishippingModal" tabindex="-1" role="dialog" aria-labelledby="multishippingModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content"></div>
          </div>
        </div>    

            

        <script type="text/javascript">
          (function($) {
          	$.fn.autocomplete = function(option) {
          		return this.each(function() {
          			this.timer = null;
          			this.items = new Array();
          
          			$.extend(this, option);
          
          			$(this).attr('autocomplete', 'off');
          
          			// Focus
          			$(this).on('focus', function() {
                  $(this).addClass('focus');
          				this.request();
          			});
          
          			// Blur
          			$(this).on('blur', function() {
                  $(this).removeClass('focus');
                  
          				setTimeout(function(object) {
          					object.hide();
          				}, 200, this);
          			});
          
          			// Keydown
          			$(this).on('keydown', function(event) {
          				switch(event.keyCode) {
          					case 27: // escape
          						this.hide();
          						break;
          					default:
          						this.request();
          						break;
          				}
          			});
          
          			// Click
          			this.click = function(event) {
          				event.preventDefault();
          
          				value = $(event.target).parent().attr('data-value');
          
          				if (value && this.items[value]) {
          					this.select(this.items[value]);
          				}
          			}
          
          			// Show
          			this.show = function() {
          				var pos = $(this).position();
          
          				$(this).siblings('ul.dropdown-menu').css({
          					top: pos.top + $(this).outerHeight(),
          					left: pos.left
          				});
          
          				$(this).siblings('ul.dropdown-menu').show();
          			}
          
          			// Hide
          			this.hide = function() {
          				$(this).siblings('ul.dropdown-menu').not(':hover').hide();
          			}
          
          			// Request
          			this.request = function() {
          				clearTimeout(this.timer);
          
          				this.timer = setTimeout(function(object) {
          					object.source($(object).val(), $.proxy(object.response, object));
          				}, 200, this);
          			}
          
          			// Response
          			this.response = function(json) {
          				html = '';
          
          				if (json.length) {
          					for (i = 0; i < json.length; i++) {
          						this.items[json[i]['value']] = json[i];
          					}
          
          					for (i = 0; i < json.length; i++) {
          						if (!json[i]['category']) {
          							html += '<li data-value="' + json[i]['value'] + '"><a href="#">' + json[i]['label'] + '</a></li>';
          						}
          					}
          
          					// Get all the ones with a categories
          					var category = new Array();
          
          					for (i = 0; i < json.length; i++) {
          						if (json[i]['category']) {
          							if (!category[json[i]['category']]) {
          								category[json[i]['category']] = new Array();
          								category[json[i]['category']]['name'] = json[i]['category'];
          								category[json[i]['category']]['item'] = new Array();
          							}
          
          							category[json[i]['category']]['item'].push(json[i]);
          						}
          					}
          
          					for (i in category) {
          						html += '<li class="dropdown-header">' + category[i]['name'] + '</li>';
          
          						for (j = 0; j < category[i]['item'].length; j++) {
          							html += '<li data-value="' + category[i]['item'][j]['value'] + '"><a href="#">&nbsp;&nbsp;&nbsp;' + category[i]['item'][j]['label'] + '</a></li>';
          						}
          					}
          				}
          
          				if (html) {
          					this.show();
          				} else {
          					this.hide();
          				}
          
          				$(this).siblings('ul.dropdown-menu').html(html);
          			}
          
                var ul = $('<ul class="dropdown-menu"/>');
          
          			$(this).after(ul);
                
                ul.hover(function () {
                  $(this).prev().focus();
                }).click(function () {
                  $(this).prev().focus();
                });
                
          			$(this).siblings('ul.dropdown-menu').delegate('a', 'click', $.proxy(this.click, this));
          
          		});
          	}
          })(window.jQuery);

          $('.multishipping_destination[data-toggle="modal"]').click(function(e) {            

          	var $url = '<?php echo $multishipping_destination_select; ?>&multishipping_id=' + $(this).data('multishipping_id'),

                $btn = $(this).button('loading');

        

          	e.preventDefault();        

                

          	$.get($url, function(data) {

              $btn.button('reset');



          	 $('#multishippingModal .modal-content').html(data);

             $('#multishippingModal').modal('show');

          	});

          });

          
          $('#multishippingModal').on('shown.bs.modal', function () {
            var input = $('input[id$="_city"]'),
                strLength = input.val().length * 2;
          
                input.focus();
                input[0].setSelectionRange(strLength, strLength);
          });

          $('body').on('click', function (e) {

              $('[data-toggle=popover]').each(function () {

                  if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {

                      $(this).popover('hide');

                  }

              });

          });

          

          $('body').on('click', '.select_destination', function () {

            var $this = $(this),

                $service_id = $(this).data('service_id');

              

            $this.button('loading');

              

            $.ajax({

              url: 'index.php?route=extension/shipping/multishipping/select_destination&service_id=' + $(this).data('service_id') + '&branch_id=' + $(this).data('branch_id'),

            	dataType: 'json',

            	success: function(json) { 

                $this.button('reset');

                    

                $('#destination_service_' + $service_id).html('<strong>' + json['name'] + '</strong> (' + json['address'] + ')').next().text('<?php echo $text_change_destination; ?>');

                

                $('#multishippingModal').modal('hide'); 

              }

            });          

          });

        </script>

        

			