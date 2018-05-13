@extends('layouts.layout')

@section('title','Панель администратора')

@section('content')
  <section class="section section--admin">
    <h1 class="section__title">Панель администратора</h1>
    <div class="container">
      <h2 class="title-second">Новые заявки <span class="alert">({{$stylists->count()}})</span></h2>
      <div class="admin-request">
        <div class="admin-request__new">
          <h3 class="title-block">Стилисты:</h3>
          @if(isset($stylists))
            @foreach($stylists as $stylist)
          <form class="show_stylist_profile">
            {{csrf_field()}}
            <input hidden name="id" value={{$stylist->id}} />
            <button type="submit" class="admin-request__person admin-request__person--active">{{$stylist->user->name.' '.$stylist->user->second_name}}</button>
          </form>
            @endforeach
          @endif
        </div>

        <div class="admin-request__about">

        </div>
      </div>
    </div>
  </section>
@endsection