<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index')->name('posts');

Route::get('/api/posts/all', 'ApiController@getAllPosts');
