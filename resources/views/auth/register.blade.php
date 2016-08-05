@extends('layouts.full')

@section('title', 'Join Now')

@section('content')

    <!-- Header -->
    <header class="text-center mgb-30">
        <p>Already have an account? Login <a href="{{ url('/login') }}" class="uline-hov">here</a></p>
    </header>
    <!-- /Header -->

    <!-- Login Form -->
    <div class="unicard unicard-framed account-form">

        <div>
            <h5 class="text-center fw-bold">Join our Spiffy Network</h5>
            <form method="POST" action="{{ url('/register') }}">
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
                <input class="text-box form-control" name="password_confirmation" type="password" placeholder="Confirm Password">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
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

@endsection
