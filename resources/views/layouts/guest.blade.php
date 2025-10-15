<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KODAM JAYA</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <link rel="icon" type="image/png" href="{{ asset('img/Lambang_Kodam_Jaya.png') }}">

    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/vendor.min.css" rel="stylesheet">
    <!-- Scripts -->
    @vite(['assets/css/app.min.css', 'assets/js/app.min.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <div class="">
        {{ $slot }}
    </div>
    <!-- END #app -->
    @livewireScripts
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
</body>

</html>