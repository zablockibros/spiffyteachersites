@extends('layouts.full')

@section('title', 'Login')

@section('content')

    <!-- Header -->
    <header class="text-center mgb-30">
        <p>Dont have an account yet? Sign up <a href="{{ url('/register') }}" class="uline-hov">here</a></p>
    </header>
    <!-- /Header -->

    <!-- Login Form -->
    <div class="unicard unicard-framed account-form">

        <div>
            <h5 class="text-center fw-bold">Login and get Spiffy</h5>
            <form method="POST" action="{{ url('/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input class="text-box form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Your Email">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <input class="text-box form-control" name="password" type="password" placeholder="Your Password">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <button class="btn btn-green btn-block">Sign In</button>
            </form>
        </div>
<?php /*
        <div>
            <h5 class="text-center fw-bold">Social Login</h5>
            <a class="btn btn-split bg-facebook" href="#">
                <span class="bg-black-10pc"><i class="fa-facebook"></i></span>
                <span>Sign In With Facebook</span>
            </a>
            <a class="btn btn-split bg-twitter" href="#">
                <span class="bg-black-10pc"><i class="fa-twitter"></i></span>
                <span>Sign In With Twitter</span>
            </a>
            <a class="btn btn-split bg-google-plus" href="#">
                <span class="bg-black-10pc"><i class="fa-google-plus"></i></span>
                <span>Sign In With Google</span>
            </a>
        </div>
 */ ?>

    </div>

    <br />
    <br />
    <p class="text-center"><a href="{{ url('/password/reset') }}">Forgot your password?</a></p>
    <!-- /Login Form -->

@endsection
