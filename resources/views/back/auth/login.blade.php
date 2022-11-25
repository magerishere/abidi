@extends('back.auth.layouts.master')

@section('content')
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                @include('back.layouts.partials._messages')
                <x-back.form action="{{route('admin.login.attempt')}}" isFlat>
                    <h1>فرم ورود</h1>
                    <x-back.input-text id="email" name="email" type="email" label="{{__('back.email')}}" />
                    <x-back.input-text id="password" name="password" type="password" label="{{__('back.password')}}" />

                    <div>
                        <button class="btn btn-default submit" >ورود</button>
                        <a class="reset_pass" href="#reset">رمز ورود را از دست دادید؟</a>
                    </div>

                    <div class="clearfix"></div>
                </x-back.form>
            </section>
        </div>
    </div>
@endsection
