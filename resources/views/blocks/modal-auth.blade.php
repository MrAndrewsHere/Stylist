
<div class="modal-auth">
  <div class="modal-content">
    <button class="btn btn--close-auth" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Вход</h3>
    <p class="modal__text">Войти через соцсети</p>
    <ul class="social-icons-list modal__social">
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon vk">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#vk"></use>
          </svg></a></li>
      <li class="social-icon-item"><a class="social-link" href="#">
          <svg class="social-icon fb">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#facebook"></use>
          </svg></a></li>
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
        <input class="btn btn--action" type="submit" value="Войти"/>
      </div>
    </form>
  </div>
</div>