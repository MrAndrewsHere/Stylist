@if (isset($orders) && $orders->count() != 0)
  <ul class="orders__title">
    <li class="orders__checkbox">Номер</li>
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
      <span>У вас нет отменённых заказов</span>
    </div>
  </div>
@endif