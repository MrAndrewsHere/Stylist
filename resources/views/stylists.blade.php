@extends('layouts.layout')

@section('title','Наши стилисты')
@section('content')

  <section class="section section--stylists section__home">
    <h1 class="section__title">Наши стилисты</h1>
    <div class="container">
      <div class="stylists stylists__section">
        <ul class="stylists__sort">
          <li class="stylists__sort-category">Категория:
            <select class="select" name="category">vip
              @foreach(\App\stylistcategory::all() as $category)
                <option value="{{$category->id}}">{{$category->describe}}</option>
              @endforeach
            </select>
          </li>
          <li class="stylists__sort-category">Вид услуг: <a class="link-tab stylists__service" href="#">прическа</a><a
              class="link-tab stylists__service" href="#">макияж</a></li>
          <li class="stylists__sort-category">Сортировка по рейтингу
            <select class="select" name="">5 звезд
              <option value="five-star">5 звезд</option>
              <option value="four-star">4 звезды</option>
              <option value="three-star">3 звезды</option>
            </select>
          </li>
        </ul>
        @foreach($stylists as $stylist)
          <div class="card card__margin">
            <div class="card__photo-block">
              <img class="card__photo card__photo--stylist" src="{{$stylist->user->avatar}}" alt="стилист"/>
            </div>
            <div class="card__description">
              <div class="card__description__title">{{$stylist->user->name}}</div>
              {{--<div class="card__review-stars">--}}
                {{--<label title="ужасно">--}}
                  {{--<input type="radio" id="star-4"/>--}}
                {{--</label>--}}
                {{--<label title="плохо">--}}
                  {{--<input type="radio" id="star-3"/>--}}
                {{--</label>--}}
                {{--<label title="средне">--}}
                  {{--<input type="radio" id="star-2"/>--}}
                {{--</label>--}}
                {{--<label title="хорошо">--}}
                  {{--<input type="radio" id="star-1"/>--}}
                {{--</label>--}}
                {{--<label title="отлично">--}}
                  {{--<input type="radio" id="star-0"/>--}}
                {{--</label>--}}
              {{--</div>--}}
              <div class="card__description__text">
                Каждая женщина, как цветок — неповторима. В каждой заложена уникальная природная красота. И я с
                удовольствием помогу вам ее раскрыть и усилить. Я открою вам коды доступа к вашей внешности.
                Предлагаю индивидуальный подход именно к вашей внешности и к вашим задачам. Каждый мужчина стремится
                К вашим услугам разные варианты шоппинга, разбор гардероба, консультации по имиджу.
              </div>
              <ul class="card__photo-list">
                <li class="card__photo-list__block"><img class="card__photo-list__photo" src="img/client1.jpg" alt=""/>
                </li>
                <li class="card__photo-list__block"><img class="card__photo-list__photo" src="img/client2.jpg" alt=""/>
                </li>
                <li class="card__photo-list__block"><img class="card__photo-list__photo" src="img/client3.jpg" alt=""/>
                </li>
                <li class="card__photo-list__block"><img class="card__photo-list__photo" src="img/client1.jpg" alt=""/>
                <li class="card__photo-list__block"><img class="card__photo-list__photo" src="img/client2.jpg" alt=""/>
                </li>
              </ul>
              <form action="{{url('/stylist_profile',$stylist->id)}}">
                <button type="submit" class="btn btn--action">
                  Выбрать стилиста
                </button>
              </form>
            </div>
          </div>
        @endforeach
        <div class="stylists__upload">
          <button class="btn btn--upload-more-stylists"></button>
          <br/><span class="stylists__upload-text">Загрузить еще</span>
        </div>
      </div>
    </div>
  </section>

@endsection