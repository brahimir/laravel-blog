<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['posts' => Post::all()]);
});

Route::get('posts/{post}', function ($slug) {
    $post = Post::find($slug);
    return view('post', ['post' => $post]);
})->where('post', '[A-Za-z0-9_\-]+');
