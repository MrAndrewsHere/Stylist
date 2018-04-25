@extends('layouts.layout')

@section('title','Мои заказы')

@section('content')
  <section class="section section--my-orders section__home">
    <h1 class="section__title">Мои заказы</h1>
    <h3>@if(Session::has('success')) {{Session::get('success')}} @endif </h3>
    <div class="container-home">
      <div class="my-orders">
        <div class="my-orders__status">
          <a class="link-tab link-active" href="#">Новые заказы</a>
          <a class="link-tab" href="#">История заказов</a>
        </div>
        <div class="message-success">Услуга успешно удалена</div>
        <div class="message-error">Ошибка</div>
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
                  <form method="post" action="{{url('/ordered')}}">
                    {{csrf_field()}}
                    <button type="submit" name="s" value="{{$order->service_id}}" class="btn btn--action btn--action-buy">
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

        <div class="my-orders__item">
          <div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
            <ul class="orders__title">
              <li class="orders__photo">Фото</li>
              <li class="orders__service orders__service--big">Услуга</li>
              <li class="orders__date-name orders__date-name--big">Дата</li>
              <li class="orders__price orders__price--big">Цена</li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/selection-hairstyle.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big"><span>Подбор прически</span><br/><span>Стилист первой категории</span><br/><a
                  class="common-link" href="#">Стилевое решение</a></li>
              <li class="orders__date-name orders__date-name--big">18.07.2016</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled" value="5000"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img
                  src="img/services/select-makeup.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Подбор макияжа</span><br/><span>VIP стилист</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">15.06.2018</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled" value="3500"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/make-over.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Пакет или подарочный сертификат make over</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">25.02.2018</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled" value="2500"/><span>р</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="chat">
        <div class="chat__instrument-panel">
          <div class="chat__interlocutor-name">
            Имя собеседника
          </div>
          <button class="btn btn--chat-exit">
            x
          </button>
        </div>

        <div class="chat__messages">
          <div class="chat__message chat__message-my">
            <div class="nav-profile__img chat__profile__img">
              <img class="nav-profile__img" src="/img/no_avatar.jpg">
            </div>
            <div class="chat__message-text-all">
              <p class="chat__message-text-one">Привет</p>
              <p class="chat__message-text-one">Можно записаться к тебе на ноготочки?</p>
              <p class="chat__message-text-one">Давай сразу обсудим время</p>
            </div>
          </div>

          <div class="chat__message chat__message-notmy">
            <div class="nav-profile__img chat__profile__img">
              <img class="nav-profile__img" src="/img/no_avatar.jpg">
            </div>
            <div class="chat__message-text-all">
              <p class="chat__message-text-one">Привет</p>
              <p class="chat__message-text-one">Конечно</p>
              <p class="chat__message-text-one">Могу взять 26 или 27 в 4 часа дня</p>
            </div>
          </div>

          <div class="chat__message chat__message-my">
            <div class="nav-profile__img chat__profile__img">
              <img class="nav-profile__img" src="/img/no_avatar.jpg">
            </div>
            <div class="chat__message-text-all">
              <p class="chat__message-text-one">Отлично</p>
              <p class="chat__message-text-one">Тогда запиши меня на 27</p>
            </div>
          </div>
        </div>

        <form class="chat__from" action="">
          <input class="chat__input-text" type="text" placeholder="Введите ваше сообщение...">
          <input type="submit" class="chat__submit">
        </form>
      </div>
    </div>
  </section>
@endsection