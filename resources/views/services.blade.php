@extends('layouts.layout')

@section('title','Наши услуги')

@section('content')
  <section class="section section--services section__home">
    <h1 class="section__title">Наши услуги</h1>
    <div class="container">
      <div class="services__filters" id="sort">
        <a href="/services/all" class="btn btn--filter">Все</a>
        <a href="/services/Шоппинг-сопровождение" class="btn btn--filter">Шоппинг</a>
        <a href="/services/Разбор стилевого решения" class="btn btn--filter">Стилевое решение</a>
        <a href="/services/Особый случай" class="btn btn--filter">Особый случай</a>
        <a href="/services/Онлайн услуги" class="btn btn--filter">Онлайн услуги</a>
      </div>
      <span>@if(Session::has('success')) {{Session::get('success')}} @endif</span>
      @if(isset($Categoryservices))
      @foreach($Categoryservices as $service)
        <div class="card card__margin">
          <div class="card__photo-block card__photo-block--service">
            <img class="card__photo card__photo--service" src="{{$service->picture}}" alt="стилист"/>
          </div>
          <div class="card__description card__description--services">
            <a class="card__description__title" href="{{url('/service-page',$service->id)}}">{{$service->name}}</a>
            <div class="card__description__text">{{$service->description}}</div>
            <div class="card__description__text"><b>Результат </b><span
                class="card__description__result">{{$service->result}}</span></div>
            <div class="card__choose-price">
              <div class="card__choose-price-block">
                <div class="card__choose-price__category"><b>Vip стилист</b></div>
                <div class="card__choose-price__cost">
                    <button type="submit"  class="btn btn--action btn--action-small">
                      3500 р/час
                    </button>
                </div>
              </div>
              <div class="card__choose-price-block">
                <div class="card__choose-price__category"><b>Стилист первой категории</b></div>
                <div class="card__choose-price__cost">
                  <button class="btn btn--action btn--action-small">2500 р/час</button>
                </div>
              </div>
              <div class="card__choose-price-block">
                <div class="card__choose-price__category"><b>Начинающий стилист</b></div>
                <div class="card__choose-price__cost">
                  <button class="btn btn--action btn--action-small">1500 р/час</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
        @endif
    </div>
  </section>
@endsection