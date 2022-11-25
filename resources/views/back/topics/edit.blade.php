@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.edit'),__('back.topic')])}}">
       <x-slot name="header_slot">
           @include('back.topics.partials._acceptation-form',['topic' => $topic])
           @include('back.topics.partials._rejection-form',['topic' => $topic])
           @include('back.topics.partials._show-link',['topic' => $topic])
           @include('back.topics.partials._edit-link',['topic' => $topic])
           @include('back.topics.partials._destruction-form', ['topic' => $topic])
       </x-slot>
        <div class="form-group">
            <label for="status">
                {{__('back.status')}}:
            </label>
            @include('back.topics.partials._status-text',['topic' => $topic])
        </div>

        <x-back.form action="{{route('admin.topics.update',$topic->id)}}">
            @method('PATCH')
            <x-back.input-text id="title" name="title" label="{{__('back.title')}}" value="{{$topic->title}}"/>
            <x-back.textarea id="content" name="content" title="{{__('back.content')}}" value="{{$topic->content}}"/>
            <x-back.input-tag name="tag" value="{{$topic->tag->content}}"/>
        </x-back.form>
    </x-back.card>
@endsection

