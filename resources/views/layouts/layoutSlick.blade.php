<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> @yield ('title')</title>
  <link rel="stylesheet" href="/css/style.css"/>
  <link rel="stylesheet" href="/css/chat.css"/>

  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
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
@include('blocks.modal-dialog')
@include('blocks.sendNewMessage')
<form id="goto" action="{{ url('/postUlogin') }}" role="form" method="POST">
  {{ csrf_field() }}

  <input class="token" name="token" type="text"  hidden="true"/>
  <div class="start-change">
    <button  type="submit"></button>
  </div>
</form>

<script src="{{ asset('/js/scripts.js') }}" defer></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/js/Custom.js"></script>


@guest
  <script src="//ulogin.ru/js/ulogin.js"></script>
  <script>

      // $('.modal-dialog').addClass('modal-auth-show');
      function UloginRegister (token) {


          $.ajax({
              type: 'GET',
              url: '/getUlogin',
              data: {token:token},
              success(result) {
                  if (result == 'NeedCategory')
                  {

                      $('.token').attr('value',token);
                      $('.modal-success').addClass('modal-auth-show');


                  }
                  else
                  {
                      $('.token').attr('value',token);
                      $('#goto').submit();
                  }

              },
              error(result) {
                  alert(result);
              },
          });
      }
  </script>
@endguest


</body>
</html>
