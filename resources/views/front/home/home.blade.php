@extends('front.layouts.master')

@section('content')
    <!-- starter -->
    @include('front.home.partials._starter')

    <!-- ============ popular_topics ============ -->
    @include('front.home.partials._popular-topics',['topics' => $topics])
    <!-- ============ active_doctors ============ -->
    @include('front.home.partials._active-doctors',['doctors' => $doctors])
    <!-- motion -->
    @include('front.home.partials._motion')

    <!-- Swiper -->
    <div class="swiper mySwiper d-none">
        <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

    <!-- ============ register-login-Modal ============ -->
    @include('front.home.partials._register-login-modal')
@endsection
