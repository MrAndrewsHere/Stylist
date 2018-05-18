@extends('layouts.layout')

@section('title','Наши стилисты')

@section('content')
  <section class="section section--stylists">
    <h1 class="section__title">Профиль стилиста</h1>
    <div class="container">
      <div class="card card__margin card__margin--profile">
        <div class="card__photo-block">
          <img class="card__photo--stylist" src="{{$stylist->user->avatar}}" alt="стилист"/>
        </div>

        <div class="card__description">
          <div class="card__description__text">
            <span class="card__description__title">
              Имя:
            </span>
            {{$stylist->user->name}}
          </div>

          <div class="card__description__text">
            <span class="card__description__title">
              Фамилия:
            </span>
            {{$stylist->user->second_name}}
          </div>

          <div class="card__description__text">
            <span class="card__description__title">
              Обо мне:
            </span>
            {{$stylist->about}}
          </div>

          @if(isset($stylist->category->name))
            <div class="card__description__text">
              <span class="card__description__title">
                Класс:
              </span>
              {{$stylist->category->name}}
            </div>
          @endif

          <div class="card__description__text">
            <span class="card__description__title">
              Образование:
            </span>
            {!! nl2br(e($stylist->education))!!}
          </div>

          <div class="card__description__text">
            <span class="card__description__title">
              Город:
            </span>
            {{$stylist->user->city}}
          </div>
        </div>
      </div>

      <h2 class="title-second">Портфолио</h2>

      <div class="slider slider--portfolio">
        <div class="slide">
          <div class="slide__wrapper">
            <div class="slide__photos">
              <div class="photo__first"><img src="/img/clients/1before.png" alt=""/></div>
              <div class="photo__second"><img src="/img/clients/1after.png" alt=""/></div>
            </div>

            <div class="comment">
              <div class="comment__info">
                <div class="comment__text">
                  <span class="comment__title">Цель клиента — </span>
                  Подобрать новые вещи к гардеробу и обновить стиль
                </div>
                <div class="comment__text">
                  <span class="comment__title">Комментарий стилиста — </span>
                  После нашего преображения Евгения стала такой няшкой милашкой, что теперь её точно возьмут замуж
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide__wrapper">
            <div class="slide__photos">
              <div class="photo__first"><img src="/img/clients/2before.png" alt=""/></div>
              <div class="photo__second"><img src="/img/clients/2after.png" alt=""/></div>
            </div>

            <div class="comment">
              <div class="comment__info">
                <div class="comment__text">
                  <span class="comment__title">Цель клиента — </span>
                  Подобрать новые вещи к гардеробу и обновить стиль
                </div>
                <div class="comment__text">
                  <span class="comment__user-text-title">Комментарий стилиста — </span>
                  После нашего преображения Евгения стала такой няшкой милашкой, что теперь её точно возьмут замуж
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="slide__wrapper">
            <div class="slide__photos">
              <div class="photo__first"><img src="/img/clients/3before.png" alt=""/></div>
              <div class="photo__second"><img src="/img/clients/3after.png" alt=""/></div>
            </div>

            <div class="comment">
              <div class="comment__info">
                <div class="comment__user-text-text">
                  <span class="comment__user-text-title">Цель клиента — </span>
                  Подобрать новые вещи к гардеробу и обновить стиль
                </div>
                <div class="comment__user-text-text">
                  <span class="comment__user-text-title">Комментарий стилиста — </span>
                  После нашего преображения Евгения стала такой няшкой милашкой, что теперь её точно возьмут замуж
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

