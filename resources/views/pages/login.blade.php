@extends('layouts.front')

@section('content')


<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="text-center">
                    <p>@include('admin.include.errors')</p>
                </div>
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                        <input type="email" required="" name="email" id="email" placeholder="Email" />
                        <input type="password" placeholder="Password" name="password" id="password" />
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="text-center">
                    <p>@include('admin.include.errors')</p>
                </div>
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <input id="fullname" type="text" required="" placeholder="Full Name" name="fullname"/>
                        <input id="email" type="email" required="" placeholder="Email Address" name="email"/>
                        <input id="password" type="password" required="" placeholder="Password" name="password"/>
                        <input id="password-confirm" type="password" required="" placeholder="Confirm Password" name="password_confirmation"/>
                        <input id="phonenumber" type="text" required="" placeholder="Phone Number" name="phonenumber"/>
                        <button type="submit" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

@endsection

