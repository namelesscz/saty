            <div class="modal-header">   
              <div class="row-fluid"> 
                <div class="col-sm-10">
                  <h2 class="modal-title text-center"><?php echo $title; ?></h2>                
                </div>
                
                <div class="col-sm-2">
                  <img src="<?php echo $image_1; ?>" class="img-responsive" alt="" />    
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
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="email"><?php echo $text_city; ?></label>
                      <input type="text" class="form-control" id="modal_5_city"<?php if (!empty($shipping_city)) { ?> value="<?php echo $shipping_city; ?>" <?php } ?> />
                      <input type="hidden" id="modal_5_city_branch_id" />
                    </div>
                  </div>
                                    
                  <div class="col-sm-2 hidden">
                    <label>&nbsp;</label>
                    <button type="submit" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-primary btn-block"><?php echo $text_search; ?></button>
                  </div>
                </div>
              </form>
              
              <div class="clearfix"></div>
              
              <div class="row-fluid hidden" id="search_results">
                <h4><strong><?php echo $text_destination_detail; ?>:</strong> <span></span></h4>
                
                <br />
                
                <div class="row-fluid">
                  <div class="col-sm-4">                    
                    <ul class="list-unstyled pobocka_info">
                      <li>
                        <i class="fa fa-map-marker"></i> <span id="address"></span>
                      </li>

                      <!--<li>
                        <i class="fa fa-envelope"></i> <span id="mail"></span>
                      </li>

                      <li>
                        <i class="fa fa-phone"></i> <span id="telephone"></span>
                      </li>-->
                      
                      <li>
                        <i class="fa fa-clock-o"></i> <span id="hours"></span>
                      </li>
                    </ul>
                  </div>
                  
                  <div class="col-sm-4">
                    <img class="img-responsive" alt="" />
                  </div>
                  
                  <div class="col-sm-4" id="map"></div>
                </div>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="modal-footer">                        
              <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $text_close; ?></button>
              <button type="button" data-loading-text="<?php echo $text_loading; ?>" class="btn btn-success select_destination hidden" data-service_id="5"><?php echo $text_select_destination; ?></button>
            </div>
            
<script type="text/javascript">
$('#search_destinations').submit(function () {
  var modal_5_city = $('input#modal_5_city_branch_id').val();
    
  $('#search_destinations').find('button[type="submit"]').button('loading');  
  
  $.ajax({
    url: 'index.php?route=extension/shipping/multishipping/search_service_5&service_id=5&branch_id=' + encodeURIComponent(modal_5_city),
  	dataType: 'json',
  	success: function(json) {  
      $('.select_destination').removeClass('hidden');
      $('#search_results').find('img').attr('src', json['image']);
      $('#search_results').find('#address').html(json['address']);
      /*$('#search_results').find('#telephone').html(json['telephone']);
      $('#search_results').find('#mail').html('<a href="mailto:' + json['email'] + '">' + json['email'] + '</a>');*/
      $('#search_results').find('#hours').html(json['hours']);
      $('#search_results').find('#map').html('<iframe style="width: 100%; height: 166px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=' + json['lat'] + ',' + json['lon'] + '&hl=es;z=14&amp;output=embed"></iframe>');
      $('#search_destinations').find('button[type="submit"]').button('reset');
      $('#search_results').removeClass('hidden').find('h4 span').text(json['name']);      
    }
  });
  
  return false;                                     
});    

$('input#modal_5_city').autocomplete({
  	source: function(request, response) {
  		$.ajax({
  			url: 'index.php?route=extension/shipping/multishipping/autocomplete&service_id=5&filter_what=city&filter_value=' +  encodeURIComponent(request),
  			dataType: 'json',
  			success: function(json) {  
  				response($.map(json, function(item) {
  					return {
  						label: item['city'] + ' (' + item['address'] + ')', 
  						value: item['branch_id']
  					}
  				}));
  			}
  		});
  	},
	select: function(item) {
		$('input#modal_5_city').val(item['label']);
		$('input#modal_5_city_branch_id').val(item['value']);
    $('.select_destination').removeClass('hidden').data('branch_id', item['value']);
    
    $('#search_destinations').trigger('submit');
	}
});   
</script>