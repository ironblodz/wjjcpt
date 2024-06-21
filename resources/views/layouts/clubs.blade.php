@extends('master')

@section('title', 'Clubes')
@section('description', 'Clubes da WJJC Portugal')


@section('content')

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    Start Banner
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner-section banner-section-two inner-banner-section bg-overlay-red bg_img"
        data-background="{{ asset('assets/images/spacesamurai.jpg') }}">
        <div class="section-logo-text">
            <span class="title">WJJC</span>
        </div>

    </section>
    <div class="breadcrumb-area">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">WJJC</a></li>
                <li class="breadcrumb-item active" aria-current="page">Clubes</li>
            </ol>
        </nav>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    End Banner
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    Start Scroll-To-Top
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <a href="#" class="scrollToTop">
        <img src="{{ asset('assets/images/logowhite.png') }}" alt="element">
        <div class="scrollToTop-icon">
            <i class="fas fa-arrow-up"></i>
        </div>
    </a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    End Scroll-To-Top
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    Start Training
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="training-section training-section--style ptb-120">
        <div class="training-element-one my-paroller" data-paroller-factor="0.2" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="{{ asset('assets/images/samurai2.jpg') }}" style="opacity: 0.3" alt="element">
        </div>
        <div class="training-element-three my-paroller" data-paroller-factor="0.2" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="{{ asset('assets/images/samurai1.jpg') }}" style="opacity: 0.3" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title h2">Os clubes da <span>WJJC Portugal</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="training-item" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-thumb">
                            <img src="{{ asset('assets/images/logoptpts.jpg') }}" alt="training">
                        </div>
                        <div class="training-content">
                            <h3 class="title">Nihon Seishin Dojo</h3>
                            <p>Av. Infante Dom Pedro 1, 3230 -277 Penela</p>
                            <div class="contact-social-area">
                                <span>Segue-nos: </span>
                                <ul class="contact-social">
                                    <li><a href="https://www.facebook.com/nihonseishindojo/" target="t_blank"><i
                                                class="fab fa-facebook"></i></a></li>
                                </ul>
                            </div>
                            <div class="training-footer-area">
                                <div class="training-price">
                                    <h4 class="title">Enviar E-mail</h4>
                                </div>
                                <div class="training-footer-btn">
                                    <a href="mailto:pedro.nuno.jujitsu@gmail.com"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                    End Training
                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->







@endsection
