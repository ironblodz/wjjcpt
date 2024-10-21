@extends('master')

@section('title', 'Sponsors')
@section('description', 'Sponsors')
@section('canonical', 'https://wjjc.pt/sponsors')

@section('content')

 <section class="four-not-four-section bg_img" data-background="assets/images/samurai.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-6 col-lg-6 text-center">
                    <div class="four-not-four-content">
                        <h2 class="sub-title">{{ __('messages.sponsors.construction') }}</h2>
                        <p>{{ __('messages.sponsors.textbig') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
