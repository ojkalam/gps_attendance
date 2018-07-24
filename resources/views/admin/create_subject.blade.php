@extends('admin.layout.auth')

@section('content')
  
  <div class="col-md-9">

  <div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">Add Subject</div>

        <div class="panel-body">
            <form action="{{ url('admin/subject') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="subject_name">Name:</label>
                <input type="text" class="form-control" name="name" id="subject_name" placeholder="Subject Name">
              </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
       </div>
    </div>
  </div>

@endsection