<x-back.form action="{{route('admin.topics.update.status',$topic->id)}}" is-flat>
    @method('PATCH')
    <input type="hidden" name="status" value="{{\App\Enums\TopicStatusEnums::ACCEPTED}}" />
    <button @class([
        'btn btn-success',
        'btn-xs' => @$xs
])  ><i class="fa fa-hand-grab-o"></i> {{__('crud.restore')}} </button>
</x-back.form>
