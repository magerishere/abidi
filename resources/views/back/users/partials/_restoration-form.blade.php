<x-back.form action="{{route('admin.users.trash.restore',$user->id)}}" is-flat>
    @method('PATCH')
    <button @class([
        'btn btn-info',
        'btn-xs' => @$xs
]) ><i class="fa fa-hand-grab-o"></i> {{__('crud.restore')}} </button>
</x-back.form>
