@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <br><br><br><br>
                <div class="col-md-8 col-md-offset-2">
                    <div class="well">
                        <h1 class="title">Delete this comment? </h1>
                        <br>
                        <dl class="dl-horizontal">
                            <dt> Name</dt>
                            <dd>L{{$comment->name}} </dd>

                        </dl>

                        <dl class="dl-horizontal">
                            <dt> Email</dt>
                            <dd>L{{$comment->email}} </dd>

                        </dl>

                        <dl class="dl-horizontal">
                            <dt> Comment</dt>
                            <dd>L{{$comment->comment}} </dd>

                        </dl>
                        {{Form::open(['route'=>['comments.destroy',$comment->id],'method'=>'DELETE'])}}
                        {{Form::submit('YES DELETE THIS COMMENT',['class'=>'btn btn-lg btn-block btn-danger'])}}
                        {{Form::close()}}

                    </div>

                </div>
        </div>
    </div>
    </div>



                @endsection




