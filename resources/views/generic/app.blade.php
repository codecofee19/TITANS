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
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    
    <meta property="og:image" content="/img/icon-social-media.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="550">
    <meta property="og:image:height" content="550">

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
<footer>
    <article>
        <h3>Stay Connected With Us</h3>
        <div class="contact">
            <font>Phone</font><br>
            (737) 444-8184<br>
            <font>Fax</font><br>
            (512) 887-5164<br>
            <font>Email</font><br>
            info@thetitansproject.com
        </div>
    </article>
    <article> 
        <h3>Find Us on Social Media</h3>
        <div class="social-media">
            <a href="https://twitter.com/titansproj">
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
            </a>
            <a href="https://www.facebook.com/thetitansproject">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/channel/UC5sjgY4AadnErQEMe7nQf6A">
                <i class="fa fa-youtube-square" aria-hidden="true"></i>
            </a>
        </div>
    </article>
    <article>
        <h3>Our Story</h3>
        <div class="contact">
            <font>The Start</font> |  Teens in Tech : Acquiring New Skills started as project during the 2016 ATX Hack 4 Change. Our starting goal was to create a system that connects teens with mentors in the tech sector. What became was a larger than expected, and is on route to establish a network of well equipped graduates who are ready to take on tomorrow.
        </div>
    </article>
    <div class="clear"></div>
    <div class="copyright">Copyright &copy; 2016 TiTANS | All Rights Reserved</div>
</footer>
</html>