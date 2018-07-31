@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Trashed Posts</h1>
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
                            <th>Image</th>

                            <th>Body</th>

                            <th>Date Deleted</th>

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
                                <td>
                                    <a href="{{asset('postimages/'.$post->featured)}}"><img src="{{asset('postimages/'.$post->featured)}}" height="10px" width="100px" class="img-responsive" alt="djsb"/></a>
                                </td>




                                <td>{{substr(strip_tags($post->body) ,0,50)}} {{strlen(strip_tags($post->body) ) > 50 ? " ..." : " "}}</td>

                                <td>{{$post->deleted_at->toFormattedDateString()}}</td>
                                <td><a href="{{route('posts.restore',$post->id)}}" class="btn btn-success btn-xs" role="button"><i class="fa fa-undo"></i>Restore</a> </td>
                                <td><a href="{{route('posts.kill',$post->id)}}" class="btn btn-danger btn-xs" role="button"><i class="fa fa-trash"></i>Delete </a></td>





                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

            </div>



        </div>


    </div>






@endsection