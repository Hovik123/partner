var directionDisplay;
var directionsService = new google.maps.DirectionsService();

function initializeMaps() {
    var latlng = new google.maps.LatLng(51.764696,5.526042);
    directionsDisplay = new google.maps.DirectionsRenderer();
    var myOptions = {
        zoom: 16,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: false
    };
    var map = new google.maps.Map(document.getElementById("google_maps"),myOptions);
  
    var image = new google.maps.MarkerImage('marker.png',
        new google.maps.Size(65, 124),
        new google.maps.Point(0,0),
        new google.maps.Point(56, 122)
    );

    var shadow = new google.maps.MarkerImage('marker_shadow.png',
        new google.maps.Size(96, 59),
        new google.maps.Point(0,0),
        new google.maps.Point(32, 59)
    );

    var customMarker = new google.maps.Marker({
        position: latlng,
        map: map,
        shadow: shadow,
        title:"Carlos Gallupa HQ",
        icon: image
    });
}