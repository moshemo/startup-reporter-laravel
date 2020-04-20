{{-- First Three --}}
<div class="news-articles news-articles--main">

  <a href="#" class="news-articles-heading">Most Popular</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Latest News</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Featured Stories</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>


{{-- Second Three --}}
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 1</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 2</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 3</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>

{{-- Third Three --}}
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 4</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 5</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 6</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>

{{-- Fourth Three --}}
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 7</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 8</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles news-articles--main">
  <a href="#" class="news-articles-heading">Industry 9</a>
  @foreach ($article as $article)
  <a href="{{ $article->path() }}" class="news-articles__item news-articles__item--main">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
