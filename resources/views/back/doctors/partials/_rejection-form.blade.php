<x-back.form action="{{route('admin.doctors.update.status',$user->id)}}" is-flat>
    @method('PATCH')
    <input type="hidden" name="status" value="{{\App\Enums\UserStatusEnums::REJECTED}}"/>
    <button @class([
        'btn btn-danger',
        'btn-xs' => @$xs
]) ><i class="fa fa-hand-grab-o"></i> {{__('back.reject')}} </button>
</x-back.form>
