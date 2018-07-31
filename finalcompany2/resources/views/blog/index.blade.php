@extends('layout.main')


@section('value')
    <link href="{{asset('dist1/css/blog.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->


    <!-- technology -->

        <div class="technology">

            <div class="container">
            <div class="col-md-7 technology-left">

                <div class="tech-no">

                @foreach($posts as $post)

                    <!-- technology-top -->
                    <div class="soci">
                        <ul>
                            <li><a href="#" class="facebook-1"> </a></li>
                            <li><a href="#" class="facebook-1 twitter"> </a></li>
                            <li><a href="#" class="facebook-1 chrome"> </a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-envelope"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-print"> </i></a></li>
                            <li><a href="#"><i class="glyphicon glyphicon-plus"> </i></a></li>
                        </ul>
                    </div>

                    <div class="tc-ch">

                        <div class="tch-img">
                            <a href="{{asset('postimages/'.$post->featured)}}"><img src="{{asset('postimages/'.$post->featured)}}" class="img-responsive" alt="djsb"/></a>
                        </div>
                        <a class="blog blue" href="#"></a>
                        <h3><a href="{{url('blog/'.$post->slug)}}">{{$post->title}}</a></h3>
                        {{substr(strip_tags($post->body) ,0,200)}} {{strlen(strip_tags($post->body) ) > 200 ? " ..." : " "}}
                        <div class="blog-poast-info">
                            <ul>
                                <li><i class="glyphicon glyphicon-user"> </i><a class="admin" href="#">admin</a></li>

                                <li><i class="glyphicon glyphicon-calendar"> </i>30-12-2015</li>
                                <li><i class="glyphicon glyphicon-comment"> </i><a class="p-blog" href="#">3 Comments </a></li>
                                <li><i class="glyphicon glyphicon-heart"> </i><a class="admin" href="#">5 favourites </a></li>

                             <a href="{{url('blog/'.$post->slug)}}"> <li class="btn btn-info btn-group-sm"><i class="glyphicon glyphicon-eye-open"> </i>Read More</li></a>
                            </ul>
                        </div>
                    </div>
                    @endforeach


                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <h2>View more </h2>
                        </div>
                        <div class="blog-grid-right" style="margin-left: 300px">
                            {{$posts->links()}}


                        </div>
                        <div class="clearfix"> </div>
                    </div>





                    <div class="clearfix"></div>

                </div>

            </div>









            <!-- technology-right -->
            <div class="col-md-3 technology-right">
                <div class="blo-top">
                    <div class="tech-btm">
                        <img src="images/banner1.jpg" class="img-responsive" alt=""/>
                    </div>
                </div>
                <div class="blo-top">
                    <div class="tech-btm">
                        <h4>Sign up to our newsletter</h4>
                        <p>Pellentesque dui, non felis. Maecenas male</p>
                        <div class="name">
                            <form>
                                <input type="text" placeholder="Email" required="">
                            </form>
                        </div>
                        <div class="button">
                            <form>
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="blo-top1">
                    <div class="tech-btm">
                        <h4>Top stories of the week </h4>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="singlepage.html"><img src="images/6.jpg" class="img-responsive" alt=""/></a>
                            </div>
                            <div class="blog-grid-right">

                                <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <a href="singlepage.html"><img src="images/7.jpg" class="img-responsive" alt=""/></a>
                            </div>
                            <div class="blog-grid-right">

                                <h5><a href="singlepage.html">Pellentesque dui, non felis. Maecenas male</a> </h5>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="blog-grids">
                            <div class="blog-grid-left">
                                <h5>View more </h5>
                            </div>
                            <div class="blog-grid-right">
                                {{$posts->links()}}


                            </div>
                            <div class="clearfix"> </div>
                        </div>


                    </div>
                </div>

            </div>


            <div class="clearfix"></div>
            <!-- technology-right -->
        </div>

        </div>
    @include('_includes.navbar.footer')









@endsection
<!-- technology -->
<!-- footer -->



