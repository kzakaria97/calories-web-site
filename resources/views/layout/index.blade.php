<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/home.css">
    <link rel="stylesheet" href="./assets/css/carousel.css">
    <link rel="stylesheet" href="./assets/css/footer.css">

    @viteReactRefresh
    @vite('resources/js/app.jsx')

    <title>Compteur de calories</title>
    <script src="./assets/js/scroll_navbar.js" defer></script>
    <script src="./assets/js/carousel.js" defer></script>
</head>
<body>
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>

