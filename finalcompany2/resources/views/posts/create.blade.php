<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->

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
                    {{Form::label('slug','Slug:')}}
                    {{Form::text('slug',null,array('class'=>'form-control','required'=>' ', 'minlength'=>'5', 'maxlength'=>'25'))}}
                    {{Form::label('category_id','Category:')}}
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                    </select>

                    {{Form::label('tags','Tags:')}}
                    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach

                    </select>



                    {{Form::label('body','Post Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}

                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}

                    {!! Form::close() !!}










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




