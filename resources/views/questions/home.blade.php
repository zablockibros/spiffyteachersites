@extends('layouts.app')

@section('title', 'Trivia Questions and Answers')

@section('content')
    <div class="container">
        <div class="row align-center">
            <div class="large-8 medium-8 large-offset-2 medium-offset-2 columns">
                <h1 class="fs-3 bold">Trivia Questions</h1>
                <p>Welcome to TriviaQuestionsNow.com, your repository of trivia questions and answers.</p>
                @foreach ($questions as $question)
                    <div class="callout">
                        <h5 class="fs-1 bold">Trivia #{{ $question->id }}</h5>
                        <p class="lead color-grey">{{ $question->question }}</p>
                        <div>
                            <a href="#" class="click-to-show">Show Answer</a>
                            <p class="answer hide"><em>{{ $question->answer }}</em></p>
                        </div>
                    </div>
                @endforeach
                {!! $questions->links() !!}
            </div>
        </div>
    </div>
@endsection
