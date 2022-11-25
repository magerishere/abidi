<button type="button" @class([
        "btn" ,
        'btn-danger'  => $user->status->value == \App\Enums\UserStatusEnums::REJECTED,
        "btn-success" => $user->status->value == \App\Enums\UserStatusEnums::ACCEPTED,
        'btn-warning' => $user->status->value == \App\Enums\UserStatusEnums::PENDING,
        "btn-xs",
        ])> {{$user->status->description}} </button>
