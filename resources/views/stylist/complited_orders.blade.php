@if (isset($orders) && $orders->count() != 0)
  <ul class="orders__title">
    <li class="orders__id">№ заказа</li>
    <li class="orders__service orders__service--big">Клиент/услуга</li>
    <li class="orders__price orders__price--big">Цена</li>
    <li class="orders__status">Статус</li>
    <li class="orders__buy"></li>
  </ul>
  @foreach($orders as $order)
    <ul class="orders__item">
      <li class="orders__checkbox">
        <span>{{$order->id}}</span><br/>
      </li>
      <li class="orders__service orders__service--big">
        <span>{{$order->client->user->name." ".$order->client->user->second_name}}</span><br/>
        <a>{{$order->service->name}}</a>
      </li>
      <li class="orders__price orders__price--big">
        <span>{{$order->price." ₽"}}</span>
        <br>
        <span>Комиссия: {{$order->payment." ₽"}}</span>
      </li>
      <li class="orders__status">
        <span>Завершен</span>

        <br>
        @if($order->paid == 0 && $order->complited == 1) <span class="card__description__text card__description__text--price" style="color: darkred">Без оплаты</span><br>@endif
        @if($order->paid == 1 && $order->complited == 1) <span class="card__description__text card__description__text--price" >Оплачен</span><br>@endif
        @if($order->confirmed_pay_by_admin == 1)
        <span class="card__description__text card__description__text--price">Оплата подтверждена</span>
          @else
          <span class="card__description__text card__description__text--price" style="color: darkred">Оплата не подтверждена</span>
        @endif
        <br>
        @if(isset($order->confirmed_Date)) <span> {{\Carbon\Carbon::parse($order->confirmed_Date)->format('d-m-Y')}}</span>@endif
      </li>

      <li class="orders__buy">
        <form class="pay_order">
          {{csrf_field()}}
          <input type="hidden" name="order_id" value="{{$order->id}}">
          @if($order->paid == 0)
          <button   type="submit" class="btn btn--action btn--action-buy">
            Оплатить
          </button>
            @else
            <button disabled="true"style="background-color: grey"  type="submit" class="btn btn--action btn--action-buy">
              Оплатить
            </button>
          @endif
        </form>
      </li>

    </ul>
  @endforeach
@else
  <div class="lk-stylist__education lk-stylist__education--empty">
    <div>
      <span>У вас нет завершенных заказов</span>
    </div>
  </div>
@endif
<script>
  $('.pay_order').on('submit', function (e) {
    e.preventDefault();
    $.ajax({
      type: 'POST',
      url: '/Pay_Order',
      data: $(this).serialize(),
      success(result) {

        $('.message-success').text(result);
        $('.message-success').css('display', 'block');
        $('#pay_order_btn').css('background-color','grey');
        $('#pay_order_btn').prop('disabled','true')
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