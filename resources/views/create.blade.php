@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

	          <div class="panel panel-info">
	            <div class="panel-heading">
	              <h3 class="panel-title">{{ $user->name }}</h3>
	            </div>
	            <div class="panel-body">
	              <div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('image/user.png')}}" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <form action="{{ route('profile.update',['profile' => $user->id] )}}" method="POST">
                  <!-- route('profile.update', $user->id) -->
                    <!-- {{ method_field('PATCH') }} -->
                    {{ csrf_field() }}
                   <input type="hidden" name="_method" value="PATCH">
                  <table class="table table-user-information">
                     <tbody>
                      <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" value="{{$user->name}}"></td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                     </tr>
                        <td>Date of birth</td>
                        <td><input type="date" name="dob" value="{{$user->dob}}"></td>
                      </tr>
                     
                     <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" value="{{$user->phone}}"></td>
                      </tr>

                     <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" value="{{$user->address}}"></td>
                      </tr>
                     
                    </tbody>
                  </table>
                   <input class="btn btn-primary" type="submit" value="update profile" >
                  <a  class="btn btn-info" href="{{ route('profile') }}">Back</a>
                </form>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
						Teachers profile
                    </div>
	            
	          </div>
	        </div>
		</div>
	</div>

@endsection