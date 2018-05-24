@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit Tags</h1>
                </div>
                <br><br><br><br>

                <div class="col-md-8 col-md-offset-2 ">




                    <div class="well">
                        {!! Form::model($tag,['route'=>['tags.update',$tag->id],'method'=>"put"])!!}
                        {{Form::label('name','Name:')}}
                        {{Form::text('name',null,['class'=>'form-control' ])}}
                        <br>
                        <div class="row">
                        <div class="col-md-6">

                        {{Form::submit('Save Changes',['class'=>'btn btn-primary btn-block ' ])}}
                        {!! Form::close() !!}
                        </div>
                            <div class="col-md-6">
                                <a href="{{route('tags.show',$tag->id)}}" class="btn btn-danger btn-block" role="button">Cancel</a>


                            </div>
                        </div>
                        </div>
                    </div>













                </div>


        </div>
    </div>










@endsection
















