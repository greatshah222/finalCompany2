
@extends('layouts.app')


@section('content')
    <div class="main">
        <div class="main-w3lsrow">
            <!-- login form -->
            <div class="login-form login-form-left">
                <div class="agile-row">
                    <div class="head">
                        <h2>Login to Village Dev</h2>
                        <span class="fa fa-lock"></span>
                    </div>
                    <div class="clear"></div>
                    <div class="login-agileits-top">
                        <form action="{{ route('login') }}" method="post">
                            {{ csrf_field() }}
                            <div>

                                <input type="text" class="input" id="email" type="name" name="email" Placeholder="Enter Your Email Address" value="{{ old('email') }}" required autofocus/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div>
                            <input type="password" class="input" id="password" Placeholder="Password" name="password" required=""/>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <input type="submit" value="Login Now">
                        </form>
                    </div>
                    <div class="login-agileits-bottom">
                        <h6><a href="{{route('password.request') }}">Forgot your password?</a></h6>
                    </div>

                </div>
            </div>
        </div>
        <!-- //login form -->

        <a href="{{route('register') }}">	<div class="login-agileits-bottom1">
                <h3>Create a New Account?</h3>
            </div></a>



    </div>
@endsection

