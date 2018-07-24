@extends('admin.layout.auth')

@section('content')
	
	<div class="col-md-9">

 	<div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">All Subjects</div>
		@include ('success')
        <div class="panel-body">
            @if(count($subjects))
             @php ($i=1)
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#SL</th>
                    <th>Subject Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                   <tbody>
                  
                    @foreach($subjects as $subject)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $subject->name }}</td>
                        <td><a class="btn btn-primary" href="{{ route('admin.subject.edit', ['subject' => $subject->id]) }}">Edit</a></td>
                      </tr>

                    @endforeach
                 </tbody>
           </table>
             @else
              <div class="alert alert-info">
                 <p>You don't have any subject.</p>
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