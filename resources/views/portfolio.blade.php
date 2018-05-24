@extends('layouts.layout')

@section('title','Портфолио')

@section('content')
  <section class="section section--portfolio">
    <h1 class="section__title">Портфолио</h1>
    <div class="container">
      <span>@if(Session::has('success')) {{Session::get('success')}} @endif</span>
      <div class="portfolio portfolio__title">
        <form class="portfolio-item portfolio-item--editing portfolio__margin" method="POST" action="/portfolio"
              enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="portfolio-item__photos">
            <div class="slide__photos">
              <label class="label__photo">Фото до
                <input class="input__photo" id="photo-before" name="before" type="file" required/>
                <span class="form__output">
                
                </span>
              </label>
              <label class="label__photo">Фото после
                <input class="input__photo" id="photo-after" name="after" type="file" required/>
                <span class="form__output-two">
                
                </span>
              </label>
            </div>
          </div>

          <div class="portfolio-item__text portfolio-item__text--add">
            <label>Дата
              <br>
              <input class="form__input" type="date" name="date" required/>
            </label>
            <br>
            <label>Цель клиента
              <input class="form__input" name="purpose" type="text" required/>
            </label>
            <label>Заказанные услуги
              <input class="form__input" type="text" required/>
            </label>
            <label>Комментарии стилиста
              <input class="form__input" name="comments" type="text" required/>
            </label>
            <div class="start-change">
              <button class="btn btn--action" type="submit">Добавить</button>
            </div>
          </div>
        </form>

        @if(isset($portfols))
          @foreach($portfols as $portfol)
            <div class="portfolio-item portfolio__margin">
              <div class="portfolio-item__photos">
                <div class="slide__photos">
                  <div class="photo__first">
                    <img src="{{$portfol->picture_before}}" class="portfolio__photo" alt=""/>
                  </div>
                  <div class="photo__second">
                    <img src="{{$portfol->picture_after}}" class="portfolio__photo" alt=""/>
                  </div>
                </div>
              </div>
              <div class="portfolio-item__text">
                <div class="card__description__title">Дата</div>
                <div class="card__description__text">{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $portfol->updated_at)->toDateString()}}</div>
                <div class="card__description__title">Цель клиента</div>
                <div class="card__description__text">{{$portfol->client_purpose}}</div>
                <div class="card__description__title">Заказанные услуги</div>
                <div class="card__description__text">

                  <!-- Заполнить из бд! -->
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa fugiat saepe eligendi quaerat maxime debitis. Ab aliquam ipsum fugiat deserunt. Harum, odit deleniti hic ab ratione tempora tenetur doloremque error?

                </div>
                <div class="card__description__title">Комментарии стилиста</div>
                <div class="card__description__text">

                  <!-- Заполнить из бд! -->
                  {{$portfol->comment}}
                  
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa fugiat saepe eligendi quaerat maxime debitis. Ab aliquam ipsum fugiat deserunt. Harum, odit deleniti hic ab ratione tempora tenetur doloremque error?
                </div>
                <div class="start-change">

                  <!-- Сделать, чтобы удалялось -->
                  <button class="btn btn--action btn--delete-portfolio" type="submit">Удалить</button>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section>
@endsection