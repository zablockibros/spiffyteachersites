<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') | Teacher Sites</title>

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

            @if(Session::has('subscriber-error'))
                <p class="alert alert-danger">{{ Session::get('subscriber-error') }}</p>
            @endif
            @if(Session::has('subscriber-success'))
                <p class="alert alert-success">{{ Session::get('subscriber-success') }}</p>
            @endif

            @yield('content')

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
