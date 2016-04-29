@extends('layouts.app')

@section('title', 'Trivia Questions and Answers')

@section('content')
    <div class="container">
        <div class="row align-center">
            <div class="large-3 medium-8 columns">
                <div>
                    <input id="easy-trivia" type="checkbox"><label for="easy-trivia">Easy trivia</label>
                </div>
            </div>
            <div class="large-9 medium-4 columns">
                <div class="callout">
                    <h5>Trivia #12321</h5>
                    <p class="lead color-grey">It has an easy to override visual style, and is appropriately subdued.</p>
                    <a href="#">Show Answer</a>
                    <p class=""><em>It has an easy to override visual style, and is appropriately subdued.</em></p>
                </div>
            </div>
        </div>
    </div>
@endsection
