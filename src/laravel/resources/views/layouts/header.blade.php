<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - ロンドン口コミサイト（仮）</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Select2日本語化 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/i18n/ja.js"></script>
    @yield('header')
  </head>
  <body>
    <!-- header -->
    <header>
      <a class="navbar-brand" href="{{ route('ln.top') }}">ロンドン口コミサイト</a>
      <p>イギリス生活で役立つ情報をみんなでシェアする掲示板</p>
      
    </header>
    <!-- main contents -->
    <main>
      @yield('content')
    </main>
    @include('layouts.footer')
  </body>
</html>
