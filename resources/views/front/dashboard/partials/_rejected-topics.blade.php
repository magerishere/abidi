<div
    class="tab-pane fade tab_content"
    id="rejected_topic"
    role="tabpanel"
    aria-labelledby="rejected_topic_tab"
>
    <div class="tab_pane_header">
            <p class="tab_pane_title">تاپیک های رد شده</p>

            <a href="#" class="back_all_topic"
                >بازگشت به همه تاپیک ها
                <img src="{{asset('front/assets/images/left_arrow.png')}}" alt="" />
            </a>
    </div>
    <div class="rejected_content">
        @foreach($topics as $topic)
            @include('front.dashboard.partials._topic-item', ['topic' => $topic])
        @endforeach
    </div>
</div>
