@extends('admin.layout.auth')

@section('content')
	
	<div class="col-md-9">

 	<div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">All Teacher</div>
		@include ('success')
        <div class="panel-body">
            @if(count($teachers))
             @php ($i=1)
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                  </tr>
                </thead>
                   <tbody>
                  
                    @foreach($teachers as $teacher)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->address }}</td>
                      </tr>

                    @endforeach
                 </tbody>
           </table>
             @else
              <div class="alert alert-info">
                 <p>No teachers found !</p>
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