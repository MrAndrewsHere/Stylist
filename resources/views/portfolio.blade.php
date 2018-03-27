@extends('layout')

@section('title','Портфолио')

@section('content')
  <section class="section section--portfolio section__home">
    <h1 class="section__title">Портфолио</h1>
    <h3>@if(Session::has('success')) {{Session::get('success')}} @endif </h3>
    <div class="container">
      <div class="portfolio portfolio__title">
        <form class="portfolio-item portfolio-item--editing portfolio__margin" method="POST"
              enctype="multipart/form-data"
              action="{{route('portfolio.store')}}">
          {{csrf_field()}}
          <div class="portfolio-item__photos">
            <div class="slide__photos">
              <label class="label__photo">Фото до
                <input class="input__photo" id="before" name="before" multiple name="file[]" type="file"/>
              </label>
              <label class="label__photo">Фото после
                <input class="input__photo" name="after" type="file"/>
              </label>
            </div>
          </div>
          <div class="portfolio-item__text portfolio-item__text--add">
            <label>Дата
              <input class="form__input" type="date" value="Евгения"/>
            </label>
            <label>Цель клиента
              <input class="form__input" type="text"/>
            </label>
            <label>Заказанные услуги
              <input class="form__input" type="text"/>
            </label>
            <label>Комментарии стилиста
              <input class="form__input" type="text"/>
            </label>
            <div class="start-change">
              <input class="btn btn--action" type="submit" value="Добавить"/>
            </div>
          </div>
        </form>
        <div class="portfolio-item portfolio__margin">
          <div class="portfolio-item__photos">
            <div class="slide__photos">
              <div class="photo__first"><img src="{{Auth::user()->picture}}" alt=""/></div>
              <div class="photo__second"><img src="img/clients/1after.png" alt=""/></div>
            </div>
          </div>
          <div class="portfolio-item__text">
            <div class="card__title-second">Дата</div>
            <div class="card__description__text">22 сентября 2016</div>
            <div class="card__title-second">Цель клиента</div>
            <div class="card__description__text">Сделать правильный образ на работу и перестать быть серой мышкой</div>
            <div class="card__title-second">Заказанные услуги</div>
            <div class="card__description__text">Подбор макияжа, Подбор стиля</div>
            <div class="card__title-second">Комментарии стилиста</div>
            <div class="card__description__text">Клиент был очень не уверен в себе мы помогли ему раскрепоститься и
              стать более красивой
            </div>
            <div class="comment">
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
        <div class="portfolio-item portfolio__margin">
          <div class="portfolio-item__photos">
            <div class="slide__photos">
              <div class="photo__first"><img src="img/clients/2before.png" alt=""/></div>
              <div class="photo__second"><img src="img/clients/2after.png" alt=""/></div>
            </div>
          </div>
          <div class="portfolio-item__text">
            <div class="card__title-second">Дата</div>
            <div class="card__description__text">22 сентября 2016</div>
            <div class="card__title-second">Цель клиента</div>
            <div class="card__description__text">Сделать правильный образ на работу и перестать быть серой мышкой</div>
            <div class="card__title-second">Заказанные услуги</div>
            <div class="card__description__text">Подбор макияжа, Подбор стиля</div>
            <div class="card__title-second">Комментарии стилиста</div>
            <div class="card__description__text">Клиент был очень не уверен в себе мы помогли ему раскрепоститься и
              стать более красивой
            </div>
            <div class="comment">
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
        <div class="portfolio-item portfolio__margin">
          <div class="portfolio-item__photos">
            <div class="slide__photos">
              <div class="photo__first"><img src="img/clients/3before.png" alt=""/></div>
              <div class="photo__second"><img src="img/clients/3after.png" alt=""/></div>
            </div>
          </div>
          <div class="portfolio-item__text">
            <div class="card__title-second">Дата</div>
            <div class="card__description__text">22 сентября 2016</div>
            <div class="card__title-second">Цель клиента</div>
            <div class="card__description__text">Сделать правильный образ на работу и перестать быть серой мышкой</div>
            <div class="card__title-second">Заказанные услуги</div>
            <div class="card__description__text">Подбор макияжа, Подбор стиля</div>
            <div class="card__title-second">Комментарии стилиста</div>
            <div class="card__description__text">Клиент был очень не уверен в себе мы помогли ему раскрепоститься и
              стать более красивой
            </div>
            <div class="comment">
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