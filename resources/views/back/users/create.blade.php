@extends('back.layouts.master')

@section('content')
    <x-back.card title="{{str_merge([__('crud.create'),__('back.user')])}}">
        <x-back.form action="{{route('admin.users.store')}}" hasFile>
            <x-back.input-text id="name" name="name" label="{{__('back.name')}}"/>
            <x-back.input-text id="email" name="email" type="email" label="{{__('back.email')}}"/>
            <x-back.input-text id="mobile" name="mobile" label="{{__('back.mobile')}}"/>
            <x-back.input-text id="password" name="password" type="password" label="{{__('back.password')}}"/>
            <x-back.input-text id="password_confirmation" type="password" name="password_confirmation"
                               label="{{__('back.password_confirmation')}}"/>
            <x-back.input-text id="image" name="image" type="file" label="{{__('back.image')}}"/>


        </x-back.form>
    </x-back.card>
@endsection

