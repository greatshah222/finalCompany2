@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-6 col-md-offset-3 ">
                    <h1 class="title">{{$tag->name}} Tag <small>{{$tag->posts()->count()}} Posts</small></h1>
                </div>
                <div class="col-md-5 col-md-offset-3">

                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary pull-right" style="margin-top:20px;">edit</a>

                        </div>
                        <div class="col-md-4">



                            <a href="{{route('tags.index',$tag->id)}}" class="btn btn-default pull-right" style="margin-top:20px;">View All Tags</a>
                        </div>
                        <div class="col-md-4">
                          {{Form::open(['route'=>['tags.destroy',$tag->id],'method'=>'DELETE'])}}
                            {{Form::submit('Delete',['class'=>'btn btn-danger pull right','style'=>'margin-top:20px;'])}}

                        </div>


                    </div>
                </div>











                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">


                    <hr>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr  class="table-bordered table-info">
                            <th>#</th>

                            <th> Title</th>
                            <th>Tags</th>
                            <th>Action</th>




                        </tr>

                        </thead>
                        <tbody>
                        @foreach($tag->posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>@foreach($post->tags as $tag)
                                        <span class="label label-default">{{$tag->name}}</span>
                                    @endforeach
                                </td>
                                <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-info btn-xs">View</a></td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div>


            </div>

        </div>
    </div>











@endsection
















