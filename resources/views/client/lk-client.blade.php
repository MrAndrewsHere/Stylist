@extends('layouts.layout')

@section ('title','Личный кабинет')

@section('content')
  <section class="section section--lk-client">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="lk-client">
      <div class="container">
        <div class="lk-stylist__block">
          <div class="card card__margin">
            <div class="card__photo-block">
              <a href="{{url('/settings')}}">
                <img class="lk__photo" src="{{Auth::user()->avatar}}" alt="клиент"/>
              </a>
              <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a>
            </div>
            <div class="card__description">
              <div class="card__description__text">
                <span class="card__description__title">
                  Имя:
                </span>
                {{Auth::user()->name}} 
              </div>

              <div class="card__description__text">
                <span class="card__description__title">
                  Фамилия:
                </span>
                {{Auth::user()->second_name}}
              </div>

              <div class="card__description__text">
                <span class="card__description__title">
                  Город:
                </span>
                {{Auth::user()->city}}
              </div>
            </div>
          </div>
        </div>

        <div class="lk-stylist__block">
          <h2 class="title-second">Email-рассылка</h2>
          <label>
            <input type="checkbox">
            Подписаться на email-рассылку интересных материалов
          </label>
          <br>
          <label>
            <input type="checkbox">
            Подписаться на email-рассылку новостей и обновлений
          </label>
        </div>
      </div>
    </div>
  </section>
@endsection

