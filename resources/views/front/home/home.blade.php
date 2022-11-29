@extends('front.layouts.master')

@section('content')
    <!-- starter -->
    @include('front.home.partials._starter')

      <!-- ============ introduction ============ -->
      <section id="introduction">
        <div class="container">
          <div class="content">
            <h2 class="title">ویدیو معرفی فروم عبیدی</h2>
            <div class="video_box">
              <video
                controls=""
                poster="{{asset('front/assets/images/videoCover.png')}}"
                src="{{asset('front/assets/video/ads.mp4')}}"
              ></video>
            </div>
          </div>
        </div>
      </section>

    <!-- ============ popular_topics ============ -->
    @include('front.home.partials._popular-topics',['topics' => $topics])
    <!-- ============ active_doctors ============ -->
    @include('front.home.partials._active-doctors',['doctors' => $doctors])
    <!-- motion -->
    @include('front.home.partials._motion')

      <!-- ============ last_videos ============ -->
      <section id="last_videos">
        <div class="content">
          <h2 class="title">آخرین ویدیو ها</h2>
          <!-- Swiper -->
          <div class="swiper lastVideosSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <video
                  src="{{asset('front/assets/video/ads.mp4')}}"
                  poster="{{asset('front/assets/images/video_bg.png')}}"
                ></video>
                <div class="video_info">
                  <p class="info_title">لورم ایپسوم متن ساختگی با تولید</p>
                  <div class="d-flex align-items-center">
                    <span class="doctor_name">دکتر حق گو</span>
                    <img src="/assets/images/video_visit.png" alt="" />
                    <p class="video_visitor">
                      <span class="video_visitor_num">850</span>بازدید
                    </p>
                  </div>
                </div>
                <img
                  src="{{asset('front/assets/images/playe_icone.png')}}"
                  alt=""
                  class="playe_icone"
                />
              </div>
              <div class="swiper-slide">
                <video
                  src="{{asset('front/assets/video/ads.mp4')}}"
                  poster="{{asset('front/assets/images/video_bg.png')}}"
                ></video>
                <div class="video_info">
                  <p class="info_title">لورم ایپسوم متن ساختگی با تولید</p>
                  <div class="d-flex align-items-center">
                    <span class="doctor_name">دکتر حق گو</span>
                    <img src="/assets/images/video_visit.png" alt="" />
                    <p class="video_visitor">
                      <span class="video_visitor_num">850</span>بازدید
                    </p>
                  </div>
                </div>
                <img
                  src="{{asset('front/assets/images/playe_icone.png')}}"
                  alt=""
                  class="playe_icone"
                />
              </div>
              <div class="swiper-slide">
                <video
                  src="{{asset('front/assets/video/ads.mp4')}}"
                  poster="{{asset('front/assets/images/video_bg.png')}}"
                ></video>
                <div class="video_info">
                  <p class="info_title">لورم ایپسوم متن ساختگی با تولید</p>
                  <div class="d-flex align-items-center">
                    <span class="doctor_name">دکتر حق گو</span>
                    <img src="/assets/images/video_visit.png" alt="" />
                    <p class="video_visitor">
                      <span class="video_visitor_num">850</span>بازدید
                    </p>
                  </div>
                </div>
                <img
                  src="{{asset('front/assets/images/playe_icone.png')}}"
                  alt=""
                  class="playe_icone"
                />
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>


@endsection
