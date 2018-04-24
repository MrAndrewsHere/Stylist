@extends('layouts.layout')

@section('title','Главная')

@section ('content')
  <div class="banner">
    <div class="banner__slogan">
      <p class="banner__slogan-text">
        Покупайте, что вам нравится<br>
        Мы позаботимся о том, чтобы вы это носили
      </p>
      <button class="btn btn--banner btn--registration">Начать преображение</button>
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
      <div class="infotmation__categories">
        <div class="category">
          <img src="img/category/online-services.jpg" alt="онлайн-услуги" class="category__image">
          <a class="category__link" href="">Онлайн услуги</a>
          <p class="category__description">
            Узнайте все о «своём» гардеробе, типе внешности, цветах, фасонах, получите оптимальные рекомендации онлайн в любом удобном для вас месте. 
          </p>
        </div>
        <div class="category">
          <img src="img/category/wedding.jpeg" alt="онлайн-услуги" class="category__image">
          <a class="category__link" href="">Особый случай</a>
          <p class="category__description">
            Хотите получить новый стильный образ и сэкономить время на поиске идеальных вещей? Образ для вашего особого случая доверьте стилисту! Блистайте, наслаждайтесь событием или отпуском!
          </p>
        </div>
        <div class="category">
          <img src="img/category/shopping.jpg" alt="онлайн-услуги" class="category__image">
          <a class="category__link" href="">Шоппинг-сопровождение</a>
          <p class="category__description">
            Творческая помощь в выборе одежды — это огромная экономия личных средств. Эффективный шоппинг-маршрут индивидуально для вас, согласно вашему бюджету, запросу, целям, пожеланиям.
          </p>
        </div>
        <div class="category">
          <img src="img/category/style-solution.jpg" alt="онлайн-услуги" class="category__image">
          <a class="category__link" href="">Разбор стилевого решения</a>
          <p class="category__description">
            Каждый человек уникален, и не существует на свете другого человека, в точности похожего на Вас. Получите свою личную концепцию стиля с учетом всех характеристик.
          </p>
        </div>
      </div>
    </section>
  </div>

  <!-- <div class="slider section__home">
    <div class="slide">
      <div class="photo__first"><img src="img/home_client_before.jpg" width="320px" alt=""/></div>
      <div class="photo__second"><img src="img/home_client_after.jpg" width="320px" alt=""/></div>
    </div>
    <div class="slide">
      <div class="photo__first"><img src="img/client2.jpg" width="320px" alt=""/></div>
      <div class="photo__second"><img src="img/client3.jpg" width="320px" alt=""/></div>
    </div>
  </div> -->
@endsection




