@extends('layouts.layout')

@section('title','Настройки')

@section('content')
  <section class="section section--settings section__home">
    <div class="container-lk">
      <h1 class="section__title">Настройки</h1>
      <h3>@if(Session::has('success')) {{Session::get('success')}} @endif </h3>
      <form class="form-settings" action="{{url('/save_info')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Имя
          <input class="form__input" name="name" type="text" value="{{$currentUser->name}}" required="required"/>
        </label>
        <label>Фамилия
          <input class="form__input" name="second_name" type="text" value="{{$currentUser->second_name}}"
                 required="required"/>
        </label>
        <label>Электронная почта
          <input class="form__input" type="email" value="{{$currentUser->email}}" required="required"/>
        </label>
        <label>Обо мне
          <textarea name="about" class="form__input" cols="30" rows="10"> {{$currentUser->stylist->about}}</textarea>
        </label>
        @if (isset($currentUser->stylist->category->name))
          <label>Категория
            <input class="form__input" name="category" type="text" value="{{$currentUser->stylist->category->name}}"
                   required="required"/>
          </label>
        @else
          <label>Категория
            <input class="form__input" name="category" type="text" value=""
                   required="required"/>
          </label>
        @endif
        <label>Опыт работы
          <textarea class="form__input" cols="30" rows="10">{{$currentUser->stylist->experience}}</textarea>
        </label>
        <label>Образование
          <textarea name="education" class="form__input" cols="30"
                    rows="10">{{$currentUser->stylist->education}}</textarea>
        </label>
        <label>Аватар
          <input type="file" id="avatar" name="avatar" class="form__input"/>
        </label>
        <div class="start-change">
          <input class="btn btn--action" type="submit" value="Сохранить"/>
        </div>
      </form>
    </div>
  </section>
@endsection
