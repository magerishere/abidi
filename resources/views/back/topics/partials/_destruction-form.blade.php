<x-back.form action="{{route('admin.topics.destroy',$topic->id)}}" is-flat>
    @method('DELETE')
    <button  @class([
        'btn btn-danger',
        'btn-xs' => @$xs
])  ><i class="fa fa-trash"></i> {{__('crud.destroy')}} </button>
</x-back.form>
