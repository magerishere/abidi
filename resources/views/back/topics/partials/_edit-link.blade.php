<a href="{{route('admin.topics.edit',$topic->id)}}" @class([
        'btn btn-info',
        'btn-xs' => @$xs
])><i class="fa fa-pencil"></i> {{__('crud.edit')}} </a>
