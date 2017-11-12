            <div class="modal-header">   
              <div class="row-fluid"> 
                <div class="col-sm-2">
                  <img src="<?php echo $image_1; ?>" class="img-responsive" alt="" />    
                </div>
                
                <div class="col-sm-8">
                  <h2 class="modal-title text-center"><?php echo $title; ?></h2>                
                </div>
                
                <div class="col-sm-2">
                  <img src="<?php echo $image_2; ?>" class="img-responsive" alt="" />
                </div>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="modal-body">
              <form id="search_destinations">
                <div class="row-fluid">
                  <div class="col-sm-12">                        
                    <div class="alert alert-info">
                      <i class="fa fa-info-circle"></i> 
                      <?php echo $text_help; ?> 
                      
                      <button type="button" class="close" data-dismiss="alert">×</button>
                    </div>
                  </div>
                  
                  <div class="col-sm-6">
                    <div class="form-group ui-widget">
                      <label for="modal_2_city"><?php echo $text_city; ?></label>
                      <input type="text" class="form-control" id="modal_2_city"<?php if (!empty($shipping_city)) { ?> value="<?php echo $shipping_city; ?>" <?php } ?> />
                    </div>
                  </div>
                  
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="modal_2_postcode"><?php echo $text_postcode; ?></label>
                      <input type="text" class="form-control" id="modal_2_postcode"<?php if (!empty($shipping_postcode)) { ?> value="<?php echo $shipping_postcode; ?>" <?php } ?> />
                    </div>                  
                  </div>
                  
                  <div class="col-sm-2">
                    <label>&nbsp;</label>
                    <button type="submit" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary btn-block"><?php echo $text_search; ?></button>
                  </div>
                </div>
              </form>
              
              <div class="clearfix"></div>
              
              <div class="row-fluid hidden" id="search_results">
                <h4><?php echo $text_search_results; ?></h4>
                
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <td colspan="2"><strong><?php echo $column_name; ?></strong></td>
                        <td><strong><?php echo $column_address; ?></strong></td>
                        <td>
                          <button type="button" class="btn btn-primary btn-xs button-legend" data-toggle="popover" data-placement="top" title="<?php echo $text_legend; ?>" data-html="true" data-content="<ul class='list-unstyled'><li><img src='<?php echo $image_legend_1; ?>' alt='' /> <?php echo $text_legend_1; ?></li><li><img src='<?php echo $image_legend_2; ?>' alt='' /> <?php echo $text_legend_2; ?></li><li><img src='<?php echo $image_legend_3; ?>' alt='' /> <?php echo $text_legend_3; ?></li><li><img src='<?php echo $image_legend_4; ?>' alt='' /> <?php echo $text_legend_4; ?></li><li><img src='<?php echo $image_legend_5; ?>' alt='' /> <?php echo $text_legend_5; ?></li><li class='hidden'><img src='<?php echo $image_legend_6; ?>' alt='' /> <?php echo $text_legend_6; ?></li></ul>">?</button>
                          <strong><?php echo $column_information; ?></strong>
                        </td>
                        <td style="width: 1px;"></td>
                      </tr> 
                    </thead>
                    
                    <tbody></tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $text_close; ?></button>
            </div>
            
<script type="text/javascript">
  $('#multishippingModal [data-toggle="popover"]').popover(); 
  
$('#search_destinations').submit(function () {
  var modal_2_city = $('input#modal_2_city').val(),
      modal_2_postcode = $('input#modal_2_postcode').val();
    
  $('#search_destinations').find('button[type="submit"]').button('loading');  
      
  $.ajax({
    url: 'index.php?route=extension/shipping/multishipping/search_service_2&service_id=2&city=' + encodeURIComponent(modal_2_city) + '&postcode=' +  encodeURIComponent(modal_2_postcode),
  	dataType: 'json',
  	success: function(json) {  
      $('#search_destinations').find('button[type="submit"]').button('reset');
      $('#search_results').removeClass('hidden');
      
      html = '';
      
			if (Object.keys(json).length) {
        for (i in json) {
          html_hours = '<ul class=\'list-unstyled padding0\'>';
          
          for (i2 in json[i]['hours'])
          {
            html_hours += '<li><strong>' + json[i]['hours'][i2]['text'] + '</strong>: ' + json[i]['hours'][i2]['from'] + ' - ' + json[i]['hours'][i2]['to'] + '</li>';
          }
          
          html_hours += '</ul>';
                                  
          html += '<tr>';
          html += '  <td style="width: 1px;">';
          html += '    <button type="button" class="btn btn-primary btn-xs" data-toggle="popover" data-placement="right" title="<?php echo $text_open_hours; ?>" data-html="true" data-content="' + html_hours + '">';
          html += '      <i class="fa fa-clock-o"></i>';                                                                                                                                                                                                                                                                                                                          
          html += '    </button>';
          html += '  </td>';
          html += '  <td>' + json[i]['city'] + '</td>';
          html += '  <td>' + json[i]['address'] + '</td>';
          html += '  <td>';
          
          if (json[i]['legend_1'])
          {
            html += '<img src="<?php echo $image_legend_1; ?>" alt="" class="modal_2_icon" />';
          }
          
          if (json[i]['legend_2'])
          {
            html += '<img src="<?php echo $image_legend_2; ?>" alt="" class="modal_2_icon" />';
          }
          
          if (json[i]['legend_3'])
          {
            html += '<img src="<?php echo $image_legend_3; ?>" alt="" class="modal_2_icon" />';
          }
          
          if (json[i]['legend_4'])
          {
            html += '<img src="<?php echo $image_legend_4; ?>" alt="" class="modal_2_icon" />';
          }
          
          if (json[i]['legend_5'])
          {
            html += '<img src="<?php echo $image_legend_5; ?>" alt="" class="modal_2_icon" />';
          }
          
          html += '  </td>';
          html += '  <td>';
          html += '    <button type="button" class="btn btn-success select_destination" data-service_id="2" data-branch_id="' + json[i]['branch_id'] + '" data-loading-text="<?php echo $text_loading; ?>"><?php echo $text_select_destination; ?></button>';
          html += '  </td>';
          html += '</tr>';        
				}
			} else {
        html += '<tr>';
        html += '  <td colspan="5" class="text-center">';
        html += '    <p><?php echo $text_no_results; ?></p>'; 
        html += '  </td>';
        html += '</tr>';  
      }
      
      $('#search_results').find('table tbody').html(html).find('[data-toggle="popover"]').popover();
  	}
  }); 
  
  return false;
});
  
$('input#modal_2_city').autocomplete({
  	source: function(request, response) {
  		$.ajax({
  			url: 'index.php?route=extension/shipping/multishipping/autocomplete&service_id=2&filter_what=city&filter_value=' +  encodeURIComponent(request),
  			dataType: 'json',
  			success: function(json) {  
  				response($.map(json, function(item) {
  					return {
  						label: item['city'] + ' (' + item['address'] + ')',
              postcode: item['postcode'], 
  						value: item['city']
  					}
  				}));
  			}
  		});
  	},
	select: function(item) {
		$('input#modal_2_city').val(item['value']);
		$('input#modal_2_postcode').val(item['postcode']);
    
    $('#search_destinations').trigger('submit');
	}
});

$('input#modal_2_postcode').autocomplete({
  	source: function(request, response) {
  		$.ajax({
  			url: 'index.php?route=shipping/multishipping/autocomplete&service_id=2&filter_what=postcode&filter_value=' +  encodeURIComponent(request),
  			dataType: 'json',
  			success: function(json) {  
  				response($.map(json, function(item) {
  					return {
  						label: item['postcode'] + ' - ' + item['city'] + ' (' + item['address'] + ')',
              postcode: item['postcode'], 
  						value: item['city']
  					}
  				}));
  			}
  		});
  	},
	select: function(item) {
		$('input#modal_2_city').val(item['value']);
		$('input#modal_2_postcode').val(item['postcode']);
    
    $('#search_destinations').trigger('submit');
	}
});
</script>