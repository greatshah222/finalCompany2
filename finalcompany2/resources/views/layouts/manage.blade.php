<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'manage') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{asset('dist1/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('dist1/css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('dist1/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <link href="{{asset('dist1/css/pogo-slider.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
    <link href="{{asset('dist1/css/nav.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->
    <link rel="stylesheet" href="{{asset('dist1/css/owl.carousel.css')}}" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
    <link href="{{asset('dist1/css/lsb.css')}}" rel="stylesheet" type="text/css"> <!-- gallery-css -->
    <!-- //css files -->
    <link href="{{asset('dist/css/styleform.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->


    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <!-- js files -->
    <script src="{{asset('dist1/js/modernizr.js')}}"></script>


    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- //web-fonts -->

    <!-- Styles -->

</head>
<body>
    @include('_includes.navbar.head')


    @include('_includes.navbar.side')
    <main class="py-4">

        @yield('content')
    </main>



</body>
</html>
