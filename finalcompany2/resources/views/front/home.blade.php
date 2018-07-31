@extends('layout.main')

@section('value')
    <section class="banner-w3ls">

    <div class="banner-w3l-mk">

        <div class="w3_agileits_header_text">
            <a href="">  <h3>Donate<i class="fa fa-heart" aria-hidden="true"></i></h3></a>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Features -->
    <div class="pogoSlider" id="js-main-slider">
        <div class="pogoSlider-slide" data-transition="verticalSlide" data-duration="2000"  style="background-image:url(galleryimages/banner2.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <h3>They are Humans as Well</h3>
                    <ul class="banner-agileits">
                        <li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
                    </ul>
                    <a href="#about" class="btn btn-circle scroll">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(galleryimages/banner2.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <h3>Together We Can Stop poverty!</h3>
                    <ul class="banner-agileits">
                        <li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
                    </ul>
                    <a href="#about" class="btn btn-circle scroll">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(galleryimages/banner3.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <h3>We Can Make Smile!</h3>
                    <ul class="banner-agileits">
                        <li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
                    </ul>
                    <a href="#about" class="btn btn-circle scroll">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="pogoSlider-slide " data-transition="verticalSlide" data-duration="2000"  style="background-image:url(galleryimages/banner4.jpg);">
            <div class="pogoSlider-slide-element">
                <div class="container">
                    <h3>Education For Every Kid!</h3>
                    <ul class="banner-agileits">
                        <li><a href="#mail" class="link-w3l2 scroll">Contact Us</a></li>
                    </ul>
                    <a href="#about" class="btn btn-circle scroll">
                        <i class="fa fa-hand-o-down" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>



    <!-- Events -->

    <div class="service" id="services">
        <div class="container">
            <h3 class="w3l-title"><span>O</span>ur <span>S</span>ervices</h3>
            <div class="serve-grids-top">
                <div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-graduation-cap"></a>
                    </div>
                    <h5>Charity for Education</h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-gratipay"></a>
                    </div>
                    <h5>Help Little Hands</h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4  service-box wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-child"></a>
                    </div>
                    <h5>Agricultural and Rural Development</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="serve-grids-top second">
                <div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-gift"></a>
                    </div>
                    <h5>Donate for Children</h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-bullhorn"></a>
                    </div>
                    <h5>Drug Addiction Awareness Program  </h5>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 service-box wow fadeInUp"  data-wow-duration="1s" data-wow-delay=".3s">
                    <div class=" hi-icon-effect-6">
                        <a href="#set-6" class="hi-icon fa fa-medkit"></a>
                    </div>
                    <h5>Health and Medication</h5>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="events-section">
        <div class="container">
            <h3 class="w3l-title"><span>Our</span> <span>Blog</span></h3>
            @foreach($posts as $post)


                <div class="col-sm-4 live-grids-w3ls">

                    <div class="live-left1">
                        <a href="{{asset('postimages/'.$post->featured)}}"><img src="{{asset('postimages/'.$post->featured)}}" class="img-responsive" alt="djsb"/></a>




                </div>
                <div class="live-info">


                    <ul>
                        <li><span class="fa fa-calendar-o" aria-hidden="true"></span> {{$post->created_at->toFormattedDateString()}}</li>
                        <a href="{{url('blog/'.$post->slug)}}">  <li> <button class="btn btn-info" style="margin-left: 30px">Read More</button></li></a>

                    </ul>

                    <h4>    {{substr($post->title,0,20)}} {{strlen($post->title) > 20 ? " ..." : " "}}
                    </h4>
                    <p class="para-1">{{substr(strip_tags($post->body) ,0,300)}} {{strlen(strip_tags($post->body) ) > 50 ? " ..." : " "}}
                    </p>

                </div>

            </div>








            @endforeach

            <div class="clearfix"> </div>
        </div>
    </div><!-- //pogoSlider -->

    <div class="about-w3layouts" id="features">
        <div class="col-md-6 left-agile">
        </div>
        <div class="col-md-6 agileits_updates_grid_right">
            <h3>Features</h3>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title asd">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>assumenda est cliche
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Itaque earum rerum
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>autem accusamus terry
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title asd">
                            <a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>excepturi sint cliche
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body panel_text">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //Features -->
    <!-- Services -->

    <!-- //Services -->
    <!-- Middle-section -->
    <!-- //Middle-section -->
    <!-- gallery -->
<div >

</div>


    <div class="gallery" id="gallery">
        <div class="container">
            <h3 class="w3l-title"><span>O</span>ur <span>G</span>allery</h3>
            <div class="w3layouts_gallery_grids">
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/8.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/8.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/9.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/9.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/10.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/10.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/8.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/8.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/9.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/9.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/10.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/10.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/8.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/8.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/9.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/9.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 w3layouts_gallery_grid">
                    <a href="{{asset('galleryimages/10.jpg')}}" class="lsb-preview" data-lsb-group="header">
                        <div class="w3layouts_news_grid">
                            <img src="{{asset('galleryimages/10.jpg')}}" alt=" " class="img-responsive">
                            <div class="w3layouts_news_grid_pos">
                                <div class="wthree_text"><h3>Handout</h3></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
    <!-- team -->
    <div class="team-w3l" id="team">
        <div class="container">
            <h3 class="w3l-title"><span>O</span>ur <span>G</span>allery</h3>
            <div class="w3ls_news_grids w3_agileits_team_grids">
                <div class="col-md-3 col-sm-3 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <img src="{{asset('galleryimages/t1.jpg')}}" alt=" " class="img-responsive" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text agileinfo_about_text">
                                <ul class="agileits_social_list">
                                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Romana Nasrin</h4>
                    <p>Field Manager</p>
                </div>
                <div class="col-md-3 col-sm-3 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <img src="{{asset('galleryimages/t2.jpg')}}" alt=" " class="img-responsive" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text agileinfo_about_text">
                                <ul class="agileits_social_list">
                                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Rudolph Sullivan</h4>
                    <p>Secretary Humanitas</p>
                </div>
                <div class="col-md-3 col-sm-3 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <img src="{{asset('galleryimages/t3.jpg')}}" alt=" " class="img-responsive" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text agileinfo_about_text">
                                <ul class="agileits_social_list">
                                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Albert Williams</h4>
                    <p>Co-Founder</p>
                </div>
                <div class="col-md-3 col-sm-3 w3_agileits_team_grid">
                    <div class="w3layouts_news_grid">
                        <img src="{{asset('galleryimages/t4.jpg')}}" alt=" " class="img-responsive" />
                        <div class="w3layouts_news_grid_pos">
                            <div class="wthree_text agileinfo_about_text">
                                <ul class="agileits_social_list">
                                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h4>Mary Hilton</h4>
                    <p>Senior Staff</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //team -->
    <!-- mail -->

    <!-- map -->

    <!-- //map -->
    <!-- Contact-form -->

    <!-- //Contact-form -->
    <!-- footer -->
    @include('_includes.navbar.footer')

@endsection