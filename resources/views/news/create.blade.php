@extends('layout')

@section('content')
<div class="container">
  <h1 class="text-2xl font-bold mb-4">Create a News Article</h1>

  <form action="/news" method="POST">
    @csrf
    <div class="field">
      <label class="label" for="title">Title</label>
      <div class="control">
        <input
          class="input @error('title') border-2 border-solid border-error @enderror"
          name="title"
          type="text"
          id="title"
          value={{ old('title') }}
          >

        @error('title')
          <p class="help text-error">{{ $errors->first('title')}}</p>
        @enderror
      </div>
    </div>

    <div class="field">
      <label class="label" title="excerpt">Excerpt</label>
      <div class="control">
        <textarea
          class="textarea"
          name="excerpt"
          id="excerpt"
          >{{ old('excerpt') }}</textarea>
      </div>
    </div>

    <div class="field">
      <label class="label" for="body">Body</label>
      <div class="control">
        <textarea
          class="textarea"
          name="body"
          id="body"
          >{{ old('body') }}</textarea>
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
