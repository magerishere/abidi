<a href="{{route('admin.users.edit',$user->id)}}" @class([
        'btn btn-info',
        'btn-xs' => @$xs
])><i class="fa fa-pencil"></i> {{__('crud.edit')}} </a>
