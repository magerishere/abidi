<html lang="fa">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0"
    />
    <title>فوروم عبیدی</title>
    @include('front.layouts.partials.styles')
</head>
<body>
<!-- header -->
@include('front.layouts.header')

<!-- Design by Harmony Agency -->

{{--Main--}}
<main>
    @yield('content')
</main>
<!-- ============ createTopicModal ============ -->
@include('front.layouts.partials._create-topic-modal')
<!-- ============ register-login-Modal ============ -->
@include('front.layouts.partials._register-login-modal')
<!-- footer -->
@include('front.layouts.footer')
<!-- Design by Harmony Agency -->
@include('front.layouts.partials.scripts')
</body>
</html>
