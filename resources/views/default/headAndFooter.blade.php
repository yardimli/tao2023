<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Merinda - HTML Bootstrap Template Like Medium Blog Platform</title>
        <!--favincon-->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- Bootstrap, Font Awesome, Aminate, Owl Carausel, Normalize CSS -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/owl.theme.default.min.css" rel="stylesheet">

        <!-- Site CSS -->
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/widgets.css" rel="stylesheet">
        <link href="/css/color-default.css" rel="stylesheet">
        <link href="/css/responsive.css" rel="stylesheet">

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Cabin:400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=B612+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

        <!-- Icons fonts-->
        <link href="/css/fontello.css" rel="stylesheet">
    </head>


@yield('content')

        <footer class="mt-5">
            <div class="container">
                <div class="divider"></div>
                <div class="row">
                    <div class="col-md-6 copyright text-xs-center">
                        <p>Copyright &copy; 2023 Tao2023</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-network inline text-md-right text-sm-center">
                            @if(isset( $LoggedUserInfo['facebook_link']))
                                <li class="list-inline-item"><a href="{{ $LoggedUserInfo['facebook_link'] }}"><i class="icon-facebook"></i></a></li>
                            @elseif(isset( $LoggedUserInfo['twitter_link']))
                                <li class="list-inline-item"><a href="{{ $LoggedUserInfo['twitter_link'] }}"><i class="icon-twitter"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div> <!--#wrapper-->

    <a href="#" class="back-to-top heading"><i class="icon-left-open-big"></i><span  class="d-lg-inline d-md-none">Top</span></a>

    <!--Scripts-->
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery-scrolltofixed-min.js"></script>
    <script src="/js/theia-sticky-sidebar.js"></script>
    <script src="/js/scripts.js"></script>
    </body>
</html>
