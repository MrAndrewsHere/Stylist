<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title> @yield ('title')</title>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
@include('blocks.sidebar')
<div class="wrapper">
  @include('blocks.header')
  @yield('content')
</div>

@include('blocks.modal-auth')
@include('blocks.modal-registration')
@include('blocks.modal-success')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="/js/slick.js"></script>
<script src="/js/main.js"></script>
<script src="/js/dialog.js"></script>
<script src="/js/filter.js"></script>
<script src="/js/Custom.js"></script>
<script src="//ulogin.ru/js/ulogin.js"></script>
</body>
</html>
