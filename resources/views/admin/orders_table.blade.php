@if (isset($orders) && $orders->count() != 0)
    <div style="max-height: 500px; overflow-y: auto; margin-bottom: 15px">
    @foreach($orders as $order)


            <ul class="orders__item" style="padding-right: 10px">
                <li class="orders__id">
                    <span>{{$order->id}}</span>
                </li>
                <li class="orders__status">
                    <span>{{$order->client->user->name.' '.$order->client->user->second_name}}</span><br/>
                    <a class="card__description__text card__description__text--price" style="color: #0e7e77" href="{{url('/stylist_profile', [$order->stylist->id])}}">{{$order->stylist->user->name.' '.$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__service orders__service--big">
                    <span>{{$order->service->name}}</span><br/>
                    <a class="card__description__text card__description__text--price" style="color: #0e7e77" >{{$order->price}} ₽ </a>( <a class="card__description__text card__description__text--price" style="color: darkred" >{{$order->commission}} %</a> / <a class="card__description__text card__description__text--price" style="color: #0e7e77">{{$order->payment}} ₽)</a>
                </li>
                <li class="orders__status">
                    @if(($order->ordered_by_client == 1 || $order->ordered_by_client == 0 ) && $order->confirmed_by_stylist == 0 && $order->canceled_by_stylist == 0 && $order->canceled_by_client == 0  ) <span>Новый </span><br> @endif
                    @if($order->complited == 0 && $order->ordered_by_client == 1 && $order->confirmed_by_stylist == 1 && $order->canceled_by_stylist == 0 && $order->canceled_by_client == 0 ) <span>Выполняется </span><br> @endif
                    @if($order->complited == 1 && $order->ordered_by_client == 1 && $order->confirmed_by_stylist == 1) <span>Завершен </span><br> @endif
                    @if($order->canceled_by_stylist == 1 ) <span>Отменён стилистом </span><br> @endif
                    @if($order->canceled_by_client == 1 ) <span>Отменён клиентом </span><br> @endif
                    @if($order->paid == 0 && $order->complited == 1) <span class="card__description__text card__description__text--price" style="color: darkred">Без оплаты</span><br>@endif
                    @if($order->paid == 1 && $order->complited == 1) <span class="card__description__text card__description__text--price" >Оплачен</span><br>@endif
                    @if($order->paid == 1 && $order->complited == 1 && $order->confirmed_pay_by_admin == 0) <span class="card__description__text card__description__text--price" style="color: darkred" >Оплата не подтверждена</span><br>@endif
                    @if($order->paid == 1 && $order->complited == 1 && $order->confirmed_pay_by_admin == 1) <span class="card__description__text card__description__text--price" >Оплата подтверждена</span><br>@endif
                        @if(isset($order->confirmed_Date)) <span> {{\Carbon\Carbon::parse($order->confirmed_Date)->format('d-m-Y')}}</span>@endif
                </li>
                <li class="orders__delete" style="width: 40px; height: 40px;background-image: url('img/apply.png');background-size: 100%">
                    <form class="confirm_payment" style="width: 100%; height: 100%;">
                        {{csrf_field()}}
                        <input name="order_id" value="{{$order->id}}" hidden>
                        <button style="width: 100%; height: 100%" class="btn" type="submit" class="btn__delete-order" title="Подтвердить оплату">
                          </button>
                    </form>
                </li>
                <li class="orders__delete" style="width: 40px; height: 40px;background-image: url('img/button_cancel.png');background-size: 100%">
                    <form class="cancel_payment" style="width: 100%; height: 100%;">
                        {{csrf_field()}}
                        <input name="order_id" value="{{$order->id}}" hidden>
                        <button   style="width: 100%; height: 100%" class="btn" type="submit" class="btn__delete-order" title="Отменить подтверждение">
                        </button>

                    </form>
                </li>
                {{--<li class="orders__delete" style="min-width: 50px">--}}
                    {{--<form class="delete_order_by_admin">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<input name="order_id" value="{{$order->id}}" hidden>--}}
                        {{--<button class="btn" type="submit" class="btn__delete-order" title="Удалить заказ">--}}
                            {{--<svg class="orders__delete__pic">--}}
                                {{--<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>--}}
                            {{--</svg>--}}
                        {{--</button>--}}
                    {{--</form>--}}
                {{--</li>--}}




            </ul>


    @endforeach
    </div>
    <ul class="orders__title" style="border-bottom: none; border-top: 1px solid black;">
        <li class="orders__buy">Найдено <br>{{$orders->count()}}</li>
        <li class="orders__buy">Общая сумма <br> {{$orders->sum('price')}} ₽</li>
        <li class="orders__buy">Сумма коммиссий <br> {{$orders->sum('payment')}}  ₽</li>
        <li class="orders__buy"></li>

    </ul>
    @else
    <div class="lk-stylist__education lk-stylist__education--empty">
        <div>
            <span>Ничего не найдено</span>
        </div>
    </div>
    <ul class="orders__title" style="border-bottom: none; border-top: 1px solid black;">
        <li class="orders__buy">Найдено 0</li>
        <li class="orders__buy">Общая сумма 0 ₽</li>
        <li class="orders__buy">Сумма коммиссий 0 ₽</li>
        <li class="orders__buy"></li>

    </ul>
    @endif
<script>
    $('.confirm_payment').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type:'post',
            url:'/confirm_payment',
            data: $(this).serialize(),
            success(result){
                $('.message-success').text(result);
                $('.message-success').css('display', 'block');
                setTimeout(() => {
                    $('.message-success').css('display', 'none');
                    $('.message-success').text('');
                }, 3000);
            },
            error(result){alert(result)},

        });
    });

    $('.cancel_payment').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type:'post',
            url:'/cancel_payment',
            data: $(this).serialize(),
            success(result){
                $('.message-success').text(result);
                $('.message-success').css('display', 'block');
                setTimeout(() => {
                    $('.message-success').css('display', 'none');
                    $('.message-success').text('');
                }, 3000);
            },
            error(result){alert(result)},

        });
    });

    $('.delete_order_by_admin').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type:'post',
            url:'/delete_order_by_admin',
            data: $(this).serialize(),
            success(result){
                e.target.parentNode.parentNode.style.display = 'none';
                $('.message-success').text(result);
                $('.message-success').css('display', 'block');
                setTimeout(() => {
                    $('.message-success').css('display', 'none');
                    $('.message-success').text('');
                }, 3000);
            },
            error(result){alert(result)},

        });
    });
    </script>