<div class="callout">
    <h5 class="fs-1 bold">Question #{{ $question->id }}</h5>
    <p class="lead color-grey">{{ $question->question }}</p>
    <div>
        <a href="#" class="click-to-show">Show Answer</a>
        <p class="answer hide"><em>{{ $question->answer }}</em></p>
    </div>
</div>