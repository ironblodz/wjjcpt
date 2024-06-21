<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/LOGO.png') }}" type="image/x-icon">
    <!-- swipper css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <!-- lightcase css links -->
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <!-- odometer css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- line-awesome-icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- aos.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <!-- flipclock css -->
    <link rel="stylesheet" href="{{ asset('assets/css/flipclock.css') }}">
    <!-- main style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- main2 style css link -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.personalize.css') }}">
</head>

<body>



    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="preloader">
        <div class="loader">
            <div class="loader-thumb">
                <img src="{{ asset('assets/images/LOGO.png') }}" alt="logo">
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Preloader
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <header class="header-section header-section-two">
        <div class="header">
            <div class="header-bottom-area">
                <div class="container-fluid">
                    <div class="header-menu-content">
                        <nav class="navbar navbar-expand-xl p-0">
                            <a class="site-logo site-title d-block d-xl-none" href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/LOGO.png') }}" width="150" height="150"
                                    alt="site-logo">
                            </a>
                            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fas fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav main-menu ml-auto mr-auto">
                                    <li><a href="{{ route('wjjc.show') }}">A WJJC</a></li>
                                    <li class="menu_has_children"><a href="{{ route('founder.show') }}">O FUNDADOR</a>
                                    </li>
                                    <li class="menu_has_children"><a href="{{ route('kishido.show') }}">KISHIDÕ
                                            JU-JITSU</a>
                                    </li>
                                    <li class="menu_has_children"><a href="{{ route('dtn.show') }}">DIRETOR TÉCNICO</a>
                                    </li>
                                    <li><a class="site-logo site-title d-none d-xl-block" href="{{ route('index') }}">
                                            <img src="{{ asset('assets/images/LOGO.png') }}" width="150"
                                                height="150" alt="logo">
                                        </a></li>
                                    <li class="menu_has_children"><a href="{{ route('wjjcpt.show') }}">WJJC
                                            PORTUGAL</a></li>
                                    <li><a href="{{ route('clubs.show') }}">CLUBES</a></li>
                                    <li class="menu_has_children">
                                        <a href="#">GALERIA</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">WJJC</a></li>
                                            <li class="menu_has_children">
                                                <a href="{{ route('event.show') }}">Eventos</a>
                                            </li>
                                            <li><a href="{{ route('workout.show') }}">Treinos</a></li>
                                            <li><a href="#">Competição</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact.show') }}">CONTACTE-NOS</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    @yield('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <footer class="footer-section footer-section-two pt-120">
        <div class="footer-bg">
            <img src="{{ asset('assets/images/bg/bg-4.png') }}" alt="bg">
        </div>
        <div class="container">
            <div class="row mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a class="site-logo site-title" href="index.html"><img
                                    src="{{ asset('assets/images/LOGO.png') }}" width="20%" height="20%"
                                    alt="site-logo"></a>
                        </div>
                        <ul class="footer-social">
                            <li><a href="https://www.facebook.com/profile.php?id=61557533270967"><i
                                        class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/wjjc_portugal"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget">
                        <h4 class="title">FILIAÇÃO</h4>
                        <br>
                        <h3 class="title">WJJC PORTUGAL</h3>
                        <ul class="footer-list">
                            <li><span>Email :</span> wjjcportugal@gmail.com</li>
                        </ul>
                    </div>
                    <br>
                    <div class="footer-widget">
                        <h3 class="title"> WJJC INTERNACIONAL</h3>
                        <ul class="footer-list">
                            <li><span>Website: </span> https://wjjc.biz/</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-30">
                    <div class="footer-widget">
                        <h4 class="title">CONTACTE-NOS</h4>
                        <ul class="footer-list">
                            <li><span>Email :</span> wjjcportugal@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrapper">
            <div class="row justify-content-center">
                <div class="col-xl-12 text-center">
                    <div class="copyright-area">
                        <p>Copyright 2024 WJJC PORTUGAL</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    End Footer
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




    <!-- jquery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- swipper js -->
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- lightcase js-->
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
    <!-- progress js -->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
    <!-- aos js file -->
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
    <!-- paroller js -->
    <script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
    <!-- flipclock js -->
    <script src="{{ asset('assets/js/flipclock.min.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <!-- easypiechart js -->
    <script src="{{ asset('assets/js/jquery.easypiechart.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- preloader js -->
    <script src="{{ asset('assets/js/preloader.js') }}"></script>
    <!-- main -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
