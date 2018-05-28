@extends('layouts.layout')

@section('title','Личный кабинет')

@section('content')
  <section class="section section--lk-stylist">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="lk-stylist">
      <div class="container">

        <div class="lk-stylist__block">
          <div class="card card__margin">
            <div class="card__photo-block">
              <a href="{{url('/settings')}}">
                <img class="lk__photo" src={{Auth::user()->avatar}} alt="стилист"/>
              </a>
              <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a>
            </div>

            @if (Auth::user()->role->name == 'stylist')
              <div class="card__description">
                <div class="card__description__text">
                  <span class="card__description__title">
                    Имя:
                  </span>
                  {{Auth::user()->name}}
                </div>

                <div class="card__description__text">
                  <span class="card__description__title">
                    Фамилия:
                  </span>
                  {{Auth::user()->second_name}}
                </div>

                <div class="card__description__text">
                  <span class="card__description__title">
                    Обо мне:
                  </span>
                  {{Auth::user()->stylist->about}}
                </div>

                <div class="card__description__text">
                  <span class="card__description__title">
                    Категория:
                  </span> 
                     {{isset(Auth::user()->stylist->category) ? 
                      Auth::user()->stylist->category->name : ''}}
                </div>

                <div class="card__description__text">
                  <span class="card__description__title">
                    Город:
                  </span>
                  {{Auth::user()->city}}
                </div>
              </div>
            @else
              <div class="card__description">
                <div class="card__description">
                  <div class="card__description__text">{{Auth::user()->name}} {{Auth::user()->second_name}}</div>
                  <div class="card__description__title"></div>
                  <div class="card__description__text">Категория</div>
                  <div class="card__description__title"></div>
                  <div class="card__description__text">Опыт работы</div>
                  <div class="card__description__title"></div>
                  <div class="card__description__text">Образование</div>
                  <div class="card__description__title"></div>
                </div>
              </div>
            @endif
          </div>
        </div>
        @if($files->first() !== null)

          <div class="lk-stylist__block">
            <h2 class="title-second">Дипломы и сертификаты</h2>
            <div class="lk-stylist__education lk-stylist__education--filled">
              @foreach($files as $file)
              <div class="lk-stylist__education-document">
                <a href="{{$file->path}}">
                  <img src="{{$file->path}}" alt="диплом" class="lk-stylist__diplom">
                </a>
                <form class="diplom_delete">
                  {{csrf_field()}}
                  <input hidden name="diplom" value="{{$file->id}}">
                <button type="sumbit" class="btn--diplom-delete">x</button>
                </form>
              </div>
              @endforeach
            </div>
            <button class="btn btn__card btn--edit btn--edit-diploms">Редактировать</button>
          </div>

        @else
          <div class="lk-stylist__block">
            <h2 class="title-second">Дипломы и сертификаты</h2>
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>Вы еще не добавили сертификаты</span>
                <a href="{{url('/settings')}}" class="btn btn__card btn--edit">Добавить</a>
              </div>
            </div>
          </div>
        @endif

        <div class="lk-stylist__block">
          

        </div>
      </div>
    </div>
  </section>
@endsection