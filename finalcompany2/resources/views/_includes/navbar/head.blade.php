
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Bettering Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- // Meta Tags -->

    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('dist/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('css/toastr.min.css')}}" rel="stylesheet" type="text/css" media="all" />


    <!--testimonial flexslider-->
    <link href="{{asset('dist/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,800" rel="stylesheet">
    @yield('extra-css')

    <!--//fonts-->

</head>

<body>
<!--Header-->
<div class="header">
    <div class="top">
        <div class="container">

            <div class="col-md-9 top-left">
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>Bagbazar,Kathmadu
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i> +9779841331624 </li>
                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="{{asset('contact')}}">info@villagedev.com</a></li>
                </ul>
            </div>
            <div class="col-md-3 top-middle">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>
    <!--top-bar-w3layouts-->
    <div class="top-bar-w3layouts">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="{{url('/')}}">Village Dev</a></h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{url('/')}}">Home</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{url('/home')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
                                    <ul class="dropdown-menu" id="menu">
                                        <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out" aria-hidden="true">Logout</i>
                                                </a></li>
                                        <li><a href="{{asset('profile')}}"><i class=" fa fa-user">Profiles</i>

                                               </a></li>
                                        <li><a href="{{asset('manage')}}"><i class="fa fa-cog">Manage</i> </a></li>
                                        <li><a href="{{asset('manage')}}"><i class="fa fa-bell">Notification</i> </a></li>


                                    </ul>
                                </li>






                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                            @endauth
                        @endif


                                <li><a href="{{route('blog.index')}}"><i class="fa fa-chrome" aria-hidden="true">Blog</i>
                                    </a></li>





                        </li>
                        <li><a href="{{route('donate')}}">Donate</a></li>

                        <li><a href="{{asset('contact')}}">Contact</a></li>
                    </ul>


                </div>




                <div class="clearfix"> </div>
            </nav>
        </div>

    </div>
    <!--//top-bar-w3layouts-->
    <!--Slider-->



    <script src="{{asset('dist/js/bootstrap.js')}}"></script>


</div>


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
<script src="{{asset('js/toastr.min.js')}}"></script>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>


<!-- //smooth scrolling -->

<!-- //js files -->

    <!--// Required Scripts -->
</body>

</html>