@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.edit'),__('back.user')])}}">
        <x-slot name="header_slot">
            @include('back.users.partials._acceptation-form',['user' => $user])
            @include('back.users.partials._rejection-form',['user' => $user])
            @include('back.users.partials._show-link',['user' => $user])
            @include('back.users.partials._edit-link',['user' => $user])
            @include('back.users.partials._destruction-form', ['user' => $user])
        </x-slot>

        <div class="form-group">
            <label for="status">
                {{__('back.status')}}:
            </label>
            @include('back.users.partials._status-text',['user' => $user])
        </div>

        <div class="form-group">
            <label for="status">
                {{__('back.permission')}}:
            </label>
            @include('back.users.partials._permission-text',['user' => $user])
        </div>

        <x-back.image src="{{$user->getFirstMediaUrl()}}"/>

        <x-back.form action="{{route('admin.users.update',$user->id)}}" hasFile>
            @method('PATCH')
            <x-back.input-text id="name" name="name" label="{{__('back.name')}}" value="{{$user->name}}"/>
            <x-back.input-text id="email" name="email" type="email" label="{{__('back.email')}}"
                               value="{{$user->email}}"/>
            <x-back.input-text id="mobile" name="mobile" label="{{__('back.mobile')}}" value="{{$user->mobile}}"/>
            <x-back.input-text id="image" name="image" type="file" label="{{__('back.image')}}"/>


        </x-back.form>
    </x-back.card>

    <x-back.card title="{{str_merge([__('crud.edit'),__('back.password')])}}">
        <x-back.form action="{{route('admin.users.update.password',$user->id)}}">
            @method('PATCH')
            <x-back.input-text id="password" name="password" type="password" label="{{__('back.password')}}"/>
            <x-back.input-text id="password_confirmation" type="password" name="password_confirmation"
                               label="{{__('back.password_confirmation')}}"/>
        </x-back.form>
    </x-back.card>


@endsection

