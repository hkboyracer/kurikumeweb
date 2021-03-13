<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $pageTitle ?? '' }}</title>
        <!-- Favicon -->
        <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('argon') }}/css/argon.css" rel="stylesheet">
        <!-- Owl Carousel Assets -->
        <link href="{{ asset('argon') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="{{ asset('argon') }}/vendor/owl-carousel/owl.theme.css" rel="stylesheet">

        
    </head>
    <body class="{{ $class ?? '' }}">

        
        <div class="main-content">
            @include('layouts.navbars.navbar')
            @yield('content')
        </div>

        @include('layouts.footers.guest')


        <script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('argon') }}/vendor/owl-carousel/owl.carousel.js"></script>

        <script>
            $(document).ready(function() {
                $("#owl-demo").owlCarousel({

                    navigation : false,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true


                });
            });
            $(document).ready(function() {
                $("#owl-tags").owlCarousel({
                    loop:true,
                    margin:10,
                    items : 8,
                    navigation : true,
                    navigationText : ["&#8249;", "&#8250;"],
                    pagination : false,
                    paginationNumbers : false,
                    responsive:{
                        0:{
                            items:5
                        },
                        600:{
                            items:7
                        },
                        1000:{
                            items:8
                        }
                    }

                });
            });            
    </script>
        
        @stack('js')
        
        <!-- Argon JS -->
        <script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>