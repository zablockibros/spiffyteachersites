@extends('layouts.app')

@section('title', 'Trivia Questions and Answers')

@section('content')
    <div class="container">
        <div class="row align-center">
            <div class="large-8 medium-8 columns">
                @if ($randomQuestion && $questions->currentPage() < 2)
                    @include('randomQuestion', ['question' => $randomQuestion])
                @endif
                <h1 class="fs-3 bold">Trivia Questions</h1>
                @if ($questions->currentPage() < 2)
                    <p class="fs--1 grey">Welcome to TriviaQuestionsNow.com, your repository of trivia questions and answers. Great trivia tests your knowledge of useless tidbits and facts in areas such as history, science, entertainment, and sports. The mission of TriviaQuestionsNow.com is to test provide the best trivia questions and answers to test users across the world.</p>
                @endif
                @each('question', $questions, 'question', 'empty-questions')
                {!! $questions->links() !!}
            </div>
            <div class="large-4 medium-4 columns">
                <hr />
                <h3>Other Categories</h3>
                <ul class="menu simple fs--1">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name or '' }}</a></li>
                    @endforeach
                </ul>
                <hr />
                <div class="text-center fs--2">
                    &copy;2016 TriviaQuestionsNow.com
                </div>
            </div>
        </div>
    </div>
@endsection
