<html>
<head>
    <meta charset="utf-8" />
    <title>Display driving directions</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.js"></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.10.0/mapbox-gl.css" rel="stylesheet" />
    <style>
        body { margin: 0; padding: 0; }
        #map { position: absolute; top: 0; bottom: 0; width: 100%; }
    </style>
</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.js"></script>
<link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.0.2/mapbox-gl-directions.css"
    type="text/css"
/>
<div id="map"></div>

<script>
    var lat = 109.5550884;
    var long = -0.6483722;
    var zoom = 4;

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        }

        function showPosition(position) {
            lat = position.coords.longitude;
            long = position.coords.latitude;
            zoom = 13;
            mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsbWkzMDkiLCJhIjoiY2thMXlmc3Y5MDA5dDNmbXNocGY4NTVlMyJ9.oqrXBfe5usoHCTyc2_npvQ';
            var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [lat,long ],
                zoom: zoom
            });
            var directions = new MapboxDirections({
                accessToken: mapboxgl.accessToken,
                steps: false,
                geometries: 'polyline',
                // controls: { instructions: false }
            });
            map.addControl(directions, 'top-left');

            map.on('load', function() {
                // Listen for the `directions.route` event that is triggered when a user
                // makes a selection and add a symbol that matches the result.
                directions.on('route', function(ev) {
                    // var styleSpec = ev.route;
                    // var styleSpecBox = document.getElementById('json-response');
                    // var styleSpecText = JSON.stringify(styleSpec, null, 2);
                    // var syntaxStyleSpecText = syntaxHighlight(styleSpecText);
                    // styleSpecBox.innerHTML = syntaxStyleSpecText;
                });
            });
    }
    mapboxgl.accessToken = 'pk.eyJ1IjoiaGVsbWkzMDkiLCJhIjoiY2thMXlmc3Y5MDA5dDNmbXNocGY4NTVlMyJ9.oqrXBfe5usoHCTyc2_npvQ';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [lat,long ],
        zoom: zoom
    });
    var directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
        steps: false,
        geometries: 'polyline',
        // controls: { instructions: false }
    });
    map.addControl(directions, 'top-left');

    map.on('load', function() {
        // Listen for the `directions.route` event that is triggered when a user
        // makes a selection and add a symbol that matches the result.
        directions.on('route', function(ev) {
            // var styleSpec = ev.route;
            // var styleSpecBox = document.getElementById('json-response');
            // var styleSpecText = JSON.stringify(styleSpec, null, 2);
            // var syntaxStyleSpecText = syntaxHighlight(styleSpecText);
            // styleSpecBox.innerHTML = syntaxStyleSpecText;
        });
    });

    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
</script>

</body>
</html>
