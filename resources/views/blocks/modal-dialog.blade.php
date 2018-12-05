
<div class="modal-dialog">
  <div class="modal-content_dialog">
    <button class="btn btn--close-dialog" arial-label="Закрыть окно">&times;</button>
    <h3 class="modal__title">Оформить услугу</h3>
    <h1 id = "modal_service_section__title" class="section__title"></h1>
    <div class="lk-stylist__education lk-stylist__education--filled">
    <img class="lk-stylist__education-document" src="" >
    </div>
    <p class="modal__text">Выберите подходящие для Вас стилиста и дату</p>

    <form class="form_add_service_to_client" action="{{ url('/login') }}" role="form" method="POST">
      {{ csrf_field() }}

      <label>Стилист
        <select class="form__input" id = "stylists_list" name="stylist_id">

        </select>
      </label>

      <input class="flush_service_id" type="hidden" name="service_id" required/>
      <label>Дата
        <input class="form__input" type="date" name="date" required/>
      </label>

      <div class="start-change">
        <button class="btn btn--action" type="submit">Подтвердить</button>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(() => {

        $('.form_add_service_to_client').on('submit', function (e) {
  e.preventDefault();
  $.ajax({
    type: 'POST',
    url: '/add_service_to_client',
    data: $(this).serialize(),
      success(result) {
          $('.modal-dialog').removeClass('modal-auth-show');
          $('.message-success').text(result);
          $('.message-success').css('display', 'block');
          setTimeout(() => {
              $('.message-success').css('display', 'none');
              $('.message-success').text('');
          }, 3000);
      },
      error(result) {
          $('.message-error').text(result);
          $('.message-error').css('display', 'block');
      },
  });
});
    });
</script>
