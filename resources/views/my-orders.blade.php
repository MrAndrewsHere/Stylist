@extends('layouts.layout')

@section('title','Мои заказы')

@section('content')
  <section class="section">
    <h1 class="section__title">Мои заказы</h1>
    <div class="container-home">
      
        <div class="message-success">@if(Session::has('success')) {{Session::get('success')}} @endif </div>
        <div class="message-error">@if(Session::has('error')) {{Session::get('error')}} @endif </div>

        @if (Auth::user()->role->name == 'client')
          <div class="orders orders--active">
            
              <ul class="orders__title">
                <li class="orders__service orders__service--big">Услуга</li>
                <li class="orders__price orders__price--big">Цена</li>
                <li class="orders__status">Статус</li>
                <li class="orders__buy"></li>
                <li class="orders__delete"></li>
              </ul>

              @if(isset($orders))
                @foreach($orders as $order)
                <ul class="orders__item">
                  <li class="orders__service orders__service--big">
                    <span>{{$order->service->name}}</span><br/>
                    <span>{{$order->stylist->category->name}}</span>
                  </li>
                  <li class="orders__price orders__price--big">
                    <span>{{$order->price}}</span>
                    <span>₽</span>
                  </li>
                  <li class="orders__status">
                    <span>Не подтвержден</span>
                  </li>
                  <li class="orders__buy">
                    <form class="ordered">
                      {{csrf_field()}}
                      <input type="hidden" name="order_id" value="{{$order->id}}">
                      <button type="submit" class="btn btn--action btn--action-buy">
                        Заказать
                      </button>
                    </form>
                  </li>
                  <li class="orders__delete" >
                    <form class="delete_order">
                      {{csrf_field()}}
                      <input name="id" value="{{$order->id}}" hidden>
                      <button class="btn" type="submit" id="btn__delete-order">
                        <svg class="orders__delete__pic">
                          <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                        </svg>
                      </button>
                    </form>
                  </li>
                </ul>
                @endforeach
              @endif
            
          </div>
        @endif

        @if (Auth::user()->role->name == 'stylist')
        
        <ul class="orders-list-links">
          <li class="link-order link-order--active">
            Новые заказы
          </li>
          <li class="link-order">
            Выполняемые заказы
          </li>
          <li class="link-order">
            Завершенные заказы
          </li>
          <li class="link-order">
            Отмененные заказы
          </li>
        </ul>

        <div class="orders orders--active">
          <ul class="orders__title">
            <li class="orders__checkbox"></li>
            <li class="orders__id">Номер</li>
            <li class="orders__date-name">Дата/Имя</li>
            <li class="orders__service">Услуга</li>
            <li class="orders__price">Цена</li>
          </ul>
          @if (isset($orders))
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <input class="input-checkbox" type="checkbox"/>
                </li>
                <li class="orders__id"><span>{{$order->id}}</span></li>
                <li class="orders__date-name">
                  <div>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->service->updated_at)->toDateString()}}</div>
                  <div>{{$order->client->user->name}}</div>
                </li>
                <li class="orders__service"><span>{{$order->service->name}}</span></li>
                <li class="orders__price"><span>{{$order->service->price}}</span><span>р</span></li>
              </ul>
            @endforeach
          @endif
        </div>

        <!-- заглушка для проверки -->
        <div class="orders">
          <div>тут будут выполняемые заказы</div>
        </div>
        <div class="orders">
          <div>тут будут завершенные заказы</div>
        </div>
        <div class="orders">
          <div>тут будут отмененные заказы</div>
        </div>


        <!-- <div class="lk-stylist__education lk-stylist__education--empty">
          <div>
            <span>У вас нет новых заказов</span>
          </div>
        </div> -->
        
        @endif 
      
    </div>
  </section>
@endsection