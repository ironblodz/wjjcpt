@extends('master')

@section('title', 'O Fundador')
@section('description', 'O Fundador da WJJC')

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
                <li class="breadcrumb-item"><a href="index.html">WJCC</a></li>
                <li class="breadcrumb-item active" aria-current="page">O Fundador</li>
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
                                                                                                                                                                                                                    Start Trainer
                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="trainer-section trainer-details-section ptb-120">
        <div class="container">
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-thumb">
                        <img src="{{ asset('assets/images/gallery12.jpg') }}" alt="about">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="trainer-about-content-area">
                        <div class="trainer-about-header">
                            <h2 class="title">Soke Adriano Busà</h2>
                            <span class="sub-title">O Fundador</span>
                        </div>
                        <div class="trainer-about-body">
                            <p>Shodai Soke Adriano Busà 9º Dan é o fundador e diretor técnico internacional da World
                                Ju-Jitsu Corporation. O estilo ​de Ju-Jitsu que ele codificou é o “Kishidō” - 騎士 道 (O
                                caminho do Cavaleiro).
                                Mais tarde, fundou uma empresa dedicada à formação profissional para polícias e militares.
                                Além de levar adiante a sua ​grande paixão pelo Ju-Jitsu, esta agência é a única empresa em
                                Itália com certificação de qualidade UNI EN ISO 9001 e ​creditação da Região da Toscana.</p>

                            <p>Em 2014, fundou a World Ju-Jitsu Corporation em Londres e começou assim uma nova fase na sua
                                vida e na sua ​carreira marcial, sempre em ascensão.</p>

                            <p>A sua visão filosófica levou-o a organizar a World Ju-Jitsu Corporation de tal forma que a
                                todos é dada a oportunidade ​de crescer e melhorar, ao mesmo tempo que ajuda os outros a
                                fazer o mesmo, uma vez que seguem os mesmos ​princípios. A sua filosofia está contida no
                                famoso lema dos três mosqueteiros de Alexandre Dumas: “Todos por um e um ​por todos!”
                                convencido da importância de forjar um grupo e fazer com que todos os membros do grupo se
                                sintam ​orgulhosos.</p>

                        </div>
                        <div class="trainer-about-footer">
                            <div class="trainer-about-social-area">
                                <ul class="trainer-about-social">
                                    <li><a href="https://www.instagram.com/soke.adriano.busa" target="t_blank"><i
                                                class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-widget-area">
                <h3 class="widget-title">Sobre o Soke</h3>
                <p>O Soke Adriano Busà é um verdadeiro líder, que nunca desiste, incansável, sempre pronto para a ação, não
                    só no tatami. ​Não só está sempre disponível para os seus alunos directos, mas também para todos os
                    alunos da WJJC, especialmente ​para os mais jovens, de facto, tem um sentimento de simpatia muito forte
                    por eles. É um ponto de referência para muitos ​deles, pronto a ouvi-los, estabelece uma relação
                    profunda baseada no respeito mútuo e é bom a dar conselhos e ideias ​tanto marciais como pessoais.</p>
                <p>As competências técnicas do Soke Adriano Busà são muito apreciadas em todo o mundo e permitiram-lhe
                    reinterpretar o ​Ju-Jitsu tradicional e transformar em “Kishidō” o estilo da WJJC, um estilo
                    simultaneamente moderno e eficaz, baseado ​na precisão e na rapidez, embora permanecendo firmemente
                    enraizado nos valores tradicionais do Budo.
                </p>
                <p>Hoje em dia, o Soke Adriano Busà, com o seu carisma, continua a transmitir o seu estilo de Ju-Jitsu a
                    todos os que ​desejam juntar-se à World Ju-Jitsu Corporation e que partilhem os seus valores, dando-lhes
                    a oportunidade de se ​tornarem verdadeiros profissionais do Ju-Jitsu e de fazerem parte de uma grande
                    organização internacional inovadora, ​moderna e bem sucedida.</p>
                <div class="about-widget-thumb">
                    <img src="{{ asset('assets/images/gallery7.jpg') }}" alt="bg">
                    <div class="about-widget-video">
                        <div class="video-main">
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <a class="video-icon" data-rel="lightcase:myCollection"
                                href="https://www.youtube.com/embed/oF4oNfwlq38">
                                <i class="fas fa-play"></i>
                            </a>
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
                                                                                                                                                                                                                    Start Trainer
                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    < <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ End Trainer ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->





    @endsection
