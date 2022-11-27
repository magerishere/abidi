@extends('front.layouts.master')

@section('content')
    <section class="single_topic" id="single_question">
        <div class="container">
            <div class="content">
                <div class="topic_box">
                    <div class="user_properties">
                        <div class="user_img">
                            <img src="/assets/images/user1.png" alt=""/>
                        </div>
                        <div class="user_info">
                            <p class="user_name">حسین کاظمی احمد آبادی</p>
                            <p class="user_status">کاربر عادی</p>
                        </div>
                    </div>
                    <div class="topic_top">
                        <hr class="topic_title_border"/>
                        <div class="right">
                            <h2 class="topic_title">
                                {{$topic->title }}
                            </h2>
                        </div>
                        <div class="left">
                            <p class="date">
                                ارسال شده در
                                <span> {{$topic->readable_created_at}}</span>
                            </p>
                        </div>
                    </div>
                    <p class="topic_caption">
                        {!! $topic->content !!}
                    </p>
                    <div class="topic_bottom">
                        <div class="right">
                            @foreach($topicTags as $tag)
                                <div class="topic_tags">{{$tag}}</div>
                            @endforeach
                        </div>
                        <div class="left topic_options">
                            <img src="/assets/images/share_icon.png" alt=""/>
                            <img src="/assets/images/bookmark_icon.png" alt=""/>
                            <img src="/assets/images/heart_icon.png" alt=""/>
                        </div>
                    </div>
                </div>
                <div class="topic_box_bottom">
                    <div class="right response_box">
                        <a
                            href="#"
                            class="callToAction"
                            data-bs-toggle="modal"
                            data-bs-target="#
                  "
                        >
                            پاسخ دادن
                        </a>
                        <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                    </div>
                    <div class="left">
                        <div class="row report_box">
                            <div class="col-4">
                                <div class="visit_box">
                                    <i class="fas fa-eye"></i>
                                    <span class="visit_number">{{$topic->view}}</span>
                                </div>
                                <span class="statistics_txt">بازدید</span>
                            </div>
                            <div class="col-4">
                                <div class="visit_box">
                                    <i class="fas fa-heart"></i>
                                    <span class="like_number">{{$topic->like}}</span>
                                </div>
                                <span class="statistics_txt">لایک</span>
                            </div>
                            <div class="col-4">
                                <div class="visit_box">
                                    <img src="assets/images/answerNumber.png" alt=""/>
                                    <span class="answer_number">200</span>
                                </div>
                                <span class="statistics_txt">پاسخ پزشک</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
