function geoFindMe() {
  var output = document.getElementById("out");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    var url = 'https://api.breezometer.com/baqi/?lat=' + latitude + '&lon=' + longitude + '&key=4cb840a9331c4c8fa722f47aeb8f8477';
            
    $.getJSON(url, function(jd) {
                  
                  $('#out1').append('<p>Breezo Meter : ' + jd.breezometer_aqi+ '</p>');
                  
               });
  }

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}