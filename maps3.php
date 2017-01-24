<!DOCTYPE html>
<html>
  <head>
    <title>Space Casimiro</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
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
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      var local = {lat: -22.491841, lng: -42.199270};
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -22.483065, lng: -42.201647},
          zoom: 15
        });
        var marker = new google.maps.Marker({
          position: local,
          map: map,
          title: 'Rua: Genciano Riscado da Motta, Nº 337 – BNH'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4K5ihvVssLAP-ucd2kvpQArmS7DlJI0w&callback=initMap"
    async defer></script>
  </body>
</html>