<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'Feanation')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>

      @include('includes.navbar')

      <main class="container p-5">
        @yield('content')
      <main>

      @include('includes.footer')

      @include('includes.scripts')
      
    </body>
</html>
