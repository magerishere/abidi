<x-back.form action="{{route('admin.users.update.status',$user->id)}}" is-flat>
    @method('PATCH')
    <input type="hidden" name="status" value="{{\App\Enums\UserStatusEnums::ACCEPTED}}"/>
    <button @class([
        'btn btn-success',
        'btn-xs' => @$xs
]) ><i class="fa fa-hand-grab-o"></i> {{__('back.accept')}} </button>
</x-back.form>
