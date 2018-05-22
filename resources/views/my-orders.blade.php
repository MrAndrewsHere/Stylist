@extends('layouts.layout')

@section('title','Мои заказы')

@section('content')
  <section class="section section--my-orders">
    <h1 class="section__title">Мои заказы</h1>
    <div class="container-home">
      <div class="my-orders">
        <div class="my-orders__status">
          <a class="link-tab link-active" href="#">Новые заказы</a>
          <a class="link-tab" href="#">История заказов</a>
        </div>
        <div class="message-success">@if(Session::has('success')) {{Session::get('success')}} @endif </div>
        <div class="message-error">@if(Session::has('error')) {{Session::get('error')}} @endif </div>
        <div class="my-orders__item my-orders__item--active">
          <div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
            <ul class="orders__title">
              <li class="orders__photo">Фото</li>
              <li class="orders__service orders__service--big">Услуга</li>
              <li class="orders__price orders__price--big">Цена</li>
              <li class="orders__status">Статус</li>
              <li class="orders__buy"></li>
              <li class="orders__delete"></li>
            </ul>
            @if(isset($orders))
              @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__photo">
                  <img src="{{$order->service->picture}}" alt="" width="70%"/>
                </li>
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
        </div>
      </div>
    </div>
  </section>
@endsection