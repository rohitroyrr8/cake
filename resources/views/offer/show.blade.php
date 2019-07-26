@extends('layouts.app')

@section('content')
	<div class="container-fluid">
	  <!-- Page Heading -->
	  <h1 class="h3 mb-2 text-gray-800"></h1>
	  <!-- DataTales Example -->
	    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">SMU-DE CPL - Status: Apply to Run</h6>
            </div>
            <div class="card-body">
            	<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="creative-tab" data-toggle="tab" href="#creative" role="tab" aria-controls="creative" aria-selected="false">Creative</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="campaign-tab" data-toggle="tab" href="#campaign" role="tab" aria-controls="campaign" aria-selected="false">Campaign</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="landing_page-tab" data-toggle="tab" href="#landing_page" role="tab" aria-controls="landing_page" aria-selected="false">Landing Page</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="affiliate-tab" data-toggle="tab" href="#affiliate" role="tab" aria-controls="affiliate" aria-selected="false">Affiliate</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <!-- HOME tab-->
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  		<div class="row">
				  			<div class="col-md-6">
				  				<h4>Club Mahindra CPL 25 years(Text+img)</h4>
				  				<small>Advertiser: Resultrix	Vertical: Insurance <br> 
								Currency: Indian Rupee (₹)	Price Format: CPA</small>
								<div class="mt-4">
									<button class="btn btn-primary" onclick="pixel_popup()">Pixel</button>
									<button class="btn btn-outline-primary ">Test</button>
								</div>
				  			</div>
				  			<div class="col-md-6">
				  				<form>
				  					<div class="form-group row">
									    <label class="col-sm-6 col-form-label">Name</label>
									    <div class="col-sm-6">
									      	<input type="text" class="form-control" value="Liberty Car Insurance CPL">
									    </div>	
									</div>
									<div class="form-group row">
									    <label class="col-sm-6 col-form-label">Vertical</label>
									    <div class="col-sm-6">
									    	<select class="form-control"   name="vertical_id">
									    		<option value="bfsi">BFSI</option>
									    	</select>
									    </div>	
									</div>
									<div class="form-group row">
									    <label class="col-sm-6 col-form-label">Landing Page</label>
									    <div class="col-sm-6">
									    	<select class="form-control"   name="landing_page">
									    		<option value="bfsi">18 July</option>
									    	</select>
									    </div>	
									</div>
									<div class="form-group row">
									    <label class="col-sm-6 col-form-label">Recieved</label>
									    <div class="col-sm-6">
									    	<input class="form-control"  type="text" name="recived" value="12.00">
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Payout</label>
									    <div class="col-sm-6">
								    		<input class="form-control" type="text" name="payout" value="32.00">
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Stauts</label>
									    <div class="col-sm-6">
								    		<select class="form-control"   name="status">
									    		<option value="apply_to_run">Apply to Run</option>
									    	</select>
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Payout</label>
									    <div class="col-sm-6">
								    		<select class="form-control"   name="link_type">
									    		<option value="apply_to_run">link_type</option>
									    	</select>
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Hidden</label>
									    <div class="col-sm-6">
								    		<input type="checkbox" name="hidden">
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Redirect Offer</label>
									    <div class="col-sm-6">
								    		<select class="form-control"   name="redirect_offer">
									    		<option value="">select</option>
									    		<option value="sdf">sdfsf</option>
									    	</select>
									    </div>	
									</div>
									<div class="form-group row">
									    <label  class="col-sm-6 col-form-label">Redirect 404</label>
									    <div class="col-sm-6">
								    		<input type="checkbox" name="hidden">
									    </div>	
									</div>
									<div class="form-group" style="float:right;" class="mt-4">
										<input type="submit" name="save" value="Save" class=" btn btn-primary">
									</div>
				  				</form>
				  			</div>		
				  		</div>
				  </div>
				  <!--  ending HOME tab -->
				  <div class="tab-pane fade" id="creative" role="tabpanel" aria-labelledby="creative-tab">
				  	<h4>Creatives</h4>
				  	<small>These are HTML, image, link, or Flash files used to promote your Offer. Email advertising would use HTML or TXT files. Display would use a HTML or an image.A Flash Creative is an Adobe Flash file that can display animations and play sounds.</small>
				  	<div>
				  		<button onclick="addCreative_popup()" class="btn btn-primary float-right m-1 mb-3">Add Creative</button>	
				  	</div> 
				  	<div class="table-responsive">
		              <table class="table " id="creative_table" width="100%" cellspacing="0">
		                <div id="loading" class="text-center">
		                    <img style="width: 15%" src="https://cdn-images-1.medium.com/max/1600/0*4Gzjgh9Y7Gu8KEtZ.gif">
		                </div>
		              </table>
		  			</div>
		  			
				  </div>
				  <div class="tab-pane fade" id="campaign" role="tabpanel" aria-labelledby="campaign-tab">.cam.</div>
				  <div class="tab-pane fade" id="landing_page" role="tabpanel" aria-labelledby="landing_page-tab">

				  	<h4>Landing Page</h4>
				  	<small>Landing Pages represent the destination URLs users may be redirected to after clicking on a CAKE Unique Link. This feature allows you to categorize destination URLs, redirect users based off different criteria as well as report on the performance of each Landing Page.</small>
				  	<div class="row">
				  		<div class="col-md-8">
				  			<div>
						  		<button onclick="refresh_landingPage_data()" class="btn btn-primary float-right m-1 mb-3">Refresh</button>	
						  	</div> 
						  	<div class="table-responsive">
				              <table class="table " id="landing_page_table" width="100%" cellspacing="0">
				                <div id="landing_page_loading_div" class="text-center">
				                    <img style="width: 15%" src="https://cdn-images-1.medium.com/max/1600/0*4Gzjgh9Y7Gu8KEtZ.gif">
				                </div>
				              </table>
				  			</div>
				  		</div>
				  		<div class="col-md-4" style="border: 1px solid darkgray;padding: 10px;">
				  			<h6 class="mt-2 mb-2">Add a new Landing Page</h6>
				  			<form class="form" method="POST" action="{{route('landing_page.store', $offerId)}}">
				  				@csrf
			  					<div class="form-group row">
								    <label class="col-sm-4 col-form-label">Name</label>
								    <div class="col-sm-8">
								      	<input type="text" class="form-control" value="" name="name">
								    </div>	
								</div>
								<div class="form-group row">
								    <label class="col-sm-4 col-form-label">Url</label>
								    <div class="col-sm-8">
								      	<input name="url" type="url" class="form-control" value="">
								    </div>	
								</div>
								<input type="hidden" id="offerId" name="offerId" value="{{$offerId}}">
								<div class="form-group row mt-4">
								    <div class="col-sm-12">
								      	<input type="submit" class=" btn btn-primary" value="Save" style="        font-size: 12px;padding: 4px 21px;">
								      	
								    </div>	
								</div>
							</form>
				  		</div>
				  	</div>
				  </div>
				  <div class="tab-pane fade" id="affiliate" role="tabpanel" aria-labelledby="affiliate-tab">.aff.</div>
				</div>

				<!-- popup pixel modal -->
				<div class="modal fade" id="pixelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalCenterTitle">Generate Conversion and/or Event Pixels</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <div class="row">
				        	<div class="col-md-4">
				        		<h6>Choose the offer of the pixel you want to generate. Click "Next" to continue.</h6>
					        	<div class="form-group row">
								    <label  class="col-sm-6 col-form-label">Offer</label>
								    <div class="col-sm-6">
							    		<select class="form-control"   name="redirect_offer">
								    		<option value="sdf">sdfsf</option>
								    	</select>
								    </div>
								</div>
								<div class="form-group row">
								    <label  class="col-sm-6 col-form-label">Pixel</label>
								    <div class="col-sm-6">
							    		<select class="form-control"   name="redirect_offer">
								    		<option value="sdf">Conversion/Install</option>
								    	</select>
								    </div>
								</div>
								<div class="form-group row">
								    <label  class="col-sm-6 col-form-label">Include Request Session Id</label>
								    <div class="col-sm-6">
							    		<input type="checkbox" name="hidden">
								    </div>	
								</div>
								<div class="form-group row">
								    <label  class="col-sm-6 col-form-label">Include User ID</label>
								    <div class="col-sm-6">
							    		<input type="checkbox" name="hidden">
								    </div>	
								</div>
								<div class="form-group" style="float:right;" class="mt-4">
									<input type="submit" name="save" value="Next" class=" btn btn-primary">
								</div>
				        	</div>
				        	<div class="col-md-8">
				        		<h6>Conversion/Install</h6>
				        		<div class="row">
				        			<div class="col-md-2">iFrame :</div>
				        			<div class="col-md-10">
				        				<code style="font-size: 13px">&lt;iframe src="https://apoxymedia.net/p.ashx?o=531&e=70&t=TRANSACTION_ID" height="1" width="1" frameborder="0"&gt;&lt;/iframe&gt;</code>
				        			</div>
				        			<div class="col-md-2">Jacascript :</div>
				        			<div class="col-md-10">
				        				<code style="font-size: 13px">&lt;script type="text/javascript" src="https://apoxymedia.net/p.ashx?o=531&e=70&f=js&t=TRANSACTION_ID"&gt;&lt;/script&gt;</code>
				        			</div>
				        			<div class="col-md-2">Image :</div>
				        			<div class="col-md-10">
				        				<code style="font-size: 13px">
				        					&lt;img src="https://apoxymedia.net/p.ashx?o=531&e=70&f=img&t=TRANSACTION_ID" width="1" height="1" border="0" /&gt;
				        				</code>
				        			</div>
				        			<div class="col-md-2">Postback url :</div>
				        			<div class="col-md-10">
				        				<code style="font-size: 13px">
				        					https://apoxymedia.net/p.ashx?o=690&e=216&f=pb&r=REQUEST_SESSION_ID&t=TRANSACTION_ID
				        				</code>
				        			</div>

				        		</div>

				        	</div>
				        </div>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- ending popup modal -->

				<!-- add creative modal -->
				<div class="modal fade" id="addCreativeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				  	<div class="modal-dialog modal-md modal-dialog-centered" role="document">
				    	<div class="modal-content">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="exampleModalCenterTitle">Add a New Creative</h5>
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          		<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
					      	<div class="modal-body p-4">
					        	<div class="row">
					        		<small>Enter the details of this creative. Click "Create" to continue.</small>
					        		<form>
					  					<div class="form-group row">
										    <label class="col-sm-6 col-form-label">Offer</label>
										    <div class="col-sm-6">
										      	<select class="form-control">
										      		<option value="offer id">offer name</option>
										      	</select>
										    </div>	
										</div>
										<div class="form-group row">
										    <label class="col-sm-6 col-form-label">Creative type</label>
										    <div class="col-sm-6">
										      	<select class="form-control">
										      		<option value="email">Email</option>
										      		<option value="image">Image</option>
										      	</select>
										    </div>	
										</div>
										<div class="form-group row">
										    <label class="col-sm-6 col-form-label">Status</label>
										    <div class="col-sm-6">
										      	<select class="form-control">
										      		<option value="email">Active</option>
										      		<option value="image">Inactive</option>
										      		<option value="hidden">Hidden</option>
										      	</select>
										    </div>	
										</div>
										<div class="form-group row">
										    <label class="col-sm-6 col-form-label">Name</label>
										    <div class="col-sm-6">
										      	<input type="type" name="creative name" class="form-control">
										    </div>	
										</div>
										<div class="form-group row">
										    <div class="col-sm-6">
										      	<input type="submit" class="form-control btn btn-primary" value="Finish">
										    </div>	
										</div>
									</form>
					        	</div>
					    	</div>
						</div>
					</div>
				</div>

				<!-- ending popup modal -->
            </div>
        </div>
    </div>
    @include('include.datatable-script')
    <script>
    	function addCreative_popup() {
    		$('#addCreativeModal').modal({backdrop: 'static', keyboard: false})  
    	}
    	function pixel_popup() {
    		$('#pixelModal').modal({backdrop: 'static', keyboard: false})  
    	}
    	fetch_creative();
    	fetch_landingPage();

    	function refresh_landingPage_data() {
    		$('#landing_page_loading_div').show();
        	$('#landing_page_table').DataTable().destroy();
    	 	fetch_landingPage();
    	}

    	function fetch_creative() {
    		$.get('../api/offers', function(response) {
            $('#loading').hide();
            notify('success', response.message);
            var res = '';
            res += 
                  '<thead>'+
                  '<tr>'+
                  '<th>Offer Name</th>'+
                  '<th>Vertical Name</th>'+
                  '<th>Advertiser Name</th>'+
                  '<th>Payout</th>'+
                  '<th>Status</th>'+      
                  '<th>Created At</th>'+      
                  '</tr>'+
                  '</thead>'+
                  '<tbody>';

            $.each(response.offers, function(key, value) {
              res +=
                  '<tr>'+
                  '<td>('+value.id+') '+value.name+'</td>'+
                  '<td>'+value.vertical_id+'</td>'+
                  '<td>'+value.advertiser_id+'</td>'+
                  '<td>'+value.price_format+'-'+value.offer_currency+''+value.payment_model+'</td>'+
                  '<td>'+value.status+'</td>'+
                  '<td>'+value.updated_at+'</td>'+
                  '</tr>';
            });

            res += '</tbody>';
            $('#creative_table').html(res);
            $('#creative_table').DataTable({
              paging : true,
            });
    	});
    	}

    	function fetch_landingPage() {
    		offerId = $('#offerId').val();
    		$.get('../api/offers/'+offerId+'/landing_page', function(response) {
            $('#landing_page_loading_div').hide();
            notify('success', response.message);
            var res = '';
            res += 
                  '<thead>'+
                  '<tr>'+
                  '<th>Name</th>'+
                  '<th>URL</th>'+
                  '<th>Action</th>'+
                  '</tr>'+
                  '</thead>'+
                  '<tbody>';

            $.each(response.landing_pages, function(key, value) {
              res +=
                  '<tr>'+
                  '<td>'+value.name+'</td>'+
                  '<td><code>'+value.url+'</code></td>'+
                  '<td><i id="'+value.id+'" onclick="removelandingPage(this)" class="fas fa-trash-alt"></i></td>'+
                  '</tr>';
            });

            res += '</tbody>';
            $('#landing_page_table').html(res);
            $('#landing_page_table').DataTable({
              paging : true,
            });
    	});	
    	}	

    	function removelandingPage(element) {
    		var lp_id = element.id;
    		var offerId = $('#offerId').val();

    		$.ajax({
    			type : 'DELETE',
    			url : '../api/offer/'+offerId+'/landing_page/'+lp_id+'/delete',
    			dataType: "json"
    		})
    		.done(function(response) {
    			notify('success', response.message);
		        refresh_landingPage_data();	
    		})
    		.fail(function(data) {
		        $.each(data.responseJSON, function (key, value) {
		        	notify('error', value);
		            
		        });
		    });
    	}

    	$('.form').on('submit', function(e){
			//stop submitting the form to see the disabled button effect
	        e.preventDefault();
			$form = $(this);
			$.ajax({
		        type: $(this).attr('method'),
		        url: $(this).attr('action'),
		        data: $(this).serialize(),
		        dataType: "json"
		    })
		    .done(function(response) {
		        notify('success', response.message);
		        refresh_landingPage_data();	
		    })
		    .fail(function(data) {
		    	var error = data.responseJSON;
		    	$.each( error.errors, function( key, value ) {
		    		notify('error', value);
                });
                 
		        
		    });
		});

		

    </script>
@endsection