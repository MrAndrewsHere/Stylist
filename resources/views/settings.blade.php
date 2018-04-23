@extends('layouts.layout')

@section('title','Настройки')

@section('content')
  <section class="section section--settings section__home">
    <div class="container-lk">
      <h1 class="section__title">Настройки</h1>
      <h3>@if(Session::has('success')) {{Session::get('success')}} @endif </h3>
      @if (Auth::user()->role->name == 'stylist')
        <form class="form-settings"  action="{{url('/save_info')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <label>Аватар
            <input type="file" id="avatar" name="avatar" class="form__input"/>
          </label>
          <label>Имя
            <input class="form__input" name="name" type="text" value="{{$currentUser->name}}"/>
          </label>
          <label>Фамилия
            <input class="form__input" name="second_name" type="text" value="{{$currentUser->second_name}}"/>
          </label>
          <label>Электронная почта
            <input class="form__input" type="email" value="{{$currentUser->email}}" disabled="true"/>
          </label>
          <label>Обо мне
            <textarea name="about" class="form__input" cols="30" rows="10">{{$currentUser->stylist->about}}</textarea>
          </label>
          @if (isset($currentUser->stylist->category->name))
            <label>Категория
              <input class="form__input" name="category" type="text" value="{{$currentUser->stylist->category->name}}"
                     disabled="true"/>
            </label>
          @else
            <label>Категория
              <input class="form__input" name="category" type="text" value=""
                     disabled="true"/>
            </label>
          @endif
          <label>Опыт работы
            <textarea class="form__input" cols="30" rows="10">{{$currentUser->stylist->experience}}</textarea>
          </label>
          <label>Образование
            <textarea name="education" class="form__input" cols="30"
                      rows="10">{{$currentUser->stylist->education}}</textarea>
          </label>
          <div class="start-change">
            <input class="btn btn--action" type="submit" value="Сохранить"/>
          </div>
        </form>
      @else
        <form class="form-settings" action="{{url('/saveinfo')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <label>Аватар
            <input type="file" id="avatar" name="avatar" class="form__input"/>
          </label>
          <label>Имя
            <input class="form__input" name="name" type="text" value="{{$currentUser->name}}" required="required"/>
          </label>
          <label>Фамилия
            <input class="form__input" name="second_name" type="text" value="{{$currentUser->second_name}}"
                   required="required"/>
          </label>
          <label>Электронная почта
            <input class="form__input" type="email" value="{{$currentUser->email}}" disabled="true"/>
          </label>
          <label>Обо мне
            <textarea name="about" class="form__input" cols="30" rows="10"></textarea>
          </label>
          <div class="start-change">
            <input class="btn btn--action" type="submit" value="Сохранить"/>
          </div>
        </form>
      @endif
    </div>
  </section>
@endsection


