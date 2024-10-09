<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => collect([
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem laudantium dolorem atque iste iure ab adipisci dicta veniam! Commodi excepturi suscipit odio quibusdam sint fugit facilis in nemo dolores!'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'author' => 'Sandhika Galih',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad autem laudantium dolorem atque iste iure ab adipisci dicta veniam! Commodi excepturi suscipit odio quibusdam sint fugit facilis in nemo dolores!'
            ],
        ])->map(function ($post) {
            return (object) $post;
        }),
    ]);
});

// Route::get('/posts/{id}', function ($id) {
//     $post = Post::find($id);
//     return view('post',['title' => 'Single Post', 'post' => $post]);

// });
Route::get('/posts/{post}', function (Post $post) {
    return view('post',['title' => 'Single Post', 'post' => $post]);
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

