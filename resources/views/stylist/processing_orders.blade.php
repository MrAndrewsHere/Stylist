    @if (isset($orders) && $orders->count() != 0)
    <ul class="orders__title">
        <li class="orders__id">№ заказа</li>
        <li class="orders__service orders__service--big">Клиент/услуга</li>
        <li class="orders__price orders__price--big">Цена</li>
        <li class="orders__status">Статус</li>
        <li class="orders__buy"></li>
        <li class="orders__buy"></li>
        <li class="orders__delete"></li>
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
            </li>
            <li class="orders__status">
                <span>Выполняется</span>
            </li>
            <li class="orders__buy">
                <form class="send_new_message">
                    {{csrf_field()}}
                    <input type="hidden" name="peer_id" value="{{$order->client->id}}">
                    <button type="submit" onclick="change({{$order->client->user->id}})"  class="btn btn--action btn--action-buy">
                       Чат
                    </button>
                </form>
            </li>
            <li class="orders__buy">
                <form class="complite_order">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                        Выполнить
                    </button>
                </form>
            </li>
            <li class="orders__delete">
                <form class="cancel_order">
                    {{csrf_field()}}
                    <input name="order_id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order">
                        <svg class="orders__delete__pic">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                 xlink:href="img/spritesvg.svg#cancel-order"></use>
                        </svg>
                    </button>
                </form>
            </li>
        </ul>
    @endforeach
@else
    <div class="lk-stylist__education lk-stylist__education--empty">
        <div>
            <span>У вас нет выполняемых заказов</span>
        </div>
    </div>
@endif
<script>

 function change(numb)
 {
     $('#peer_id').attr('value',numb);
 }
    $('.send_new_message').on('submit', function (e) {

        e.preventDefault();
        $('.modal-message').addClass('modal-auth-show');



    });
    $('.complite_order').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/Complite_Order',
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

    $('.cancel_order').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/stylist_Cancel_Order',
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