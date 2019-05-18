console.log(123);
$(document).ready(function(){
    $('.send-button').click(function() {
        event.preventDefault();

        $.get("https://maps.googleapis.com/maps/api/geocode/json?address="
            + $('.new-address').val()
            + "&key=AIzaSyDhIiSGIWDB4C5FhGQ6mI7YW51JvuVTgf4",

            function(data) {
                if (data.results.length > 0) {
                    $('.new-address').css('border', '1px solid green');

                    markerLocation = data.results[0].geometry.location;

                    $.post("add", {lan: markerLocation.lat, lng: markerLocation.lng, name: $('.new-address').val()},
                        function(result) {
                            status = JSON.parse(result).status;
                            if ('true' == status) {
                                location.href = '/';
                            } else {
                                $('.new-address').css('border', '1px solid red');
                            }
                        }
                    );
                } else {
                    $('.new-address').css('border', '1px solid red');
                }
            }
        );
    });
});