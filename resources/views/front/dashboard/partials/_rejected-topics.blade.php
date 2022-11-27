<div
    class="tab-pane fade tab_content"
    id="rejected_topic"
    role="tabpanel"
    aria-labelledby="rejected_topic_tab"
>
    <p class="tab_pane_title">تاپیک های رد شده</p>
    <div class="rejected_content">
        @foreach($topics as $topic)
            @include('front.dashboard.partials._topic-item', ['topic' => $topic])
        @endforeach
    </div>
</div>
