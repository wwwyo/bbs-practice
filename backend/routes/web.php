<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostsController;

Route::get('/top', [PostsController::class, 'index'])->name('top');
Route::get('/', function () {
    return redirect('/top');
});

Route::resource('/posts', PostsController::class)->only(['create', 'store']);
