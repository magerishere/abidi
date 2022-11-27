<section id="popular_topics">
    <div class="container">
        <h2 class="title">تاپیک های پربازدید</h2>
        <div class="content">
            @foreach($topics as $topic)
                <a href="{{route('topics.show',$topic->id)}}">

                    <div class="content_box row">
                        <div class="col-lg-8 col-sm-12">
                            <div class="top">
                                <p class="topics_title">
                                    {{$topic->title}}
                                </p>
                                <div class="time">{{$topic->readable_created_at}}</div>
                            </div>
                            <div class="bottom">
                                <div class="caption">
                                    {!! $topic->content !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 row report_box">
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
                                    <img src="{{asset('front/assets/images/answerNumber.png')}}" alt=""/>
                                    <span class="answer_number">200</span>
                                </div>
                                <span class="statistics_txt">پاسخ پزشک</span>
                            </div>
                        </div>
                    </div>
                </a>

            @endforeach

        </div>
        <a href="#" class="btn callToAction2">
            دیدن همه
            <i class="fas fa-angle-left"></i>
        </a>
    </div>
</section>
