
@section('title','| Create New Post')



@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="title">Create New Posts</h1>

                </div>
                <hr>



                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    {!! Form::open(array('route' => 'posts.store')) !!}

                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control','required'=>''))}}


                    {{Form::label('body','Post Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}

                    {!! Form::close() !!}

                </div>

            </div>



        </div>

    </div>










@endsection



