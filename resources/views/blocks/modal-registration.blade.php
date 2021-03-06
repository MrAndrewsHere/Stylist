<div class="modal-registration">
  <div class="modal-content modal-content--registration">
    <button class="btn btn--close-registration" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Регистрация</h3>
    <p class="modal__text">Зарегистрироваться через соцсети</p>

    <ul class="social-icons-list modal__social">
      <div id="ulogina1e78bdc" data-ulogin="display=panel;fields=first_name,last_name,email,photo,photo_big;optional=phone,city;verify=1;lang=ru;providers=vkontakte,instagram,facebook;redirect_uri=;callback=UloginRegister"></div>

      {{--<a class="social-link" data-uloginbutton="vkontakte">--}}
          {{--<svg class="social-icon vk">--}}
            {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#vk"></use>--}}
          {{--</svg>--}}
        {{--</a>--}}
      {{--</li>--}}

      {{--<li class="social-icon-item">--}}
        {{--<a class="social-link" data-uloginbutton="facebook">--}}
          {{--<svg class="social-icon fb">--}}
            {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#facebook"></use>--}}
          {{--</svg>--}}
        {{--</a>--}}
      {{--</li>--}}

      {{--<li class="social-icon-item">--}}
        {{--<a class="social-link" data-uloginbutton="instagram" arial-label="Ссылка на инстаграм">--}}
          {{--<svg class="social-icon">--}}
            {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#instagram"></use>--}}
          {{--</svg>--}}
        {{--</a>--}}
      {{--</li>--}}
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
      
      <label>Категория
        <select class="form__input" name="IsStylist">Клиент
          <option value="client">Клиент</option>
          <option value="stylist">Стилист</option>
        </select>
      </label>
       
      <div class="start-change">
        <button class="btn btn--action" type="submit">Регистрация</button>
      </div>
    </form>
  </div>
</div>

