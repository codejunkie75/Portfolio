@extends('layouts.app')
@section('content')

<div id='bibliographypage'>
    <div id='bibliographycontainer'>
            <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: 51.364490, lng: -2.632383};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn5l93lWIys0bRYb97uWDJe_m1M0LcwyI&callback=initMap">
    </script>
        <div id='bibliographytext'>
            <div id="contactdetails">
                <h4>Michael Howland</h4>
                <label>Email:</label><p>mhowland75@googlemail.com</p>
                <label>Phone:</label><p>01275 331260</p>
            </div>
            <div id="contactform">
                <form class="form-horizontal" method="POST" action='/portfolio'>
                <div class="form-group">
                    <label for="usr">Name:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="usr">Email:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="usr">Phone:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
                <div class="form-group">
                    <label for="usr">Message:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                    <center><button  type="button" class="btn btn-success">Send</button></center>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

