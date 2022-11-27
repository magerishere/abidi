@extends('front.layouts.master')

@section('content')
    <!-- ============ dashboard ============ -->
    <section id="dashboard">
        <div class="container">
            <div class="content">
                <div class="row">
                    @include('front.dashboard.partials._sidebar', ['user' => $user])
                    @include('front.dashboard.partials._content' ,[
    'acceptedTopics' => $acceptedTopics,
    'pendingTopics' => $pendingTopics,
    'rejectedTopics' => $rejectedTopics,
])
                </div>
            </div>
        </div>
    </section>
@endsection
