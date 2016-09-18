<!-- Main Navbar -->
<nav class="main-navbar unibar unibar-lg bg-white bd-b">
    <!-- unibar container -->
    <div class="container unibar-container bg-inherit">
        <!-- header block -->
        <div class="unibar-block header-block bg-primary hide-border">
            <!-- brand cell -->
            <?php /*
            <div class="unibar-cell menucon-cell">
                <a href="#" class="menucon morphs" data-ctoggle="unhide" data-target="#fullmenu"><span></span></a>
            </div>
            */ ?>
            <!-- /brand cell -->
            <!-- brand cell -->
            <div class="unibar-cell brand-cell" style="padding-left:15px;">
                <a href="{{ url('/') }}" class="unibar-brand fw-bold">SpiffyTeacherSites</a>
            </div>
            <!-- /brand cell -->
            <!-- brand cell -->
            <div class="unibar-cell search-toggle-cell">
                <div class="ie-fix">
                    <a class="search-toggle" href="#" data-ctoggle="unhide-search" data-target=".main-navbar"><i class="fa-search hidden-toggled"></i><i class="fa-close visible-toggled"></i></a>
                </div>
            </div>
            <!-- /brand cell -->
        </div>
        <!-- /header block -->
        <!-- nav block -->
        <div class="unibar-block nav-block bg-inherit">
            <!-- nav cell -->
            <div class="unibar-cell nav-cell cell-max">
                <!-- unibar search -->
                <form class="unibar-search">
                    <div class="search-box">
                        <input class="text-box" type="text" placeholder="Search anything...">
                        <button type="button" class="btn btn-primary case-u"><i class="fa-search mgr-5"></i>search</button>
                    </div>
                </form>
                <!-- /unibar search -->
                <!-- mobile quick links -->
                <div class="visible-sm visible-xs">
                    <!-- uninav -->
                    <ul class="uninav unibar-uninav uninav-fga-primary uninav-fillh auto-invert case-u fw-bold text-center">
                        <li class="active"><a href="{{ url('/') }}">home</a></li>
                        <?php /*<li><a href="#">latest</a></li>*/ ?>
                        <li><a href="#" data-ctoggle="unhide" data-target="#menu-col1">more<i class="fs-80 ti-plus dd-icon toggled-rotz-135"></i></a>
                    </ul>
                    <!-- /uninav -->
                </div>
                <!-- /mobile quick links -->
                <!-- collapsible menu -->
                <div id="menu-col1" class="unibar-collapse-sm">
                    <!-- uninav -->
                    <ul class="uninav unibar-uninav uninav-fga-primary uninav-fillh auto-invert case-u fw-bold">
                        <li><a href="{{ url('/') }}">home</a></li>
                        <li><a href="{{ url('/categories') }}">Categories</a>
                        </li>
                        @if (Auth::guest())
                            <li><a href="{{ url('/register') }}">Submit Your Blog</a></li>
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="dropdown"><a href="#" data-toggle="dropdown">{{ Auth::user()->name }} <i class="fs-80 ti-plus dd-icon open-rotz-135"></i></a>
                                <ul class="dropdown-menu dropdown-right case-c">
                                    <li><a href="{{ route('sites.userIndex') }}">My Sites</a></li>
                                    <li><a href="{{ route('sites.userNew') }}">+ Submit Site</a></li>
                                    <li><a href="{{ url('/logout') }}">Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <!-- /uninav -->
                </div>
                <!-- collapsible menu -->
            </div>
            <!-- /nav cell -->
            <!-- cell -->
            <div class="unibar-cell hidden-xs hidden-sm cell-min case-u">
                Sunday, July 3, 2016
            </div>
            <!-- /cell -->
        </div>
        <!-- /nav block -->
        <!-- mega menu -->
        <div id="fullmenu" class="mega-menu efx-slide-down">
            <!-- Cont -->
            <div class="menu-cont">
                <!-- Col -->
                <div class="cont-col nav-col bg-primary-d">

                    <ul class="uninav uninav-v uninav-inverse uninav-lline uninav-bga-accent-xl uninav-fga-accent-xl uninav-default case-u uninav-ruled">
                        <li><a href="#">home</a></li>
                        <li><a href="#">videos</a></li>
                        <li><a href="#">photos</a></li>
                        <li><a href="#">trending</a></li>
                        <li><a href="#">photos</a></li>
                        <li><a href="#">music</a></li>
                        <li><a href="#">technology</a></li>
                        <li><a href="#">celebrities</a></li>
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">television</a></li>
                    </ul>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="cont-col extras-col hidden-xs">
                    <!-- extras block -->
                    <div class="extras-block">
                        <h5>top stories</h5>
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-sm-3">
                                <div class="post-img mgb-10">
                                    <a href="#" class="img-link"><img src="images/story2.jpg" alt="" /></a>
                                </div>
                                <h6 class="post-title case-c"><a href="#">Kanye Launches Personal Time Capsule Into Space As "Gift To Aliens"</a></h6>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-sm-3">
                                <div class="post-img mgb-10">
                                    <a href="#" class="img-link"><img src="images/story3.jpg" alt="" /></a>
                                </div>
                                <h6 class="post-title case-c"><a href="#">Beautiful woman has no incentive to be less annoying</a></h6>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-sm-3">
                                <div class="post-img mgb-10">
                                    <a href="#" class="img-link"><img src="images/story5.jpg" alt="" /></a>
                                </div>
                                <h6 class="post-title case-c"><a href="#">This Melbourne Cafe Is Now Selling Deconstructed Irony</a></h6>
                            </div>
                            <!-- /col -->
                            <!-- col -->
                            <div class="col-sm-3">
                                <div class="post-img mgb-10">
                                    <a href="#" class="img-link"><img src="images/story10.jpg" alt="" /></a>
                                </div>
                                <h6 class="post-title case-c"><a href="#">Whoops! Reality TV Contestant Goes To Air Without A Backstory</a></h6>
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /extras block -->
                    <!-- extras block -->
                    <div class="extras-block">
                        <h5>popular tags</h5>
                        <ul class="unitags">
                            <li><a href="#">kardashians (634)</a></li>
                            <li><a href="#">trump (220)</a></li>
                            <li><a href="#">bieber (180)</a></li>
                            <li><a href="#">kanye west (98)</a></li>
                            <li><a href="#">kylie jenner (74)</a></li>
                            <li><a href="#">blac chyna (61)</a></li>
                            <li><a href="#">nba finals (59)</a></li>
                            <li><a href="#">Amber Heard (34)</a></li>
                        </ul>
                    </div>
                    <!-- /extras block -->
                </div>
                <!-- /Col -->
            </div>
            <!-- /Cont -->
        </div>
        <!-- /mega menu -->
    </div>
    <!-- /unibar Cont -->
</nav>
<!-- /Main Navbar -->