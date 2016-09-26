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
    @include('partials.mainNav', ['categories' => $categories])

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

    @include('partials.footer', ['categories' => $categories])

    <!-- JavaScripts -->
    <script src="{{ url('/js/jquery-latest.min.js') }}"></script>
    <script src="{{ url('/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('/js/uikit.js') }}"></script>
    <script src="{{ url('/js/style-switcher.js') }}"></script>
</body>
</html>
