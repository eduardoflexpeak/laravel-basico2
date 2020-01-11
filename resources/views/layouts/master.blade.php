<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="/css/app.css">

    <title>@yield('titulo')</title>
  </head>
  <body>
      <div class="container">
            @include('flash::message')
            @yield('conteudo')
      </div>

    <script src="/js/app.js"></script>
  </body>
</html>
