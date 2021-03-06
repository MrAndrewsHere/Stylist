@extends('layouts.layout')

@section('title','Наши услуги')

@section('content')
  <section class="section section--services">
    <h1 class="section__title">Наши услуги</h1>
    <div class="container">
      <select id="filter-services" class="select">
        <option value="card">Все категории</option>
        <option value="shopping">Шоппинг</option>
        <option value="styleSolution">Стилевое решение</option>
        <option value="specialSituation">Особый случай</option>
        <option value="onlineServices">Онлайн услуги</option>
      </select>

      <div id="services">
      @if(isset($AllServices))
        @foreach($AllServices as $service)
          <div class="card card__margin {{ $service ->category->first()->name }}">
            <div class="card__photo-block card__photo-block--service">
              <img class="card__photo card__photo--service" src="{{ $service->picture }}" alt="услуга {{$service->name}}"/>
            </div>

            <div class="card__description card__description--services">
              <a class="card__description__title" href="{{url('/service-page',$service->id)}}">{{$service->name}}</a>
              <div class="card__description__text card__description__text--price">{{"от ".$service->PriceForVip4()." ₽"}}</div>
              <div class="card__description__text">{{$service->description}}</div>
              <div class="card__description__text"><b>Результат: </b>
                <span class="card__description__result">{{$service->result}}</span>
              </div>
              <div class="card__choose-price">
                <a href="{{url('/service-page',$service->id)}}" class="btn btn--action btn--action-small">
                  Подробнее
                </a>
              </div>
            </div>
          </div>
        @endforeach
      @endif
      </div>
    </div>

  </section>
@endsection