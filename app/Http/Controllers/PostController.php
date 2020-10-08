<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function create(){

    return view('post-create');
  }

  public function store(Request $request){

    $data = $request -> validate([
      'title'    => 'required',
      'topic'    => 'required',
      'content'  => 'required',
      'views'    => 'required'
    ]);
    $post = Post::create($data);

    return view('posts');
  }
}
