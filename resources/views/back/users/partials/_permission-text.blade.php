@foreach($user->getAllPermissions() as $permission)
    <button type="button" @class([
        "btn" ,
        'btn-danger'  => str_contains($permission->name->value,'user'),
        "btn-success" => str_contains($permission->name->value,'topic'),
        "btn-xs",
        ])> {{$permission->name->description}} </button>
@endforeach

