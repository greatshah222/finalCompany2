@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">All Tags</h1>
                </div>

                <div class="col-md-3 pull-right ">




                    <div class="well">
                        {!! Form::open(['route'=>'tags.store'])!!}
                        <h2>New tag</h2>
                        {{Form::label('name','Name:')}}
                        {{Form::text('name',null,['class'=>'form-control' ])}}
                        <br>

                        {{Form::submit('Create New Tag',['class'=>'btn btn-primary btn-block ' ])}}
                        {!! Form::close() !!}
                    </div>













                </div>
                <br>
                <br><br><br>
                <div class="col-md-7 pull-right  ">


                    <hr>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr  class="table-bordered table-info">
                            <th>#</th>

                            <th> Tag Name</th>




                        </tr>

                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td><a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>


            </div>

        </div>
    </div>










@endsection
















