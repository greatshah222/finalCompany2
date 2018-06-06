@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Create New Users</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-10 pull-right  ">

                    <hr>
                    <form action="{{route('users.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
                        </div>


                        <button type="submit" class="btn btn-success">Create User</button>
                    </form>

                </div>

            </div>



        </div>

    </div>










@endsection



