<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
    </style>
    <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <p id="print-lat"></p>
        <p id="print-lng"></p>
        <p id="print"></p>
        <input type = "button" id = "driver" value = "Load Data" />
        <div id = "stage" style = "background-color:#cc0;">
         STAGE
      </div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('pac-input'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            



            
            var latitude = place.geometry.location.lat();
            var longitude = place.geometry.location.lng();
            document.getElementById("print-lat").innerHTML = latitude;
            document.getElementById("print-lng").innerHTML = longitude;
            var url = 'https://api.breezometer.com/baqi/?lat=' + latitude + '&lon=' + longitude + '&key=4cb840a9331c4c8fa722f47aeb8f8477';
            //loadJSON("https://api.breezometer.com/baqi/?lat=30.9645297&lon=76.4874021&key=4cb840a9331c4c8fa722f47aeb8f8477",gotData);
//            getJSON('https://api.breezometer.com/baqi/?lat=30.9645297&lon=76.4874021&key=4cb840a9331c4c8fa722f47aeb8f8477',function(err, data) {
$.getJSON(url, function(jd) {
                  //$('#stage').html('<p> Name: ' + jd.country_name + '</p>');
                  $('#stage').append('<p>Breezo Meter : ' + jd.breezometer_aqi+ '</p>');
                  //$('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
               });
            
          });
         // map.fitBounds(bounds);
        });
      }
      

    </script>
    
    <script type = "text/javascript" language = "javascript">
         $(document).ready(function() {
			
            $("#driver").click(function(event){
               $.getJSON('https://api.breezometer.com/baqi/?lat=30.9645297&lon=76.4874021&key=4cb840a9331c4c8fa722f47aeb8f8477', function(jd) {
                  $('#stage').html('<p> Name: ' + jd.country_name + '</p>');
                  $('#stage').append('<p>Age : ' + jd.age+ '</p>');
                  $('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
               });
            });
				
         });
      </script>
    
    <script>
fetch('http://time.jsontest.com')
    .then(res => res.json())
    .then((out) => {
        console.log('Output: ', out);
}).catch(err => console.error(err));
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBx8rbdbdD3VKDbWrY9o-7cmmIbw6c-35o&libraries=places&callback=initAutocomplete"         async defer></script>
  </body>
</html>
