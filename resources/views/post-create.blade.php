@extends('layouts.main-layout')
@section('content')

<div class="card">
  <div class="card-header">
    <h1>Create:</h1>
  </div>
  <div class="card-body">
    <form action="{{route('post.store')}}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="title">title:</label>
        <input type="text" name="title" value="">
      </div>
      <div class="form-group">
        <label for="topic">topic:</label>
        <input type="text" name="topic" value="">
      </div>
      <div class="form-group">
        <label for="content">content:</label><br>
        <textarea class="form-control" name="content" rows="8" cols="80"></textarea>
      </div>
      <div class="form-group">
        <label for="views">views:</label>
        <input type="number" name="views" value="">
      </div>
      <button class="btn btn-primary" type="submit">Confirm</button>

    </form>

  </div>
</div>

@endsection
