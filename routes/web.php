<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Route::get('/', function () {
//     return view('welcome');
// });

// for displaying the posts
Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// for create a new posts
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// for displaying a create form
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// for displaying an edit form
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');

// for displaying an edit form
Route::put('/posts/edit/{post}', [PostController::class, 'update'])->name('posts.update');

// for deleting post
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

// for displaying single post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

