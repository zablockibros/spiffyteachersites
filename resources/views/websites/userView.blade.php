@extends('layouts.full')

@section('title', 'Your Blog - '.$website->name)

@section('content')

        <!-- Submit Form -->
<div class="unicard unicard-framed account-form">
    <div>
        <h5 class="text-center fw-bold">Manage "{{ $website->name }}"</h5>
        <form method="POST" action="{{ route('sites.userEdit', ['id' => $website->id]) }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group" style="margin-bottom:0;">
                <label class="control-label" for="inputGroupSuccess1">{{ $website->domain }}</label>
            </div>
            {!! Form::select('category', $selectCategories, $website->categories[0]->id, ['class' => 'text-box form-control', 'placeholder' => 'Category...']) !!}
            <input class="text-box form-control" type="text" name="name" value="{{ $website->name }}" placeholder="Website Name" />
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
            <textarea class="form-control" rows="5" name="description" value="{{ $website->description }}" placeholder="Description..."></textarea>
            @if ($errors->has('description'))
                <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
            @endif


            <input class="text-box form-control" type="text" name="pinterest" value="{{ $website->pinterest }}" placeholder="Pinterest URL" />
            @if ($errors->has('pinterest'))
                <span class="help-block">
                        <strong>{{ $errors->first('pinterest') }}</strong>
                    </span>
            @endif

            <input class="text-box form-control" type="text" name="tpt" value="{{ $website->tpt }}" placeholder="Teachers Pay Teachers URL" />
            @if ($errors->has('tpt'))
                <span class="help-block">
                        <strong>{{ $errors->first('tpt') }}</strong>
                    </span>
            @endif

            <button class="btn btn-green btn-block">Update Blog</button>
        </form>

        {{ Form::open(['method' => 'DELETE', 'route' => ['sites.userDelete', $website->id]]) }}
        {{ Form::submit('Delete this Blog', ['class' => 'btn btn-danger btn-block']) }}
        {{ Form::close() }}
    </div>
</div>

@endsection
