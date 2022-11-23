@extends('front.layouts.master')

@section('content')
    <img
        src="assets/images/logo.png"
        alt="logo"
        class="logo"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
    />
    <p class="caption">
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
    </p>
    <div class="input_box">
        <i class="far fa-search"></i>
        <input
            type="text"
            placeholder="درباره چه چیزی سوال داری ؟"
            class="inp"
            id="inp"
        />
    </div>
@endsection
