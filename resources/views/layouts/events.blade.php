@extends('master')

@section('title', 'Galeria de Eventos')
@section('description', 'Galeria de Eventos da WJJC Portugal')

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
                <li class="breadcrumb-item active" aria-current="page">{{ __('messages.events.event') }}</li>
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
        <img loading="lazy"src="{{ asset('assets/images/logowhite.png') }}" alt="element">
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
                        <h2 class="section-title">
                            {{ __('messages.events.gallery') }} <span> {{ __('messages.events.event') }}</span></h2>
                    </div>
                </div>
            </div>
            <div class="gallery-filter-wrapper">
                <div class="button-group filter-btn-group">
                    <button class="active" data-filter="*">{{ __('messages.events.all') }}</button>
                    <button data-filter=".competicao">{{ __('messages.events.master') }}</button>
                </div>
                <div class="grid">
                    <div class="grid-item competicao trainer">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery2.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery2.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao trainer">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery3.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery3.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item others competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery9.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery9.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery10.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery10.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}" alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item trainer competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery11.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery11.jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/gallery12.jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/gallery/gallery-big-5.png') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (1).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (1).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (2).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (2).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (3).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (3).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (4).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (4).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (5).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (5).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (6).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (6).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (7).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (7).jpg') }}}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (8).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (8).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (9).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (9).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (10).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (10).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (11).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (11).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (12).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (12).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (13).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (13).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (14).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (14).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (15).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (15).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (16).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (16).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (17).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (17).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (18).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (18).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (18).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (18).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (19).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (19).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (20).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (20).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (21).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (21).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (22).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (22).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (23).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (23).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (24).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (24).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (25).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (25).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (26).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (26).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (27).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (27).jpg') }}"><img
                                                    src="{{ asset('assets/images/icon/icon-47.png') }}"
                                                    alt="gallery"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item competicao">
                        <div class="gallery-item">
                            <div class="gallery-thumb">
                                <img loading="lazy"src="{{ asset('assets/images/blog/a (28).jpg') }}" alt="gallery">
                                <div class="gallery-overlay">
                                    <div class="gallery-content">
                                        <h4 class="title">WJJC</h4>
                                        <div class="gallery-icon">
                                            <a class="img-popup" data-rel="lightcase:myCollection"
                                                href="{{ asset('assets/images/blog/a (28).jpg') }}"><img
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
