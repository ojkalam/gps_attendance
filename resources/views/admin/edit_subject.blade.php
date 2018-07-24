@extends('admin.layout.auth')

@section('content')
  
  <div class="col-md-9">

  <div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">Edit Subject</div>

        <div class="panel-body">
            <form action="{{ route('admin.subject.update',[ 'subject'=> $subject->id ]) }}" method="POST">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="PATCH">
              <div class="form-group">
                <label for="subject_name">Subject Name:</label>
                <input type="text" class="form-control" name="name" id="subject_name" value="{{ $subject->name }}">
              </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
       </div>
    </div>
  </div>

@endsection