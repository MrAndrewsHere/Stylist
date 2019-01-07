@if (isset($orders) && $orders->count() != 0)
    @foreach($orders as $order)

        <div style="max-height: 400px; overflow-y: auto; margin-bottom: 15px">
            <ul class="orders__item">
                <li class="orders__id">
                    <span>{{$order->id}}</span>
                </li>
                <li class="orders__status">
                    <span>{{$order->client->user->name.' '.$order->client->user->second_name}}</span><br/>
                    <a class="card__description__text card__description__text--price" style="color: #0e7e77" href="{{url('/stylist_profile', [$order->stylist->id])}}">{{$order->stylist->user->name.' '.$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__service orders__service--big">
                    <span>{{$order->service->name}}</span><br/>
                    <a class="card__description__text card__description__text--price" style="color: #0e7e77" >{{$order->price}} ₽ </a>( <a class="card__description__text card__description__text--price" style="color: darkred" >10%</a> / <a class="card__description__text card__description__text--price" style="color: #0e7e77">200 ₽)</a>
                </li>
                <li class="orders__status">
                    <span>Не подтвержден</span>
                </li>
                <li class="orders__delete" style="width: 40px; height: 40px;background-image: url('img/apply.png');background-size: 100%">
                    <form class="delete_order" style="width: 100%; height: 100%;">
                        {{csrf_field()}}
                        <input name="id" value="{{$order->id}}" hidden>
                        <button style="width: 100%; height: 100%" class="btn" type="submit" class="btn__delete-order" title="Подтвердить оплату">
                          </button>
                    </form>
                </li>
                <li class="orders__delete" style="width: 40px; height: 40px;background-image: url('img/button_cancel.png');background-size: 100%">
                    <form class="delete_order" style="width: 100%; height: 100%;">
                        {{csrf_field()}}
                        <input name="id" value="{{$order->id}}" hidden>
                        <button  disabled="true" style="width: 100%; height: 100%" class="btn" type="submit" class="btn__delete-order" title="Отменить подтверждение">
                        </button>

                    </form>
                </li>
                <li class="orders__delete" style="min-width: 50px">
                    <form class="delete_order">
                        {{csrf_field()}}
                        <input name="id" value="{{$order->id}}" hidden>
                        <button class="btn" type="submit" class="btn__delete-order" title="Удалить заказ">
                            <svg class="orders__delete__pic">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                            </svg>
                        </button>
                    </form>
                </li>




            </ul>
           </div>

    @endforeach
    <ul class="orders__title" style="border-bottom: none; border-top: 1px solid black;">
        <li class="orders__buy">Найдено {{$orders->count()}}</li>
        <li class="orders__buy">Общая сумма {{$orders->sum('price')}} ₽</li>
        <li class="orders__buy">Сумма коммиссий {{$orders->sum('payment')}}  ₽</li>
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
