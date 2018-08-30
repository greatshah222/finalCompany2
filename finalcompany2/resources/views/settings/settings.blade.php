@section('content')
    <div class="container">
        <div class="row">
            @extends('layouts.manage')
            <div class="row">
                <div class="col-md-10 ">
                    <h1 class="title">Edit Blog Setting</h1>
                </div>


                <br>
                <br><br><br>
                <div class="col-md-8 col-md-offset-2 ">

                    <hr>
                    <form action="{{route('settings.update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name"> Site Name</label>
                            <input type="text" class="form-control" id="name"   name="site_name" value="{{$settings->site_name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email"   name="email" value="{{$settings->contact_email}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Adress</label>
                            <input type="text" class="form-control" id="address"   name="address" value="{{$settings->address}}">
                        </div>
                        <div class="form-group">
                            <label for="contact"> Contact Number </label>
                            <input type="tel" class="form-control" id="contact"   name="contact" value="{{$settings->contact_number}}">
                        </div>
                        <div class="form-group">
                            <label for="about_us">About_us</label>
                                <input type="text" class="form-control" id="about_us"   name="about_us" value="{{$settings->about_us}}">
                        </div>


                        <button type="submit" class="btn btn-success">update Setting </button>
                    </form>

                </div>

            </div>



        </div>

    </div>










@endsection



