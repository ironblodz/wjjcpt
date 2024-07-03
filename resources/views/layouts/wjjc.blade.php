@extends('master')

@section('title', 'WJJC International')
@section('description', 'WJJC Internacional')

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
                <li class="breadcrumb-item active" aria-current="page">WJJC Internacional</li>
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
                                                                                                                                                                                                                                                                                                                                                        Start About
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="about-section about-section--style ptb-120">
        <div class="about-element-one my-paroller" data-paroller-factor="0.2" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="assets/images/samurai2.jpg" style="opacity: 0.3" alt="element">
        </div>
        <div class="about-element-two my-paroller" data-paroller-factor="0.2" data-paroller-type="foreground"
            data-paroller-direction="vertical">
            <img src="assets/images/samurai1.jpg" style="opacity: 0.3" alt="element">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb">
                        <img src="{{ asset('assets/images/LOGO-WJJC.png') }}" alt="about">
                        {{-- <div class="about-overlay-content">
                            <img src="assets/images/icon/icon-22.png" alt="icon">
                            <h4 class="title">WJJC Internacional</h4>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content-area">
                        <div class="section-header">
                            <h2 class="section-title">A História da <span>WJJC</span></h2>
                            <p>A World Ju-Jitsu Corporation é resultado de seu carismático fundador, Shodai Soke Adriano
                                Busà, e sua longa experiência.</p>

                            <p>Esta organização é uma jovem corporação preocupada em estudar e propagar esta doce arte
                                entre os cinco continentes. Disponibilizamos a nós próprios, e os nossos métodos modernos e
                                eficazes, a qualquer pessoa que deseje aprofundar o seu conhecimento de Ju-Jitsu. </p>

                            <p>O estilo da WJJC está constantemente a ser atualizado. Estudamos continuamente as dinâmicas
                                urbanas internacionais para preparar os nossos alunos para enfrentar um ambiente em
                                constante mudança, sem abdicar das raízes tradicionais do Ju-Jitsu inglês.</p>

                            <p> faz parte de um caminho de treino de alto nível ensinado utilizando os valores típicos das
                                artes marciais
                                tais como: honra, respeito, disciplina, sacrifício e lealdade.</p>
                        </div>
                        <ul class="about-list">
                            <li>Raízes tradicionais do Ju-Jitsu Inglês</li>
                            <li>O estudo aprofundado de técnicas de defesa contra facas e armas</li>
                            <li>Técnicas de defesa contra múltiplos ataques e grappling</li>
                            <li>O programa profissional, foi desenvolvido para Militares e Polícia</li>
                        </ul>
                        <div class="about-user-area">
                            <div class="about-user-wrapper">
                                <div class="about-user-thumb">
                                    <img src="{{ asset('assets/images/logolittle.png') }}" alt="user">
                                </div>
                                <div class="about-user-content">
                                    <h6 class="title">Soke Adriano Busà</h6>
                                    <span class="sub-title">Fundador</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-item-area about-item-area-two pt-120">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="about-item">
                            <div class="about-icon">
                                <img src="assets/images/icon/icon-23.png" alt="icon">
                            </div>
                            <div class="about-content">
                                <h4 class="title">APRIMORAMENTO DA FORÇA MUSCULAR:</h4>
                                <p>O treino envolve muitos grupos musculares, promovendo o fortalecimento do corpo inteiro.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="about-item">
                            <div class="about-icon">
                                <img src="assets/images/icon/icon-24.png" alt="icon">
                            </div>
                            <div class="about-content">
                                <h4 class="title">CONDICIONAMENTO FÍSICO GERAL</h4>
                                <p>A prática regular melhora a força, a flexibilidade, a resistência cardiovascular e a
                                    coordenação motora</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="about-item">
                            <div class="about-icon">
                                <img src="assets/images/icon/icon-25.png" alt="icon">
                            </div>
                            <div class="about-content">
                                <h4 class="title"> INTENSIFICAÇÃO DE VALORES ÉTICOS E MORAIS</h4>
                                <p>Princípios como honra, coragem, solidariedade e justiça são ensinados para ajudar na
                                    formação do caráter dos praticantes, especialmente crianças, adolescentes e jovens.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        End About
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        Start Video
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="video-section bg-overlay-red bg_img" data-background="{{ asset('assets/images/bannerwjjc.png') }}">
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
                                href="https://www.youtube.com/embed/e_XRFX774Ng">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        End Video
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        Start Statistics
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="statistics-section">
        <div class="container">
            <div class="statistics-area">
                <div class="row mt-20-none mb-30-none">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="5">5</h3>
                                    <h3 class="title">+</h3>
                                </div>
                                <p>Continentes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="14">14</h3>
                                    <h3 class="title">+</h3>
                                </div>
                                <p>Paísess</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="statistics-item">
                            <div class="statistics-content">
                                <div class="odo-area">
                                    <h3 class="odo-title odometer" data-odometer-final="100">100</h3>
                                    <h3 class="title">+</h3>
                                </div>
                                <p>Membros Amigos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        End Statistics
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        Start Feature
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        End Feature
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        Start Trainer
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                                        End Client
                                                                                                                                                                                                                                                                                                                                                    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



@endsection
