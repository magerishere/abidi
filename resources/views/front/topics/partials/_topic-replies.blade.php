<!-- topic_answers -->
<section id="topic_answers">
    <div class="tab-content" id="filterTabContent">
        <div
            class="tab-pane fade show active"
            id="all_answers"
            role="tabpanel"
            aria-labelledby="all_answers_tab"
        >
            <!-- answer1 -->
        @foreach($replies as $reply)
            @if($reply->forMemberUser())
                @include('front.topics.partials._topic-reply', ['reply' => $reply])

            @else
                @include('front.topics.partials._doctor-topic-reply', ['reply' => $reply])

            @endif

        @endforeach


        <!-- page_number_box -->
            @include('front.topics.partials._pagination')
        </div>
        <div
            class="tab-pane fade"
            id="best_answers"
            role="tabpanel"
            aria-labelledby="best_answers_tab"
        >
            <!-- answer1 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer2 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer3 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page_number_box -->
            <div class="page_number_box">
                <img src="/assets/images/right_arrow.png" alt=""/>
                <div class="page_number">4</div>
                <div class="page_number">3</div>
                <div class="page_number">2</div>
                <div class="page_number active">1</div>
                <img src="/assets/images/left_arrow.png" alt=""/>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="newest"
            role="tabpanel"
            aria-labelledby="newest_tab"
        >
            <!-- answer1 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer2 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer3 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page_number_box -->
            <div class="page_number_box">
                <img src="/assets/images/right_arrow.png" alt=""/>
                <div class="page_number">4</div>
                <div class="page_number">3</div>
                <div class="page_number">2</div>
                <div class="page_number active">1</div>
                <img src="/assets/images/left_arrow.png" alt=""/>
            </div>
        </div>
        <div
            class="tab-pane fade"
            id="doctors_answers"
            role="tabpanel"
            aria-labelledby="doctors_answers_tab"
        >
            <!-- answer1 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer2 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- answer3 -->
            <div class="single_topic">
                <div class="container">
                    <div class="content">
                        <div class="topic_box">
                            <div class="answerBox_top">
                                <div class="user_properties">
                                    <div class="user_img">
                                        <img src="/assets/images/user1.png" alt=""/>
                                    </div>
                                    <div class="user_info">
                                        <p class="user_name">حسین کاظمی احمد آبادی</p>
                                        <p class="user_status">کاربر عادی</p>
                                    </div>
                                </div>
                                <div class="topic_date">
                                    <p class="date">
                                        ارسال شده در
                                        <span> 18 اردیبهشت</span>
                                    </p>
                                </div>
                            </div>

                            <p class="topic_caption">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه
                                روزنامه و مجله در ستون و سطرآنچنان که لازم استلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپلورم ایپسوم
                                متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده
                                از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در
                                ستون و سطرآنچنان که لازم استلورم ایپسوم متن ساختگی با
                                تولید سادگی نامفهوم از صنعت چاپ
                            </p>
                            <div class="topic_bottom">
                                <div class="right response_box">
                                    <a
                                        href="#"
                                        class="callToAction"
                                        data-bs-toggle="modal"
                                        data-bs-target="#answerTopicModal"
                                    >
                                        پاسخ دادن
                                    </a>
                                    <a href="#" class="report_spam">گزارش تاپیک نامناسب</a>
                                </div>
                                <div class="left topic_options">
                                    <img src="/assets/images/share_icon.png" alt=""/>
                                    <img src="/assets/images/bookmark_icon.png" alt=""/>
                                    <img src="/assets/images/heart_icon.png" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page_number_box -->
            <div class="page_number_box">
                <img src="/assets/images/right_arrow.png" alt=""/>
                <div class="page_number">4</div>
                <div class="page_number">3</div>
                <div class="page_number">2</div>
                <div class="page_number active">1</div>
                <img src="/assets/images/left_arrow.png" alt=""/>
            </div>
        </div>
    </div>
</section>
