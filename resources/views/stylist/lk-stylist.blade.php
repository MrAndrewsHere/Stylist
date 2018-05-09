@extends('layouts.layout')

@section('title','Личный кабинет')

@section('content')
  <section class="section section--lk-stylist section__home">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="lk-stylist">
      <div class="container">

        <div class="lk-stylist__block">
          <div class="card card__margin">
            <div class="card__photo-block">
              <a href="{{url('/settings')}}">
                <img class="lk__photo" src={{Auth::user()->avatar}} alt="стилист"/>
              </a>
              <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a>
            </div>

            @if (Auth::user()->role->name == 'stylist')
              <div class="card__description">
                <div class="card__description__title">Имя:
                  <span class="card__description__text">
                    {{Auth::user()->name}} 
                  </span>
                </div>
                <div class="card__description__title">Фамилия:
                  <span class="card__description__text">
                  {{Auth::user()->second_name}}
                  </span>
                </div>
                <div class="card__description__title">Обо мне:
                  <span class="card__description__text">
                    {{Auth::user()->stylist->about}}
                  </span>
                </div>
                <div class="card__description__title">Класс:
                  <span class="card__description__text">
                    {{Auth::user()->stylist->category->name}}
                  </span>
                </div>
                <div class="card__description__title">Образование:
                  <span class="card__description__text">
                    {{Auth::user()->stylist->education}}
                  </span>
                </div>
                <div class="card__description__title">Город:
                  <span class="card__description__text">
                    {{Auth::user()->city}}
                  </span>
                </div>
              </div>
            @else
              <div class="card__description">
                <div class="card__description">
                  <div class="card__description__title">{{Auth::user()->name}} {{Auth::user()->second_name}}</div>
                  <div class="card__description__text"></div>
                  <div class="card__description__title">Класс</div>
                  <div class="card__description__text"></div>
                  <div class="card__description__title">Опыт работы</div>
                  <div class="card__description__text"></div>
                  <div class="card__description__title">Образование</div>
                  <div class="card__description__text"></div>
                </div>
              </div>
            @endif
          </div>
        </div>

        <div class="lk-stylist__block">
          <h2 class="title-second">Дипломы и сертификаты</h2>
          <div class="lk-stylist__education lk-stylist__education--empty">
            <div>
              <span>Вы еще не добавили сертификаты</span>
              <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Добавить</a>
            </div>
          </div>
        </div>

        <div class="lk-stylist__block">
          <h2 class="title-second">Дипломы и сертификаты</h2>
          <div class="lk-stylist__education">
            <div class="lk-stylist__education-document">
              <a href="img/diplom1.jpg">
                <img src="img/diplom1.jpg" alt="диплом" class="lk-stylist__diplom">
              </a>
            </div>
            <div class="lk-stylist__education-document">
              <a href="img/diplom2.jpg">
                <img src="img/diplom2.jpg" alt="диплом" class="lk-stylist__diplom">
              </a>  
            </div>
            <div class="lk-stylist__education-document">
              <a href="img/diplom1.jpg">
                <img src="img/diplom1.jpg" alt="диплом" class="lk-stylist__diplom">
              </a>
            </div>
            <div class="lk-stylist__education-document">
              <a href="img/diplom1.jpg">
                <img src="img/diplom1.jpg" alt="диплом" class="lk-stylist__diplom">
              </a>
            </div>
            <div class="lk-stylist__education-document">
              <a href="img/diplom3.jpg">
                <img src="img/diplom3.jpg" alt="диплом" class="lk-stylist__diplom">
              </a>
            </div>
          </div>
        </div>

        <div class="lk-stylist__block">
          <h2 class="title-second">Обратите внимание</h2>
          <div class="lk-stylist__attention-orders">
            <div class="order order__inner"><a class="order__number" href="#">127609</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">Заказ оплачен</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
            <div class="order order__inner"><a class="order__number" href="#">127610</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">По заказу получен положительный отзыв</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
            <div class="order order__inner"><a class="order__number" href="#">127611</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">Заказ оплачен</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
            <div class="order order__inner"><a class="order__number" href="#">127612</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">По заказу получен положительный отзыв</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
            <div class="order order__inner"><a class="order__number" href="#">127613</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">По заказу получен положительный отзыв</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
            <div class="order order__inner"><a class="order__number" href="#">127614</a>
              <div class="order__status order__number__order__status">
                <div class="order__status-text">Заказ оплачен</div>
                <div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="orders-list">
          <h3 class="title-second">Список заказов</h3>
          <ul class="orders-list__names-list">
            <li class="orders-list__names-item">
              <a class="link-change-content link-change-content--active" href="#">Все заказы</a>
            </li>
            <li class="orders-list__names-item">
              <a class="link-change-content" href="#">Одобренные для вас</a>
            </li>
            <li class="orders-list__names-item">
              <a class="link-change-content" href="#">Вас выбрал клиент</a>
            </li>
            <li class="orders-list__names-item">
              <a class="link-change-content" href="#">Выполненные заказы</a>
            </li>
          </ul>
        </div>

        <div class="orders orders__wrapper">
          <ul class="orders__title">
            <li class="orders__checkbox"></li>
            <li class="orders__id">Номер</li>
            <li class="orders__date-name">Дата/Имя</li>
            <li class="orders__service">Услуга</li>
            <li class="orders__status">Статус</li>
            <li class="orders__format">Формат</li>
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
                <li class="orders__status"><span>{{$order->confirmed_by_stylist}}</span></li>
                <li class="orders__format"><span>online</span></li>
                <li class="orders__price"><span>{{$order->service->price}}</span><span>р</span></li>
              </ul>
            @endforeach
          @endif
        </div>

        <div class="orders__take">
          <input class="btn btn--action" type="submit" value="Взять заказ"/>
        </div>

      </div>
    </div>
  </section>
@endsection