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
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::view('/about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
