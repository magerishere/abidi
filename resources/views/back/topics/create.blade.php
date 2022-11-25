@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.create'),__('back.topic')])}}">
        <x-back.form action="{{route('admin.topics.store')}}">
            <x-back.input-text id="title" name="title" label="{{__('back.title')}}" />
            <x-back.textarea id="content" name="content" title="{{__('back.content')}}"/>
            <x-back.input-tag name="tag"/>
        </x-back.form>
    </x-back.card>
@endsection

