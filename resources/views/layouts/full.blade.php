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
    <section class="content pad-lg bg-black-3"">
        <!-- Container -->
        <div class="container">

            @yield('content')

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
