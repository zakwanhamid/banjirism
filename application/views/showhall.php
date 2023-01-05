<title><?php echo $title ?></title>
<style>
  /* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
  #map {
    height: 100%;
  }

  /* 
 * Optional: Makes the sample page fill the window. 
 */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
</style>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAtPAcmfk6Vbg4vQSO2OG9Hbh1KFhzyTPc"
  type="text/javascript"></script>
<div id="map"></div>

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