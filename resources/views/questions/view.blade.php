@extends('layouts.app')

@section('title', 'Question: ' . $question->name)

@section('content')
    <div class="container">
        <div class="row">
            <div class="large-8 medium-8 large-offset-2 medium-offset-2 columns">
                <h1 class="fs-3 bold">Trivia Question #{{ $question->id }}</h1>
                <div class="callout">
                    <p class="lead color-grey">{{ $question->question }}</p>
                    <div>
                        <a href="#" class="click-to-show">Show Answer</a>
                        <p class="answer hide"><em>{{ $question->answer }}</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
