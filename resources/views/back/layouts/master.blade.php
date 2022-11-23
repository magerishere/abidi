<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="fontiran.com:license" content="Y68A9">
    <link rel="icon" href="../build/images/favicon.ico" type="image/ico"/>
    <title>Gentelella Alela! | قالب مدیریت رایگان </title>

{{--    Styles--}}
    @include('back.layouts.partials.styles')
</head>
<!-- /header content -->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
{{--        Sidebar--}}
    @include('back.layouts.partials._sidebar')

{{--    Top navigation --}}
    @include('back.layouts.partials._top-navigation')

{{--        Content --}}
        <div class="right_col" role="main">
          @yield('content')
        </div>

{{--    Footer--}}
        @include('back.layouts.footer')
    </div>
</div>
{{--Lock screen--}}
@include('back.layouts.partials._lock-screen')

{{--Scripts--}}
@include('back.layouts.partials.scripts')
</body>
</html>
