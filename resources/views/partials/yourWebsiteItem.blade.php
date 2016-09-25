<li>
    <!-- unimedia -->
    <div class="unimedia-cell">
        <div class="unimedia-img">
            <a href="{{ route('sites.userView', ['id' => $website->id]) }}" class="img-link">
                <?php echo cl_image_tag($website->domain, array(
                        "type" => "url2png",
                        "crop" => "fill",
                        "width" => 400,
                        "height" => 266,
                        "gravity" => "north",
                        "style" => "width:200px;",
                        "sign_url" => true
                )); ?>
            </a>
        </div>
    </div>
    <div class="unimedia-cell cell-max">
        <h5 class="text-muted" style="margin-bottom:0;">Ranked #{{ $website->rank }} Overall</h5>
        <h4 class="unimedia-title"><a href="{{ route('sites.userView', ['id' => $website->id]) }}">{{ $website->name }}</a></h4>
        <div class="unimeta post-meta hidden-xs">
            <span><i class="ti-time fg-text-l"></i>{{ $website->voteCount }} votes</span>
            <span><i class="ti-comment-alt fg-text-l"></i>{{ $website->viewCount }} views</span>
        </div>
        <h5 class="unimedia-subtitle fg-accent hidden-xs">
            @foreach($website->categories as $key => $category)
                @if ($key > 0)
                    <span>, </span>
                @endif
                <a href="{{ route('category', ['slug' => $category->slug]) }}">(Ranked #{{ $category->pivot->rank }}) {{ $category->name }}</a>
            @endforeach
        </h5>
    </div>
    <!-- /unimedia -->
</li>