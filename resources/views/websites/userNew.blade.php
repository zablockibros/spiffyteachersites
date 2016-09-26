@extends('layouts.full')

@section('title', 'Submit your Blog')

@section('content')

    <!-- Submit Form -->
    <div class="unicard unicard-framed account-form">
        <div>
            <h5 class="text-center fw-bold">Submit your spiffy blog!</h5>
            @if(Session::has('website-error'))
                <p class="alert alert-danger">{{ Session::get('website-error') }}</p>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
                {!! Form::select('category', $selectCategories, old('category'), ['class' => 'text-box form-control', 'placeholder' => 'Category...']) !!}
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

                <input class="text-box form-control" type="text" name="pinterest" value="{{ old('pinterest') }}" placeholder="Pinterest URL" />
                @if ($errors->has('pinterest'))
                    <span class="help-block">
                        <strong>{{ $errors->first('pinterest') }}</strong>
                    </span>
                @endif

                <input class="text-box form-control" type="text" name="tpt" value="{{ old('tpt') }}" placeholder="Teachers Pay Teachers URL" />
                @if ($errors->has('tpt'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tpt') }}</strong>
                    </span>
                @endif

                <button class="btn btn-green btn-block">List Blog</button>
            </form>
        </div>
    </div>

@endsection
