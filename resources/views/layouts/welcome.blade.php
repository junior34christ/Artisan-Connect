<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Connect - Services</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{  URL::to('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }

        .navbar {
            background-color: #e27a02;
        }

        .hero {
            margin-top: 95px;
            text-align: center;
            padding: 50px 20px;
            background: #f9f9f9;
        }

        .features {
            padding: 50px 20px;
        }

        .feature {
            margin-bottom: 30px;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .artisan-profile {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .artisan-profile img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
        }

        .artisan-profile .name {
            font-size: 1.2em;
            font-weight: bold;
            margin: 10px 0;
        }

        .artisan-profile .stars {
            color: gold;
            font-size: 1.2em;
        }

        .artisan-profile .comment-btn {
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .artisan-profile .comment-btn:hover {
            background-color: #e6b800;
        }

        #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .buttonStyle {
            background-color: #ffcc00;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .buttonStyle:hover {
            background-color: #e6b800;
        }
    </style>
</head>

<body onload="initMap()">

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-orange fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                Artisan Connect
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse m-25 navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-primary" href="{{ route('Acceuil') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-primary" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-primary" href="{{ route('welcome') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="btn btn-outline-primary" href="#">Contacts</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" onclick="window.location.href='{{ route('login') }}'"
                            class=" btn btn-primary">Connexion</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero">
        <h1>Bienvenue Artisan Connect</h1>
        <p>Le moyen le plus simple et le plus rapide de trouver des artisans chez soi 😎😎.</p>
        <a type="button" class="btn btn-primary" href="{{ route('page') }}">Retrouver un artisan</a>
    </div>

    <div class="map-container" id="map"></div>

    <div class="features container mx-auto my-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <button
                class="feature p-4 bg-white rounded-lg shadow transform transition-transform hover:scale-105 focus:outline-none">
                <h3 class="text-xl font-semibold">Feature 1</h3>
                <p>Description de la fonctionnalité 1.</p>
            </button>
            <button
                class="feature p-4 bg-white rounded-lg shadow transform transition-transform hover:scale-105 focus:outline-none">
                <h3 class="text-xl font-semibold">Feature 2</h3>
                <p>Description de la fonctionnalité 2.</p>
            </button>
            <button
                class="feature p-4 bg-white rounded-lg shadow transform transition-transform hover:scale-105 focus:outline-none">
                <h3 class="text-xl font-semibold">Feature 3</h3>
                <p>Description de la fonctionnalité 3.</p>
            </button>
        </div>
    </div>


    <div class="container mx-auto my-10">
        <h2 class="text-center text-2xl font-bold mb-5">Top Rated Artisans</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Sample Artisan Profile -->
            <div class="artisan-profile">
                <img src="artisan1.jpg" alt="Artisan 1">
                <div class="name">Artisan 1</div>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <button class="comment-btn">Commenter</button>
            </div>
            <div class="artisan-profile">
                <img src="artisan2.jpg" alt="Artisan 2">
                <div class="name">Artisan 2</div>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <button class="comment-btn">Commenter</button>
            </div>
            <div class="artisan-profile">
                <img src="artisan3.jpg" alt="Artisan 3">
                <div class="name">Artisan 3</div>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <button class="comment-btn">Commenter</button>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 Artisan Connect. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&v=weekly&solution_channel=GMP_CCS_customcontrols_v2"
        defer></script>
    <script>
        let map;
        const chicago = {
            lat: 41.85,
            lng: -87.65
        };

        function createCenterControl(map) {
            const controlButton = document.createElement("button");
            controlButton.classList.add('buttonStyle');
            controlButton.textContent = "Center Map";
            controlButton.title = "Click to recenter the map";
            controlButton.type = "button";
            controlButton.addEventListener("click", () => {
                map.setCenter(chicago);
            });
            return controlButton;
        }

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: {
                    lat: 49.496675,
                    lng: -102.65625
                },
            });

            var georssLayer = new google.maps.KmlLayer({
                url: "http://api.flickr.com/services/feeds/geo/?g=322338@N20&lang=en-us&format=feed-georss",
            });
            georssLayer.setMap(map);

            const centerControlDiv = document.createElement("div");
            const centerControl = createCenterControl(map);

            centerControlDiv.appendChild(centerControl);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(centerControlDiv);

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        map.setCenter(pos);

                        const marker = new google.maps.Marker({
                            position: pos,
                            map: map,
                            title: 'You are here',
                        });
                    },
                    () => {
                        handleLocationError(true, map.getCenter());
                    }
                );
            } else {
                handleLocationError(false, map.getCenter());
            }
        }

        function handleLocationError(browserHasGeolocation, pos) {
            const infoWindow = new google.maps.InfoWindow({
                position: pos,
                content: browserHasGeolocation ?
                    "Error: The Geolocation service failed." : "Error: Your browser doesn't support geolocation.",
            });
            info
            Window.open(map);
        }
    </script>

</body>

</html>
