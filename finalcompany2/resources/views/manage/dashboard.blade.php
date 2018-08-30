@extends('layouts.manage')


@section('content')
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <h1 class="">Dashboard </h1>

            <br><br>
            <div class="col-lg-4">
                <div class="panel panel panel-info">
                 <div class="panel-heading text-center">published post</div>

                <div class="panel-body"><h1 class="text-center">{{ $posts_count }}</h1> </div>
            </div>
        </div>
            <div class="col-lg-4">
                <div class="panel panel panel-danger">
                    <div class="panel-heading text-center">trashed post</div>

                    <div class="panel-body"><h1 class="text-center">{{ $trashed_count }}</h1> </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel panel-success">
                    <div class="panel-heading text-center">users</div>

                    <div class="panel-body"><h1 class="text-center">{{$users_count}}</h1> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel panel-success">
                    <div class="panel-heading text-center">Categories</div>

                    <div class="panel-body"><h1 class="text-center">{{$categories_count}}</h1> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel panel-info">
                    <div class="panel-heading text-center">Tags</div>

                    <div class="panel-body"><h1 class="text-center">{{$tags_count}}</h1> </div>
                </div>
            </div>



    </div>

    </div>




    @endsection