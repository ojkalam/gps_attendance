@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row" style="min-height:500px;">
			 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

	          <div class="panel panel-info">
              @include ('success')
	            <div class="panel-heading">
	              <h3 class="panel-title">{{ $user->name }}</h3>
	            </div>
	            <div class="panel-body">
	              <div class="row">
	                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{asset('image/user.png')}}" class="img-circle img-responsive"> </div>

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                       <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">{{$user->email}}</a></td>
                      </tr>
                      <tr>
                        <td>Date of birth</td>
                        <td>{{ Carbon\Carbon::parse($user->dob)->format('d-M-Y')}}</td>
                      </tr>
                        <tr>
                        <td>Address</td>
                        <td>{{$user->address}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$user->phone }}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  
                  <a href="{{ route('profile.create') }}" class="btn btn-primary">Edit profile</a>
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

<script type="text/javascript">
  
  setTimeout(function() {
    $('#successMessage').fadeOut('slow');
    }, 3000); // <-- time in milliseconds

</script>
@endsection