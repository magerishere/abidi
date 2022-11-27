@extends('front.layouts.master')

@section('content')
    <section class="single_topic" id="single_question">
        <div class="container">
            <div class="content">
                @include('front.topics.partials._topic-box',['topic' => $topic])
                @include('front.topics.partials._topic-box-bottom', ['topic' => $topic])
            </div>

        </div>
    </section>

    @include('front.topics.partials._filter-box',['replies' => $topic->replies])

    @include('front.topics.partials._topic-replies' , ['replies' => $topic->replies])
@endsection
