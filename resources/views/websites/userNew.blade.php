@extends('layouts.full')

@section('title', 'Submit your Blog')

@section('content')

    <!-- Submit Form -->
    <div class="unicard unicard-framed account-form">
        <div>
            <h5 class="text-center fw-bold">Submit your spiffy blog!</h5>
            <form method="POST" action="{{ route('sites.userCreate') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group" style="margin-bottom:0;">
                    <label class="control-label" for="inputGroupSuccess1">Website URL</label>
                    <input class="text-box form-control" type="text" name="domain" value="{{ old('domain') }}" placeholder="http://www.domain.com" style="margin:0;" />
                    @if ($errors->has('domain'))
                        <span class="help-block">
                        <strong>{{ $errors->first('domain') }}</strong>
                    </span>
                    @endif
                </div>
                <input class="text-box form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Website Name" />
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <textarea class="form-control" rows="5" name="description" value="{{ old('description') }}" placeholder="Description..."></textarea>
                @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
                <button class="btn btn-green btn-block">List Blog</button>
            </form>
        </div>
    </div>

@endsection
