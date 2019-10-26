<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Feanation')}}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>

      <nav class="navbar text-white bg-dark py-4">
        <a class="navbar-brand">Feanation</a>
      </nav>

      <main class="container py-5">
        @yield('content')
      <main>

    </body>
</html>
