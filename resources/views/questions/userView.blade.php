@extends('layouts.app')

@section('title', 'Update Question')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Update Question {{ $question->id }}</h1>
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
                {!! Form::model($question, array('route' => ['questions.userUpdate', $question->id])) !!}
                {!! Form::select('category_id', $categories, null, ['placeholder' => 'Category...']) !!}
                {!! Form::select('difficulty', $difficulties) !!}
                {!! Form::label('name', 'Question name') !!}
                {!! Form::text('name') !!}
                {!! Form::label('question', 'Question') !!}
                {!! Form::textarea('question') !!}
                {!! Form::label('answer', 'Answer') !!}
                {!! Form::textarea('answer') !!}
                {!! Form::submit('Create') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection