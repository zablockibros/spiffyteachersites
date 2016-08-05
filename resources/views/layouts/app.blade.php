<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') | TriviaQNow</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ url('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/css/uikit.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ url('/js/html5shiv.js') }}"></script>
    <script src="{{ url('/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    <!-- Main Navbar -->
    <nav class="main-navbar unibar unibar-lg bg-white bd-b">
        <!-- unibar container -->
        <div class="container unibar-container bg-inherit">
            <!-- header block -->
            <div class="unibar-block header-block bg-primary hide-border">
                <!-- brand cell -->
                <div class="unibar-cell menucon-cell">
                    <a href="#" class="menucon morphs" data-ctoggle="unhide" data-target="#fullmenu"><span></span></a>
                </div>
                <!-- /brand cell -->
                <!-- brand cell -->
                <div class="unibar-cell brand-cell">
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
                            <li class="active"><a href="index.html">home</a></li>
                            <li><a href="#">latest</a></li>
                            <li><a href="#" data-ctoggle="unhide" data-target="#menu-col1">more<i class="fs-80 ti-plus dd-icon toggled-rotz-135"></i></a>
                        </ul>
                        <!-- /uninav -->
                    </div>
                    <!-- /mobile quick links -->
                    <!-- collapsible menu -->
                    <div id="menu-col1" class="unibar-collapse-sm">
                        <!-- uninav -->
                        <ul class="uninav unibar-uninav uninav-fga-primary uninav-fillh auto-invert case-u fw-bold">
                            <li><a href="index.html">home</a></li>
                            <li><a href="index-2.html">home II</a></li>
                            <li class="dropdown active"><a href="#" data-toggle="dropdown">pages<i class="fs-80 ti-plus dd-icon open-rotz-135"></i></a>
                                <ul class="dropdown-menu dropdown-right case-c">
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                    <li><a href="post.html">Post View</a></li>
                                    <li class="active"><a href="search.html">Search Results</a></li>
                                    <li class="divider"></li>
                                    <li><a href="login.html">Sign In page</a></li>
                                    <li><a href="register.html">Sign Up page</a></li>
                                    <li><a href="error.html">404 Page</a></li>
                                    <li class="divider"></li>
                                    <li><a href="colors.html">Color Guide</a></li>
                                    <li><a href="features.html">Selected Features</a></li>
                                </ul>
                            </li>
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
    <!-- Content -->
    <section class="content bg-black-3">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Main Col -->
                <div class="col-md-8 main-col">

                    @yield('content')

                </div>
                <!-- /Main Col -->

                <!-- Side Col -->
                <div class="col-md-4 side-col">
                    <!-- inner row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-sm-6 col-md-12">
                            <!-- unicard -->
                            <div class="unicard unicard-framed pad-20 side-widget mgb-30">
                                <!-- post vlist -->
                                <ul class="post-vlist">
                                    <li>
                                        <!-- post img -->
                                        <div class="post-img">
                                            <a href="#" class="img-link"><img src="images/story18.jpg" alt="" /></a>
                                        </div>
                                        <!-- /post img -->
                                        <!-- post picket -->
                                        <div class="post-picket">
                                            <div class="picket-text">
                                                <span class="post-subtitle fg-accent">26 min ago</span>
                                                <h5 class="post-title"><a href="post.html">Football Team finally Appoints Manager As Loathsome As They Are</a></h5>
                                                <div class="unimeta post-meta">
                                                    <span><i class="ti-comment-alt"></i>144 comments</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /post picket -->
                                    </li>

                                    <li>
                                        <!-- post img -->
                                        <div class="post-img">
                                            <a href="#" class="img-link"><img src="images/story17.jpg" alt="" /></a>
                                        </div>
                                        <!-- /post img -->
                                        <!-- post picket -->
                                        <div class="post-picket">
                                            <div class="picket-text">
                                                <span class="post-subtitle fg-accent">40 min ago</span>
                                                <h5 class="post-title"><a href="post.html">Whoops! Reality TV Contestant Goes To Air Without A Backstory</a></h5>
                                                <div class="unimeta post-meta">
                                                    <span><i class="ti-comment-alt"></i>144 comments</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /post picket -->
                                    </li>
                                </ul>
                                <!-- /post vlist -->
                            </div>
                            <!-- /unicard -->
                            <!-- unicard -->
                            <div class="unicard unicard-framed pad-20 side-widget mgb-30">
                                <!-- post img -->
                                <div class="post-img">
                                    <a href="#" class="img-link"><img src="images/vstory1.jpg" alt="" /></a>
                                    <!-- caption -->
                                    <div class="unicaption pad-20 img-layer grad-caption">
                                        <span class="unilabel bg-green"><i class="fa fa-photo mgr-5"></i>126</span>
                                        <h4 class="unicaption-title fw-bold case-u"><a href="#">Latest must have Summer fashion accesories</a></h4>
                                        <div class="unimeta">
                                            <span>12 hours ago</span>
                                            <span>68 comments</span>
                                        </div>
                                    </div>
                                    <!-- /caption -->
                                </div>
                                <!-- /post img -->
                            </div>
                            <!-- /unicard -->
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-sm-6 col-md-12">
                            <!-- unicard -->
                            <div class="unicard unicard-framed pad-20 side-widget">
                                <h4 class="case-u fw-bold fg-primary">popular</h4>
                                <!-- post list -->
                                <ul class="unimedia-list post-list-sm">
                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title fw-normal"><a href="post.html" class="fw-normal">Kanye Launches Personal Time Capsule Into Space As "Gift To Aliens"</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story6.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Chinese tycoon who took over Aston Villa 'thought he was buying a house'</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story13.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Provisional England squad provisionally eliminated from Euro 2016</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story19.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Tampon adverts promoting unrealistic levels of sporting achievement</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story16.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Kanye Launches Personal Time Capsule Into Space As "Gift To Aliens"</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story7.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Chinese tycoon who took over Aston Villa 'thought he was buying a house'</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story8.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="unimedia-cell cell-max">
                                            <h4 class="unimedia-title"><a href="post.html">Provisional England squad provisionally eliminated from Euro 2016</a></h4>
                                        </div>
                                        <div class="unimedia-cell">
                                            <div class="unimedia-img">
                                                <a href="post.html" class="img-link"><img src="images/story9.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                                <!-- /post list -->
                            </div>
                            <!-- /unicard -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /inner row -->
                </div>
            <!-- /Side Col -->
            </div>
        <!-- /Row -->
        </div>
    <!-- /Container -->
    </section>
    <!-- /Content -->
    <!-- Mega Footer -->
    <footer class="bd-t mega-footer">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row row-table-md row-main">
                <!-- Col -->
                <div class="col-md-3 v-top brand-col border-b-xs">
                    <div class="inner fg-text auot-invert">

                        <a href="index.html"><h1 class="fg-text-d fs-300 font-brand">CardPost</h1></a>
                        <p class="no-mgb">Presenting a mutli purpose blog theme built with bootstrap and styled with material design colors and components.</p>
                        <ul class="uninav uninav-icons color-icons-bg-hovered color-icons">
                            <li><a href="#"><i class="fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-rss"></i></a></li>
                        </ul>
                        <span>&copy; 2016 - CardPost Mag.</span>

                    </div>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="col-md-2 v-top border-b-xs">
                    <h5 class="fg-text-d case-u auto-invert">about us</h5>
                    <ul class="uninav uninav-v case-c uninav-default auto-invert">
                        <li><a href="#">magazine bio</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">subscribe</a></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="col-md-2 v-top border-b-xs">
                    <h5 class="fg-text-d case-u auto-invert">hot topics</h5>
                    <ul class="uninav uninav-v case-c uninav-default auto-invert">
                        <li><a href="#"><span>donald trump</span></a></li>
                        <li><a href="#"><span>nba finals</span></a></li>
                        <li><a href="#"><span>the kardashians</span></a></li>
                        <li><a href="#"><span>kylie jenner</span></a></li>
                        <li><a href="#"><span>stephen curry</span></a></li>
                    </ul>
                </div>
                <!-- /Col -->
                <!-- Col -->
                <div class="col-md-2 v-top">
                    <h5 class="fg-text-d case-u auto-invert">information</h5>
                    <ul class="uninav uninav-v case-c auto-invert uninav-default">
                        <li><a href="#"><span>terms of use</span></a></li>
                        <li><a href="#"><span>advertising</span></a></li>
                        <li><a href="#"><span>take downs</span></a></li>
                        <li><a href="#"><span>complaints</span></a></li>
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
                        <form>
                            <input type="text" class="form-control text-box" placeholder="Your Email Address">
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

    <!-- JavaScripts -->
    <script src="{{ url('/js/jquery-latest.min.js') }}"></script>
    <script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('/js/uikit.js') }}"></script>
    <script src="{{ url('/js/style-switcher.js') }}"></script>
</body>
</html>
