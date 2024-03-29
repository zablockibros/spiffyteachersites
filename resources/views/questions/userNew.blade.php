@extends('layouts.app')

@section('title', 'Create a Question')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Create a Question</h1>
                @if(Session::has('question-error'))
                    <p class="alert alert-danger">{{ Session::get('question-error') }}</p>
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
                {!! Form::open(['route' => 'questions.userCreate']) !!}
                {!! Form::select('category_id', $categories, null, ['placeholder' => 'Category...']) !!}
                {!! Form::select('difficulty', $difficulties) !!}
                {!! Form::label('tags', 'Tags') !!}
                {!! Form::text('tags') !!}
                {!! Form::label('name', 'Question name') !!}
                {!! Form::text('name') !!}
                {!! Form::label('question', 'Question') !!}
                {!! Form::textarea('question') !!}
                {!! Form::label('choices', 'Choices (separate with a | )') !!}
                {!! Form::text('choices') !!}
                {!! Form::label('answer', 'Answer') !!}
                {!! Form::textarea('answer') !!}
                {!! Form::submit('Create') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection