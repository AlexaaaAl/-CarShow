<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sublime project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
    <link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="/styles/responsive.css">
    @yield('custom_css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header">
            <div class="header_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <div class="logo"><a href="/">Автолидер</a></div>
                                <nav class="main_nav">
                                    <ul>
                                        <li >
                                            <a href="index.html">Главная</a>
                                        </li>
                                        <li >
                                            <a href="categories.html">Автомобили</a>
                                        </li>
                                        <li><a href="#">Дилеры</a></li>
                                        <li><a href="contact.html">Контакты</a></li>
                                         @if (Route::has('login'))
                                            @auth
                                            <li><a href="{{ url('/home') }}">Cart</a></li>
                                            @else
                                            <li><a href="{{ route('login') }}">Login</a></li>

                                            @if (Route::has('register'))
                                            <li> <a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                            @endauth
                                        </div>
                                        @endif
                                    </ul>
                                </nav>
                                

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Panel -->
    <div class="search_panel trans_300">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#">
                            <input type="text" class="search_input" placeholder="Search" required="required">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Social -->
    <div class="header_social">
        <ul>
            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        </ul>
    </div>

    </header>

    <!-- Menu -->

    <div class="menu menu_mm trans_300">
        <div class="menu_container menu_mm">
            <div class="page_menu_content">

                <div class="page_menu_search menu_mm">
                    <form action="#">
                        <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
                    </form>
                </div>
                <ul class="page_menu_nav menu_mm">
                    <li class="page_menu_item menu_mm"><a href="index.html">Главная<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="#">Автомобили<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="contact.html">Дилеры<i class="fa fa-angle-down"></i></a></li>
                    <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>


    <!-- Content-->

    @yield('content')
    <!-- Footer -->

    <div class="footer_overlay"></div>
    <footer class="footer">
        <div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                        <div class="footer_logo"><a href="/">Автолидер</a></div>
                        <div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Выполнено Студент ВИС42 <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://github.com/AlexaaaAl" target="_blank">Джулай А.Е.</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                            <div class="footer_social ml-lg-auto">
                                <ul>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/styles/bootstrap4/popper.js"></script>
    <script src="/styles/bootstrap4/bootstrap.min.js"></script>
    <script src="/plugins/greensock/TweenMax.min.js"></script>
    <script src="/plugins/greensock/TimelineMax.min.js"></script>
    <script src="/plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="/plugins/greensock/animation.gsap.min.js"></script>
    <script src="/plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
    <script src="/plugins/easing/easing.js"></script>
    <script src="/plugins/parallax-js-master/parallax.min.js"></script>
    <script src="/js/custom.js"></script>
    @yield('custom_js')
</body>
</html>
