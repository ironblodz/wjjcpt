@extends('master')

@section('title', 'Galeria de Treinos')
@section('description', 'Galeria de Treinos da WJJC Portugal')
@section('canonical', 'https://wjjc.pt/workout')
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
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.workout.gallery') }}</li>
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
        <img loading="lazy" src="{{ asset('assets/images/logowhite.png') }}" alt="element">
        <div class="scrollToTop-icon">
            <i class="fas fa-arrow-up"></i>
        </div>
    </a>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                    End Scroll-To-Top
                                                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                    Start Gallery
                                                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <section class="gallery-section ptb-120">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-8 col-md-6 col-sm-8 text-center">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="1200">
                        <h2 class="section-title">{{ __('messages.workout.gallery_the') }}
                            <span>{{ __('messages.workout.training') }}</span>
                        </h2>
                        <section class="video-section2">
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
                                                    href="https://www.youtube.com/embed/7QH-ZOG_KWc">
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
            <div class="gallery-filter-wrapper">
                <div class="button-group filter-btn-group">
                    <button class="active" data-filter="*">{{ __('messages.workout.all') }}</button>
                    <button data-filter=".workout">{{ __('messages.workout.training') }}</button>
                </div>
                <div class="grid">
                    <div class="grid-item workout trainer">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/b.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/b.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout trainer">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/c.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/c.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item others workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/d.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/d.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/e.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/e.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item trainer workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/f.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/f.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/g.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/g.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/h.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/h.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/i.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/i.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/j.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/j.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/k.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/k.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/kk.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/kk.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/kkk.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/kkk.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/kkkk.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/kkkk.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/v.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/v.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/vv.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/vv.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/vvv.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/vvv.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/vvvv.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/vvvv.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/n.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/n.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/nn.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/nn.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item workout">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy" src="{{ asset('assets/images/workout/nnn.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/workout/nnn.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item prev">
                        <a class="page-link" href="#" rel="prev" aria-label="Prev &raquo;">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active" aria-current="page"><span class="page-link">02</span></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#">05</a></li>
                    <li class="page-item next">
                        <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">Próximo</a>
                    </li>
                </ul>
            </nav> --}}
        </div>
    </section>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                                                                                                                                                                                                                                                                                                                                    End Gallery
                                                                                                                                                                                                                                                                                                                                ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->




@endsection
