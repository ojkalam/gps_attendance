@extends('admin.layout.auth')

@section('content')
  
  <div class="col-md-9">

  <div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">Add Batch</div>

        <div class="panel-body">
            <form action="{{ url('admin/batch') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="selectsub">Select Subject: </label>
                <select name="sub_id" class="form-control" id="">
                  @foreach ($allsub as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="batch_name">Name:</label>
                <input type="text" class="form-control" name="name" id="batch_name" placeholder="Subject Name">
              </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
       </div>
    </div>
  </div>

@endsection