<div
    class="tab-pane fade tab_content"
    id="pending_topic"
    role="tabpanel"
    aria-labelledby="pending_topic_tab"
>
    <p class="tab_pane_title">تاپیک های در انتظار تایید</p>
    <div class="pending_content">
        @foreach($topics as $topic)
            @include('front.dashboard.partials._topic-item', ['topic' => $topic])
        @endforeach
    </div>
</div>
