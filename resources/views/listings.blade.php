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

{!! $websites->links() !!}

<!-- pagination -->
<nav class="mgb-30">
    <ul class="pagination pagination-lg no-mg">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>
<!-- /pagination -->