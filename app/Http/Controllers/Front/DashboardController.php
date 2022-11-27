<?php

namespace App\Http\Controllers\Front;

use App\Enums\TopicStatusEnums;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends FrontController
{
    public function index()
    {
        $user = Auth::user();
        $topics = $this->base_all_own_order_by_desc(Topic::class);
        $acceptedTopics = $topics->where('status', TopicStatusEnums::ACCEPTED);
        $pendingTopics = $topics->where('status', TopicStatusEnums::PENDING);
        $rejectedTopics = $topics->where('status', TopicStatusEnums::REJECTED);

        return view('front.dashboard.dashboard', compact('user', 'topics', 'acceptedTopics', 'pendingTopics', 'rejectedTopics'));
    }
}
