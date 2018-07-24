@extends('layouts.app')


@section('content')

	<div class="container">
		<div class="alert alert-info">
	         <h4>Completed Classes</h4>
	      </div>
		@if(count($preTask))
			@php ($i=1)

		<table class="table table-hover" style="min-height: 400px;">
	    <thead>
	      <tr>
	        <th>#SL</th>
	        <th>Date</th>
	        <th>Course Name</th>
	        <th>Batch Name</th>
	      </tr>
	    </thead>
		   <tbody>
		  
			@foreach($preTask as $task)
		      <tr>
		        <td>{{ $i++ }}</td>
		        <td>{{ $task->schedule_date }}</td>
		        <td>{{ App\Subject::find(App\Batch::find($task->batch_id)->subject_id)->name }} </td>
		        <td>{{ App\Batch::find($task->batch_id)->name }}</td>
		      </tr>

			@endforeach
		 </tbody>
		 </table>

		 @else
	      <div class="alert alert-info">
	         <p>You don't have any history.</p>
	      </div>
	      @endif
	</div>

@endsection