<div
    class="tab-pane fade show active tab_content"
    id="published_topic"
    role="tabpanel"
    aria-labelledby="published_topic_tab"
>
         <div class="tab_pane_header">
            <p class="tab_pane_title">تاپیک های منتشر شده</p>
            <a href="#" class="back_all_topic"
                >بازگشت به همه تاپیک ها
                <img src="{{asset('front/assets/images/left_arrow.png')}}" alt="" />
            </a>
           </div>
    <!-- <p class="tab_pane_title">تاپیک های منتشر شده</p> -->
    <div class="published_content">
        @foreach($topics as $topic)

            @include('front.dashboard.partials._topic-item', ['topic' => $topic])
        @endforeach

    </div>
</div>
