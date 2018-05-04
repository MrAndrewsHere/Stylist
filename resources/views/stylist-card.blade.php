@extends('layouts.layout')

@section('title','Наши стилисты')

@section('content')
  <section class="section section--stylists section__home">
    <h1 class="section__title">Профиль стилиста</h1>
    <div class="container">
      <div class="card card__margin">
        <div class="card__photo-block">
          <img class="card__photo--stylist" src="{{$stylist->user->avatar}}" alt="стилист"/>
          <button  class="btn btn--action btn__card">Выбрать стилиста</button>
        </div>
        <div class="card__description">
          <div class="card__description__title">Имя:
            <span class="card__description__text">
              {{$stylist->user->name}}
            </span>
          </div>
          <div class="card__description__title">Фамилия:
            <span class="card__description__text">
              {{$stylist->user->second_name}}
            </span>
          </div>
          <div class="card__description__title">Обо мне:
            <span class="card__description__text">
              {!! nl2br(e($stylist->about))!!}
            </span>
          </div>

          @if(isset($stylist->category->name))
            <div class="card__description__title">
              Класс:
              <span class="card__description__text">
                {{$stylist->category->name}}
              </span>
            </div>
          @endif

          <div class="card__description__title">Образование:
            <span class="card__description__text">
              {!! nl2br(e($stylist->education))!!}
            </span>
          </div>
          
          <div class="card__description__title">Город:
            <span class="card__description__text">
              {{$stylist->user->city}}
            </span>
          </div>
          
        </div>
      </div>
      <a class="card__description__title card__description__title--center">Портфолио</a>

      <div class="slider slider--portfolio">
        <div class="slide">
          <div class="slide__wrapper">
            <div class="slide__photos">
              <div class="photo__first"><img src="/img/clients/1before.png" alt=""/></div>
              <div class="photo__second"><img src="/img/clients/1after.png" alt=""/></div>
            </div>
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="/img/user-photo/user-pic.png" alt="" width="79px" height="79px"/></div>
              <div class="comment__user-block">
                <div class="comment__user-text-title">Марина, 35 лет</div>
                <div class="comment__user-text-text">Мне очень понравилось работать со стилистом Евгенией, она подобрала
                  мне новый стиль! Теперь у меня отличное портфолио из моих стилей.
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
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="/img/user-photo/user-pic.png" alt="" width="79px" height="79px"/></div>
              <div class="comment__user-block">
                <div class="comment__user-text-title">Марина, 35 лет</div>
                <div class="comment__user-text-text">Мне очень понравилось работать со стилистом Евгенией, она подобрала
                  мне новый стиль! Теперь у меня отличное портфолио из моих стилей.
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
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="/img/user-photo/user-pic.png" alt="" width="79px" height="79px"/></div>
              <div class="comment__user-block">
                <div class="comment__user-text-title">Марина, 35 лет</div>
                <div class="comment__user-text-text">Мне очень понравилось работать со стилистом Евгенией, она подобрала
                  мне новый стиль! Теперь у меня отличное портфолио из моих стилей.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

