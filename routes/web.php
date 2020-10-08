<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('posts');});

Route::get('/', 'PostController@index')->name('posts');
