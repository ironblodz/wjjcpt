@extends('master')
@section('title', 'Home')
@section('description', 'Página inicial da WJJC Portugal')
@section('content')
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Start Banner
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="banner">
        <div class="slider-prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="slider-next">
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="banner-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-section banner-section-two">
                        <div class="banner-bg bg-overlay-black bg_img"
                            data-background="{{ asset('assets/images/gallery5.jpg') }}" style="background-position: center">
                        </div>
                        <div class="container-fluid">
                            <div class="row justify-content-center align-items-end mb-30-none">
                                <div class="col-xl-12 col-lg-12 text-center mb-30">
                                    <div class="banner-content" data-aos="fade-up" data-aos-duration="1800">
                                        <img class="img-fluid" src="{{ asset('assets/images/corporation.png') }}"
                                            width="300" height="300">
                                        <h1 class="title">TODAS AS GRANDES</h1>
                                        <h3 class="inner-title">JORNADAS COMEÇAM COM UM ÚNICO PASSO</h3>
                                        <p>WORLD JU-JITSU CORPORATION</p>
                                        <div class="banner-btn">
                                            <a href="{{ route('contact.show') }}" class="btn--base">Junte-se a nós<i
                                                    class="fas fa-arrow-right ml-2"></i></a>
                                            <a href="https://wjjc.biz/" target="_blank" class="btn--base active">WJJC
                                                Internacional<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <section class="video-section2 bg-overlay-red">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-12 text-center">
                                                <div class="video-area">
                                                    <div class="video-main">
                                                        <div class="promo-video">
                                                            <div class="waves-block">
                                                                <div class="waves wave-1"></div>
                                                                <div class="waves wave-2"></div>
                                                                <div class="waves wave-3"></div>
                                                            </div>
                                                        </div>
                                                        <a class="video-icon" data-rel="lightcase:myCollection"
                                                            href="https://www.youtube.com/embed/c15EZ0KLfL0">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-section banner-section-two">
                        <div class="banner-bg bg-overlay-black bg_img"
                            data-background="{{ asset('assets/images/gallery2.jpg') }}" style="background-position: center">
                        </div>
                        <div class="container-fluid">
                            <div class="row justify-content-center align-items-end mb-30-none">
                                <div class="col-xl-12 col-lg-12 text-center mb-30">
                                    <div class="banner-content" data-aos="fade-up" data-aos-duration="1800">
                                        <img class="img-fluid" src="{{ asset('assets/images/corporation.png') }}"
                                            width="300" height="300">
                                        <h1 class="title">TODAS AS GRANDES</h1>
                                        <h3 class="inner-title">JORNADAS COMEÇAM COM UM ÚNICO PASSO</h3>
                                        <p>WJJC PORTUGAL</p>
                                        <div class="banner-btn">
                                            <a href="{{ route('contact.show') }}" class="btn--base">Junte-se a nós<i
                                                    class="fas fa-arrow-right ml-2"></i></a>
                                            <a href="https://wjjc.biz/" target="_blank" class="btn--base active">WJJC
                                                Internacional<i class="fas fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <section class="video-section2 bg-overlay-red">
                                    <div class="container">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-12 text-center">
                                                <div class="video-area">
                                                    <div class="video-main">
                                                        <div class="promo-video">
                                                            <div class="waves-block">
                                                                <div class="waves wave-1"></div>
                                                                <div class="waves wave-2"></div>
                                                                <div class="waves wave-3"></div>
                                                            </div>
                                                        </div>
                                                        <a class="video-icon" data-rel="lightcase:myCollection"
                                                            href="https://www.youtube.com/embed/c15EZ0KLfL0">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>


    <a href="#" class="scrollToTop">
        <img src="{{ asset('assets/images/logowhite.png') }}" style="width: 100px;" alt="element">
        <div class="scrollToTop-icon">
            <i class="fas fa-arrow-up"></i>
        </div>
    </a>

    <section class="service-section ptb-120">
        <div class="container">
            <div class="service-area">
                <div class="service-element">
                    <img src="{{ asset('assets/images/element/element-24.png') }}" alt="element">
                </div>
                <div class="row justify-content-center mb-10-none">
                    <div class="col-xl-12">
                        <div class="service-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{ asset('assets/images/gallery12.jpg') }}" alt="service">
                                            <div class="service-overlay">
                                                <div class="service-overlay-content">
                                                    <h3 class="title"><a href="{{ route('founder.show') }}">Shodai Soke
                                                            Adriano
                                                            Busà</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{ asset('assets/images/jutsu.jpg') }}" alt="service">
                                            <div class="service-overlay">
                                                <div class="service-overlay-content">
                                                    <h3 class="title"><a href="{{ route('founder.show') }}">Shodai Soke
                                                            Adriano
                                                            Busà</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{ asset('assets/images/pedropedro.jpg') }}" style="height: 463px"
                                                alt="service">
                                            <div class="service-overlay">
                                                <div class="service-overlay-content">
                                                    <h3 class="title"><a href="{{ route('dtn.show') }}">Sensei Pedro
                                                            Nuno
                                                            Pimentel</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="service-item">
                                        <div class="service-thumb">
                                            <img src="{{ asset('assets/images/ss.jpg') }}" alt="service">
                                            <div class="service-overlay">
                                                <div class="service-overlay-content">
                                                    <h3 class="title"><a href="{{ route('dtn.show') }}">Sensei Pedro
                                                            Nuno
                                                            Pimentel</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Start About
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section about-section-two bg_img" data-background="{{ asset('assets/images/kishido.png') }}">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/soque.png') }}" class="soque-diretor">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content-area" data-aos="fade-left" data-aos-duration="1200">
                        <div class="section-header white">
                            <h2 class="section-title2">DIRETOR TÉCNICO <span>NACIONAL</span></h2>
                            <p>Sensei Pedro Nuno Pimentel, natural de Coimbra, foi escolhido pelo fundador da World Ju-Jitsu
                                Corporation, Soke Adriano Busà, para liderar a WJJC Portugal como Diretor Técnico Nacional e
                                representante português desta organização.</p>
                            <p>Começou a sua jornada no Kick Boxing em 1997 com o Mestre Nuno Ferreira no KickGym de
                                Coimbra. Em 2001, conheceu o Ju-Jitsu com o Mestre Hélder Nunes na Associação Portuguesa de
                                Nihon Ju-Jitsu e Defesa Pessoal, desenvolvendo uma paixão duradoura pela arte. Em 2015,
                                iniciou também a prática de Judo com o Mestre Reinaldo Aquilino do C.A.M.A e, em 2024,
                                começou o curso de treinador de Judo pela ADJA e Federação Portuguesa de Judo.</p>
                            <p>Buscando aprofundar-se nas artes dos antigos Samurais, aprendeu a utilizar a Katana,
                                praticando Mugai ryu Iaido e Hachiman ryu Battojutsu. Tem como professor em Portugal o
                                Sensei Jon Berry e, a nível internacional, o Soke Leif Hermansson.</p>
                            <p>Desde 2014, é treinador e responsável técnico do Nihon Seishin Dojo em Penela, onde pratica
                                Kishido Ju-Jitsu da WJJC, Kyoo Soku - Defesa Pessoal da Kyoo Soku Portugal, Kodokan Judo
                                da FPJ, e Mugairyu Iaido/Hachiman ryu Battojuts</p>
                        </div>
                        <div class="about-btn">
                            <a href="{{ route('dtn.show') }}" class="btn--base">Ler Mais<i
                                    class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        End About
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    {{-- <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        Start Feature
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section feature-section-two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">OUR <span>KARATE</span> FEATURES</h2>
                        <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                            programs in the nation.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-end mb-30-none">
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-6">
                            <div class="feature-item mb-30" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="feature-icon-area">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/images/icon/icon-10.png') }}" alt="icon">
                                    </div>
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">ALL SKILL LEVEL</h4>
                                    <p>Fight School has specialized in martial arts since 1986 and has one of the most</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6">
                            <div class="feature-item mb-30" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="feature-icon-area">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/images/icon/icon-11.png') }}" alt="icon">
                                    </div>
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">GET FIT & HEALTHY</h4>
                                    <p>Fight School has specialized in martial arts since 1986 and has one of the most</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="feature-thumb-area bg-img"
                        style="background-image: url({{ asset('assets/images/element/element-14.png') }}">
                        <div class="feature-thumb">
                            <img src="{{ asset('assets/images/element/element-16.png') }}" alt="element">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6 col-md-6">
                            <div class="feature-item mb-30" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="feature-icon-area">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/images/icon/icon-12.png') }}" alt="icon">
                                    </div>
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">FULLY QUALIFIED</h4>
                                    <p>Fight School has specialized in martial arts since 1986 and has one of the most</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-md-6">
                            <div class="feature-item mb-30" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="feature-icon-area">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/images/icon/icon-13.png') }}" alt="icon">
                                    </div>
                                </div>
                                <div class="feature-content">
                                    <h4 class="title">TRADITIONAL KARATE</h4>
                                    <p>Fight School has specialized in martial arts since 1986 and has one of the most</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        End Feature
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> --}}


    {{-- <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        Start Call-to-action
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="call-to-action-section ptb-120 bg-overlay-black bg_img"
        data-background="{{ asset('assets/images/bg/bg-8.png') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="call-to-action-content" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="title">JOIN THE CLUB</h2>
                        <h2 class="sub-title">#BE COME STRONGER</h2>
                        <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                            programs in the nation.</p>
                        <div class="call-to-action-btn">
                            <a href="contact.html" class="btn--base">Join Now <i class="fas fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        End Call-to-action --}}



    {{-- <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        Start Training
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="training-section training-section-two ptb-120">
        <div class="training-element-one" data-aos="fade-right" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-17.png') }}" alt="element">
        </div>
        <div class="training-element-two" data-aos="fade-left" data-aos-duration="1200">
            <img src="{{ asset('assets/images/element/element-18.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">WE OFFER <span>KARATE</span> TRAINING</h2>
                        <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                            programs in the nation.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-14.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">KARATE</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">KARATE</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-15.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">JUDO</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">JUDO</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-16.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">TAEKWONDO</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">TAEKWONDO</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-17.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">KICK BOXING</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">KICK BOXING</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-18.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">MIXED MERTIAL ARTS</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">MIXED MERTIAL ARTS</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-19.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">WRESTLLING</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">WRESTLLING</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-20.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">TAICHI</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">TAICHI</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-xxs-6 mb-30">
                    <div class="training-item text-center" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="training-icon">
                            <img src="{{ asset('assets/images/icon/icon-21.png') }}" alt="icon">
                        </div>
                        <div class="training-content">
                            <h4 class="title"><a href="training-details.html">KUBODO</a></h4>
                        </div>
                        <div class="training-overlay bg-overlay-base bg_img"
                            data-background="{{ asset('assets/images/training/training-2.png') }}">
                            <div class="training-overlay-content">
                                <div class="training-overlay-icon">
                                    <a href="training-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                                <h4 class="title"><a href="training-details.html">KUBODO</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        End Training
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> --}}


    {{-- <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        Start Trainer
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="trainer-section trainer-section-two ptb-120 section--bg">
        <div class="trainer-element-one">
            <img src="{{ asset('assets/images/element/element-19.png') }}" alt="element">
        </div>
        <div class="trainer-element-two">
            <img src="{{ asset('assets/images/element/element-20.png') }}" alt="element">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header white" data-aos="fade-right" data-aos-duration="1200">
                            <h2 class="section-title">OUR <span>EXPERT</span> MASTERS</h2>
                            <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                                programs in the nation.</p>
                        </div>
                        <div class="all-btn text-center" data-aos="fade-left" data-aos-duration="1200">
                            <a href="master.html" class="custom-btn">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30" data-aos="fade-up" data-aos-duration="1200">
                <div class="col-xl-12">
                    <div class="trainer-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trainer-item">
                                    <div class="trainer-thumb">
                                        <img src="{{ asset('assets/images/trainer/trainer-5.png') }}" alt="trainer">
                                        <div class="trainer-overlay">
                                            <div class="trainer-content">
                                                <h3 class="title"><a href="master-details.html">Randall Schwartz</a></h3>
                                                <span class="sub-title">Women's Trainner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trainer-item">
                                    <div class="trainer-thumb">
                                        <img src="{{ asset('assets/images/trainer/trainer-6.png') }}" alt="trainer">
                                        <div class="trainer-overlay">
                                            <div class="trainer-content">
                                                <h3 class="title"><a href="master-details.html">Randall Schwartz</a></h3>
                                                <span class="sub-title">Women's Trainner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trainer-item">
                                    <div class="trainer-thumb">
                                        <img src="{{ asset('assets/images/trainer/trainer-7.png') }}" alt="trainer">
                                        <div class="trainer-overlay">
                                            <div class="trainer-content">
                                                <h3 class="title"><a href="master-details.html">Randall Schwartz</a></h3>
                                                <span class="sub-title">Women's Trainner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trainer-item">
                                    <div class="trainer-thumb">
                                        <img src="{{ asset('assets/images/trainer/trainer-8.png') }}" alt="trainer">
                                        <div class="trainer-overlay">
                                            <div class="trainer-content">
                                                <h3 class="title"><a href="master-details.html">Randall Schwartz</a></h3>
                                                <span class="sub-title">Women's Trainner</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-pagination"></div>
                        <div class="slider-nav-area">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        End Trainer
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        Start Event
                                                                                    {{-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> --}}
    {{-- <section class="event-section ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">OUR <span>KARATE</span> EVENTS</h2>
                        <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                            programs in the nation.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="event-thumb" data-aos="fade-right" data-aos-duration="1200">
                        <img src="{{ asset('assets/images/bg/bg-9.png') }}" alt="bg">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="event-item-area" data-aos="fade-left" data-aos-duration="1200">
                        <div class="event-item">
                            <div class="event-content">
                                <div class="event-post-meta">
                                    <div class="event-badge">
                                        <span>Event</span>
                                    </div>
                                    <div class="event-date">
                                        <span>29 May 2021</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="event-details.html">Let’s Make Country Great with Razniti</a>
                                </h3>
                                <p>Every pleasures is to welcomed pain avoided owing to the duty the obligations of
                                    business.</p>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-content">
                                <div class="event-post-meta">
                                    <div class="event-badge">
                                        <span>Event</span>
                                    </div>
                                    <div class="event-date">
                                        <span>29 May 2021</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="event-details.html">Lets meet & help for education in tax</a>
                                </h3>
                                <p>Every pleasures is to welcomed pain avoided owing to the duty the obligations of
                                    business.</p>
                            </div>
                        </div>
                        <div class="event-item">
                            <div class="event-content">
                                <div class="event-post-meta">
                                    <div class="event-badge">
                                        <span>Event</span>
                                    </div>
                                    <div class="event-date">
                                        <span>29 May 2021</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="event-details.html">Lets meet for protecting eco system</a>
                                </h3>
                                <p>Every pleasures is to welcomed pain avoided owing to the duty the obligations of
                                    business.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {{-- End Event
                                                                                                                                                                                                        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                            Start Client
                                                                                                                                                                                                        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="client-section client-section-two ptb-120 bg-overlay-black bg_img"
        data-background="{{ asset('assets/images/bg/bg-7.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-header-wrapper">
                        <div class="section-header white" data-aos="fade-right" data-aos-duration="1200">
                            <h2 class="section-title">OUR <span>STUDENT'S</span> TESTIMONIAL</h2>
                            <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                                programs in the nation.</p>
                        </div>
                        <div class="slider-nav-area" data-aos="fade-left" data-aos-duration="1200">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="client-area">
                <div class="row justify-content-center align-items-end mb-30-none">
                    <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                        <div class="client-slider" data-aos="fade-right" data-aos-duration="1200">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="{{ asset('assets/images/client/quote.png') }}" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="{{ asset('assets/images/client/client-1.png') }}"
                                                    alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>Fight School has specialized in martial arts since 1986 and has one of the
                                                most
                                                Fight School has specialized.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title"><a href="#0">Randall Schwartz</a></h4>
                                                <span class="sub-title">Women's Trainner</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="client-item">
                                        <div class="client-header">
                                            <div class="client-quote">
                                                <img src="{{ asset('assets/images/client/quote.png') }}" alt="client">
                                            </div>
                                            <div class="client-thumb">
                                                <img src="{{ asset('assets/images/client/client-2.png') }}"
                                                    alt="client">
                                            </div>
                                        </div>
                                        <div class="client-content">
                                            <p>Fight School has specialized in martial arts since 1986 and has one of the
                                                most
                                                Fight School has specialized.</p>
                                        </div>
                                        <div class="client-footer">
                                            <div class="client-footer-left">
                                                <h4 class="title"><a href="#0">Andru Smith</a></h4>
                                                <span class="sub-title">Boxing Trainer</span>
                                            </div>
                                            <div class="client-footer-right">
                                                <span class="ratings">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star active"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="client-right-thumb" data-aos="fade-left" data-aos-duration="1200">
                            <img src="{{ asset('assets/images/client/client-big-2.png') }}" alt="client">
                            <div class="client-thumb-overlay">
                                <h4 class="title">MASTER UPPER CUT</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                            End Client
                                                                                                                                                                                                        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    --}} --}}


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Start Plan
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    {{-- <section class="plan-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">OUR <span>MEMBERSHIP</span> PLAN</h2>
                        <p>Fight School has specialized in martial arts since 1986 and has one of the most innovative
                            programs in the nation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <nav class="plan-tab" data-aos="fade-up" data-aos-duration="1200">
                        <span class="monthly_tab_title">Monthly</span>
                        <span class="plan-tab-switcher"></span>
                        <span class="annual_tab_title">Yearly</span>
                    </nav>
                </div>
            </div>
            <div class="plan-area change-subs-duration">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Basic</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>39<sub>/month</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Fifo – Fly In / Fly Out</li>
                                    <li>No Contract</li>
                                    <li>Shirt & Pants</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO BASIC</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item active" data-aos="zoom-in" data-aos-duration="1200">
                            <span class="plan-badge-top">POPULAR</span>
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Pro</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>49<sub>/month</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Membership</li>
                                    <li>Unlimited Training</li>
                                    <li>Access to all classes</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO PRO</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Elite</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>59<sub>/month</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Fifo – Fly In / Fly Out</li>
                                    <li>Train 24 hrs/day</li>
                                    <li>Glovers & Fightgear</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO ELITE</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="plan-area">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Basic</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>49<sub>/Year</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Fifo – Fly In / Fly Out</li>
                                    <li>No Contract</li>
                                    <li>Shirt & Pants</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO BASIC</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item active" data-aos="zoom-in" data-aos-duration="1200">
                            <span class="plan-badge-top">POPULAR</span>
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Pro</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>59<sub>/year</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Membership</li>
                                    <li>Unlimited Training</li>
                                    <li>Access to all classes</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO PRO</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 mb-30">
                        <div class="plan-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="plan-content">
                                <div class="plan-header">
                                    <div class="plan-badge-area">
                                        <span class="plan-badge red">Elite</span>
                                    </div>
                                    <p>Access to all classes & membership</p>
                                </div>
                                <div class="plan-price-area">
                                    <h2 class="price-title"><sup>$</sup>79<sub>/year</sub></h2>
                                </div>
                                <ul class="plan-list">
                                    <li>Fifo – Fly In / Fly Out</li>
                                    <li>Train 24 hrs/day</li>
                                    <li>Glovers & Fightgear</li>
                                </ul>
                            </div>
                            <div class="plan-footer">
                                <a href="#0">
                                    <h3 class="title">GO ELITE</h3>
                                    <div class="plan-btn"><i class="fas fa-angle-right"></i></div>
                                </a>
                            </div>
                            <div class="plan-overlay">
                                <img src="{{ asset('assets/images/element/element-25.png') }}" alt="element">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                        End Plan
                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> --}}


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Start Tutorial
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    {{-- <section class="tutorial-section ptb-120">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-8 col-md-6 text-center">
                    <div class="section-header">
                        <h2 class="section-title">JU-JITSU <span> WJJC VIDEOS</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mb-30-none">
                <div class="col-xl-12">
                    <div class="tutorial-slider">
                        <div class="swiper-wrapper">
                            <!-- Primeiro vídeo -->
                            <div class="swiper-slide">
                                <div class="tutorial-item">
                                    <div class="tutorial-thumb">
                                        <img src="{{ asset('assets/images/tutorial/tutorial-1.png') }}" alt="tutorial">
                                        <div class="tutorial-overlay">
                                            <div class="tutorial-video">
                                                <a class="video-icon" data-rel="lightcase:myCollection"
                                                    href="https://www.youtube.com/embed/oF4oNfwlq38">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </div>
                                            <div class="tutorial-content">
                                                <h3 class="title">Ju-Jitsu WJJC - Shodai Soke Adriano Busà International
                                                    Technical Director</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-pagination"></div>
                        <div class="slider-nav-area">
                            <div class="slider-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="slider-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        End Tutorial
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    {{--
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                    Start Subscribe
                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="subscribe-section ptb-120">
        <div class="container">
            <div class="subscribe-area">
                <div class="subscribe-element">
                    <img src="{{ asset('assets/images/element/element-22.png') }}" alt="element">
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe-thumb" data-aos="fade-up" data-aos-duration="1200">
                            <img src="{{ asset('assets/images/element/element-23.png') }}" alt="element">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="subscribe-content" data-aos="fade-left" data-aos-duration="1200">
                            <div class="section-header white">
                                <h2 class="section-title">SUBSCRIBE NOW</h2>
                                <p>Fight School has specialized in martial arts since 1986 and has one of the most
                                    innovative programs in the nation.</p>
                            </div>
                            <form class="subscribe-form">
                                <label class="subscribe-icon"><i class="las la-envelope"></i></label>
                                <input type="text" class="form--control" placeholder="Email Address">
                                <button type="submit" class="btn--base">GET ALART</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                    End Subscribe
                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> --}}


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Start Blog
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="blog-section blog-section-two ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">ÚLTIMAS <span> NOTICÍAS</span></h2>
                    </div>
                </div>
            </div>
            <div class="blog-area">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="blog-thumb">
                                <img src="{{ asset('assets/images/blog/new1.jpg') }}" alt="blog">
                                {{-- <div class="blog-date">
                                    <span>24-25, 2024</span>
                                </div> --}}
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">BY: WJJC PORTUGAL</span>
                                    <span class="category"><a href="#">JU-JITSU</a></span>
                                </div>
                                <h3 class="title"><a href="#">Boas Vindas a Portugal na WJJC</a></h3>
                                <p>
                                    A World Ju-Jitsu Corporation tem o orgulho de anunciar que o Sensei Pedro Nuno Pimentel
                                    tornou-se o Diretor Técnico Nacional da WJJC Portugal 🇵🇹. Toda a Wjjc deseja ao Sensei
                                    Pimentel um bom trabalho e muito sucesso no seu país. Bem-vindo à nossa
                                    grande família. Oss!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="blog-thumb">
                                <img src="{{ asset('assets/images/blog/new2.jpg') }}" alt="blog">
                                <div class="blog-date">
                                    <span>Julho 16-23, 2024</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">BY: WJJC PORTUGAL</span>
                                    <span class="category"><a href="#">JU-JITSU</a></span>
                                </div>
                                <h3 class="title"><a href="#">Estágio Interno Ju-Jitsu Penela
                                        Julho 2024</a>
                                </h3>
                                <p>Seminar exclusivo com o Soke Adriano Busà e Sensei Pedro Nuno Pimentel</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="blog-item" data-aos="zoom-in" data-aos-duration="1200">
                            <div class="blog-thumb">
                                <img src="{{ asset('assets/images/blog/new3.jpg') }}" alt="blog">
                                <div class="blog-date">
                                    <span>Maio 25-26, 2024</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-post-meta">
                                    <span class="user">BY: WJJC PORTUGAL</span>
                                    <span class="category"><a href="#">JU-JITSU</a></span>
                                </div>
                                <h3 class="title"><a href="{{ route('event.show') }}">Master Class 2024 Florença
                                        - Itália</a>
                                </h3>
                                <p>A World Ju-Jitsu Corporation está a organizar uma Master Class Internacional aberta a
                                    todos os Diretores Técnicos Nacionais oficiais da WJJC e aos seus cintos negros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        End Blog
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

@endsection
