<body>
<div class="container">
    <h1>Demo</h1>
</div>
<div id="map"></div>
<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: {lat: <?= $lan ?>, lng: <?= $lng ?>}
        });

        markers = <?= json_encode($markers) ?>;

        for (var i = 0; i < markers.length; i++) {
            address = markers[i];
            console.log(parseFloat(address[1]));
            var marker = new google.maps.Marker({
                position: {lat: parseFloat(address[1]), lng: parseFloat(address[2])},
                label: address[3].toString(),
                map: map,
                title: address[0]
            });
        }
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhIiSGIWDB4C5FhGQ6mI7YW51JvuVTgf4&callback=initMap">
</script>
</body>
