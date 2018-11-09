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
@guest

  @else
  <div id="app">


    <div class="container-communication">
      <div class="chat">

        {{--<div class="panel-heading">Chats</div>--}}
        {{--<div class="right-sidebar">--}}
        {{--<button class="btn btn-primary btn-sm" id="btn-chat"  @click='changePeer("1")'>--}}
        {{--1--}}
        {{--</button>--}}
        {{--<button class="btn btn-primary btn-sm" id="btn-chat" @click='changePeer("2")'>--}}
        {{--2--}}
        {{--</button>--}}
        {{--<button class="btn btn-primary btn-sm" id="btn-chat"  @click='changePeer("3")'>--}}
        {{--3--}}
        {{--</button>--}}
        {{--</div>--}}
        {{--<div id = "panel_body_id" class="panel-body">--}}
        {{--<ul class="chat-v">--}}
        {{--<li class="left clearfix">--}}
        {{--<div class="chat-body clearfix">--}}
        {{--<div class="header">--}}
        {{--<strong class="primary-font">--}}
        {{--Имя--}}
        {{--</strong>--}}
        {{--</div>--}}
        {{--<p>--}}
        {{--Сообщение--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="left clearfix">--}}
        {{--<div class="chat-body clearfix">--}}
        {{--<div class="header">--}}
        {{--<strong class="primary-font">--}}
        {{--Имя--}}
        {{--</strong>--}}
        {{--</div>--}}
        {{--<p>--}}
        {{--Сообщение--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="left clearfix">--}}
        {{--<div class="chat-body clearfix">--}}
        {{--<div class="header">--}}
        {{--<strong class="primary-font">--}}
        {{--Имя--}}
        {{--</strong>--}}
        {{--</div>--}}
        {{--<p>--}}
        {{--Сообщение--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="left clearfix">--}}
        {{--<div class="chat-body clearfix">--}}
        {{--<div class="header">--}}
        {{--<strong class="primary-font">--}}
        {{--Имя--}}
        {{--</strong>--}}
        {{--</div>--}}
        {{--<p>--}}
        {{--Сообщение--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--<li class="left clearfix">--}}
        {{--<div class="chat-body clearfix">--}}
        {{--<div class="header">--}}
        {{--<strong class="primary-font">--}}
        {{--Имя--}}
        {{--</strong>--}}
        {{--</div>--}}
        {{--<p>--}}
        {{--Сообщение--}}
        {{--</p>--}}
        {{--</div>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--<div class="panel-footer"  >--}}
        {{--<div class="input-group">--}}
        {{--<input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">--}}

        {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">--}}
        {{--Send--}}
        {{--</button>--}}
        {{--</span>--}}
        {{--<span class="input-group-btn">--}}
        {{--<button class="btn btn-primary btn-sm" >--}}
        {{--Send--}}
        {{--</button>--}}
        {{--</span>--}}
        {{--</div>--}}
        {{--</div>--}}


        <div class="sc-launcher" onclick="OpenChat()" >
          <div class="sc-new-messsages-count" >
            3
          </div>

          <img class="sc-closed-icon" src="/assets/chat.png" />
        </div>

        <div class="sc-chat-window closed" >
          <div class="sc-header">

            <div class="sc-header--title">
              @foreach(\App\User::all() as $user)

                <img id="btn-chat"  @click='changePeer("{{$user->id}}")' title="{{$user->name.' '.$user->second_name}}" class="sc-header--close-button-2" src="{{$user->avatar}}"  alt="pic"  />

              @endforeach

            </div>
            <div class="sc-header--close-button" onclick="CloseChat()" >
              <img src="/assets/close-icon.png" alt="" />
            </div>
          </div>


          {{--<ul class="sc-message-list" >--}}
          {{--<Message v-for="(message, idx) in messages" :message="message" :chatImageUrl="chatImageUrl(message.author)" :authorName="authorName(message.author)" :key="idx" :colors="colors" />--}}
          {{--<Message v-show="showTypingIndicator !== ''" :message="{author: showTypingIndicator, type: 'typing'}" :chatImageUrl="chatImageUrl(showTypingIndicator)" :colors="colors" />--}}

          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix">--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font">--}}
          {{--Имя--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 3%">--}}
          {{--Сообщение--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}
          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix">--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font">--}}
          {{--Имя--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 2%">--}}
          {{--Сообщение--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}
          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix">--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font">--}}
          {{--Имя--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 2%">--}}
          {{--Сообщение--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}
          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix" >--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font" style="  word-break: break-all;">--}}
          {{--Андрей Долженко Андрей Долженко Андрей Долженко Андрей Долженко--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 2%" >--}}
          {{--Привет это я привет это я  Привет это я привет это я Привет это я привет это я Привет это я привет это я  Привет это я привет это я--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}
          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix">--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font">--}}
          {{--Имя--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 2%">--}}
          {{--Сообщение--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}
          {{--<li class="left clearfix">--}}
          {{--<div class="chat-body clearfix">--}}
          {{--<div class="header">--}}
          {{--<strong class="primary-font">--}}
          {{--Имя--}}
          {{--</strong>--}}
          {{--</div>--}}
          {{--<p style="padding-left: 2%">--}}
          {{--Сообщение--}}
          {{--</p>--}}
          {{--</div>--}}
          {{--</li>--}}

          {{--</ul>--}}

          <chat-messages :messages="messages"  :user="{{ Auth::user() }}"></chat-messages>
          <div class="panel-footer">
            <chat-form
              v-on:messagesent="addMessage"
              v-on:sendinguser="currentUser"
              :user="{{ Auth::user() }}"


            ></chat-form>
          </div>
        </div>





      </div>
    </div>

  </div>
@endguest
@include('blocks.modal-auth')
@include('blocks.modal-registration')
@include('blocks.modal-success')
@include('blocks.modal-dialog')
<form id="goto" action="{{ url('/postUlogin') }}" role="form" method="POST">
  {{ csrf_field() }}

  <input class="token" name="token" type="text"  hidden="true"/>
  <div class="start-change">
    <button  type="submit"></button>
  </div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/js/scripts.js') }}" defer></script>
<script src="{{ asset('/js/app.js') }}" defer></script>
<script src="/js/Custom.js"></script>
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

</body>
</html>
