@extends ('layout')

@section ('content')

<div class="news-articles__list-wrapper">
  {{-- First Three --}}
<div class="news-articles--main">

  <a href="#" class="news-articles__heading">Most Popular</a>
  @foreach ($articles as $article)
  <a href="{{ $article->path() }}" class="news-articles__item--main">
    <h4 class="news-articles__title">{{ $article->title }}</h4>
    <div class="news-articles__excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
</div>

@endsection
