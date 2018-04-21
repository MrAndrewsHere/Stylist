@extends('layouts.layout')

@section('title','Наши услуги')

@section('content')
  <section class="section section--services section__home">
    <h1 class="section__title">Наши услуги</h1>
    <div class="container">
      <div class="services__filters">
        <button class="btn btn--filter">Все</button>
        <button class="btn btn--filter btn--filter-non-active">Шоппинг</button>
        <button class="btn btn--filter btn--filter-non-active">Стилевое решение</button>
        <button class="btn btn--filter btn--filter-non-active">Особый случай</button>
        <button class="btn btn--filter btn--filter-non-active">Онлайн услуги</button>
      </div>
      <span>@if(Session::has('success')) {{Session::get('success')}} @endif</span>
      {{--@if(isset($services))--}}
      @foreach(\App\Service::all() as $service)
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
                  <form method="post" action="{{url('/add_service_to_client')}}">
                    {{csrf_field()}}
                    <button type="submit" name="s" value="{{$service->id}}" class="btn btn--action btn--action-small">
                      3500 р/час
                    </button>
                  </form>
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
      {{--@endif--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/analysis-wardrobe.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Разбор гардероба</div>--}}
      {{--<div class="card__description__text">Выявление скрытых возможностей вашего гардероба, создание комплектовс уже--}}
      {{--имеющимися вещами. Рекомендации по недостающим предметам одежды.для дополнения гардероба.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/create-style.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Разработка стилевого решения</div>--}}
      {{--<div class="card__description__text">Встреча с личным стилистом, обсуждение ваших пожеланий, определениевашего--}}
      {{--цветотипа, фигуры, для подбора наилучшие решения.На решение задачи дается 1-2 недели, после этого, в вашем--}}
      {{--ЛК появитсяразработанное стилевое решение (15 образов, советы по прическе и макияжу)--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/shopping-support.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Шоппинг-сопровождение (возможно, в онлайн магазинах)</div>--}}
      {{--<div class="card__description__text">Данная услуга осуществляется только после имидж-консультации,--}}
      {{--котораяможет быть проведена также в скайпе. Стилист свяжется с вами и вы обсудитедетали шоппинга: ваши--}}
      {{--пожелания, цели, бюджет на покупки, и т.п. Такимобразом стилист сформулирует задачу. После этого вы идете с--}}
      {{--вашим личнымстилистом по магазинам.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">за 3-4 часa шопинг-сопровождения обычно можно создать несколькополных комплектов одежды с обувью и аксессуарами.</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/selection-hairstyle.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Подбор прически. Можно онлайн, при отпрвлениии фотографии и скайп</div>--}}
      {{--<div class="card__description__text">Cопровождение в салон красоты. Потом предлагает варианты и пойдет с вамив--}}
      {{--салон красоты, он будет разговоривать с мастером, обяснять что нужно ибыть рядом чтобы контролировать--}}
      {{--процесс стрижки, и/или окрашивания волос.Салон красоты может быть тот, куда вы постоянно ходите, может быть--}}
      {{--рядомс домом, или сам стилист может рекомендовать несколько вариантов: выбор за вами--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">новая стрижка и/или цвет волос, и стилист покажет 3 вида прически которые большевсего вам подходят: повседневный, вечерный или клубный, и на свидание илина прогулку.</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/select-makeup.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Подбор макияжа (2 образа, обучение, шоппинг косметики)</div>--}}
      {{--<div class="card__description__text">Встреча с личным стилистом, в процессе которой стилист определитваш--}}
      {{--цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может--}}
      {{--быть проведена в скайпе.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/photo-session.png"--}}
      {{--alt="стилист"/></div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Фотосессия</div>--}}
      {{--<div class="card__description__text">Встреча с личным стилистом, в процессе которой стилист определитваш--}}
      {{--цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может--}}
      {{--быть проведена в скайпе.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/new-look.png" alt="стилист"/>--}}
      {{--</div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Пакет или подарочный сертификат «New look»</div>--}}
      {{--<div class="card__description__text">Встреча с личным стилистом, в процессе которой стилист определитваш--}}
      {{--цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может--}}
      {{--быть проведена в скайпе.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card card__margin">--}}
      {{--<div class="card__photo-block card__photo-block--service"><img class="card__photo card__photo--service"--}}
      {{--src="img/services/make-over.png" alt="стилист"/>--}}
      {{--</div>--}}
      {{--<div class="card__description card__description--services">--}}
      {{--<div class="card__description__title">Пакет или подарочный сертификат «Make-over»</div>--}}
      {{--<div class="card__description__text">Встреча с личным стилистом, в процессе которой стилист определитваш--}}
      {{--цветотип, тип фигуры, вы получите рекомендации по подбору одежды исоветы по стилю. Имидж-консультация может--}}
      {{--быть проведена в скайпе.--}}
      {{--</div>--}}
      {{--<div class="card__description__text"><b>Результат </b><span class="card__description__result">у клиента в кабинете появляется информация от стилиста</span>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price">--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Vip стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">3500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Стилист первой категории</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">2500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--<div class="card__choose-price-block">--}}
      {{--<div class="card__choose-price__category"><b>Начинающий стилист</b></div>--}}
      {{--<div class="card__choose-price__cost">--}}
      {{--<button class="btn btn--action btn--action-small">1500 р/час</button>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
      {{--</div>--}}
    </div>
  </section>
@endsection
