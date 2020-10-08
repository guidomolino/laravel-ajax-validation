<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
  public function getAllPosts(){
    $posts = Post::all();

    return response() -> json($posts);
  }
}
