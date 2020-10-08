@extends('layouts.main-layout')
@section('content')

<ul>
  @foreach ($posts as $post)
    <li>{{ $post -> title }}; {{ $post -> views }} views</li>
  @endforeach
</ul>

@endsection
