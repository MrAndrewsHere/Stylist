
<div class="modal-success">
  <div class="modal-content modal-content--registration">
    <button class="btn btn--close-success" arial-label="Закрыть окно">&times;</button>
    <span style="visibility: hidden" >""</span>
    <h3 class="modal__title">Выберите категорию</h3>
    <div class="modal__success">
      <form class="form-auth" action="{{ url('/postUlogin') }}" role="form" method="POST">
        {{ csrf_field() }}


          <input class="form__input" style="visibility: hidden"/>


        <label>
          <select class="form__input" name="IsStylist">Клиент
            <option value="client">Клиент</option>
            <option value="stylist">Стилист</option>
          </select>
        </label>
        <input class="token" name="token" type="text"  hidden="true"/>

        <div class="start-change">
          <button class="btn btn--action" type="submit">Регистрация</button>
        </div>
      </form>
    </div>
  </div>
</div>