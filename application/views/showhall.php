<!-- <style>

</style>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAtPAcmfk6Vbg4vQSO2OG9Hbh1KFhzyTPc"
  type="text/javascript"></script>
<div id="map">

  <script type="text/javascript">
    var locations = [
      ['Taman Pekaka Community Hall', 5.350564426916976, 100.29450070734104, 4],
      ['Taman Tiram Community Hall', 5.306729579139892, 100.27385227369517, 5],
      ['Jalan Tokong Batu Community Hall', 5.395213254399922, 100.3184165057981, 3],
      ['Tanjung Bungah Community Hall', 5.460783565485189, 100.28121607993431, 2],
      ['Lebuh Macallum Community Hall', 5.407100095633074, 100.33402562128721, 1]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(5.40, 100.335),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function (marker, i) {
        return function () {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>

</div> -->

<style>
  #map {
    width: 100%;
    height: 650px;
  }
</style>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhuRqsubyYFqp4i-EfioO7V2tVvWe7_nY&callback=initMap"></script>
<?php

?>
<div id="map"></div>

<script>
  function initMap() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
      mapTypeId: 'roadmap'
    };

    //Display map
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(50);

    //Multiple marker location
    var markers = [
        <?php foreach ($data as $location) {
          echo '["' . $location->hallName . '", ' . $location->latitude . ', ' . $location->longitude . '],';
        } ?>
      ];

  //info window content
  var infoWindowContent = [
        <?php foreach ($data as $locId) { ?>
      ['<div class="info_content">'
        + '<h3><?php echo $locId->hallName; ?></h3>' + '<p><?php echo $locId->hallID; ?></p>' + '<div>'],
        <?php } ?>
      ];

  //Add multiple markers to map
  var infoWindow = new google.maps.InfoWindow(), marker, i;

  //place each marker on map
  // for (i = 0; i < markers.length; i++) {
  //   var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
  //   bounds.extend(position);
  //   marker = new google.maps.Marker({
  //     map: map,
  //     title: markers[i][0]
  //   });
  for (i = 0; i < markers.length; i++) {
    var locate = new google.maps.LatLng(markers[i][1], markers[i][2]);
    bounds.extend(locate);
    marker = new google.maps.Marker({
      position: locate,
      map: map
    });

    //Add info window to marker
    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        infoWindow.setContent(infoWindowContent[i][0]);
        infoWindow.open(map, marker);
      }
    })(marker, i));

    //Center the map to fit all markers on screen
    map.fitBounds(bounds);
  }

  //Set zoom level
  var boundsListener = google.maps.event.addListener((map), 'bound_changed', function (event) {
    this.setZoom(14);
    google.maps.event.removeListener(boundsListener);
  });
  }
</script>