/**
	Finding geoposition and geting map by google.maps with parsing API 
	also searching id of city for weather parse 
*/

// Note: If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

// for working in web you have to write:
//<script async defer src="lib/Geo.js"></script>
//<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqsxT7a6Xp-P9xy_FHtwuEoTM4ZyL8amc&callback=initMap"></script>
// and make style for map (box in wich you will push map)

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 6
  });
  var infoWindow = new google.maps.InfoWindow({map: map});

  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}