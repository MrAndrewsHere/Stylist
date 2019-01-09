@extends('layouts.layoutSlick')

@section('title','Личный кабинет')

@section('content')
  <section class="section">
    <h1 class="section__title">Личный кабинет</h1>
    <div class="container">
      <div class="message-success"></div>
      <div class="message-error"></div>
      <div class="lk__block">
        <div class="card card__margin">
          <div class="card__photo-block">
            <a href="{{url('/settings')}}">
              <img class="lk__photo" src="{{Auth::user()->avatar}}" alt="стилист {{Auth::user()->name}} {{Auth::user()->second_name}}"/>
            </a>
            <a class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a>
            @if (isset(Auth::user()->stylist->category))
              @else
              @if(! Auth::user()->stylist->is_Send_Confirmed())
            <button class="btn btn__card btn--edit" id="send_confirm_btn" style="background-color: white;color: black;box-shadow: 0 0px 10px 5px rgba(8,76,71,0.5)">Отправить заявку на подтверждение</button>
              @endif
              @endif
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
                  Город:
                </span>
                {{Auth::user()->city}}
              </div>

                @if (isset(Auth::user()->stylist->category))
                <div class="card__description__text">
                <span class="card__description__title">
                  Категория:
                </span>

                  <span class="card__description__text card__description__text--price" >
                      {{Auth::user()->stylist->category->name}}
                  </span>
                </div>
                <div class="card__description__text">
                <span class="card__description__title">
                  Комиссия
                </span>
                  <span class="card__description__text card__description__text--price" style="color: #8b0b3d">
                    {{Auth::user()->stylist->commission." %"}}
                  </span>

                </div>
                @else
                <div class="card__description__text">
                <span class="card__description__title">
                  Категория:
                </span>
                  @if(! Auth::user()->stylist->is_Send_Confirmed())
                  <span style="color: darkred">Для активации профиля, отправте заявку администратору, предварительно заполнив данные о себе. После подтверждения Вам будет выставлена категория, а так же предоставлена возможность принимать заказы.</span>
                  @else
                    <span class="card__description__text card__description__text--price">Заявка отправлена</span>
                  @endif

                </div>
                @endif




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

      <div class="lk__block">
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
        <div class="lk__block">
          <h2 class="title-second">Дипломы и сертификаты</h2>
          <div class="lk-stylist__education lk-stylist__education--empty">
            <div>
              <span>Вы еще не добавили сертификаты</span>
              <a href="{{url('/settings')}}" class="btn btn__card btn--edit">Добавить</a>
            </div>
          </div>
        </div>
      @endif
      <div class="lk__block">
        <h2 class="title-second">Мои услуги</h2>

          <div>
            <div id="services" style="max-height: 500px;overflow-y: auto">
              @if(isset($Services))
                @foreach($Services as $service)
                  <div class="card card__margin {{ $service ->category->first()->name }}">
                    <div class="card__photo-block card__photo-block--service">
                      <img class="card__photo card__photo--service" src="{{ $service->picture }}" alt="услуга {{$service->name}}"/>
                    </div>

                    <div class="card__description card__description--services">
                      <a class="card__description__title" href="{{url('/service-page',$service->id)}}">{{$service->name}}</a>
                      <div class="card__description__text card__description__text--price">{{$service->PriceForVip4()." ₽"}}</div>
                      <div class="card__description__text">{{$service->description}}</div>
                      <div class="card__description__text"><b>Результат: </b>
                        <span class="card__description__result">{{$service->result}}</span>
                      </div>

                      <div class="card__choose-price">
                        @if(Auth::user()->stylist->services->contains('id',$service->id))
                        <form class="AddService_To_Stylist ">
                          {{csrf_field()}}
                          <input hidden="true" name="service_id" value="{{$service->id}}">
                        <button style="background-color: darkred" class="btn btn--action btn--action-small" value="{{$service->id}}">
                         Удалить
                        </button>
                          </form>
                        @else
                        <form class="AddService_To_Stylist red">
                          {{csrf_field()}}
                          <input hidden="true" name="service_id" value="{{$service->id}}">


                            <button  class="btn btn--action btn--action-small" value="{{$service->id}}">
                              Добавить
                            </button>

                        </form>
                        @endif
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
            </div>
          </div>

      </div>
    </div>
  </section>
@endsection
<script>

  </script>