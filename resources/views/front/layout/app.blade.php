<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Judul Default')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
        @vite(['resources/css/app.css','resources/js/app.js'])

        <!-- Styles -->
        <style>
            @font-face {
                font-family: 'font-logo';
                src: url('{{ asset('fonts/font-logo.woff') }}') format('truetype');
            }

            .font-logo {
                font-family: 'font-logo', sans-serif;
            }
        </style>
        @stack('style-custom')
    </head>
    <body class="">
    @include('front.layout.navbar')

    @yield('content')

    @include('front.layout.footer')

    @stack('js-custom')
    </body>
</html>
