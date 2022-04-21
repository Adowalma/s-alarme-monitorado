var map;
var markers = [];
var marker, i;
var infowindow = new google.maps.InfoWindow({
    content: ''
});
var locations = [
    ['5ª Esquadra', -8.8362255, 13.2318311, 1],
    ['Policia Nacional - Divisao de Viana', -8.9044654, 13.3729221, 2],
    ['Esquadra do Belas', 	-8.9299454, 13.26300293, 3],
    ['13ª Esquadra',  -8.8114573, 13.2836723, 4]
];

function initialize() {
    var haightAshbury = new google.maps.LatLng(-8.838333, 13.234444);
    var mapOptions = {
        zoom: 12,
        center: haightAshbury,
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

    google.maps.event.addListener(map, 'click', function (event) {
        // Dont add this marker if you don't want users markers. Closest function will still work.
        addMarker(event.latLng);
    });

    google.maps.event.addListener(map, 'click', find_closest_marker);

    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            title: locations[i][0],
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
        markers.push(marker);

        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
                infowindow.setContent(locations[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }
}

function addMarker(location) {
    var marker = new google.maps.Marker({
        title: 'User added marker',
        // Just to differ from default markers
        icon: {
            path: google.maps.SymbolPath.BACKWARD_CLOSED_ARROW,
            scale: 5
        },
        position: location,
        map: map
    });
    // You can not add it to markers array. Otherwise added marker will be always the closest to itself
    //markers.push(marker); 
}

function find_closest_marker(event) {
    var distances = [];
    var closest = -1;
    for (i = 0; i < markers.length; i++) {
        var d = google.maps.geometry.spherical.computeDistanceBetween(markers[i].position, event.latLng);
        distances[i] = d;
        if (closest == -1 || d < distances[closest]) {
            closest = i;
        }
    }
    alert('O ponto mais perto é: ' + markers[closest].getTitle());
}
initialize();