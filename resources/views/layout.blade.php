@include('partials.head')

<body>
  @include('partials.body.if-ie')
  @include('partials.header')


  <div class="content">
    <main class="main">@yield('content')</main>
    @include('partials.sidebar')
  </div>

  @include('partials.footer')

  <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
