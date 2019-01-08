
@if(isset($orders) && $orders->count() != 0)
  <ul class="orders__title">
      <li class="orders__id">№ заказа</li>
    <li class="orders__service orders__service--big">Услуга/Стилист</li>
    <li class="orders__price orders__price--big">Цена</li>
    <li class="orders__status">Статус</li>
    <li class="orders__buy"></li>
    <li class="orders__delete"></li>
  </ul>
  @foreach($orders as $order)
    <ul class="orders__item">
      <li class="orders__checkbox">
        <span>{{$order->id}}</span><br/>
      </li>
      <li class="orders__service orders__service--big">
        <a class="orders__link"
           href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
        <a class="orders__link"
           href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
      </li>
      <li class="orders__price orders__price--big">
        <span>{{$order->price}}</span>
        <span>₽</span>
      </li>
      <li class="orders__status">
        <span>Выполняется</span>
      </li>
      <li class="orders__buy">
        {{--<form class="ordered">--}}
          {{--{{csrf_field()}}--}}
          {{--<input type="hidden" name="order_id" value="{{$order->id}}">--}}
          <button type="submit" class="btn btn--action btn--action-buy">
              Чат
          </button>
        {{--</form>--}}
      </li>
      <li class="orders__delete">
        <form class="cancel_order">
          {{csrf_field()}}
          <input name="order_id" value="{{$order->id}}" hidden>
          <button class="btn" type="submit" class="btn__delete-order" title="удалить">
            <svg class="orders__delete__pic">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#cancel-order"></use>
            </svg>
          </button>
        </form>
      </li>
    </ul>
  @endforeach
@else
  <div class="lk-stylist__education lk-stylist__education--empty">
    <div>
      <span>У вас принятых заказов</span>
    </div>
  </div>
@endif
<script>
    $('.cancel_order').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/client_Cancel_Order',
            data: $(this).serialize(),
            success(result) {
                e.target.parentNode.parentNode.style.display = 'none';
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
</script>