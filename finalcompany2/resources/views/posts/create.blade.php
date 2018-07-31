<link href="{{asset('css/select2.min.css')}}" rel="stylesheet" type="text/css" media="all" /> <!-- Nav-CSS -->
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init(
        {
            selector:'textarea',
          plugins:'link code',
            menubar:false


        });
    </script>



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




                <div class="col-md-7 col-md-offset-2  ">

                    <hr>
                    {!! Form::open(array('route' => 'posts.store','files'=>true)) !!}

                    {{Form::label('title','Title:')}}
                    {{Form::text('title',null,array('class'=>'form-control','required'=>''))}}
                    {{Form::label('slug','Slug:')}}
                    {{Form::text('slug',null,array('class'=>'form-control','required'=>' ', 'minlength'=>'5', 'maxlength'=>'25','placeholder'=>"This is automatic field on the basis of your title"))}}

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
                    <br>
                    {{Form::label('featured','Image:')}}
                    {{Form::file('featured',null,array('class'=>'form-control'))}}
                    <br>



                    {{Form::label('body','Post Body:')}}
                    {{Form::textarea('body',null,array('class'=>'form-control'))}}

                    {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;'))}}

                    {!! Form::close() !!}










                </div>

            </div>



        </div>

    </div>
    @include('_includes.navbar.footer')










    <script src="{{asset('js/select2.min.js')}}"></script>

<script>

    $(document).ready(function() {
        $('.select2-multi').select2();
    });
    $('#title').on('blur',function () {
        var theTitle = this.value.toLowerCase().trim(),
            slugInput = $('#slug');
        theSlug = theTitle.replace(/&/g, '-and-')
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/\- \- +/g, '-')
            .replace(/^-+|-+$/g, '');
        slugInput.val(theSlug);



    });
</script>

@endsection




