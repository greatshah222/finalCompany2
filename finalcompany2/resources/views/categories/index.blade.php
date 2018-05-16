@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">All Posts</h1>
                </div>

                <div class="col-md-3 pull-right ">




                    <div class="well">
                        {!! Form::open(['route'=>'categories.store'])!!}
                        <h2>New Category</h2>
                        {{Form::label('name','Name:')}}
                        {{Form::text('name',null,['class'=>'form-control' ])}}
                        <br>

                        {{Form::submit('Create New Category',['class'=>'btn btn-primary btn-block ' ])}}
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

                                <th> CategoryName</th>




                            </tr>

                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                </div>


                </div>

            </div>










@endsection
















