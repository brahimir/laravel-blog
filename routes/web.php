<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('posts/{post}', function ($slug) {
    $post = file_get_contents(__DIR__ . "/../resources/posts/${slug}.html");

    return view('post', [
        'post' => $post
    ]);
});
