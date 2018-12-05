@extends('layouts.layout')

@section('title','Заказы стилистов')

@section('content')
    <section class="section section--admin">

        <h1 class="section__title">Заказы</h1>
        <div class="container">
      <form class="form_filter" style="width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;">
            <ul class="stylists__sort" >
                <li class="stylists__sort-category" style="min-width: 200px;   max-width: 350px">
                    <input id="filter-stylists-id" class="select" name="category" placeholder="№ Заказа">
                </li>

                <li class="stylists__sort-category">
                    <input id="filter-stylists-cities" class="select" placeholder="...">

                </li>

                <li class="stylists__sort-category">
                    <input id="filter-stylists-second_name" class="select" placeholder="...">

                </li>
                <li class="stylists__sort-category">
                    <input id="filter-stylists-second_name2" class="select" placeholder="...">

                </li>
                <li class="stylists__sort-category">
                    <input id="filter-stylists-second_name2" class="select" placeholder="...">

                </li>
                <li class="stylists__sort-category">
                    <button class="btn btn--action btn--action-small" type="submit">Найти</button>
                </li>
            </ul>

      </form>

        </div>
    </section>
    <div class="message-success">Cообщение успешно отправлено</div>
    <div class="message-error">
@endsection