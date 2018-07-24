@extends('admin.layout.auth')

@section('content')

	<div class="col-md-9">

 	<div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">All Assigned Class Schedule</div>
		@include ('success')
        <div class="panel-body">
            @if(count($alltask))
             @php ($i=1)
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>#SL</th>
                    <th>Teachers</th>
                    <th>Batch</th>
                    <th>Schedule date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                   <tbody>
                  
                    @foreach($alltask as $task)
                      <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ App\User::find($task->user_id)->name }}</td>
                        <td>{{ App\Batch::find($task->batch_id)->name }}</td>
                        <td>{{ $task->schedule_date }}</td>
                        @if($task->active == 0)
                        <td>{{ "Incomplete" }}</td>
                        @else
            						<td>{{ "Completed" }}</td>
            						@endif
                  <form action="{{ route('admin.assigned_class.destroy', ['assigned_class' => $task->id]) }}" method="POST">
                      {{ csrf_field() }}
                      <input name="_method" type="hidden" value="DELETE">
                      
    					           	<td><button type="submit" class="btn btn-danger">Delete</a></td>
                </form>
                        <!-- <td><a class="btn btn-primary" href="{{ route('admin.assigned_class.edit', ['id' => $task->id]) }}">Edit</a></td> -->
                      </tr>

                    @endforeach 
                 </tbody>
           </table>
             @else
              <div class="alert alert-info">
                 <p>You don't have any assigned task.</p>
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