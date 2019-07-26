@extends('layouts.app')

@section('content')
	<div class="container-fluid">
	  <!-- Page Heading -->
	  <h1 class="h3 mb-2 text-gray-800">Tables</h1>
	  
	  <!-- DataTales Example -->
	    <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" onclick="refresh()">DataTables Example</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table " id="example" width="100%" cellspacing="0">
                <div id="loading" class="text-center">
                    <img style="width: 15%" src="https://cdn-images-1.medium.com/max/1600/0*4Gzjgh9Y7Gu8KEtZ.gif">
                </div>
              </table>
  			   </div>
		     </div>
	  </div>
    
	  @include('include.datatable-script')

    <script>
      fetch_data();

      function refresh() {
        $('#loading').show();
        $('#example').DataTable().destroy();
        fetch_data();
      }

      function fetch_data() {
        $.get('api/offers', function(response) {
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
                  '<td>(<a href="offers/'+value.id+'">'+value.id+') '+value.name+'</a></td>'+
                  '<td>'+value.vertical_id+'</td>'+
                  '<td>'+value.advertiser_id+'</td>'+
                  '<td>'+value.price_format+'-'+value.offer_currency+''+value.payment_model+'</td>'+
                  '<td>'+value.status+'</td>'+
                  '<td>'+value.updated_at+'</td>'+
                  '</tr>';
            });

            res += '</tbody>';
            $('#example').html(res);
            $('#example').DataTable({
              paging : true,
            });
        });
      }
    </script>
	</div>
@endsection