
<div class="modal-dialog">
  <div class="modal-content_dialog">
    <button class="btn btn--close-dialog" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">...</h3>
    <p class="modal__text">...</p>

    <form class="form-auth" action="{{ url('/login') }}" role="form" method="POST">
      {{ csrf_field() }}

      <label>Дата
        <input class="form__input" type="date" name="date" required/>
      </label>

      <label>Электронная почта
        <input class="form__input input-email" name="email" value="{{ old('email') }}" type="email" required="required"/>
      </label>

      <div class="start-change">
        <button class="btn btn--action" type="submit">Войти</button>
      </div>
    </form>
  </div>
</div>