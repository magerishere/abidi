@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.create'),__('back.topic')])}}">
        <x-back.form action="{{route('admin.topics.store')}}">
            <x-back.input-text id="title" name="title" label="{{__('back.title')}}" />
            <x-back.textarea id="content" name="content" title="{{__('back.content')}}"/>
            <div class="control-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">ورودی برچسب</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <input id="tags_1" type="text" class="tags form-control"
                           value="اجتماعی, تبلیغات, فروش"/>
                    <div id="suggestions-container"
                         style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                </div>
            </div>
        </x-back.form>
    </x-back.card>
@endsection

