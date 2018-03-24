function geoFindMe() {
  var output = document.getElementById("location");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    //output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    var url = 'https://api.breezometer.com/baqi/?lat=' + latitude + '&lon=' + longitude + '&key=4cb840a9331c4c8fa722f47aeb8f8477';
            
    $.getJSON(url, function(jd) {
                  //$('#stage').html('<p> Name: ' + jd.country_name + '</p>');
                  $('#stag').html('<p>AQI: ' + jd.breezometer_aqi+ '</p>');
                  //$('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
                  if(jd.breezometer_aqi < 30){
        $("#air").css('background-color', 'red');
    }
    else if(jd.breezometer_aqi < 60 && jd.breezometer_aqi > 30){
        $("#air").css('background-color', 'orange');
    }
    else{
        $("#air").css('background-color', 'green');
    }

               });

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  //output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}