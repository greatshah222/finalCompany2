<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->

@section('title','| Create New Post')



@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-8 col-md-offset-2 ">
                    <h1 class="title">Edit Posts</h1>

                </div>
                <hr>



                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    {!! Form::model($post,array('route' => array('posts.update',$post->id),'method'=>'PUT','files'=>true)) !!}

                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control'))}}
                    {{Form::label('slug','Slug:')}}
                    {{Form::text('slug',null,array('class'=>'form-control'))}}
                    {{Form::label('category_id','Category:')}}
                    {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}
                    {{Form::label('tags','Tags:')}}
                    {{Form::select('tags[]',$tags,null,['class'=>' form-control select2-multi','multiple'=>'multiple'])}}
                    <br><br>
                    {{Form::label('featured','Featured Image:')}}
                    {{Form::file('featured')}}
                    <br>


                    {{Form::label('body','Post Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control'))}}



                    {{Form::submit('Edit Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'),array($post->id))}}

                    {!! Form::close() !!}
                    <br>

                   <a href="{{route('posts.show',$post->id)}}" class="btn btn-danger btn-lg btn-block" role="button">Cancel</a>

                </div>

            </div>



        </div>

    </div>








    <script src="{{asset('js/select2.min.js')}}"></script>

    <script>

        $(document).ready(function() {
            $('.select2-multi').select2();
        });
    </script>

@endsection



