<x-back.form action="{{route('admin.doctors.destroy',$user->id)}}" is-flat>
    @method('DELETE')
    <button @class([
        'btn btn-danger',
        'btn-xs' => @$xs
]) ><i class="fa fa-trash"></i> {{__('crud.destroy')}} </button>
</x-back.form>
