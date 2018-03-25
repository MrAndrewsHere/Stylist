<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8"/>
  <title> @yield ('title')</title>
  <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
  <main class="main">
    @include('blocks.sidebar')
    <div class="home">
      @include('blocks.header')
      @yield('content')
    </div>
  </main>

  @include('blocks.modal-auth')
  @include('blocks.modal-registration')
  @include('blocks.modal-success')
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/main.js"></script>
  <script src="js/dialog.js"></script>
</body>
</html>
