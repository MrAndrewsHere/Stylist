@extends('layouts.layout')

@section('title','Панель администратора')

@section('content')
  <section class="section section--admin">
    <h1 class="section__title">Панель администратора</h1>
    <div class="container">
      <h2 class="title-second">Новые заявки <span class="alert">(2)</span></h2>

      <div class="admin-request">
        <div class="admin-request__new">
          <h3 class="title-block">Стилисты:</h3>
          <a href="#" class="admin-request__person admin-request__person--active">Екатерина Романова</a>
          <a href="#" class="admin-request__person">Ирина Фесенко</a>
        </div>

        <div class="admin-request__about">
          <div class="lk-stylist__block">
            <div class="card">
              <div class="card__photo-block">
                <a href="{{url('/settings')}}">
                  <img class="lk__photo" src={{Auth::user()->avatar}} alt="стилист"/>
                </a>
              </div>

              @if (Auth::user()->role->name == 'stylist')
                <div class="card__description">
                  <div class="card__description__title">Имя:
                    <span class="card__description__text">
                      {{Auth::user()->name}} 
                    </span>
                  </div>
                  <div class="card__description__title">Фамилия:
                    <span class="card__description__text">
                    {{Auth::user()->second_name}}
                    </span>
                  </div>
                  <div class="card__description__title">Обо мне:
                    <span class="card__description__text">
                      {{Auth::user()->stylist->about}}
                    </span>
                  </div>
                  <div class="card__description__title">Класс:
                    <span class="card__description__text">
                      {{Auth::user()->stylist->category->name}}
                    </span>
                  </div>
                  <div class="card__description__title">Образование:
                    <span class="card__description__text">
                      {{Auth::user()->stylist->education}}
                    </span>
                  </div>
                  <div class="card__description__title">Город:
                    <span class="card__description__text">
                      {{Auth::user()->city}}
                    </span>
                  </div>
                </div>
              @else
                <div class="card__description">
                  <div class="card__description">
                    <div class="card__description__title">{{Auth::user()->name}} {{Auth::user()->second_name}}</div>
                    <div class="card__description__text"></div>
                    <div class="card__description__title">Класс</div>
                    <div class="card__description__text"></div>
                    <div class="card__description__title">Опыт работы</div>
                    <div class="card__description__text"></div>
                    <div class="card__description__title">Образование</div>
                    <div class="card__description__text"></div>
                  </div>
                </div>
              @endif
            </div>
          </div>

          <div class="lk-stylist__block">
            <h3 class="title-block">Дипломы и сертификаты</h2>
            <div class="lk-stylist__education lk-stylist__education--filled">
              <div class="lk-stylist__education-document">
                <a href="img/diplom1.jpg">
                  <img src="img/diplom1.jpg" alt="диплом" class="lk-stylist__diplom">
                </a>
              </div>

              <div class="lk-stylist__education-document">
                <a href="img/diplom2.jpg">
                  <img src="img/diplom2.jpg" alt="диплом" class="lk-stylist__diplom">
                </a>
              </div>

              <div class="lk-stylist__education-document">
                <a href="img/diplom1.jpg">
                  <img src="img/diplom1.jpg" alt="диплом" class="lk-stylist__diplom">
                </a>
              </div>

              <div class="lk-stylist__education-document">
                <a href="img/diplom3.jpg">
                  <img src="img/diplom3.jpg" alt="диплом" class="lk-stylist__diplom">
                </a>
              </div>
            </div>
          </div>

          <div class="admin-request__accept">
            <h3 class="title-block">Выберите категорию стилиста</h3>
            <select class="select">
              <option value="all">Все категории</option>
              <option value="">Vip-стилист</option>
              <option value="">Стилист первой категории</option>
              <option value="">Начинающий стилист</option>
            </select>
            <div class="admin-request__accept-buttons">
              <button class="btn btn__card btn--edit">Принять</button>
              <button class="btn btn__card btn--edit">Отклонить</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection