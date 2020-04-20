@extends ('layout')

@section ('content')

<div class="container">
  <h1 class="news-article__title">{{ $id->title }}</h1>


  <div class="news-article__meta">

    <a href="#" class="news-article__meta-item">
      <span class="icon news-article__meta-icon-box">
        <svg class="news-article__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path
            d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
          <path d="M0 0h24v24H0z" fill="none" />
        </svg>
      </span>
      <span class="news-article__meta-text">Ploni Almoni</span>
    </a>

    <a href="#" class="news-article__meta-item">
      <svg class="news-article__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 18H4V8h16v13z" />
        <path d="M0 0h24v24H0z" fill="none" />
      </svg>
      <span class="news-article__meta-text">June 7 , 2019</span>
    </a>

    <div class="news-article__meta-item">
      <svg class="news-article__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
        <path d="M0 0h24v24H0z" fill="none" />
        <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z" />
      </svg>
      <span class="news-article__meta-text">10:39 am</span>
    </div>

    <a href="#" class="news-article__meta-item">
      <svg class="news-article__meta-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path
          d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" />
        <path d="M0 0h24v24H0z" fill="none" />
      </svg>
      <span class="news-article__meta-text">7 Comments</span>
    </a>
  </div>

  <article class="news-article__body-wrapper">
    {{ $id->body }}
    <div>
      <a href="#" class="news-article__link">Read More &raquo;</a>
    </div>
  </article>
</div>

@endsection
