@extends('layout')

@section('content')
<div class="container">
  <h1 class="text-2xl font-bold mb-4">Update News Article</h1>

<form action="/news/{{ $article->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input class="input" name="title" type="text" id="title" value="{{$article->title}}">
      </div>
    </div>

    <div class="field">
      <label class="label" title="excerpt">Excerpt</label>
      <div class="control">
        <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="body">Body</label>
      <div class="control">
        <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button class="button bg-primary hover:bg-primary-dark text-light">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection
