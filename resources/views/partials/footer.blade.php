<!-- Mega Footer -->
<footer class="bd-t mega-footer">
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row row-table-md row-main">
            <!-- Col -->
            <div class="col-md-3 v-top brand-col border-b-xs">
                <div class="inner fg-text auot-invert">

                    <a href="/"><h1 class="fg-text-d fs-300 font-brand">Spiffy Teacher Sites</h1></a>
                    <p class="no-mgb">Curating teachers resources for the betterment of education.</p>
                    <?php /*
                    <ul class="uninav uninav-icons color-icons-bg-hovered color-icons">
                        <li><a href="#"><i class="fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-rss"></i></a></li>
                    </ul>
                    */ ?>
                    <span>&copy; 2016 - SpiffyTeacherSites.com</span>

                </div>
            </div>
            <!-- /Col -->
            <!-- Col -->
            <div class="col-md-2 v-top border-b-xs">
                <h5 class="fg-text-d case-u auto-invert">blog owners</h5>
                <ul class="uninav uninav-v case-c uninav-default auto-invert">
                    <li><a href="{{ url('/register') }}">sign up</a></li>
                    <li><a href="{{ url('/login') }}">login</a></li>
                    <li><a href="{{ route('sites.userNew') }}">post your blog</a></li>
                </ul>
            </div>
            <!-- /Col -->
            <!-- Col -->
            <div class="col-md-2 v-top border-b-xs">
                <h5 class="fg-text-d case-u auto-invert">top 5 sites</h5>
                <ul class="uninav uninav-v case-c uninav-default auto-invert">
                    @foreach($topSites as $site)
                        <li><a href="{{ route('site', ['slug' => $site->slug]) }}"><span>{{ $site->name }}</span></a></li>
                    @endforeach
                </ul>
            </div>
            <!-- /Col -->
            <!-- Col -->
            <div class="col-md-2 v-top">
                <h5 class="fg-text-d case-u auto-invert">contact</h5>
                <ul class="uninav uninav-v case-c auto-invert uninav-default">
                    <li>
                        <a href="mailto:info@spiffyteachersites.com">
                            <span style="text-transform:lowercase;">info@spiffyteachersites.com</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /Col -->
            <!-- Col -->
            <div class="col-md-3">
                <!-- subscribe box -->
                <div class="subscribe-box">
                    <!-- img -->
                    <div class="unicard-img">
                        <img src="{{ url('/images/story16.jpg') }}" alt="" >
                        <div class="img-cover pad-20 img-layer bg-black-50pc">
                            <div class="valigner">
                                <div class="v-mid">
                                    <small class="unicaption-subtitle case-u">Get the latest</small>
                                    <span class="unication-title case-c font-title fs-200 font-brand fw-bold">newsletter</span>
                                    <small class="unicaption-subtitle case-u">right in your inbox</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /img -->
                    <form method="POST" action="{{ route('subscribe') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="text" class="form-control text-box" name="email" placeholder="Your Email Address">
                        <button class="btn btn-primary btn-block">Subscribe Now!</button>
                    </form>
                </div>
                <!-- /subscribe box -->
            </div>
            <!-- / Col -->
        </div>
        <!-- /Row -->
    </div>
    <!-- /Container -->
</footer>
<!-- /Mega Footer -->
<?php /*
<!-- Mini Footer -->
<footer class="mini-footer bd-t">
    <!-- Container -->
    <div class="container">
        <!-- uninav -->
        <ul class="uninav auto-invert case-c uninav-sm text-center uninav-uline">
            <li class="hidden-xs"><a href="#"><b class="fg-primary">TRENDING:</b></a></li>
            <li><a href="#">#orlando shooting</a></li>
            <li><a href="#">#donald trump</a></li>
            <li><a href="#">#taylor swift</a></li>
            <li><a href="#">#playstation 6</a></li>
            <li><a href="#">#stephen curry</a></li>
        </ul>
        <!-- /uninav -->
    </div>
    <!-- /Container -->
</footer>
<!-- /Mini Footer -->
 */ ?>