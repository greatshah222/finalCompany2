@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit User Detail</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    <form action="{{route('users.update',$user->id)}}" method="post">
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

                        <button type="submit" class="btn btn-success">Edit User</button>
                    </form>

                </div>

            </div>



        </div>

    </div>






@endsection


