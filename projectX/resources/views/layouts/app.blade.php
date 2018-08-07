<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>{{config('app.name','e-Zakat')}}</title>

      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
          @include('inc.messages')
          @yield('content')
        </div>
        @include('inc.footer')
    </body>
</html>