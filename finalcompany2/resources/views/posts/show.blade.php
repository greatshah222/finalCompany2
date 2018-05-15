@section('title','| Create New Post')

@extends('layouts.manage')


@section('content')

                <div class="col-md-6 col-md-offset-2 ">
                    <h1 class="title">Post</h1>

                </div>
                <div class="col-md-2 col-md-offset-8">

















                </div>






                <div class="col-md-10 ">






                    <h1> {{ $post->title }}</h1>
                    <br>
                    <p class="lead"> {{$post->body}}</p>
                    <div class="col-md-12 ">
                        <div class="col-md-6 pull-right ">

                            <div class="well">
                                <dl class="dl-horizontal">
                                    <label> Url</label>
                                    <p> <a href="{{route('blog.single', $post->slug)}}">{{route('blog.single', $post->slug)}}</a> </p>

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
                                    <div class="col-sm-6">
                                        {!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block')) !!}
                                    </div>
                                    <div class="col-sm-6">
                                        {!! Form::open(['route'=>['posts.destroy', $post->id],'method'=>'DELETE']) !!}
                                        {!! Form::submit('Delete',['class'=>'btn btn-danger btn-block']) !!}
                                        {!! Form::close() !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>

















@endsection
