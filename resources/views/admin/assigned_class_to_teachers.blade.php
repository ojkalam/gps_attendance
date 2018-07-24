@extends('admin.layout.auth')

@section('content')
  
  <div class="col-md-9">
  @include ('errors')
  <div class="row">
       <div class="panel panel-info">
        <div class="panel-heading">Assigned class schedule to teachers</div>

        <div class="panel-body">
            <form action="{{ route('admin.assigned_class.store') }}" method="POST">
              {{ csrf_field() }}
              

               <div class="form-group">
                <label>Select Teacher: </label>
                <select name="user_id" class="form-control" id="">
                  @foreach ($alluser as $user)
                  <option value="{{ $user->id }}">{{ $user->name .' - '. $user->address}}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Select Batch: </label>
                <select name="batch_id" class="form-control" id="">
                  @foreach ($allbatch as $batch)
                  <option value="{{ $batch->id }}">{{ $batch->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="schedule">Schedule Date:</label>
                <input type="date" class="form-control" name="schedule_date" id="schedule">
              </div>
            
              <button type="submit" class="btn btn-primary">Submit</button>
            
            </form>
        </div>
       </div>
    </div>
  </div>

@endsection