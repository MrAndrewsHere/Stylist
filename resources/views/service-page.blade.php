@extends('layouts.layout')

@section('title','Наши стилисты')

@section('content')
  <section class="section section__home">
    <div class="container-service-page">
      <h1 class="section__title">Шоппинг сопровождение<br>с профессиональным шоппером</h1>
      <img class="service-page__photo" src="img/services/shopping_banner.jpg" alt="шоппинг">
      <div class="service-page__description">
        <p>Часто у людей нет времени, чтобы следить за модой и тратить время на шоппинг. Им сложно ориентироваться в многообразии выбора, они устали ошибаться и впустую расходовать деньги, а магазины их сильно утомяют. Поэтому, шоппинг сопровождение и услуги шоппера особенно востребована.</p><br>
        <p>Шоппинг со стилистом или шоппером — не роскошь, а способ решения разнообразных жизненных задач,
        возможность экономии денег и времени.</p><br>
        <p>Задачи могут быть самыми разнообразными. Может быть ваш стиль уже давно сложился, но вы хотите расширить горизонты, получить
        объективный взгляд со стороны или узнать что-то новое о себе.</p>
      </div>
      <h2 class="service-page__title">Как все будет</h2>
      <ul>
        <li class="service-page__list-item-how">Мы встречаемся с вами лично в удобной для вас форме</li>
        <li class="service-page__list-item-how">Определяем задачу, которую должны выполнить в процессе шоппинга</li>
        <li class="service-page__list-item-how">Определяем бюджет и маршрут шоппинга</li>
        <li class="service-page__list-item-how">Совершаем покупки вместе. Вы можете купить только те вещи, которые вам понравятся</li>
        <li class="service-page__list-item-how">Составим шоппинг-лист на будущее</li>
      </ul>
      <h2 class="service-page__title">Результат</h2>
      <ul>
        <li class="service-page__list-item-result">Экономия времени и денег на шоппинг</li>
        <li class="service-page__list-item-result">Капсульный гардероб из купленных вещей</li>
        <li class="service-page__list-item-result">Рекомендации по сочетанию купленных вещей с уже существующим гардеробом</li>
        <li class="service-page__list-item-result">Совершаем покупки вместе. Вы можете купить только те вещи, которые вам понравятся</li>
      </ul>
      <h2 class="service-page__title">Стоимость</h2>
      <ul>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★★★</span>
          <span class="service-page__status">VIP-стилист</span>
          <span class="service-page__price">2000 р / час</span>
        </li>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★★</span>
          <span class="service-page__status">Стилист 1 категории</span>
          <span class="service-page__price">1500 р / час</span>
        </li>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★</span>
          <span class="service-page__status">Начинающий стилист</span>
          <span class="service-page__price">1000 р / час</span>
        </li>
      </ul>
      <h2 class="service-page__title">Выберите своего стилиста</h2>
      <div class="service-page__stylists">
        <div class="service-page__stylist">
          <img class="service-page__stylist-photo" src="img/stylist1.png" alt="стилист Виктория">
          <span class="service-page__stylist-stars">★★★</span>
          <span class="service-page__stylist-name">Крупинова Евгения</span>
          <span class="service-page__stylist-status">VIP-стилист</span>
          <button class="btn btn--action btn--action-super-small">3500 р/час</button>
        </div>
        <div class="service-page__stylist">
          <img class="service-page__stylist-photo" src="img/stylist2.png" alt="стилист Виктория">
          <span class="service-page__stylist-stars">★★★</span>
          <span class="service-page__stylist-name">Романова Екатерина</span>
          <span class="service-page__stylist-status">VIP-стилист</span>
          <button class="btn btn--action btn--action-super-small">3500 р/час</button>
        </div>
      </div>
    </div>
  </section>
@endsection