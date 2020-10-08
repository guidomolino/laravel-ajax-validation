@extends('layouts.main-layout')
@section('content')

<a class="btn btn-success" href="{{route('post.create')}}">Create New</a>

<ul id="posts">

</ul>

@endsection
