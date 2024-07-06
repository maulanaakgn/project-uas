<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', PostController::class);

Route::get('/view', [PostController::class, 'view'])->name('posts.view');
Route::get('/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/login', [PostController::class, 'login'])->name('posts.login');
