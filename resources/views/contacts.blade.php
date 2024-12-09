<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body style="background-color: var(--primary-color);">
<x-heading></x-heading>
<main>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="height: 500px;"></div>
            </div>
        </div>
    </div>

    <script>
        // Функция инициализации карты
        function initMap() {
            var location = { lat:  47.78900058556914, lng: 35.212390603959456 }; // Координаты для Запорожья
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: location,
            });

            // Создание стандартного маркера
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Запорожье",
            });
        }
    </script>

    <!-- Включаем Google Maps API скрипт с правильным callback -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsQWPM7AYmQXKlwkOp5Wz3jPVEWFmOYPU&callback=initMap" async defer></script>

    <!-- Включаем Bootstrap JS и его зависимости -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</main>
<x-footer></x-footer>
</body>
</html>
