<?php

use App\Http\Controllers\Back\TopicsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('back.dashboard');
});

Route::resource('topics',TopicsController::class);
Route::patch('topics/{topic}/updateStatus',[TopicsController::class,'updateStatus'])->name('topics.update.status');
