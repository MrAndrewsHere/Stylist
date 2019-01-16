<header class="header-home__wrapper">
  <div class="container-home">
    <div class="header-home">
      <button class="btn btn--sidebar-open">
        <svg class="btn--sidebar-open">
          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#menu"></use>
        </svg>
      </button>

      <a class="header__phone-number" href="tel:+7(843)2922222">
        +7 (843) 292-22-22
      </a>

      @if (isset($error))
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif

        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      @endif

      @if (Auth::guest())
        <div class="enter-panel">
          <button class="btn btn--auth">Вход</button>
          <span class="enter-panel__divider">|</span>
          <button class="btn btn--registration">Регистрация</button>
        </div>

      @else
        <div class="enter-panel">
          @if (Auth::user()->role->name == 'client')
            <a class="navigation__link" href="/my_orders">Мои заказы</a>
          @endif

          @if(Auth::user()->role->name == 'stylist')
            <a class="navigation__link" href="/my_orders">Мои заказы </a>
          @endif

          @if(Auth::user()->role->name == 'admin')


              <a class="navigation__link" href="/admin_stylists">Стилисты</a>
              <span class="enter-panel__divider">|</span>
              <a class="navigation__link" href="/admin_find_orders">Заказы</a>




            @endif

          <a class="navigation__link navigation__profile" href="#">
            <div class="navigation__profile-img">
              <img class="navigation__profile-img" src="{{Auth::user()->avatar}}" alt="аватар пользователя"/>
            </div>
            <div class="navigation__profile-arrow"></div>
          </a>

          <div class="navigation__profile-menu">
            <a class="navigation__profile-menu-link">{{Auth::user()->name}}</a>
            @if(Auth::user()->role->name == 'stylist')
              <a class="navigation__profile-menu-link navigation__link" href="/lk_stylist">Личный кабинет</a>
              <a class="navigation__profile-menu-link navigation__link" href="/portfolio">Моё портфолио</a>
            @endif

            @if(Auth::user()->role->name == 'client')
              <a class="navigation__profile-menu-link navigation__link" href="/lk_client">Личный кабинет</a>
              <a class="navigation__profile-menu-link navigation__link" href="/my_style">Мой стиль</a>
            @endif

            @if(Auth::user()->role->name == 'admin')
              <a class="navigation__profile-menu-link navigation__link" href="/admin">Заявки</a>
            @endif

            <a class="navigation__profile-menu-link navigation__link" href="/settings">Настройки</a>
            <a class="navigation__profile-menu-link navigation__link" href="/logout"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Выход</a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                  style="display: none;">{{ csrf_field() }}</form>
          </div>
        </div>
      @endif
    </div>
  </div>
</header>


