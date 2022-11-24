@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.index'),__('back.topic')])}}">
        <x-back.table :heads="[
    __('back.id'),
    __('back.title'),
    __('back.status'),
    __('back.created_at'),
    __('back.action'),
]">
            @foreach($topics as $topic)
                <tr>
                    <td>{{$topic->id}}</td>
                    <td>{{$topic->title}}</td>
                    <td>
                        @include('back.topics.partials._status-text',['topic' => $topic])
                    </td>

                    <td>{{$topic->created_at}}</td>
                    <td class="nowrap">
                        @include('back.topics.partials._restoration-form', ['topic' => $topic,'xs' => true])

                    </td>
                </tr>

            @endforeach

        </x-back.table>
    </x-back.card>


@endsection
