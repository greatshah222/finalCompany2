@section('content')
<div class="container">
    <div class="row">
        @extends('layouts.manage')
        <div class="row">
        <div class="col-md-10 ">
            <h1 class="title">Manage Users</h1>
        </div>

        <div class="col-md-1 pull-right ">




            <a href="{{asset('manage/users/create')}}" class="btn btn-info btn-lg " role="button" aria-pressed="true">create new user</a>













        </div>
            <br>
            <br><br><br>
            <div class="col-md-8 pull-right  ">

            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>date Created</th>

                    <th>Actions</th>


                </tr>

                </thead>
            </table>
            </div>


        </div>

    </div>
</div>





@endsection