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
      'title'    => 'required | min:2 | max:10',
      'topic'    => 'required | min:3 | max:10',
      'content'  => 'required | min:10 | max: 250',
      'views'    => 'required | gte:0'
    ]);
    $post = Post::create($data);

    return view('posts');
  }
}
