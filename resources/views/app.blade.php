<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel 5 Starter</title>

<link href="/css/app.css" rel="stylesheet">

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<!-- Options: black, blue, green, purple, red, yellow and light versions eq. black-light -->
<body class="skin-blue sidebar-mini" style="{{ Auth::guest() ? 'padding-top: 50px;' : '' }}">

    <!-- If user logged in -->
    @if (!Auth::guest())
    <div class="wrapper">
        @include('partials.navbar')
        @include('partials.sidebar')
        @yield('content')
        @include('partials.footer')
        @include('partials.right-sidebar')
    </div><!-- /wrapper -->
    <!-- user not logged in -->
    @else
    <div class="container">
        <div class="row">
            <div class="col-md-12 main">
                @yield('content')
            </div>
        </div>
    </div>
    @endif
    

<!-- Global Scripts -->
<script src="/js/app.js"></script>

<!-- Page specific scripts -->
@yield('scripts')

</body>
</html>
