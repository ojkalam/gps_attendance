@extends('layouts.app')


@section('content')

	<div class="container">
		<div class="alert alert-info">
	         <h4>Attendance History</h4>
	      </div>
		@if(count($userAttn))
			@php ($i=1)

		<table class="table table-bordered table-hover" style="min-height: 400px;">
	    <thead>
	      <tr>
	        <th>#SL</th>
	        <th>Date</th>
	        <th>Course Name</th>
	        <th>Batch Name</th>
	        <th>Location</th>
	        <th>Total Attendee</th>
	      </tr>
	    </thead>
		   <tbody>
		  
			@foreach($userAttn as $attn)
		      <tr>
		        <td>{{ $i++ }}</td>
		        <td>{{ Carbon\Carbon::parse($attn->created_at)->format("d M Y") }}</td>
		        <td>{{ App\Subject::find(App\Batch::find($attn->batch_id)->subject_id)->name }} </td>
		        <td>{{ App\Batch::find($attn->batch_id)->name }}</td>
		        <td>{{ $attn->location }}</td>
		        <td>{{ $attn->attendee }}</td>
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