<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('admin', [ShowAdminController::class, 'showvideos',])->middleware(['auth', 'verified'])->name('admin');


use App\Http\Controllers\LikeController;
use App\Http\Controllers\DislikeController;

Route::middleware('auth')->group(function () {
    Route::post('admin', [ShowAdminController::class, 'admincat'])->name('admin.cat');
    Route::delete('deletecat/{id}', [ShowAdminController::class, 'deletecat'])->name('deletecat');
    Route::put('editvideo', [ShowAdminController::class, 'editvideo'])->name('editvideo');
    Route::post('like', [LikeController::class, 'likeadd'])->name('like');
    Route::post('dislike', [DislikeController::class, 'dislikeadd'])->name('dislike');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



use App\Http\Controllers\CategotiesController;

Route::get("categories", [CategotiesController::class, 'index']);
Route::get("categories/{id}", [CategotiesController::class, 'show']);

use App\Http\Controllers\ChannelController;

Route::get("channel", [ChannelController::class, 'index']);
Route::get("channel/{id}", [ChannelController::class, 'show']);


use App\Http\Controllers\UsersController;

Route::get("users", [UsersController::class, 'index']);
Route::get("users/{id}", [UsersController::class, 'show']);

use App\Http\Controllers\AddVideoController;

Route::get('addvideo', [AddVideoController::class, 'showcategory'])->name('addvideo');

Route::post('pushvideos', [AddVideoController::class, 'addvideos'])->name('pushvideos');

use App\Http\Controllers\ShowVideosController;

Route::get('/', [ShowVideosController::class, 'show'])->name('main');

use App\Http\Controllers\VideoController;

Route::get("video", [VideoController::class, 'index']);
Route::get("video/{id}", [VideoController::class, 'show'])->name('videos');
Route::get('/', [ShowVideosController::class, 'show'])->name('main');

require __DIR__ . '/auth.php';
