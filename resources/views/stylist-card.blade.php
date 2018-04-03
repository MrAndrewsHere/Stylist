@extends('layouts.layout')

@section('title','Наши стилисты')

@section('content')
  <section class="section section--stylists section__home">
    <h1 class="section__title">Профиль стилиста</h1>
    <div class="container">
      <div class="card card__margin">
        <div class="card__photo-block"><img src="{{$stylist->user->avatar}}" alt="стилист"/>
          <button  class="btn btn--action btn__card">Выбрать стилиста</button>
        </div>
        <div class="card__description">
          <div class="card__description__title">{{$stylist->user->name}}</div>
          <div class="card__review-stars">
            <label title="ужасно">
              <input type="radio" id="star-4"/>
            </label>
            <label title="плохо">
              <input type="radio" id="star-3"/>
            </label>
            <label title="средне">
              <input type="radio" id="star-2"/>
            </label>
            <label title="хорошо">
              <input type="radio" id="star-1"/>
            </label>
            <label title="отлично">
              <input type="radio" id="star-0"/>
            </label>
          </div>
          <div class="card__description__text">Каждая женщина, как цветок — неповторима. В каждой заложена уникальная
            природная красота. И я с удовольствием помогу вам ее раскрыть и усилить. Я открою вам коды доступа к вашей
            внешности. Предлагаю индивидуальный подход именно к вашей внешности и к вашим задачам. Каждый мужчина
            стремится стать более успешным и желает выглядеть стильно и уверенно. К вашим услугам разные варианты
            шоппинга, разбор гардероба, консультации по имиджу.
          </div>
          <div class="card__title-second">Категория</div>
          <div class="card__description__text">{{$stylist->category->describe}}</div>
          <div class="card__title-second">Опыт работы</div>
          <div class="card__description__text">Работала 3 года в компании "Пентхаус", занималась: Окрашиванием волос,
            укладкой, завивкой волос, женскими и мужскими стрижками, консультированием клиентов
          </div>
          <div class="card__title-second">Образование</div>
          <div class="card__description__text">Казанский Федеральный университет, факультет РГФ</div>
        </div>
      </div>
      <a class="card__description__title card__description__title--center" href="portfolio.html">Портфолио <span
          class="card__count">(10)</span></a>
      <div class="slider slider--portfolio">
        <div class="slide">
          <div class="slide__wrapper">
            <div class="slide__photos">
              <div class="photo__first"><img src="img/clients/1after.png" alt=""/></div>
              <div class="photo__second"><img src="img/clients/1before.png" alt=""/></div>
            </div>
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="img/user-photo/1.png" alt="" width="79px" height="79px"/></div>
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
              <div class="photo__first"><img src="img/clients/2after.png" alt=""/></div>
              <div class="photo__second"><img src="img/clients/2before.png" alt=""/></div>
            </div>
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="img/user-photo/1.png" alt="" width="79px" height="79px"/></div>
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
              <div class="photo__first"><img src="img/clients/3after.png" alt=""/></div>
              <div class="photo__second"><img src="img/clients/3before.png" alt=""/></div>
            </div>
            <div class="comment comment__slider">
              <div class="comment__user-photo"><img src="img/user-photo/1.png" alt="" width="79px" height="79px"/></div>
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

