@include('_includes.navbar.head')


<html lang="zxx">
<head>
    <title>Handout a Society Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Handout Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link href="{{asset('dist1/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Bootstrap-Core-CSS -->
    <link href="{{asset('dist1/css/style.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="{{asset('dist1/css/font-awesome.css')}}"> <!-- Font-Awesome-Icons-CSS -->
    <link href="{{asset('dist1/css/pogo-slider.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Banner-Slider-CSS -->
    <link href="{{asset('dist1/css/nav.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->
    <link rel="stylesheet" href="{{asset('dist1/css/owl.carousel.css')}}" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
    <link href="{{asset('dist1/css/lsb.css')}}" rel="stylesheet" type="text/css"> <!-- gallery-css -->
    <!-- //css files -->



    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <!-- //online-fonts -->
    <!-- js files -->
    <script src="{{asset('dist1/js/modernizr.js')}}"></script>


    <!-- //css files -->
    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    @yield('stylesheets')
    <!-- //web-fonts -->
    <!-- /js files -->
</head>
<body>

<!-- banner section -->





@yield('value')





<!-- //footer -->

<!-- js files -->
<!-- js -->
<script type="text/javascript" src="{{asset('dist1/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('dist1/js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<!-- js for banner -->
<script src="{{asset('dist1/js/jquery.pogo-slider.min.js')}}"></script>
<script src="{{asset('dist1/js/main.js')}}"></script>
<!-- /js for banner -->
<!-- js for navigation -->
<script src="{{asset('dist1/js/classie.js')}}"></script>
<script src="{{asset('dist1/js/demo1.js')}}"></script>

<!-- //js -->
<!-- /js for navigation -->
<!-- Gallery -->
<script src="{{asset('dist1/js/lsb.min.js')}}"></script>
<script>
    $(window).load(function() {
        $.fn.lightspeedBox();
    });
</script>
<!-- //Gallery -->
<!-- Numscroller -->
<script type="text/javascript" src="{{asset('dist1/js/numscroller-1.0.js')}}"></script>
<!-- //Numscroller -->
<!-- Owl-Carousel-JavaScript -->
<script src="{{asset('dist1/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel ({
            items : 3,
            lazyLoad : true,
            autoPlay : true,
            pagination : true,
        });
    });
</script>
<!-- //Owl-Carousel-JavaScript -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('dist1/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('dist1/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- smooth scrolling -->
<script src="{{asset('dist1/js/SmoothScroll.min.js')}}"></script>

@yield('scripts')
<!-- //smooth scrolling -->

<!-- //js files -->
</body>
</html>