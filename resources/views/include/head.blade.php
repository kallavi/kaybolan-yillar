<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="{{asset ('favicon.ico" type="image/x-icon')}}">
  <link rel="icon" href="{{asset ('favicon.ico" type="image/x-icon')}}">

  <link rel="apple-touch-icon" sizes="57x57" href="{{asset ('apple-icon-57x57.png')}}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{asset ('apple-icon-60x60.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset ('apple-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('apple-icon-76x76.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset ('apple-icon-114x114.png')}}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset ('apple-icon-120x120.png')}}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset ('apple-icon-144x144.png')}}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset ('apple-icon-152x152.png')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('apple-icon-180x180.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{asset ('android-icon-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset ('favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{asset ('favicon-96x96.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset ('favicon-16x16.png')}}">
  <link rel="manifest" href="{{asset ('manifest.json')}}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{asset ('ms-icon-144x144.png')}}">
  <meta name="theme-color" content="#ffffff">
  <title>Kaybolan Yıllar</title>

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 9999;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background: #474747;
    }

    .preloader .preloader-spin {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      position: relative;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }
  </style>
  <link rel="stylesheet" href="{{asset ('assets/plugin/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/plugin/slick/slick-theme.css')}}">


  @yield('style')
  {{-- <script type="module" src="{{ mix('public/assets/style.js') }}"></script> --}}
  @vite(['resources/css/app.scss'])
</head>