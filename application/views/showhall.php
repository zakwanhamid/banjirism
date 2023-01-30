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

<br><br><br>

<div id="map"></div>

<script>
  // Inititate Map
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

    // [["Name",100.4321,90.325532],["Name",12.342352,54.215132]]
    var markers = [
        <?php foreach ($hallLoc as $location) {
          echo '["' . $location->comm_hall_name . '", ' . $location->latitude . ', ' . $location->longitude . '],';
        } ?>
      ];

  //info window content
  var infoWindowContent = [
        <?php foreach ($hallLoc as $locId) { ?>
      ['<div class="info_content">'
      + '<h3><?php echo $locId->comm_hall_name; ?></h3>' + '<p><?php echo $locId->comm_id; ?></p>'+ '<a class="btn btn-primary" href="<?php echo base_url('Stock_item_comm/showItemHall').'?id='.$locId->comm_id.'&name='.$locId->comm_hall_name; ?>" role="button">Link</a>' +'<div>'],
        <?php } ?>       
      ];
      //Use GET Method

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

