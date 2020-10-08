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
        <input type="text" class="@error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
        @error ('title')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="topic">topic:</label>
        <input type="text" class="@error('topic') is-invalid @enderror" name="topic" value="{{old('topic')}}">
        @error ('topic')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="content">content:</label><br>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="8" cols="80">{{old('content')}}</textarea>
        @error ('content')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group">
        <label for="views">views:</label>
        <input class="@error('views') is-invalid @enderror" type="number" name="views" value="{{old('views')}}">
        @error ('views')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror      </div>
      <button class="btn btn-primary" type="submit">Confirm</button>

    </form>

  </div>
</div>

@endsection
