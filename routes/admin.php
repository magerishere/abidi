<?php

use App\Http\Controllers\Back\TopicsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('back.dashboard');
});

Route::resource('topics',TopicsController::class);
