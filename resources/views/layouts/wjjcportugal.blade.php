@extends('master')

@section('title', 'WJJC Portugal')
@section('description', 'WJJC Portugal')

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
                <li class="breadcrumb-item active" aria-current="page">WJJC Portugal</li>
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
                        <img src="{{ asset('assets/images/LOGO.png') }}" alt="about">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mb-30">
                    <div class="about-content-area">
                        <div class="section-header">
                            <h2 class="section-title">A nossa <span>História</span></h2>
                            <p> A WJJC Portugal é uma organização sem fins lucrativos cuja missão é a disseminação e
                                desenvolvimento do Kishidō Ju-Jitsu pelo território nacional. </p>

                            <p>A nossa filosofia é
                                que a complementaridade será sempre uma poderosa ferramenta de crescimento e no qual através
                                da partilha de conhecimento, todos ganhamos porque todos
                                crescemos.
                            </p>

                            <p>Se tiveres vontade ou curiosidade, sejas um clube ou a solo serás sempre bem vindo na WJJC
                                Portugal, estaremos cá para não só para te transmitir o Kishidō Ju-Jitsu,mas também para te
                                apoiar e para aprender contigo. Se procuras uma organização profissional de Ju-Jitsu a World
                                Ju-Jitsu Corporation é a indicada para ti!
                            </p>

                            <p> Vem treinar connosco... o Kishidō Ju-Jitsu espera por ti! OSS “</p>
                        </div>
                        <ul class="about-list">
                            <li>Raízes tradicionais do Ju-Jitsu Inglês</li>
                            <li>O estudo aprofundado de técnicas de defesa contra facas e armas</li>
                            <li>Técnicas de defesa contra múltiplos ataques e grappling</li>
                            <li>O programa profissional, foi desenvolvido para Militares e Polícia</li>
                        </ul>
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
    <section class="video-section bg-overlay-red bg_img" data-background="{{ asset('assets/images/pt.jpg') }}">
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
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                    End Video
                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                    Start Statistics
                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                    End Statistics
                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                    Start Feature
                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="feature-section feature-section-two feature-section--style pt-120 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">O LOGO: <span>São Jorge</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-30-none">
                <div class="col-xl-8 col-lg-8 mb-30">
                    <div class="feature-item-area">
                        <div class="row justify-content-center mb-60-none">
                            <p>O símbolo do WJJC é São Jorge matando o dragão com sua lança (Capadócia, cerca de 275 – 285
                                dC - Nicomédia 303). São Jorge foi o bravo cavaleiro que desafiou o horrível dragão e, no
                                final, o perfurou com sua lança. O Santo está associado à honra, bravura, bravura e
                                generosidade.
                                George era um cavaleiro brilhante e destemido que viveu no século III dC na Capadócia, uma
                                área que hoje faz parte da Turquia. Sua bravura foi demonstrada ajudando os outros.</p>

                            <p>Uma dessas histórias é assim...... naquela época, um dragão feroz vivia em um grande lago. O
                                dragão estava aterrorizando as cidades vizinhas e, todos os dias, as pessoas alimentavam o
                                dragão com uma ovelha para apaziguá-lo. Quando todas as ovelhas foram comidas, o dragão
                                exigiu que o povo sacrificasse uma jovem donzela a ele por dia. Uma por uma, as meninas
                                foram mortas até que, no final, sobrou apenas a filha do rei do Egito. A menos que um
                                cavaleiro fosse encontrado para matar o dragão, a princesa seria sacrificada no dia
                                seguinte.</p>

                            <p>O rei tentou negociar uma saída, mas o povo da cidade declarou que ela deveria ser entregue
                                ao dragão, assim como muitos de seus filhos haviam sido. Então, o rei vestiu sua filha como
                                se ela fosse se casar, abraçou-a, beijou-a, deu-lhe sua bênção e conduziu-a até onde estava
                                o dragão.</p>

                            <p>George, que estava passando, perguntou à filha o que estava acontecendo. Ela contou a ele
                                sobre o dragão e implorou que ele fosse embora antes que ele aparecesse e o matasse também.
                                O cavaleiro disse à princesa: “Linda filha, não duvide, eu te ajudarei. Bom cavaleiro, siga
                                seu caminho e não fique comigo, porque você não pode me livrar”.</p>

                            <p>Enquanto eles conversavam, o dragão apareceu e avançou sobre eles. O dragão era enorme e seu
                                rugido parecia um trovão, mas São Jorge não teve medo. Ele montou seu cavalo, sacou a espada
                                e cavalgou com força contra o dragão. Mas o dragão atacou-o, feriu-o e feriu-o e atirou-o ao
                                chão.</p>

                            <p>São Jorge não desistiu. Em vez disso, ele atacou o dragão e usou sua espada para perfurá-lo
                                sob suas asas, onde o dragão era vulnerável porque não havia escamas. O dragão caiu morto
                                sob os pés de São Jorge.
                                A filha do rei do Egito foi resgatada.</p>

                            <p>George estava igualmente destemido no dia de seu cruel martírio. No ano 302, Diocleciano
                                emitiu um decreto determinando que todos os soldados do exército deveriam oferecer
                                sacrifícios aos deuses romanos. Por se recusar a queimar incenso aos deuses, o imperador
                                mandou prendê-lo. Diocleciano, não querendo perder um de seus melhores tribunos, tentou
                                oferecer a Jorge presentes como terras, dinheiro e escravos se ele fizesse sacrifícios aos
                                deuses romanos. George nunca aceitou a oferta. O imperador o executou por sua recusa em
                                obedecer ao decreto. Antes da execução, George deu sua riqueza aos pobres e preparou-se para
                                morrer.</p>

                            <p>O próprio George não apenas não se submeteu às ordens, mas também deu grande coragem aos
                                outros prisioneiros com seu exemplo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30">
                    <div class="feature-thumb-area" data-aos="fade-left" data-aos-duration="1200">
                        <div class="feature-thumb">
                            <img src="{{ asset('assets/images/LOGO.png') }}" alt="element">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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