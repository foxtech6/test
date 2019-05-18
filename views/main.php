<body class="main">
<div class="container">
    <div class="content">
        <h1>Demo</h1>
        <div class="form">
            <form>
                <input type="text" class="new-address">
                <button class="send-button">Add address</button>
            </form>
        </div>
        <div class="link"><a href="/clear">Delete all markers</a></div>
        <div class="link"><a href="/addresses">List all addresses</a></div>
    </div>
</div>
<?php if (empty($markers)): ?>
<div><h2>Please add markers to map</h2></div>
<?php else: ?>
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
<?php endif; ?>
</body>
