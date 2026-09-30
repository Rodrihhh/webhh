<!doctype html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  </head>
  <body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
</html>
