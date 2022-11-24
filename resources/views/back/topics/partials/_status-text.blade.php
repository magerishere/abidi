<button type="button" @class([
        "btn" ,
        'btn-danger'  => $topic->status->value == 0,
        "btn-success" => $topic->status->value == 1,
        'btn-warning' => $topic->status->value == 2,
        "btn-xs",
        ])> {{$topic->status->description}} </button>
