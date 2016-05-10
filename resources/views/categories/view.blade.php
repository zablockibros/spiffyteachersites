@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <div class="container">
        <div class="row align-center">
            <div class="large-8 medium-8 columns">
                <h1 class="fs-3 bold">{{ $category->name or 'Trivia Questions' }}</h1>
                @each('question', $questions, 'question', 'empty-questions')
                {!! $questions->links() !!}
            </div>
            <div class="large-4 medium-4 columns">
                @if ($category->description)
                    <p class="fs--1 grey">{{ $category->description or '' }}</p>
                @endif
                <hr />
                    <h3>Other Categories</h3>
                    <ul class="menu simple fs--1">
                    @foreach ($categories as $category)
                        <li><a href="{{ route('category', ['slug' => $category->slug]) }}">{{ $category->name or '' }}</a></li>
                    @endforeach
                    </ul>
            </div>
        </div>
    </div>
@endsection
