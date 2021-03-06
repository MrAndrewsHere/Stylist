
@extends('layouts.layoutSlick')

@section('title','Настройки')

@section('content')
  <section class="section section--settings">
    <div class="container-lk">
      <h1 class="section__title">Настройки</h1>

      @if (Auth::user()->role->name == 'stylist')
        <form class="form-settings" action="{{url('/save_info')}}" method="post" enctype="multipart/form-data">

          {{csrf_field()}}

          <label>Аватар
            <input type="file" id="avatar" name="avatar" class="form__input"/>
          </label>
          
          <span class="form__output">
            <img class="form__output-avatar" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name.' '.Auth::user()->second_name}}">
          </span>

          <label>Имя
            <input class="form__input" name="name" type="text" value="{{$currentUser->name}}"/>
          </label>

          <label>Фамилия
            <input class="form__input" name="second_name" type="text" value="{{$currentUser->second_name}}"/>
          </label>

          <label>Электронная почта
            <input class="form__input" type="email" value="{{$currentUser->email}}" disabled="true"/>
          </label>

          <label>Город
            <input class="form__input" type="text" name="city" value="{{$currentUser->city}}"/>
          </label>

          <label>Обо мне
            <textarea name="about" class="form__input" cols="30" rows="10">{{$currentUser->stylist->about}}</textarea>
          </label>

          @if (isset($currentUser->stylist->category->name))
            <label>Категория
              <input class="form__input" name="category" type="text" value="{{$currentUser->stylist->category->name}}" disabled="true"/>
            </label>
          @else
            <label>Категория
              <input class="form__input" name="category" type="text" value="" disabled="true"/>
            </label>
          @endif

          <label>Дипломы и сертификаты
              <input class="form__input" type="file" id="diploms" name="files[]" multiple accept="image/*"/>
          </label>

          <span id="form__output-diploms">
            @if(isset(Auth::user()->stylist->files))
              @foreach(Auth::user()->stylist->files as $diplom)
                  <img class="form__output-diploms" src="{{$diplom->path}}">
              @endforeach
            @endif
          </span>

          <div class="start-change">
            <button class="btn btn--action" type="submit">Сохранить</button>
          </div>
        </form>

      @else
        <form class="form-settings" action="{{url('/saveinfo')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <label>Аватар
            <input type="file" id="avatar" name="avatar" class="form__input"/>
          </label>

          <span class="form__output">
             <img class="form__output-avatar" src="{{Auth::user()->avatar}}" alt="{{Auth::user()->name.' '.Auth::user()->second_name}}">
          </span>

          <label>Имя
            <input class="form__input" name="name" type="text" value="{{$currentUser->name}}" required="required"/>
          </label>

          <label>Фамилия
            <input class="form__input" name="second_name" type="text" value="{{$currentUser->second_name}}" required="required"/>
          </label>

          <label>Электронная почта
            <input class="form__input" type="email" value="{{$currentUser->email}}" disabled="true"/>
          </label>

          <label>Город
            <input class="form__input" type="text" name="city" value="{{$currentUser->city}}"/>
          </label>

          <div class="start-change">
            <button class="btn btn--action" type="submit">Сохранить</button>
          </div>
        </form>
      @endif
    </div>
  </section>
@endsection


