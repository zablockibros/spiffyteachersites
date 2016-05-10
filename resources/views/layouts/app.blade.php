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
    <link href="{{ url('/css/foundation.css') }}" rel="stylesheet">
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="title-bar" data-responsive-toggle="nav" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">TriviaQuestionsNow.com</div>
    </div>
    <div id="nav" class="top-bar bg-white">
        <div class="row">
            <div class="top-bar-left">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li class="menu-text" style="padding-left:0;"><a href="{{ url('/') }}" class="no-pad">TriviaQN</a></li>
                </ul>
            </div>
            @if (1 == 2)
            <div class="top-bar-right">
                <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="menu vertical">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
            @endif
            <div class="top-bar-right">
                <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
                    <li><a href="{{ url('/for/sports-trivia') }}">Sports Trivia</a></li>
                    <li><a href="{{ url('/for/music-trivia') }}">Music Trivia</a></li>
                    <li><a href="{{ url('/for/christmas-trivia') }}">Christmas Trivia</a></li>
                    <li><a href="{{ url('/for/math-trivia') }}">Math Trivia</a></li>
                    <li><a href="{{ url('/for/movie-trivia') }}">Movie Trivia</a></li>
                    @if (Auth::check())
                        <li class="dropdown">
                            <a href="#">
                                Categories <span class="caret"></span>
                            </a>

                            <ul class="menu vertical">
                                <li><a href="{{ route('categories.userIndex') }}">View Category</a></li>
                                <li><a href="{{ route('categories.userNew') }}">New Category</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">
                                Questions <span class="caret"></span>
                            </a>

                            <ul class="menu vertical">
                                <li><a href="{{ route('questions.userIndex') }}">View Questions</a></li>
                                <li><a href="{{ route('questions.userNew') }}">New Question</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap bg-grey-light t-pad-20 b-pad-20">
        @yield('content')
    </div>

    <!-- JavaScripts -->
    <script src="{{ url('/js/vendor/jquery.js') }}"></script>
    <script src="{{ url('/js/vendor/what-input.js') }}"></script>
    <script src="{{ url('/js/vendor/foundation.js') }}"></script>
    <script>
        $(document).foundation();
        $(document).ready(function(){
            $(".click-to-show").click(function(e) {
                e.preventDefault();
                $(this).parent().find(".answer").toggleClass("hide");
            });
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-42272487-28', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
