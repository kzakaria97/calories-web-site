<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link rel="stylesheet" href="./assets/css/navbar.css">
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/home.css">

    <title>Document</title>
=======
    <link rel="stylesheet" href="./assets/css/components.css">
    <link rel="stylesheet" href="./assets/css/general.css">
>>>>>>> nawfal
    @viteReactRefresh
    @vite('resources/js/app.jsx')

    <title>Compteur de calories</title>
</head>
<body>
@include('partials.navbar')
@yield('content')

<<<<<<< HEAD
    {{-- <div id="app"></div> --}}
    @include('partials.navbar')
    @yield('content')


    <script src="./assets/js/scroll_navbar.js"></script>
    
=======
@include('partials.footer')
>>>>>>> nawfal
</body>
</html>

