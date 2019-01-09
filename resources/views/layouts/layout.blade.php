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
  {{--<div id="app">--}}

  <div id="just">
    <div class="container-communication">
      <div class="chat">


        <div class="sc-launcher" onclick="OpenChat()" >
          <div class="sc-new-messsages-count" >
            3
          </div>

          <img class="sc-closed-icon" src="/assets/chat.png" />
        </div>

        <div class="sc-chat-window closed" >
          <div class="sc-header">

            <div class="sc-header--title">
              @foreach(\Illuminate\Support\Facades\Auth::user()->all() as $user)

                <img id="btn-chat"  @click='changePeer("{{$user->id}}")' title="{{$user->name.' '.$user->second_name}}" class="sc-header--close-button-2" src="{{$user->avatar}}"  alt="pic"  />

              @endforeach

            </div>
            <div class="sc-header--close-button" onclick="CloseChat()" >
              <img src="/assets/close-icon.png" alt="" />
            </div>
          </div>

          <ul class="sc-message-list" id = "panel_body_id">
            <li class="left clearfix">
              <div class="chat-body clearfix">
                <div class="header">
                  <strong class="primary-font">
                    Сообщение
                  </strong>
                </div>
                <p style="  word-wrap: break-word;">
                  сообщение
                </p>
              </div>
            </li>
          </ul>
          <div class="panel-footer">
            <div class="input-group">

              <div class="sc-user-input active" >
            <textarea
                    tabIndex="0"
                    placeholder="Сообщение..."
                    class="sc-user-input--text"
                    name="message"
            ></textarea>


                <div class="sc-user-input--buttons">

                  <div class="sc-user-input--button">
                    <button
                            id="btn-chat"
                            class="sc-user-input--send-icon-wrapper"
                            title="Отправить"
                    >
                      <svg
                              version='1.1'
                              class="sc-user-input--send-icon"
                              xmlns='http://www.w3.org/2000/svg'
                              x='0px'
                              y='0px'
                              width='37.393px'
                              height='37.393px'
                              viewBox='0 0 37.393 37.393'
                              enableBackground='new 0 0 37.393 37.393'>
                        <g id='Layer_2'>
                          <path :style="" d='M36.511,17.594L2.371,2.932c-0.374-0.161-0.81-0.079-1.1,0.21C0.982,3.43,0.896,3.865,1.055,4.241l5.613,13.263
          L2.082,32.295c-0.115,0.372-0.004,0.777,0.285,1.038c0.188,0.169,0.427,0.258,0.67,0.258c0.132,0,0.266-0.026,0.392-0.08
          l33.079-14.078c0.368-0.157,0.607-0.519,0.608-0.919S36.879,17.752,36.511,17.594z M4.632,30.825L8.469,18.45h8.061
          c0.552,0,1-0.448,1-1s-0.448-1-1-1H8.395L3.866,5.751l29.706,12.757L4.632,30.825z' />
                        </g>
                      </svg>
                    </button>
                  </div>

                </div>
              </div>
            </div>                    </div>
        </div>





      </div>
    </div>

  </div>



  {{--</div>--}}
@endguest
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
<style>
  
  </style>
</body>
</html>
