@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.index'),__('back.topic')])}}">
        <x-back.table :heads="[
    __('back.id'),
    __('back.name'),
    __('back.email'),
    __('back.mobile'),
    __('back.role'),
    __('back.status'),
    __('back.created_at'),
    __('back.action'),
]">
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->mobile}}</td>
                    <td>
                        @foreach($user->roles as $role)
                            {{$role->name->description}}
                        @endforeach
                    </td>
                    <td>
                        @include('back.users.partials._status-text',['user' => $user])
                    </td>
                    <td>{{$user->created_at}}</td>
                    <td class="nowrap">
                        @include('back.users.partials._acceptation-form',['user' => $user,"xs" => true])
                        @include('back.users.partials._rejection-form',['user' => $user,"xs" => true])
                        @include('back.users.partials._show-link',['user' => $user,"xs" => true])
                        @include('back.users.partials._edit-link',['user' => $user,"xs" => true])
                        @include('back.users.partials._destruction-form', ['user' => $user,"xs" => true])
                    </td>
                </tr>

            @endforeach

        </x-back.table>
    </x-back.card>


@endsection
