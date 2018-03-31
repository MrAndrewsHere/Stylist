<header class="header-home__margin">
  <div class="container-home">
    <div class="header-home"><a class="phone-number header__link" href="tel:+7(843)2922222">+7 (843) 292-22-22</a>
      @if (Auth::guest())
        <div class="enter-panel-guest">
          <button class="btn btn--auth">Вход</button>
          <span> |</span>
          <button class="btn btn--registration">Регистрация</button>
        </div>@else
        <div class="enter-panel-stylist"><a class="nav-link" href="/portfolio">Мое портфолио</a>
          <a class="nav-link" href="/my_orders">Мои заказы</a>
          <a class="nav-link" href="#">Мои ответы</a>
          <a class="nav-link nav-profile" href="#">
            <div class="nav-profile__img"><img class="nav-profile__img" src="img/user-pic.png" alt="клиентка"/></div>
            <div class="nav-profile__arrow"></div>
          </a>
          <div class="nav-profile__menu"><a class="nav-profile__menu-link nav-link">{{Auth::user()->name}}</a>
            @if(Auth::user()->role->name == 'stylist')
              <a class="nav-profile__menu-link nav-link" href="/lk_stylist">Личный кабинет (с)</a>
            @endif

            @if(Auth::user()->role->name == 'client')
              <a class="nav-profile__menu-link nav-link" href="/lk_client">Личный кабинет (к)</a>
              <a class="nav-profile__menu-link nav-link" href="/my_style">Мой стиль (к)</a>
            @endif

            @if(Auth::user()->role->name == 'admin')
              <a class="nav-profile__menu-link nav-link" href="/lk_stylist">Личный кабинет (с)</a>
              <a class="nav-profile__menu-link nav-link" href="/lk_client">Личный кабинет (к)</a>
              <a class="nav-profile__menu-link nav-link" href="/my_style">Мой стиль (к)</a>
            @endif


            <a class="nav-profile__menu-link nav-link" href="/settings">Настройки</a>
            <a class="nav-profile__menu-link nav-link" href="/logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                  style="display: none;">{{ csrf_field() }}</form>
          </div>
        </div>@endif

    </div>
  </div>
</header>