<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MAKMUR JAYA</title>

    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
    <link rel="icon" type="image/png" href="{{ asset('img/Lambang_Kodam_Jaya.png') }}">


    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link href="{{ asset('assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.css') }}" rel="stylesheet">

    <!-- END CSS -->

    <!-- Scripts -->
    @vite(['public/assets/css/app.min.css', 'public/assets/js/app.min.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <div id="app" class="app">

        <!-- BEGIN #header -->
        @include('dashboard.components.header')
        <!-- END #header -->

        <!-- BEGIN #sidebar -->
        @include('dashboard.components.sidebar')
        <!-- END #sidebar -->

        <!-- BEGIN mobile-sidebar-backdrop -->
        <button class="app-sidebar-mobile-backdrop" data-toggle-target=".app"
            data-toggle-class="app-sidebar-mobile-toggled"></button>
        <!-- END mobile-sidebar-backdrop -->
        <div id="content" class="app-content">

            {{ $slot }}
        </div>

        <!-- BEGIN btn-scroll-top -->
        <a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
        <!-- END btn-scroll-top -->
        @livewireScripts
    </div>

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN core-js ================== -->

    @stack('scripts')

    <script src="{{ asset('assets/plugins/jvectormap-next/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jvectormap-content/world-mill.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/dashboard.demo.js') }}"></script>
    <script src="{{ asset('assets/plugins/@highlightjs/cdn-assets/highlight.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/highlightjs.demo.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('assets/js/demo/table-plugins.demo.js') }}"></script>
    <script src="{{ asset('assets/js/demo/sidebar-scrollspy.demo.js') }}"></script>

    <!-- ================== END page-js ================== -->
</body>

</html>
