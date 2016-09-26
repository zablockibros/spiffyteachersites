@extends('layouts.full')

@section('title', $website->name)

@section('content')

        <!-- Submit Form -->
<div class="unicard unicard-framed account-form">
    <div>
        @if(empty($vote))
        {{ Form::open(['method' => 'POST', 'route' => ['site.vote', $website->id]]) }}
        {{ Form::submit('Upvote This Blog!', ['class' => 'btn btn-primary btn-block']) }}
        {{ Form::close() }}
        @else
            <button class="btn btn-block btn-success">Thanks for your vote!</button>
        @endif
        <h2 class="text-center fw-bold" style="margin-top:15px;">
            <a href="{{ $website->domain }}" target="_blank">
                {{ $website->name }}
            </a>
        </h2>
        <div style="text-align:center;margin-bottom:15px;">
            <?php echo cl_image_tag($website->domain, array(
                    "type" => "url2png",
                    "crop" => "fill",
                    "width" => 400,
                    "height" => 266,
                    "gravity" => "north",
                    "sign_url" => true
            )); ?>
        </div>
        <div style="margin-bottom:0px;">
            <p style="margin-bottom:0;">Ranked #{{ $website->rank }} Overall</p>
        </div>
        <div style="margin-bottom:15px;">
            @foreach($website->categories as $key => $category)
                @if ($key > 0)
                    <span>, </span>
                @endif
                <a href="{{ route('category', ['slug' => $category->slug]) }}">Ranked #{{ $category->pivot->rank }} {{ $category->name }}</a>
            @endforeach
        </div>
        <div style="margin-bottom:15px;">
            <span><i class="ti-time fg-text-l" style="margin-right:5px;"></i>{{ $website->vote_count }} votes (last 30 days)</span><br />
            <span><i class="ti-comment-alt fg-text-l" style="margin-right:5px;"></i>{{ $website->view_count }} views (last 30 days)</span>
        </div>
        <div class="">
            <p style="margin-bottom:0;">
                <strong>URL: </strong>
                <a href="{{ $website->domain }}" target="_blank">
                    {{ $website->domain }}
                </a>
            </p>
        </div>
        @if (!empty($website->description))
        <div class="">
            <p style="margin-bottom:0;">
                <strong>Description: </strong>
                {{ $website->description }}
            </p>
        </div>
        @endif
        @if (!empty($website->pinterest))
            <div class="">
                <p style="margin-bottom:0;">
                    <strong>Pinterest: </strong>
                    <a href="{{ $website->pinterest }}" target="_blank">{{ $website->pinterest }}</a>
                </p>
            </div>
        @endif
        @if (!empty($website->tpt))
            <div class="">
                <p style="margin-bottom:0;">
                    <strong>Teachers Pay Teachers: </strong>
                    <a href="{{ $website->tpt }}" target="_blank">{{ $website->tpt }}</a>
                </p>
            </div>
        @endif
    </div>
</div>

@endsection
