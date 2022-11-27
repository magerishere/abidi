<div class="sort_topic_item">
    <div class="show_sort_topic">
        <div>
            <h2 class="sort_topic_title">
                {{$topic->title}}
            </h2>
            <span class="sort_topic_date"
            >ارسال شده در
                            <span class="sort_topic_date"> {{$topic->readable_created_at}} </span>
                          </span>
        </div>

        <div @class([
        "topic_status",
        "pend" => $topic->status->value === \App\Enums\TopicStatusEnums::PENDING,
        "publish" => $topic->status->value === \App\Enums\TopicStatusEnums::ACCEPTED,
        "reject" => $topic->status->value === \App\Enums\TopicStatusEnums::REJECTED,
        ])>{{$topic->status->description}}</div>
    </div>
</div>
