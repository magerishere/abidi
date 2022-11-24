<?php

use App\Http\Controllers\Back\TopicsController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('back.dashboard');
});

Route::resource('topics',TopicsController::class)->except(['show']);
Route::prefix('topics')->as('topics.')->group(function() {

    Route::patch('/{topic}/updateStatus',[TopicsController::class,'updateStatus'])->name('update.status');
    Route::get('trash',[TopicsController::class,'trashIndex'])->name('trash.index');
    Route::patch('/{topic}/restore',[TopicsController::class,'trashRestore'])->name('trash.restore');

});

