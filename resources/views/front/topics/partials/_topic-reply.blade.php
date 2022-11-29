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
                            <p class="user_name">{{$reply->user->name}}</p>
                            <p class="user_status">
                                @foreach($reply->user->roles as $role)
                                    <span>{{$role->name->description}}</span>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="topic_date">
                        <p class="date">
                            ارسال شده در
                            <span> {{$reply->readable_created_at}}</span>
                        </p>
                    </div>
                </div>

                <div class="topic_caption">
                    {!! $topic->content !!}
                </div>
                <div class="topic_bottom">
                    <div class="right response_box">
                        <a
                            href="#"
                            class="callToAction"
                            data-bs-toggle="modal"
                            data-bs-target="#answerTopicModal
                          "
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
