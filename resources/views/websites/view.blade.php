@extends('layouts.full')

@section('title', $website->name)

@section('content')

        <!-- Submit Form -->
<div class="unicard unicard-framed account-form">
    <div>
        <h2 class="text-center fw-bold">{{ $website->name }}</h2>
        <form>
            <div style="margin-bottom:15px;">
                <p style="margin-bottom:0; text-align:center;">
                    <a href="{{ $website->domain }}" target="_blank">{{ $website->domain }}</a>
                </p>
            </div>
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
            @if (!empty($website->description))
            <div class="">
                <p style="margin-bottom:0;">
                    <strong>Description: </strong><br />
                    {{ $website->description }}
                </p>
            </div>
            @endif
        </form>
    </div>
</div>

@endsection
