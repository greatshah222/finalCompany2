@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">All Posts</h1>
                </div>

                '
                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr  class="table-bordered table-info">
                            <th>#</th>

                            <th>Title</th>
                            <th>Slug</th>

                            <th>Body</th>

                            <th>Date Created</th>

                            <th>Actions</th>
                            <th></th>



                        </tr>

                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{substr($post->title,0,20)}} {{strlen($post->title) > 50 ? " ..." : " "}}</td>
                                <td>{{$post->slug}}</td>



                                <td>{{substr($post->body,0,50)}} {{strlen($post->body) > 50 ? " ..." : " "}}</td>

                                <td>{{$post->created_at->toFormattedDateString()}}</td>
                                    <td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm" role="button"><i class="fa fa-eye"></i>view</a> </td>
                                <td><a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i>Edit </a></td>





                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col-md-offset-6 pull-right">
                        {{$posts->links()}}
                    </div>

                </div>

            </div>



        </div>


    </div>






@endsection