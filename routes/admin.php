<?php

use App\Enums\UserRoleEnums;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\TopicsController;
use Illuminate\Support\Facades\Route;




Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginAttempt'])->name('login.attempt');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
    Route::get('/', function () {
        return view('back.dashboard');
    })->name('dashboard');
    Route::resource('topics',TopicsController::class)->except(['show']);
    Route::prefix('topics')->as('topics.')->group(function() {
        Route::patch('/{topic}/updateStatus',[TopicsController::class,'updateStatus'])->name('update.status');
        Route::get('trash',[TopicsController::class,'trashIndex'])->name('trash.index');
        Route::patch('/{topic}/restore',[TopicsController::class,'trashRestore'])->name('trash.restore');
    });
});
