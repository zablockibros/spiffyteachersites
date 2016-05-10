@extends('layouts.app')

@section('title', 'Upload by Excel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h1>Create by Excel</h1>
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
                {!! Form::open(['route' => 'questions.userExcelUpload', 'files' => true]) !!}
                {!! Form::file('file') !!}
                {!! Form::submit('Create') !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection