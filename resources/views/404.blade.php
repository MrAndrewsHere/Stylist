
<!-- stylists-->
<!-- services-->
<!-- lk-stylist-->
<!-- lk-stylist-->
<!--lk-client--><!DOCTYPE html>
<html lang="ru"></html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Страница не найдена</title>
</head>
<body>
  <div class="main">
    <aside class="sidebar">
      <div class="container-sidebar"><a class="logo" href="/"><img src="../img/logo.png" alt=""/></a>
        <nav class="sidebar__menu">
          <ul class="sidebar__menu-list">
            <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/services">Наши услуги</a></li>
            <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/stylists">Наши стилисты</a></li>
            <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/answers">Стилисты отвечают</a></li>
            <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/contacts">Контакты</a></li>
          </ul>
        </nav>@if (Auth::guest())
        <ul class="social-icons-list">
          <li class="social-icon-item"><a class="social-link" href="#" arial-label="Ссылка на вконтакте">
              <svg class="social-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
              </svg></a></li>
          <li class="social-icon-item"><a class="social-link" href="#" arial-label="Ссылка на фейсбук">
              <svg class="social-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#facebook"></use>
              </svg></a></li>
          <li class="social-icon-item"><a class="social-link" href="#" arial-label="Ссылка на инстаграм">
              <svg class="social-icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#instagram"></use>
              </svg></a></li>
        </ul>
        <div class="enter-panel">
          <button class="btn btn--auth enter-panel__btn">Вход</button>
          <button class="btn btn--registration enter-panel__btn">Регистрация</button>
        </div>@endif
      </div>
    </aside>
    <div class="home">
      <header class="header-home__margin">
        <div class="container-home">
          <div class="header-home"><a class="phone-number header__link" href="tel:+7(843)2922222">+7 (843) 292-22-22</a>
            <!-- для незарегестрированного пользователя
            .enter-panel-guest
             button.btn.btn--auth Вход
             span  |
             button.btn.btn--registration Регистрация
            
            -->
            <!-- для стилиста-->@if (Auth::guest())
            <div class="enter-panel-guest">
              <button class="btn btn--auth">Вход</button><span> |</span>
              <button class="btn btn--registration">Регистрация</button>
            </div>@else
            <div class="enter-panel-stylist"><a class="nav-link" href="/portfolio">Мое портфолио</a><a class="nav-link" href="/my_orders">Мои заказы</a><a class="nav-link" href="#">Мои ответы</a><a class="nav-link nav-profile" href="#">
                <div class="nav-profile__img"><img class="nav-profile__img" src="img/user-pic.png" alt="клиентка"/></div>
                <div class="nav-profile__arrow"></div></a>
              <div class="nav-profile__menu"><a class="nav-profile__menu-link nav-link">{{Auth::user()->name}}</a><a class="nav-profile__menu-link nav-link" href="/lk_stylist">Личный кабинет (с)</a><a class="nav-profile__menu-link nav-link" href="/lk_client">Личный кабинет (к)</a><a class="nav-profile__menu-link nav-link" href="/my_style">Мой стиль (к)</a><a class="nav-profile__menu-link nav-link" href="/settings">Настройки</a><a class="nav-profile__menu-link nav-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </div>@endif
            <!-- для клиента-->
            <!-- .enter-panel-client-->
            <!--   a(href="#") Мой стиль-->
            <!--   a(href="#") Мои заказы-->
            <!--   a(href="#") Мои вопросы-->
            <!--   a(href="#").nav-profile-->
            <!--     .nav-profile__img-->
            <!--       img(src="img/user-pic.jpg", alt="клиентка", height="40px", width="40px").nav-profile__img-->
            <!--     .nav-profile__arrow-->
            <!--   .nav-profile__menu-->
            <!--     a.nav-profile__menu-link Кос Крис-->
            <!--     a(href="lk-stylist.html").nav-profile__menu-link Личный кабинет-->
            <!--     a(href="settings.html").nav-profile__menu-link Настройки-->
            <!--     a(href="#").nav-profile__menu-link Выход-->
          </div>
        </div>
      </header>
      <section class="section section--error section__home"><img class="error-img" src="../img/404.png" alt=""/></section>
    </div>
  </div>
</body>
<div class="modal-auth">
  <div class="modal-content">
    <button class="btn btn--close-auth" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Вход</h3>
    <p class="modal__text">Войти через соцсети</p>
    <ul class="social-icons-list modal__social">
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon vk">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
          </svg></a></li>
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon fb">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#facebook"></use>
          </svg></a></li>
    </ul>
    <p class="modal__text">или</p>
    <form class="form-auth" action="{{ url('/login') }}" role="form" method="POST">{{ csrf_field() }}
      <label>Электронная почта
        <input class="form__input input-email" name="email" value="{{ old('email') }}" type="email" required="required"/>
      </label>
      <label>Пароль
        <input class="form__input input-password" name="password" type="password" required="required"/>
      </label>
      <div class="start-change">
        <input class="btn btn--action" type="submit" value="Войти"/>
      </div>
    </form>
  </div>
</div>
<div class="modal-registration">
  <div class="modal-content modal-content--registration">
    <button class="btn btn--close-registration" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Регистрация</h3>
    <p class="modal__text">Войти через соцсети</p>
    <ul class="social-icons-list modal__social">
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon vk">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#vk"></use>
          </svg></a></li>
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon fb">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#facebook"></use>
          </svg></a></li>
    </ul>
    <p class="modal__text">или</p>
    <form role="form" method="POST" action="{{ url('/register') }}">{{ csrf_field() }}
      <label>Имя
        <input class="form__input input-name" value="{{ old('name') }}" name="name" type="text" required="required"/>
      </label>
      <label>Электронная почта
        <input class="form__input" name="email" value="{{ old('email') }}" type="email" required="required"/>
      </label>
      <label>Пароль
        <input class="form__input" name="password" type="password" required="required"/>
      </label>
      <label>Подтвердите пароль
        <input class="form__input" name="password_confirmation" type="password" required="required"/>
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
<div class="modal-success">
  <div class="modal-content">
    <button class="btn btn--close-auth" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Cпасибо!</h3>
    <div class="modal__success">
      <div class="modal__success-img"><img src="../../img/services/shopping-support.png" alt=""/></div>
      <div class="modal__success-text">
        <p>Спасибо, что обратились к нам. Наши администраторы обязательно посмотрят и ответят на вашу регистрацию в течении 24 часов.</p>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/main.js"></script>
<script src="js/dialog.js"></script>