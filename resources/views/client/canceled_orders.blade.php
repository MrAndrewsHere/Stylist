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
        <a class="orders__link" href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
      </li>
      <li class="orders__price orders__price--big">
        <span>{{$order->price}}</span>
        <span>₽</span>
      </li>
      <li class="orders__status">
        <span>Отменен</span>
      </li>
    </ul>
  @endforeach
@else
  <div class="lk-stylist__education lk-stylist__education--empty">
    <div>
      <span>У вас нет отмененных заказов</span>
    </div>
  </div>
@endif