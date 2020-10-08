<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('posts');});

Route::get('/api/posts/all', 'ApiController@getAllPosts');

Route::get('/post/create', 'PostController@create') -> name('post.create');

Route::post('/post/store', 'PostController@store') -> name('post.store');
