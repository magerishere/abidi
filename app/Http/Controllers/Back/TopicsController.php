<?php

namespace App\Http\Controllers\Back;

use App\Enums\TopicStatusEnums;
use App\Http\Requests\Back\TopicStoreRequest;
use App\Http\Requests\Back\TopicUpdateRequest;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicsController extends BackController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = $this->base_all_order_by_desc(Topic::class);
        return view('back.topics.index',compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicStoreRequest $request)
    {
        $request['status'] = TopicStatusEnums::ACCEPTED;
        $this->base_create(Topic::class,$request->all());
        return $this->base_redirect_back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        return view('back.topics.edit',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TopicUpdateRequest $request, Topic $topic)
    {
        $this->base_update($topic,$request->all());

        return $this->base_redirect_back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $this->base_destroy($topic);
        return $this->base_redirect_back();
    }

    public function updateStatus(Request $request,Topic $topic)
    {
        $this->base_update_status($topic,$request->get('status'));
        return $this->base_redirect_back();
    }
}
