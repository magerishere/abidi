<div
    class="tab-pane fade"
    id="myTopic_item"
    role="tabpanel"
    aria-labelledby="myTopic_item_tab"
>
    <div class="top">
        <p class="tab_pane_title">آخرین تاپیک های شما</p>
        <div class="sort_topic_box">
            <span>مرتب سازی براساس</span>
            <select name="sort_topic" id="sort_topic">
                <option value="newest">جدیدترین</option>
                <option value="best">داغ ترین</option>
            </select>
        </div>
    </div>
    @foreach($topics as $topic)

        @include('front.dashboard.partials._my-topics-item',['topic' => $topic])
    @endforeach

    <div class="sort_topic_item">
        <div class="show_sort_topic">
            <div>
                <h2 class="sort_topic_title">
                    لورم ایپسوم متن ساختگی با تولید سادگی نا مفهوم مورد
                    استفاده طراحان ...
                </h2>
                <span class="sort_topic_date"
                >ارسال شده در
                            <span class="sort_topic_date"> 18 آبان 1400 </span>
                          </span>
            </div>
            <div class="topic_status publish">در انتظار تایید</div>
        </div>
    </div>
    <div class="sort_topic_item">
        <div class="show_sort_topic">
            <div>
                <h2 class="sort_topic_title">
                    لورم ایپسوم متن ساختگی با تولید سادگی نا مفهوم مورد
                    استفاده طراحان ...
                </h2>
                <span class="sort_topic_date"
                >ارسال شده در
                            <span class="sort_topic_date"> 18 آبان 1400 </span>
                          </span>
            </div>
            <div class="topic_status reject">در انتظار تایید</div>
        </div>
    </div>
    <div class="sort_topic_item">
        <div class="show_sort_topic">
            <div>
                <h2 class="sort_topic_title">
                    لورم ایپسوم متن ساختگی با تولید سادگی نا مفهوم مورد
                    استفاده طراحان ...
                </h2>
                <span class="sort_topic_date"
                >ارسال شده در
                            <span class="sort_topic_date"> 18 آبان 1400 </span>
                          </span>
            </div>
            <div class="topic_status publish">در انتظار تایید</div>
        </div>
    </div>
</div>
