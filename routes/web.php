<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PostController::class, 'index']);

Route::resource('/posts', PostController::class);

Route::get('/view/{code}', [PostController::class, 'view'])->name('posts.view');
Route::get('/edit/{code}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/login', [PostController::class, 'login'])->name('posts.login');
Route::get('/add', [PostController::class, 'add'])->name('posts.add');