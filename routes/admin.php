<?php

use App\Enums\UserRoleEnums;
use App\Http\Controllers\Back\AuthController;
use App\Http\Controllers\Back\DoctorsController;
use App\Http\Controllers\Back\TopicsController;
use App\Http\Controllers\Back\UsersController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function() {
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginAttempt'])->name('login.attempt');
});

Route::middleware('auth')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    /*
    |--------------------------------------------------------------------------
    | Dashboard Routes
    |--------------------------------------------------------------------------
    */
    Route::get('/', function () {
        return view('back.dashboard');
    })->name('dashboard');
    /*
    |--------------------------------------------------------------------------
    | Topics Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('topics', TopicsController::class)->except(['show']);
    Route::prefix('topics')->as('topics.')->group(function () {
        Route::patch('/{topic}/updateStatus', [TopicsController::class, 'updateStatus'])->name('update.status');
        Route::get('/trash', [TopicsController::class, 'trashIndex'])->name('trash.index');
        Route::patch('/{topic}/restore', [TopicsController::class, 'trashRestore'])->name('trash.restore');
    });
    /*
    |--------------------------------------------------------------------------
    | Users Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('users', UsersController::class)->except(['show']);
    Route::prefix('users')->as('users.')->group(function () {
        Route::patch('/{user}/updateStatus', [UsersController::class, 'updateStatus'])->name('update.status');
        Route::patch('/{user}/updatePassword', [UsersController::class, 'updatePassword'])->name('update.password');
        Route::patch('/{user}/updateRole', [UsersController::class, 'updateRole'])->name('update.role');
        Route::get('/trash', [UsersController::class, 'trashIndex'])->name('trash.index');
        Route::patch('/{topic}/restore', [UsersController::class, 'trashRestore'])->name('trash.restore');
    });
    /*
    |--------------------------------------------------------------------------
    | Doctor Routes
    |--------------------------------------------------------------------------
    */
    Route::resource('doctors', DoctorsController::class)->except(['show']);
    Route::prefix('doctors')->as('doctors.')->group(function () {
        Route::patch('/{user}/updateStatus', [DoctorsController::class, 'updateStatus'])->name('update.status');
        Route::patch('/{user}/updatePassword', [DoctorsController::class, 'updatePassword'])->name('update.password');
        Route::patch('/{user}/updateRole', [DoctorsController::class, 'updateRole'])->name('update.role');
        Route::get('/trash', [DoctorsController::class, 'trashIndex'])->name('trash.index');
        Route::patch('/{topic}/restore', [DoctorsController::class, 'trashRestore'])->name('trash.restore');
    });
});
