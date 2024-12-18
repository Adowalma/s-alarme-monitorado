$(document).ready(function () {


    loadMap();
});


function loadMap(){

    // Creating map object
    var map = new google.maps.Map(document.getElementById('map_canvas'), {
        zoom: 12,
        center: new google.maps.LatLng(-8.838333, 13.234444),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var url = $('meta[name="uri"]').attr('content'); // llama a la url global que se encuantra en el head -> meta

    $.ajax({
        url: url,
        type: 'GET'
    }).done(function(data) {
        console.log(data);
        $(data).each(function(key,value){
           

            // creates a draggable marker to the given coords
            var vMarker = new google.maps.Marker({ 
                position: new google.maps.LatLng(value.lat, value.lng),
                title: value.name
            });

            // centers the map on markers coords
            map.setCenter(vMarker.position);

            // adds the marker on the map
            vMarker.setMap(map);
        });
    }).fail(function() {
    });



}