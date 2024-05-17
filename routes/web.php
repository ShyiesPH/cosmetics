<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LipstickCategoryController;
use App\Http\Controllers\LipstickController;
use App\Http\Controllers\PostController;
use App\Models\Lipstick;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/lipsticks', LipstickController::class);
Route::resource('/lipstick_categories', LipstickCategoryController::class);

Route::resource('/posts', PostController::class);
Route::resource('/comments', CommentController::class);
