<!DOCTYPE html>
<html lang="ru"></html>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Главная</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    @yield('content')
</head>
<body>
<div class="main">
    <aside class="sidebar">
        <div class="container-sidebar"><a class="logo logo--main" href="{{url('/')}}">Стилисты</a>
            <nav class="sidebar__menu">
                <ul class="sidebar__menu-list">
                    <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="{{url('/services')}}">Наши
                            услуги</a></li>
                    <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="{{url('/stylists')}}">Наши
                            стилисты</a></li>
                    <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="{{url('/answers')}}">Стилисты
                            отвечают</a></li>
                    <li class="sidebar__menu-item"><a class="sidebar__menu-link"
                                                      href="{{url('/contacts')}}">Контакты</a></li>
                </ul>
            </nav>
            @if (Auth::guest())
                <ul class="social-icons-list">
                    <li class="social-icon-item"><a class="social-link" href="#">
                            <svg class="social-icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
                            </svg>
                        </a></li>
                    <li class="social-icon-item"><a class="social-link" href="#">
                            <svg class="social-icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="img/spritesvg.svg#facebook"></use>
                            </svg>
                        </a></li>
                    <li class="social-icon-item"><a class="social-link" href="#">
                            <svg class="social-icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                     xlink:href="img/spritesvg.svg#instagram"></use>
                            </svg>
                        </a></li>
                </ul>
                <div class="enter-panel">
                    <button class="btn btn--auth enter-panel__btn">Вход</button>
                    <button class="btn btn--registration enter-panel__btn">Регистрация</button>
                </div>
            @endif
        </div>
    </aside>
    <div class="home">
        <header class="header-home__margin">
            <div class="container-home">
                <div class="header-home"><a class="phone-number header__link" href="tel:+7(843)2922222">+7 (843)
                        292-22-22</a>


                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif



                    @if (Auth::guest())
                        <div class="enter-panel-client">
                            <a>
                                <button class="btn btn--auth enter-panel__btn">Вход</button>
                            </a>
                            <a>
                                <button class="btn btn--registration enter-panel__btn">Регистрация</button>
                            </a>
                        </div>
                    @else
                        <div class="enter-panel-client"><a href="#">Мое портфолио</a><a href="#">Мои заказы</a><a
                                    href="#">Мои ответы</a><a class="nav-profile" href="#">
                                <div class="nav-profile__img"><img class="nav-profile__img" src="img/user-pic.jpg"
                                                                   alt="клиентка" height="40px" width="40px"/></div>
                                <div class="nav-profile__arrow"></div>
                            </a>
                            <div class="nav-profile__menu">
                                <a class="nav-profile__menu-link">{{Auth::user()->name}}</a>
                                <a class="nav-profile__menu-link" href="{{url('/home')}}">Личный кабинет</a>
                                <a class="nav-profile__menu-link" href="{{url('/settings')}}">Редактировать</a>
                                <a class="nav-profile__menu-link" href="{{url('/password/')}}">Восстановить пароль</a>
                                <a class="nav-profile__menu-link" href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">Выход </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </header>


    </div>
</div>
</body>
<div class="modal-auth">
    <div class="modal-content">
        <button class="btn btn--close-auth" arial-label="Закрыть">&times;</button>
        <h3 class="modal__title">Вход</h3>
        <p class="modal__text">Войти через соцсети</p>
        <ul class="social-icons-list modal__social">
            <li class="social-icon-item"><a class="social-link" href="#">
                    <svg class="social-icon vk">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
                    </svg>
                </a></li>
            <li class="social-icon-item"><a class="social-link" href="#">
                    <svg class="social-icon fb">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#facebook"></use>
                    </svg>
                </a></li>
        </ul>
        <p class="modal__text">или</p>
        <form class="form-auth" action="{{ url('/login') }}" role="form" method="POST">
            {{ csrf_field() }}
            <label>Электронная почта
                <input id="email" class="form__input input-email" name="email" type="email" value="{{ old('email') }}"
                       required="required"/>

            </label>
            <label>Пароль
                <input id="password" name="password" class="form__input input-password" type="password"
                       required="required"/>

            </label>
            <div class="start-change">
                <input class="btn btn--action" type="submit" value="Войти"/>
            </div>
        </form>
    </div>
</div>
<div class="modal-registration">
    <div class="modal-content modal-content--registration">
        <button class="btn btn--close-registration" arial-label="Закрыть">&times;</button>
        <h3 class="modal__title">Регистрация</h3>
        <p class="modal__text">Войти через соцсети</p>
        <ul class="social-icons-list modal__social">
            <li class="social-icon-item"><a class="social-link" href="#">
                    <svg class="social-icon vk">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
                    </svg>
                </a></li>
            <li class="social-icon-item"><a class="social-link" href="#">
                    <svg class="social-icon fb">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#facebook"></use>
                    </svg>
                </a></li>
        </ul>
        <p class="modal__text">или</p>

        <form role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <label>Имя

                <input class="form__input input-name" value="{{ old('name') }}" id="name" name="name" type="text"
                       required="required"/>

            </label>


            {{--<div class="col-md-6">--}}
                {{--<input id="role" type="text" class="form-control" name="role"  required>--}}


            {{--</div>--}}

            <label>Электронная почта
                <input class="form__input" value="{{ old('email') }}" id="email" name="email" type="email"
                       required="required"/>
            </label>
            <label>Пароль
                <input class="form__input" id="password" name="password" type="password" required="required"/>
            </label>
            <label>Подтверждение пароля
                <input id="password-confirm" class="form__input" name="password_confirmation" type="password"
                       required="required"/>
            </label>
            <label>Зарегестрировать как стилиста
                <input type="checkbox"/>
            </label>
            <div class="start-change">
                <input class="btn btn--action" type="submit" value="Регистрация"/>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
<script src="js/dialog.js"></script>