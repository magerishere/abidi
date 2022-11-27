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
                    <img src="{{asset('front/assets/images/answerNumber.png')}}" alt=""/>
                    <span class="answer_number">{{$topic->doctorReplies()->count()}}</span>
                </div>
                <span class="statistics_txt">پاسخ پزشک</span>
            </div>
        </div>
    </div>
</div>
