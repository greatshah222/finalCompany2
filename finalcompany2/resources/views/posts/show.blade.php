@section('title','| Create New Post')

@extends('layouts.manage')


@section('content')

                <div class="col-md-6 col-md-offset-2 ">
                    <br><br>
                    <div class="well">
                        <h1 class="title">Post Description</h1>
                        <br>

                        <dl class="dl-horizontal">
                            <dt> Url</dt>
                            <dd> <a href="{{route('blog.single', $post->slug)}}">{{route('blog.single', $post->slug)}}</a> </dd>

                        </dl>

                        <dl class="dl-horizontal">
                            <dt> Category</dt>
                            <dd>{{$post->category->name}}</dd>

                        </dl>
                        <dl class="dl-horizontal">
                            <dt> Tags</dt>
                            <dd> @foreach($post->tags as $tag)
                                    <span class="label label-default">{{$tag->name}}</span>
                                      @endforeach
                            </dd>

                        </dl>
                        <dl class="dl-horizontal">
                            <dt> created At:</dt>
                            <dd> {{ date('M j, Y H:ia',strtotime($post->created_at))}}</dd>

                        </dl>
                        <dl class="dl-horizontal">
                            <dt> Last updated:</dt>
                            <dd> {{date('M j, Y H:ia',strtotime($post->updated_at))}}</dd>

                        </dl>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}
                                {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
                                {!! Form::close() !!}

                            </div>
                           <div class="col-sm-4">
                            <a href="{{asset('posts/')}}" class="btn btn-info btn-block " role="button" aria-pressed="true"><i class="fa fa-eye m-l-10"></i>  View ALL posts</a>


                        </div>
                    </div>



                </div>

                </div>
                <br><br><br><br>

                <div class="col-md-2 col-md-offset-8">

















                </div>






                <div class="col-md-10 ">






                    <h1 style="text-decoration-color: red"> {{ $post->title }}</h1>
                    <br>
                    <p class="lead"> {{$post->body}}</p>


















@endsection
