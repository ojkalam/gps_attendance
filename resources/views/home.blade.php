@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-md-8 col-md-offset-2">

          @include ('errors')
          @include ('success')
          @php
            $i=0;
          @endphp
          @if(count($attnTasks))
             <div class="alert alert-info">
                {!! '<h4>You have total '.count($attnTasks).' class schedule.</h4>' !!}
            </div>
            @foreach ($attnTasks as $atask)
            <div class="panel panel-success">

                <div class="panel-heading text-center"><h4>Batch Name: {{ App\Batch::find($atask->batch_id)->name }} || Course Name: {{ App\Subject::find(App\Batch::find($atask->batch_id)->subject_id)->name }} </h4></div>

            <div class="panel-body">
                <form class="form" action="{{route('home.store')}}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="batch_id" value="{{ $atask->batch_id }}" >
                    <input type="hidden" name="task_id" value="{{ $atask->id }}" >
                    <div class="row">
                        
                        <div class="col-md-4">
                         <div class="form-group">
                            <label for="input_attndee">Enter total attendee: </label>
                            <input type="text" name="attendee" class="form-control" id="input_attndee" placeholder="Enter attendee">
                          </div>
                        </div>

                        <div class="col-md-8">
                            <label for="input_attndee">Schedule Date: {{ $atask->schedule_date }}</label>
                                    
                            <div class="form-group">
                               <input type='text' class="form-control" name="location" id='addr_location' value="" readonly />
                               <input type="hidden" name="latlong" id="latlong" value="">
                               <!-- <input type="hidden" name="longitude" id="longitude" value=""> -->
                            </div>

                        </div>
                        
                    </div> 
                    <div class="row">   
                        <div class="col-md-4">
                          
                            <input type="submit" class="btn btn-primary btn-block" value="Submit Attendance" 
                            @if($i>0)
                            {{'disabled'}}
                            @endif >

                        </div>       
                </form> 

                      <div class="col-md-8">   
                       <a  href="#" class="btn btn-primary btn-block" id='submit' onmouseover="getLocation();" >Set Your Location</a>
                      </div>    
                </div> 
                   
             </div>
           </div> 
                  @php
                    $i++;
                  @endphp   
           @endforeach
          
          @else
          <div class="alert alert-info">
             <h3>Currenly you don't have any Schedule Class.</h3>
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

    <div id="map"></div>

  
  <script type="text/javascript">

    var ab;
    function showPosition(position){

      ab = position.coords.latitude+","+position.coords.longitude;    

      
    }
    
    function getLocation(){
      if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showPosition);
      }
    }
    
    function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}

  </script>
  <!-- end of geo location -->
   <script>      
    
      function geocodeLatLng(geocoder, map, infowindow) {

          var input = ab;
          var latlngStr = input.split(',', 2);
          var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};


        geocoder.geocode({'location': latlng}, function(results, status) {

          if (status === 'OK') {
            if (results[0]) {

        document.getElementById('addr_location').value = results[0].formatted_address;
        document.getElementById('latlong').value = input;

            } else {
              window.alert('No address location found !');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }

        });



      }
    function initMap() {


        var geocoder = new google.maps.Geocoder;
        var infowindow = new google.maps.InfoWindow;

        document.getElementById('submit').addEventListener('click', function() {
          geocodeLatLng(geocoder, map, infowindow);
        });
      }

    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjQhm2lR4ub1mOvMRTp8vvQx58kXwMUCw&callback=initMap">
    </script>

    </script>
@endsection