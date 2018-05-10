@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title"> View User Detail</h1>

                <div class="col-md-1 pull-right ">




                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-info btn-lg " role="button" aria-pressed="true"><i class=" fa fa-user m-r-50"></i> Edit Detail</a>












                </div>



                <br>
                <br><br><br>



                    <div class="col-md-10 pull-right  ">

                        <hr>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>

                                <th>Name</th>
                                <th>Email</th>
                                <th>Date Created</th>



                            </tr>

                            </thead>
                            <tbody>

                                <tr>
                                    <th>{{$user->id}}</th>
                                    <th>{{$user->name}}</th>

                                    <th>{{$user->email}}</th>
                                    <th>{{$user->created_at->toFormattedDateString()}}</th>



                                </tr>

                            </tbody>
                        </table>


                    </div>

                </div>
        </div>

    </div>






@endsection


