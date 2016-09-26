<!-- unicard -->
<div class="unicard unicard-framed mgb-30">

    <!-- header -->
    <div class="unicard-header bd-b">
        @if (!empty($listingTitle))
            <h4 class="fw-bold case-u unicard-title">{{ $listingTitle }}</h4>
        @elseif (!empty($category))
            <h4 class="fw-bold case-u unicard-title">Category: <span class="fg-primary">{{ $category->name }}</span></h4>
            <!--<div class="fg-text-l unicard-subtitle">Found 54 results for term <strong>"Kanye West"</strong></div>-->
        @else
            <h4 class="fw-bold case-u unicard-title">Overall <span class="fg-primary">Rankings</span></h4>
        @endif
    </div>
    <!-- /header -->

    <!-- unicard block -->
    <div class="unicard-block">

        <!-- post list -->
        <ul class="unimedia-list post-list">
            @if (!empty($websites->total()))
                @foreach($websites as $website)
                    @include('partials.websiteItem', $website)
                @endforeach
            @else
                No websites were found for this category.
            @endif
        </ul>
        <!-- /post list -->

    </div>
    <!-- /unicard block -->

</div>
<!-- /unicard -->

<?php /*
{!! $websites->links() !!}
*/ ?>

@if ($websites->lastPage() > 1)
<!-- pagination -->
<nav class="mgb-30">
    <ul class="pagination pagination-lg no-mg">
        <li class="{{ ($websites->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ $websites->url(1) }}">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        @for ($i = 1; $i <= $websites->lastPage(); $i++)
            <li class="{{ ($websites->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $websites->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($websites->currentPage() == $websites->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $websites->url($websites->currentPage()+1) }}" >
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
@endif
<!-- /pagination -->