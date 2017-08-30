<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOsrhsnKI78MbBnli-03Y6Le450He46AA"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(-7.116148,110.395760)
  };
    var mapOptions1 = {
    zoom: 16,
    center: new google.maps.LatLng(-7.131407,110.403015)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions, mapOptions1);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>