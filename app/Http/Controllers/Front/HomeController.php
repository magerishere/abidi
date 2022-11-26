<?php

namespace App\Http\Controllers\Front;

use App\Enums\UserMetaEnums;
use App\Http\Controllers\Controller;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends FrontController
{
    public function index()
    {
        $topics = $this->base_all_order_by_desc(Topic::class);
        $doctors = getDoctorUsers();
        $doctors = $doctors->map(function ($doctor) {
            $doctor['meta'] = $this->base_get_meta_by_key($doctor, UserMetaEnums::USER_PROFILE);
            return $doctor;
        });
        return view('front.home.home', compact('topics', 'doctors'));
    }
}
