@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.app')
            <div class="row">
                <div class="col-md-6 col-md-offset-4 ">
                    <h1 class="title">Edit profile</h1>


                    <img src="{{$user->profile->avatar}}" height="75px" width="100px">
                              </div>


                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    <form action="{{route('profile.update',$user->id)}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email"  name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" :disabled="auto_password">
                        </div>

                        <div class="form-group">
                            <label for="avatar">Upload Image</label>
                            <input type="file" class="form-control" id="avatar" name="avatar" value="">
                        </div>
                        <div class="form-group">
                            <label for="facebook">facebook Profile</label>
                            <input type="text" class="form-control" id="facebook"  name="facebook" value="{{$user->profile->facebook}}">
                        </div>
                        <div class="form-group">
                            <label for="youtube">Youtube Profile</label>
                            <input type="text" class="form-control" id="youtube"  name="youtube" value="{{$user->profile->youtube}}">
                        </div>
                        <div class="form-group">
                            <label for="about">About you</label>
                            <input type="text" class="form-control" id="about"  name="about" value="{{$user->profile->about}}">
                        </div>


                        <button type="submit" class="btn btn-success">Update Profile</button>
                    </form>

                </div>

            </div>



        </div>








@endsection


