<div class="col-lg-8 col-sm-12">
    <div class="tab-content" id="dashboard_content">
        <!-- dashboard_item content -->
        <div
            class="tab-pane fade show active"
            id="dashboard_item"
            role="tabpanel"
            aria-labelledby="dashboard_item_tab"
        >
            <ul class="nav nav_tabs" id="topic_type_tab" role="tablist">
                <!-- published_topic -->
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="published_topic_tab"
                        data-bs-toggle="tab"
                        data-bs-target="#published_topic"
                        type="button"
                        role="tab"
                        aria-controls="published_topic"
                        aria-selected="true"
                    >
                        <p class="published_topic_num topic_num">{{$acceptedTopics->count()}}</p>
                        <p class="published_topic_txt topic_txt">
                            تاپیک منتشر شده
                        </p>
                    </button>
                </li>
                <!-- pending_topic -->
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pending_topic_tab"
                        data-bs-toggle="tab"
                        data-bs-target="#pending_topic"
                        type="button"
                        role="tab"
                        aria-controls="pending_topic"
                        aria-selected="false"
                    >
                        <p class="pending_topic_num topic_num">{{$pendingTopics->count()}}</p>
                        <p class="pending_topic_txt topic_txt">
                            تاپیک در انتظار تایید
                        </p>
                    </button>
                </li>
                <!-- rejected_topic -->
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="rejected_topic_tab"
                        data-bs-toggle="tab"
                        data-bs-target="#rejected_topic"
                        type="button"
                        role="tab"
                        aria-controls="rejected_topic"
                        aria-selected="false"
                    >
                        <p class="rejected_topic_num topic_num">{{$rejectedTopics->count()}}</p>
                        <p class="rejected_topic_txt topic_txt">
                            تاپیک رد شده
                        </p>
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="topic_type_tabContent">
                <!-- published_topic content -->
            @include('front.dashboard.partials._accepted-topics',['topics' => $acceptedTopics])
            <!-- pending_topic content -->
            @include('front.dashboard.partials._pending-topics', ['topics' => $pendingTopics])
            <!-- rejected_topic content -->
                @include('front.dashboard.partials._rejected-topics', ['topics' => $rejectedTopics])
            </div>
        </div>
        <!-- myTopic_item content -->
    @include('front.dashboard.partials._my-topics', ['topics' => $topics])
    <!-- savedTopic_item content -->
        <div
            class="tab-pane fade"
            id="savedTopic_item"
            role="tabpanel"
            aria-labelledby="savedTopic_item_tab"
        >
            <p class="tab_pane_title">تاپیک های ذخیره شده</p>
            <div class="published_content">
                <div class="tab_item_box">
                    <p class="item_title">
                        لورم ایپسوم متن ساختگی با تولید سادگی
                    </p>
                    <p class="item_caption">
                        این تاپیک به علت عنوان نامناسب تایید نگردیده است
                    </p>
                </div>
                <div class="tab_item_box">
                    <p class="item_title">
                        لورم ایپسوم متن ساختگی با تولید سادگی
                    </p>
                    <p class="item_caption">
                        این تاپیک به علت عنوان نامناسب تایید نگردیده است
                    </p>
                </div>
                <div class="tab_item_box">
                    <p class="item_title">
                        لورم ایپسوم متن ساختگی با تولید سادگی
                    </p>
                    <p class="item_caption">
                        این تاپیک به علت عنوان نامناسب تایید نگردیده است
                    </p>
                </div>
                <div class="tab_item_box">
                    <p class="item_title">
                        لورم ایپسوم متن ساختگی با تولید سادگی
                    </p>
                    <p class="item_caption">
                        این تاپیک به علت عنوان نامناسب تایید نگردیده است
                    </p>
                </div>
            </div>
        </div>
        <!-- completeinfo_item content -->
        <div
            class="tab-pane fade"
            id="completeinfo_item"
            role="tabpanel"
            aria-labelledby="completeinfo_item_tab"
        >
            ویرایش اطلاعات کاربری
        </div>
        <!-- messagebox_item content -->
        <div
            class="tab-pane fade"
            id="messagebox_item"
            role="tabpanel"
            aria-labelledby="messagebox_item_tab"
        >
            صندوق پیام ها
        </div>
    </div>
</div>
