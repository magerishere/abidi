<button type="button" @class([
        "btn" ,
        'btn-danger'  => $topic->status->value == \App\Enums\TopicStatusEnums::REJECTED,
        "btn-success" => $topic->status->value == \App\Enums\TopicStatusEnums::ACCEPTED,
        'btn-warning' => $topic->status->value == \App\Enums\TopicStatusEnums::PENDING,
        "btn-xs",
        ])> {{$topic->status->description}} </button>
