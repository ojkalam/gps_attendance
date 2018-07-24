@extends('admin.layout.auth')

@section('content')
	
	<div class="col-md-9">

 	<div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">All Batches</div>
		@include ('success')
        <div class="panel-body">
        @if(count($batches))
         @php ($i=1)
        <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#SL</th>
                <th>Batch Name</th>
              </tr>
            </thead>
               <tbody>
              
                @foreach($batches as $batch)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $batch->name }}</td>
                  </tr>

                @endforeach
            </tbody>
	      </table>
	        @else
	        <div class="alert alert-info">
		         <p>You don't have any batch.</p>
            </div>
          @endif
    </div>
       </div>
    </div>
	</div>

<script type="text/javascript">
  
  setTimeout(function() {
    $('#successMessage').fadeOut('slow');
    }, 3000); // <-- time in milliseconds

</script>

@endsection