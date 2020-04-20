<div class="news-articles">
  <a href="#" class="news-articles-heading">Most Popular</a>
  @foreach ($mostPopular as $article)
  <a href="{{ $article->id }}" class="news-articles__item">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
<div class="news-articles">
  <a href="#" class="news-articles-heading">Latest News</a>
  @foreach ($latest as $article)
  <a href="{{ $article->id }}" class="news-articles__item">
    <h4 class="news-articles-title">{{ $article->title }}</h4>
    <div class="news-articles-excerpt">{{ $article->excerpt }}</div>
  </a>
  @endforeach
</div>
