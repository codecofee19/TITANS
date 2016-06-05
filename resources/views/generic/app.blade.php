<!DOCTYPE html>
<head>
    <meta name="env" content="{{ App::environment() }}">
    <meta name="token" content="{{ Session::token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    <!-- CSS -->
    <link rel="shortcut icon" href="/img/logo.png">
    <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('css/styles.less') }}">
    {{--<link rel="stylesheet/less" type="text/css" href="/public/css/addons.less">--}}
    <link href='https://fonts.googleapis.com/css?family=Passion+One:400,700|Slabo+27px|Lato:400,300,700,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="dist/hamburgers.css" rel="stylesheet">


    <!-- Javascript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        less = {
            env: "development",
            async: false,
            fileAsync: false,
            poll: 1000,
            functions: {},
            dumpLineNumbers: "comments",
            relativeUrls: false,
            rootpath: ":/a.com/"
        };
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.3/less.min.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>


</head>
<body>

    @include('generic.partials.header')

    <section id="main">
        <section id="content">
            <div class="container">
                @yield('content')
            </div>
        </section>
    </section>


    <!-- App scripts -->
    @stack('scripts')

</body>
</html>