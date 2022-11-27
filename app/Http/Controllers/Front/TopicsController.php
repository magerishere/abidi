<?php

namespace App\Http\Controllers\Front;

use App\Enums\TopicStatusEnums;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\TopicStoreRequest;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TopicsController extends FrontController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicStoreRequest $request)
    {
        Log::alert($request->all());
        $request['status'] = TopicStatusEnums::PENDING;
        $topic = $this->base_create(Topic::class, $request->all());
        $this->base_update_or_create($topic, 'tag', ['content' => $request->get('tag')]);

        return $this->base_response_json([
            'session_message' => __('messages.success_create', ['title' => $topic->title])
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        $topicTags = [];
        if ($topic->tag) {
            $topicTags = explode(',', $topic->tag->content);
        }
        return view('front.topics.show', compact('topic', 'topicTags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Topic $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
    }
}
