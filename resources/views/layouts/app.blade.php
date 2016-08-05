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
    @include('partials.mainNav')

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
