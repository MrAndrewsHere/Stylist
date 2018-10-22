

<!-- НОВЫЕ ЗАКАЗЫ КЛИЕНТА -->

<div class="orders orders--active">
    <div class="my_orders">
        @if(isset($Allorders))


           @php
            $orders = $Allorders->where('ordered_by_client', '1');
            @endphp

        @if(isset($orders) && $orders->count() != 0)
        <ul class="orders__title">
            <li class="orders__id">№ заказа</li>
            <li class="orders__service orders__service--big">Услуга/Стилист</li>
            <li class="orders__price orders__price--big">Цена</li>
            <li class="orders__status">Статус</li>
        </ul>



            @foreach($orders as $order)
                <ul class="orders__item">
                    <li class="orders__checkbox">
                        <span>{{$order->id}}</span><br/>
                    </li>
                    <li class="orders__service orders__service--big">
                        <a class="orders__link" href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
                        <a class="orders__link"
                           href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
                    </li>
                    <li class="orders__price orders__price--big">
                        <span>{{$order->price}}</span>
                        <span>₽</span>
                    </li>
                    <li class="orders__status">

                        <span>Не подтвержден</span>

                    </li>
                </ul>
            @endforeach
        @else
            <div class="lk-stylist__education lk-stylist__education--empty">
                <div>
                    <span>Нет новых заказов</span>
                </div>
            </div>
        @endif
            @endif
    </div>
</div>

<!-- ПРИНЯТЫЕ ЗАКАЗЫ КЛИЕНТА -->

<div class="orders">
    <div class="my_orders">
        @if(isset($Allorders))
            @php
                $orders = $Allorders->where('confirmed_by_stylist', '1');
            @endphp
        @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
                <li class="orders__id">№ заказа</li>
                <li class="orders__service orders__service--big">Клиент/услуга</li>
                <li class="orders__price orders__price--big">Цена</li>
                <li class="orders__status">Статус</li>
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
                </ul>
            @endforeach
        @else
            <div class="lk-stylist__education lk-stylist__education--empty">
                <div>
                    <span>Нет выполняемых заказов</span>
                </div>
            </div>
        @endif
        @endif
    </div>
</div>

<!-- ЗАВЕРШЕННЫЕ ЗАКАЗЫ КЛИЕНТА -->

<div class="orders">
    <div class="my_orders">
        @if(isset($Allorders))
            @php
                $orders = $Allorders->where('complited', '1');
            @endphp
        @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
                <li class="orders__id">№ заказа</li>
                <li class="orders__service orders__service--big">Клиент/услуга</li>
                <li class="orders__price orders__price--big">Цена</li>
                <li class="orders__status">Статус</li>
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
                        <span>Завершен</span>
                    </li>
                </ul>
            @endforeach
        @else
            <div class="lk-stylist__education lk-stylist__education--empty">
                <div>
                    <span>Нет завершенных заказов</span>
                </div>
            </div>
        @endif
        @endif
    </div>
</div>

<!-- ОТМЕНЕННЫЕ ЗАКАЗЫ КЛИЕНТА -->

<div class="orders">
    <div class="my_orders">
        @if(isset($Allorders))
            @php
                $orders = $Allorders->where('canceled_by_stylist', '1');
            @endphp
        @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
                <li class="orders__id">№ заказа</li>
                <li class="orders__service orders__service--big">Клиент/услуга</li>
                <li class="orders__price orders__price--big">Цена</li>
                <li class="orders__status">Статус</li>
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
                        <span>Отменен</span>
                    </li>

                </ul>
            @endforeach
        @else
            <div class="lk-stylist__education lk-stylist__education--empty">
                <div>
                    <span>Нет отменённых заказов</span>
                </div>
            </div>
        @endif
        @endif
    </div>
</div>

