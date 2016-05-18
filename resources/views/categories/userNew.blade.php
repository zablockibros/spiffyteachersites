@extends('layouts.app')

@section('title', 'Create a Category')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Create a Category</h1>
                @if(Session::has('category-error'))
                    <p class="alert alert-danger">{{ Session::get('category-error') }}</p>
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
                {!! Form::open(array('route' => 'categories.userCreate')) !!}
                {!! Form::select('parent_id', $categories, null, ['placeholder' => 'Category...']) !!}
                {!! Form::label('name', 'Category name') !!}
                {!! Form::text('name') !!}
                {!! Form::label('description', 'Description') !!}
                {!! Form::textarea('description') !!}
                {!! Form::submit('Create') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection