
@extends('layouts.layout')

@section('title','Наши стилисты')

@section('content')

  <section class="section section--stylists">
    <h1 class="section__title">Наши стилисты</h1>
    <div class="container">
      <div class="stylists">
        <ul class="stylists__sort">
          <li class="stylists__sort-category">
            <select id="filter-stylists-category" class="select" name="category">
              <option value="all">Все категории</option>
              @if (isset($stylistcategories))
                @foreach($stylistcategories as $category)
                  <option value="{{$category->describe}}">{{$category->name}}</option>
                @endforeach
              @endif
            </select>
          </li>

          <li class="stylists__sort-category">
            <select id="filter-stylists-cities" class="select">
              <option value="all">Все города</option>
              @if (isset($cities))
                @foreach($cities as $city)
                  <option value="{{$city['Translit']}}">{{$city['RU']}}</option>
                @endforeach
              @endif
            </select>
          </li>
        </ul>

        <div id="stylists">
          @foreach($stylists as $stylist)
            <div class="card card__margin" data-category="{{ $stylist->category->describe }}" data-cities="{{ $stylist->user->cityTranslit }}">
              <div class="card__photo-block">
                <img class="card__photo card__photo--stylist" src="{{$stylist->user->avatar}}" alt="стилист {{ $stylist->user->name }}"/>
              </div>

              <div class="card__description">
                <a class="card__description__title" href="{{ url('/stylist_profile', $stylist->id) }}">
                  {{ $stylist->user->name }}
                </a>
                <div class="card__description__text">
                  {!! nl2br(e($stylist->about))!!}
                </div>
                <ul class="card__photo-list">
                  <li class="card__photo-list__block">
                    <img class="card__photo-list__photo" src="img/client1.jpg" alt="фотография клиента"/>
                  </li>
                  <li class="card__photo-list__block">
                    <img class="card__photo-list__photo" src="img/client2.jpg" alt="фотография клиента"/>
                  </li>
                  <li class="card__photo-list__block">
                    <img class="card__photo-list__photo" src="img/client3.jpg" alt="фотография клиента"/>
                  </li>
                </ul>
                <a href="{{ url('/stylist_profile', $stylist->id) }}" class="btn btn--action btn--action-small">
                  Посмотреть профиль
                </a>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

@endsection