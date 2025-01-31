<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('blog', function(){
//     $posts = [
//         ['title' => 'First post'],
//         ['title' => 'Second post'],
//         ['title' => 'Third post'],
//         ['title' => 'Fourth post'],
//     ];

//     return view('blog', ['posts' => $posts]);

// })->name('blog');
Route::get('blog', [PostController::class, 'index'])->name('posts.index');
Route::get('blog/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::view('/about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
