@extends('layouts.app')

@push('css')
<link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
<style>
#map {
    position:absolute;
    top:0;
    bottom:0;
    width:100%;
    height: 100%;
}
</style>
@endpush

@section('content')
<section class="blog-listing-section ptb-120">
    <div id="map"></div>
</section>
@endsection

@push('js')
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-data.js"></script>

<script>
    fetch('/get-api-key')
        .then(response => response.json()) // Parse the response as JSON
        .then(data => {
            const apiKey = data.apiKey; // Access the apiKey property of the object

            const platform = new H.service.Platform({
                'apikey': apiKey
            });
            const defaultLayers = platform.createDefaultLayers();
            const map = new H.Map(
                document.getElementById('map'),
                defaultLayers.vector.normal.map, {
                    zoom: 1,
                    center: {
                        lat: 50,
                        lng: 5
                    },
                    pixelRatio: window.devicePixelRatio || 1,
                }
            );

            // 6console.log(apiKey);
           

            const mapData = @json($mapData);
            //console.log(mapData);
            const ui = H.ui.UI.createDefault(map, defaultLayers);
            ui.removeControl("mapsettings");
            

            mapData.forEach(function(data) {
                const country = data.country;
                const visitors = data.visitors;

                fetch('https://geocode.search.hereapi.com/v1/geocode?q=' + country + '&limit=100' + '&apiKey=' + apiKey)
                    .then(response => response.json())
                    .then(data => {
                        const location = data.items[0].position;

                        const marker = new H.map.Marker({
                            lat: location.lat,
                            lng: location.lng
                        });
                        map.addObject(marker);

                        const bubble = new H.ui.InfoBubble({
                            lat: location.lat,
                            lng: location.lng
                        }, {
                            content: visitors + ' visitors'
                        });
                        ui.addBubble(bubble);
                    });
            });
        });
</script>


@endpush