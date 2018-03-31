@extends('layouts.layout')

@section('title','Главная')

@section ('content')
  <div class="slider section__home">
    <div class="slide">
      <div class="photo__first"><img src="img/home_client_before.jpg" width="320px" alt=""/></div>
      <div class="photo__second"><img src="img/home_client_after.jpg" width="320px" alt=""/></div>
    </div>
    <div class="slide">
      <div class="photo__first"><img src="img/client2.jpg" width="320px" alt=""/></div>
      <div class="photo__second"><img src="img/client3.jpg" width="320px" alt=""/></div>
    </div>
  </div>
  
  <div class="container-home">
    <div class="information">
      <div class="infrotamtion__what">
        <h2 class="information__title">Что это за проект?</h2>
        <p class="information__text">Не всем дано сходу подобрать свой образ. Каждая женщина мечтает
          найти свой стиль и изюменку. Наши стилисты помогут вам. Также помогаем мужчинам :)</p>
      </div>

      <div class="infrotamtion__help">
        <h2 class="information__title">Стилисты помогут</h2>
        <p class="information__text">Мы поможем подобрать вам идеальный стиль. Наши стилисты помогут вам
          в этом. В нашей базе более n стилистов и каждый день их количество растет.</p>
      </div>

      <div class="infrotamtion__guarantee">
        <h2 class="information__title">Гарантия 100%</h2>
        <p class="information__text">Вы получаете гарантию на то, что вы преобразитесь в лучшую сторону.
          Наши стилисты проходят тщательный контроль и вы можете быть уверены в успехе вашего
          нового образа.</p>
      </div>
    </div>
  </div>
  <div class="start-change">
    <button class="btn btn--action">Начать преображение</button>
  </div>
@endsection




