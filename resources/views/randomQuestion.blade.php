<div class="callout">
    <h5 class="fs-1 bold"><a href="{{ route('question', ['slug' => $question->slug]) }}" style="color:black;">Random Question #{{ $question->id }}</a></h5>
    <p class="lead color-grey">{{ $question->question }}</p>
    <div>
        <a href="#" class="click-to-show">Show Answer</a>
        <p class="answer hide"><em>{{ $question->answer }}</em></p>
    </div>
    <hr />
    <div class="text-center">
        <a href="{{ url('/question/random') }}">New Random Trivia Question</a>
    </div>
</div>