<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="assets/css/vendor.min.css">

        <!-- CSS Front Template -->
        <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">

        <link rel="preload" href="assets/css/theme.min.css" data-hs-appearance="default" as="style">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>

        {{--Inicio dos links do javascript--}}
        
        <script src="assets/js/vendor.min.js"></script>

        <!-- JS Front -->
        <script src="assets/js/theme.min.js"></script>
        
        <script src="assets/js/hs.theme-appearance.js"></script>

        @livewireScripts

    </body>
</html>
