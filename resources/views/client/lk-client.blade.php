@extends('layouts.layout')

@section ('title','Личный кабинет')

@section('content')
  <section class="section section--lk-client section__home">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="lk-client">
      <div class="container-home">
        <div class="lk-stylist__general">
          <div class="card card__margin">
            <div class="card__photo-block">
              <a href="{{url('/settings')}}">
                <img class="lk__photo" src="{{Auth::user()->avatar}}" alt="клиент"/>
              </a>
              <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a>
            </div>
            <div class="card__description">
              <div class="card__description__title">{{Auth::user()->name}} {{Auth::user()->second_name}}</div>
            </div>
          </div>
        </div>
        <div class="info-block info-block__wrapper">
          <h2 class="secondary-title">Моя история заказов</h2>
          <div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
            <ul class="orders__title">
              <li class="orders__photo">Фото</li>
              <li class="orders__service orders__service--big">Услуга</li>
              <li class="orders__date-name orders__date-name--big">Дата</li>
              <li class="orders__count orders__count--big">Количество</li>
              <li class="orders__price orders__price--big">Цена</li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/selection-hairstyle.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big"><span>Подбор прически</span><br/><span>Стилист первой категории</span><br/><a
                  class="common-link" href="#">Стилевое решение</a></li>
              <li class="orders__date-name orders__date-name--big">18.07.2016</li>
              <li class="orders__count orders__count--big">2</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="5000"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/select-makeup.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Подбор макияжа</span><br/><span>VIP стилист</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">15.06.2018</li>
              <li class="orders__count orders__count--big">1</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="3500"/><span>р</span>
              </li>
            </ul>
            <ul class="orders__item">
              <li class="orders__photo"><img src="img/services/make-over.png" alt="" width="70%"/></li>
              <li class="orders__service orders__service--big">
                <span>Пакет или подарочный сертификат make over</span><br/><a class="common-link" href="#">Стилевое
                  решение</a></li>
              <li class="orders__date-name orders__date-name--big">25.02.2018</li>
              <li class="orders__count orders__count--big">1</li>
              <li class="orders__price orders__price--big">
                <input class="input--number input-price" type="number" disabled="disabled"
                       value="2500"/><span>р</span>
              </li>
            </ul>
          </div>
          <a class="link-common link-common--right" href="#">Посмотреть все заказы</a>
        </div>
      </div>
    </div>
  </section>
@endsection

