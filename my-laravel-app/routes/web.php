<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
Route::post('/posts_processing', [PostController::class, 'store'])->name('posts.store');

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About']);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('post',['title' => 'Single Post', 'post' => $post,'comments' => Comments::all()]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => Post::all(),
    ]);
});

Route::get('/contact', function () {
    return view('contact' , ['title'=> 'Contact']);
});


Route::get('/add_post', function () {
    return view('add_post' , ['title'=> 'Add Post','authors' => User::all()]);
});

use App\Http\Controllers\PostController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('items', PostController::class);
use App\Http\Controllers\CommentController;
Route::resource('/comments', CommentController::class);
