@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="medium-6 medium-centered large-4 large-centered columns">

                    <form method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                        <div class="row column log-in-form">
                            <h4 class="text-center">Sign up by email</h4>
                            <label>Email
                                <input type="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>
                            <label>Password
                                <input type="password" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </label>
                            <label>Confirm Password
                                <input type="password" name="password_confirmation">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </label>
                            <p><button type="submit" class="button expanded">Join Now</button></p>
                            <p class="text-center"><a href="{{ url('/login') }}">Already a member?</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
