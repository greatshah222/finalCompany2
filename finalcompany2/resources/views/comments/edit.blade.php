@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit Comment</h1>
                </div>


                <br>
                <br><br><br>








    <div class="col-md-8 col-md-offset-2">

        <hr>
        {!! Form::model($comment,array('route' => array('comments.update',$comment->id),'method'=>'PUT','files'=>true)) !!}

        {{Form::label('name','Name:')}}
        {{Form::text('name',null,array('class'=>'form-control','disabled'=>''))}}
        {{Form::label('email','Email:')}}
        {{Form::text('email',null,array('class'=>'form-control','disabled'=>''))}}
        <br>
        {{Form::label('comment','Comments:')}}
        {{Form::textarea('comment',null,['class'=>' form-control'])}}






        {{Form::submit('update Comment',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

        {!! Form::close() !!}
        <br>


    </div>

    </div>
        </div>
    </div>
            @endsection




