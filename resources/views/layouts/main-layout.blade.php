<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>laravel-ajax-validation</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
  </head>
  <body>
    @include('partials.header')
    <main>
      @yield('content')
    </main>    
    @include('partials.footer')
  </body>
</html>
