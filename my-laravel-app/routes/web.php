<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Comments;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home Page',
        'posts' => Post::all(),
    ]);
});

Route::get('/add_user', function () {
    return view('add_user',['title' => 'Add User']);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('post',['title' => 'Single Post', 'post' => $post,'comments' => Comments::all()]);
});

Route::get('/posts', function (Request $request) {
    $search = $request->input('search');

    if ($search) {
        $posts = Post::where('title', 'like', "%{$search}%")->paginate(10);
    } else {
        $posts = Post::paginate(10);
    }

    return view('posts', [
        'title' => 'Blog Page',
        'posts' => $posts,
    ]);
});

Route::get('/contact', function () {
    return view('contact' , ['title'=> 'Contact']);
});


Route::get('/add_post', function () {
    return view('add_post' , ['title'=> 'Add Post','authors' => User::all()]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home Page',
        'posts' => Post::all(),
    ]);
});
Route::resource('items', PostController::class);

Route::resource('comments', CommentController::class);

Route::resource('bloggers', UserController::class);

Auth::routes();


