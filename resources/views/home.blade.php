@extends('layouts.layout')

@section('title','Главная')

@section ('content')
  <div class="banner">
    <div class="banner__slogan">
      <p class="banner__slogan-text">
        Покупайте, что вам нравится<br>
        Мы позаботимся о том, чтобы вы это носили
      </p>
      @if(Auth::check())
        <a href="/services" class="btn btn--banner">Начать преображение</a>
      @else
        <button class="btn btn--banner btn--registration">Начать преображение</button>
      @endif
    </div>
  </div>

  <div class="container-home">
    <section class="information information--help">
      <h2 class="information__title-first">
        Cтилисты помогут
      </h2>
      <p class="information__title-second">
        Выберите услугу, которая вас интересует
      </p>
      <div class="infotmation__section">
        <div class="category">
          <a href="/services">
            <img src="img/category/online-services.jpg" alt="категория услуг онлайн-услуги" class="category__image">
          </a>
          <a href="/services" class="category__link" href="">Онлайн услуги</a>
          <p class="category__description">
            Узнайте все о «своём» гардеробе, типе внешности, цветах, фасонах, получите оптимальные
            рекомендации онлайн в любом удобном для вас месте.
          </p>
        </div>

        <div class="category">
          <a href="/services">
            <img src="img/category/wedding.jpeg" alt="категория услуг особый случай" class="category__image">
          </a>
          <a href="/services" class="category__link" href="">Особый случай</a>
          <p class="category__description">
            Хотите получить новый стильный образ и сэкономить время на поиске идеальных вещей? Образ для
            вашего особого случая доверьте стилисту! Блистайте, наслаждайтесь событием или отпуском!
          </p>
        </div>

        <div class="category">
          <a href="/services">
            <img src="img/category/shopping.jpg" alt="категория услуг шоппинг-споровождение" class="category__image">
          </a>
          <a href="/services" class="category__link" href="">Шоппинг-сопровождение</a>
          <p class="category__description">
            Творческая помощь в выборе одежды — это огромная экономия личных средств. Эффективный
            шоппинг-маршрут индивидуально для вас, согласно вашему бюджету, запросу, целям, пожеланиям.
          </p>
        </div>

        <div class="category">
          <a href="/services">
            <img src="img/category/style-solution.jpg" alt="категория услуг разбор стилевого решения" class="category__image">
          </a>
          <a href="/services" class="category__link" href="">Разбор стилевого решения</a>
          <p class="category__description">
            Каждый человек уникален, и не существует на свете другого человека, в точности похожего на Вас.
            Получите свою личную концепцию стиля с учетом всех характеристик.
          </p>
        </div>
      </div>
    </section>

    <section class="information information--profit">
      <h2 class="information__title-first">
        Что это вам даст
      </h2>
      <p class="information__title-second">
        Навыки, которые вы получите работая с нашими специалистами
      </p>
      <div class="infotmation__section">
        <div class="profit">
          <svg class="profit__img">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#hanger"></use>
          </svg>
          <h3 class="profit__title">Все сочетается</h3>
          <p class="category__description">
            Умение составлять образы из вашей одежды и новых вещей. Ваша одежда подружиться с вами и между собой.
          </p>
        </div>

        <div class="profit">
          <svg class="profit__img">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#wallet"></use>
          </svg>
          <h3 class="profit__title">В рамках бюджета</h3>
          <p class="category__description">
            Выглядеть дорого и не тратить больше, чем планировали.
          </p>
        </div>

        <div class="profit">
          <svg class="profit__img">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/spritesvg.svg#diamond"></use>
          </svg>
          <h3 class="profit__title">Всегда в тренде</h3>
          <p class="category__description">
            Не отставать за изменениями в мире моды при этом подчеркивать свою индивидуальность.
          </p>
        </div>
      </div>
    </section>

    <section class="information information--stylists">
      <h2 class="information__title-first">
        Наши стилисты
      </h2>
      <p class="information__title-second">
        Познакомьтесь с нашими стилистами не выходя из дома
      </p>
      <div class="infotmation__section infotmation__section--all">
        <div class="information__stylist">
          <img src="img/stylist1.jpg" alt="стилист Евгения Удальцова" class="information__stylist-img">
          <p class="information__stylist-name">Евгения Удальцова</p>
        </div>
        <div class="information__stylist">
          <img src="img/stylist2.jpg" alt="стилсит Алиса Селезнева" class="information__stylist-img">
          <p class="information__stylist-name">Алиса Селезнева</p>
        </div>
        <div class="information__stylist">
          <img src="img/stylist3.jpg" alt="стилист Екатерина Романова" class="information__stylist-img">
          <p class="information__stylist-name">Екатерина Романова</p>
        </div>
      </div>
      <div class="information__stylist-button">
        <a href="/stylists" class="btn btn--banner btn--banner-reverse">Посмотреть всех стилистов</a>
      </div>
    </section>
  </div>
@endsection




