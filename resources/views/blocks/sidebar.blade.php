<aside class="sidebar">
  <div class="container-sidebar">
    <div class="sidebar__wrapper">
      <a class="logo" href="/">
        <img src="../img/logo.png" alt=""/>
      </a>

      <nav class="sidebar__menu">
        <ul class="sidebar__menu-list">
          <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/services">Наши услуги</a></li>
          <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/stylists">Наши стилисты</a></li>
          <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/answers">Стилисты отвечают</a></li>
          <li class="sidebar__menu-item"><a class="sidebar__menu-link" href="/contacts">Контакты</a></li>
        </ul>
      </nav>
      
      @if (Auth::guest())
      <ul class="social-icons-list" id="uLogin" data-ulogin="display=buttons;callback=myfunc">
        <li class="social-icon-item">
          <a class="social-link" data-uloginbutton="vkontakte" arial-label="Ссылка на вконтате">
            <svg class="social-icon">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#vk"></use>
            </svg>
          </a>
        </li>
        <li class="social-icon-item">
          <a class="social-link" data-uloginbutton="facebook" arial-label="Ссылка на фейсбук">
            <svg class="social-icon">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#facebook"></use>
            </svg>
          </a>
        </li>
        <li class="social-icon-item">
          <a class="social-link" data-uloginbutton="instagram" arial-label="Ссылка на инстаграм">
            <svg class="social-icon">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#instagram"></use>
            </svg>
          </a>
        </li>
      </ul>

      <div class="enter-panel">
        <button class="btn btn--auth enter-panel__btn">Вход</button>
        <button class="btn btn--registration enter-panel__btn">Регистрация</button>
      </div>
      @endif
    </div>
  </div>
</aside>