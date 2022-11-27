<div class="topic_box">
    <div class="user_properties">
        <div class="user_img">
            <img src="/assets/images/user1.png" alt=""/>
        </div>
        <div class="user_info">
            <p class="user_name">{{$topic->user->name}}</p>
            <p class="user_status">
                @foreach($topic->user->roles as $role)
                    <span>{{$role->name->description}}</span>
                @endforeach
            </p>
        </div>
    </div>
    <div class="topic_top">
        <hr class="topic_title_border"/>
        <div class="right">
            <h2 class="topic_title">
                {{$topic->title }}
            </h2>
        </div>
        <div class="left">
            <p class="date">
                ارسال شده در
                <span> {{$topic->readable_created_at}}</span>
            </p>
        </div>
    </div>
    <p class="topic_caption">
        {!! $topic->content !!}
    </p>
    <div class="topic_bottom">
        <div class="right">
            @foreach($topicTags as $tag)
                <div class="topic_tags">{{$tag}}</div>
            @endforeach
        </div>
        <div class="left topic_options">
            <img src="/assets/images/share_icon.png" alt=""/>
            <img src="/assets/images/bookmark_icon.png" alt=""/>
            <img src="/assets/images/heart_icon.png" alt=""/>
        </div>
    </div>
</div>
