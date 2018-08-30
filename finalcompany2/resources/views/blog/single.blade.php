@extends('layout.main')


@section('value')
    <link href="{{asset('dist1/css/blog.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->


    <!-- technology -->
<div class="technology-1">
    <div class="container">
        <div class="col-md-9 technology-left">
                <!-- technology-top -->

                <div class="business">

                    <div class="blog-grid2">
                        <a href="{{asset('postimages/'.$post->featured)}}"><img src="{{asset('postimages/'.$post->featured)}}" class="img-responsive" alt="djsb"/></a>
                    <div class="blog-text"><h3><a href="#">{{$post->title}}</a></h3>
                        <p>{!! $post->body !!}</p></div>
                    </div>




                <div class="comment-top">
                    <h2><span class="glyphicon glyphicon-comment"></span> {{$post->comments()->count()}} Comment</h2>
                    @foreach($post->comments as $comment)


                    <div class="media">

                    <div class="media-left">
                        <a href="#">
                            <img src="{{asset('image/si.png')}}" alt="">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading" style="font-size: 18px">{{$comment->name}}</h5>
                        <p style="font-size: 0.575em">{{ date('F nS,Y -G:i',strtotime($comment->created_at))  }}</p>
                        <p style="color: black">{{$comment->comment}}</p>
                        <!-- Nested media object -->

                    </div>
                    </div>
                        <br><br>

                    @endforeach

                </div>

                    <div class="comment" id="comment-form">
                    <h3>Leave a Comment</h3>
                    <div class=" comment-bottom">
                       {{ Form::open(['route'=>['comments.store',$post->id],'method'=>'POST']) }}
                            <input type="text" placeholder="Name" id="name" name="name">
                            <input type="text" placeholder="Email" id="email" name="email">
                            <textarea placeholder="Comments" required="" id="comment" name="comment"></textarea>
                            <input type="submit" value="Send">
                      {{ Form::close()}}
                    </div>
                </div>

            </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right-1">
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
                    <h4>Top Blog of the week </h4>

                </div>
                @foreach($posts as $post)

                <div class="tech-btm">
                    <h3><a href="{{url('blog/'.$post->slug)}}">{{$post->title}}</a></h3>
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="{{asset('postimages/'.$post->featured)}}"><img src="{{asset('postimages/'.$post->featured)}}" class="img-responsive" alt="djsb"/></a>
                        </div>
                        <div class="blog-grid-right">

                            <h5><a href="{{url('blog/'.$post->slug)}}">{{substr(strip_tags($post->body) ,0,100)}} {{strlen(strip_tags($post->body) ) > 1000 ? " ..." : " "}}</a></h5>
                        </div>
                        <div class="clearfix"> </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
</div>
@include('_includes.navbar.footer')
@endsection
<!-- technology -->
<!-- footer -->



