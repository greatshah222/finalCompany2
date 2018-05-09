@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main-w3lsrow">
            <!-- login form -->
            <div class="login-form login-form-left">
                <div class="agile-row">
                    <div class="head">
                        <h2>Register Here</h2>
                        <span class="fa fa-lock"></span>
                    </div>
                    <div class="clear"></div>
                    <div class="login-agileits-top">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div>

                                    <input id="name" type="text" class="name" name="name" value="{{ old('name') }}" placeholder="Enter Your Name" required autofocus >

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            <div>

                                <input id="email" type="text" class="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autofocus >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>

                                <input id="password" type="password" class="password" name="password" placeholder="Enter Your Password"  required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>

                                <input id="password-confirm" type="password" class="password" name="password_confirmation" placeholder="Enter Your Password"  required autofocus>


                            </div>







                                    <input type="submit" value="REGISTER">
                                    </input>

                        </form>
                    </div>


                </div>
            </div>
        </div>
        <!-- //login form -->

        <a href="{{route('login') }}">	<div class="login-agileits-bottom1">
                <h3>or Have an Account Already?</h3>
            </div></a>



    </div>
@endsection
