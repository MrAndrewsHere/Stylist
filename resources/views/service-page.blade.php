@extends('layouts.layout')

@section('title','Шоппинг сопровождение с профессиональным шоппером')

@section('content')
  <section class="section">
    <div class="container-service-page">
      <h1 class="section__title">{{$service->name}}</h1>
      <img class="service-page__photo" src="{{$service->picture}}" alt="шоппинг">
      <div class="service-page__description">
        <p>{{$service->description}}</p>
      </div>
      <h2 class="service-page__title">Как все будет</h2>
      <ul>
        <li class="service-page__list-item-how">{{$service->result}}</li>
        <li class="service-page__list-item-how">Определяем задачу, которую должны выполнить в процессе шоппинга</li>
        <li class="service-page__list-item-how">Определяем бюджет и маршрут шоппинга</li>
        <li class="service-page__list-item-how">Совершаем покупки вместе. Вы можете купить только те вещи, которые вам
          понравятся
        </li>
        <li class="service-page__list-item-how">Составим шоппинг-лист на будущее</li>
      </ul>
      <h2 class="service-page__title">Результат</h2>
      <ul>
        <li class="service-page__list-item-result">Экономия времени и денег на шоппинг</li>
        <li class="service-page__list-item-result">Капсульный гардероб из купленных вещей</li>
        <li class="service-page__list-item-result">Рекомендации по сочетанию купленных вещей с уже существующим
          гардеробом
        </li>
        <li class="service-page__list-item-result">Совершаем покупки вместе. Вы можете купить только те вещи, которые
          вам понравятся
        </li>
      </ul>
      <h2 class="service-page__title">Стоимость</h2>
      <ul>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★★★</span>
          <span class="service-page__status">VIP-стилист</span>
          <span class="service-page__price">{{$service->PriceForVip()}} р / час</span>
        </li>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★★</span>
          <span class="service-page__status">Стилист 1 категории</span>
          <span class="service-page__price">{{$service->PriceForVip2()}} р / час</span>
        </li>
        <li class="service-page__list-item-price">
          <span class="service-page__stars">★</span>
          <span class="service-page__status">Начинающий стилист</span>
          <span class="service-page__price">{{$service->PriceForVip4()}} р / час</span>
        </li>
      </ul>

      @if(Auth::check())
      <div class="message-success">@if(Session::has('success')) {{Session::get('success')}} @endif </div>
      <div class="message-error">Извините, что-то пошло не так</div>
      <h2 class="service-page__title">Выберите своего стилиста</h2>

        <div class="service-page__stylists">
          @if(isset($stylists))
            @foreach($stylists as $stylist)
              <div class="service-page__stylist">
                <img class="service-page__stylist-photo" src="{{$stylist->user->avatar}}  " alt="">
                <span class="service-page__stylist-stars">★★★</span>
                <span class="service-page__stylist-name">{{$stylist->user->name}} {{$stylist->user->second_name}}</span>
                <span class="service-page__stylist-status">{{$stylist->category->name}}</span>
                <form class="add_service_to_client">
                  {{csrf_field()}}
                  <input type="hidden" name="stylist_id" value="{{$stylist->id}}">
                  <input type="hidden" name="service_id" value="{{$service->id}}">
                  <button class="btn btn--action btn--action-super-small">Выбрать</button>
                </form>
              </div>
            @endforeach
          @endif
        </div>
      @endif

    </div>
  </section>
@endsection