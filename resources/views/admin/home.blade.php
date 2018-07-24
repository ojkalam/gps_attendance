@extends('admin.layout.auth')

@section('content')

        <div class="col-md-9">
           
           <div class="row">
               <div class="panel panel-info">
                <div class="panel-heading">Total: {{count(App\User::all())}} Teachers</div>
               </div>
            </div>

            <div class="row">
               <div class="panel panel-info">
                <div class="panel-heading">Total: {{count(App\Batch::all())}} Batches</div>
               </div>
            </div>
			
			  <div class="row">
               <div class="panel panel-info">
                <div class="panel-heading">Total: {{count(App\Subject::all())}} Subjects</div>
               </div>
            </div>

             <div class="row">
               <div class="panel panel-info">
                <div class="panel-heading">Total: {{count(App\AssignedTask::all())}} Assigned tasks</div>
               </div>
            </div>
			
			
        </div>

@endsection
