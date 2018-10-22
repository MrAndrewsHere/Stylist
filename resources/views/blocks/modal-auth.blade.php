
<div class="modal-auth">
  <div class="modal-content">
    <button class="btn btn--close-auth" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Вход</h3>
    <p class="modal__text">Войти через соцсети</p>

    <ul class="social-icons-list modal__social">

      <div id="uLogina1e78bdc" data-ulogin="display=panel;fields=first_name,last_name,email,photo,photo_big;optional=phone,city;verify=1;lang=ru;providers=vkontakte,instagram,facebook;redirect_uri=;callback=UloginRegister"></div>

    </ul>

    <p class="modal__text">или</p>

    <form class="form-auth" action="{{ url('/login') }}" role="form" method="POST">
      {{ csrf_field() }}

      <label>Электронная почта
        <input class="form__input input-email" name="email" value="{{ old('email') }}" type="email" required="required"/>
      </label>

      <label>Пароль
        <input class="form__input input-password" name="password" type="password" required="required"/>
      </label>

      <div class="start-change">
        <button class="btn btn--action" type="submit">Войти</button>
      </div>
    </form>
  </div>
</div>