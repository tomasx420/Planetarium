<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Planetarium</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{--
            <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        --}}
        @stack('custom-scripts')
    </head>
    <body class="bg-neutral-800">
    @include('common.navbar')

    @yield('content')

    @include('common.footer')

{{--    @include('common.footer')--}}
    </body>
</html>

