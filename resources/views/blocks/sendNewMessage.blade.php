
  <div class="modal-message" style="tab-index:0 ">
  <div class="modal-content" style="tab-index:0">
    <button class="btn btn--close-message" arial-label="Закрыть окно">&times;</button>
    <h1 class="modal__title" style="margin-bottom: 15px">Новое сообщение</h1>

    <form class="form_send_new_message" role="form" >
      {{ csrf_field() }}


      <div class="input-group">
  <input hidden="true" name="peer_id" id = "peer_id">
        <div class="sc-user-input active" >
            <textarea
              tabIndex="0"
              placeholder="Введите сообщение..."
              class="sc-user-input--text"
              name="message"
            style="min-height:100px;width: 100%;"
            ></textarea>



        </div>
      </div>
      <div class="start-change">
        <button class="btn btn--action" type="submit">Отправить</button>
      </div>
    </form>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
    $(document).ready(() => {

        $('.form_send_new_message').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/messages',
                data: $(this).serialize(),
                success(result) {

                    $('.modal-message').removeClass('modal-auth-show');
                },
                error(result) {

                },
            });
        });
    });
</script>
