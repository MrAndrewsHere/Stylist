@extends('layouts.layout')

@section('title','Стилисты')

@section('content')
    <section class="section section--admin">

        <h1 class="section__title">Стилисты</h1>

        <div class="container">

            <form class="form_filter">
                <ul class="stylists__sort">
                    <li class="stylists__sort-category">
                        <input id="filter-stylists-name" class="select" name="category" placeholder="Имя">
                    </li>

                    <li class="stylists__sort-category">
                        <input id="filter-stylists-second_name" class="select" placeholder="Фамилия">

                    </li>

                    <li class="stylists__sort-category">
                        <input id="filter-stylists-city" class="select" placeholder="Город">

                    </li>
                    <li class="stylists__sort-category">
                        <input id="filter-stylists-email" class="select" placeholder="Email">

                    </li>
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
                        <button class="btn btn--action btn--action-small" type="submit">Найти</button>
                    </li>
                </ul>

            </form>



            <h2 class="title-second"></h2>




            <div class="admin-request">

                <div class="admin-request__new">
                    <h3 class="title-block">Всего: <span class="notification" style="background-color: #0e7e77">{{$stylists->count()}}</span></h3>
                    @if(isset($stylists))
                        @foreach($stylists as $stylist)
                            <form class="show_stylist_profile">
                                {{csrf_field()}}
                                <input hidden name="id" value={{$stylist->id}} />
                                <button type="submit" class="admin-request__person">{{$stylist->user->name.' '.$stylist->user->second_name}}</button>
                            </form>
                        @endforeach
                    @endif
                </div>

                <div class="admin-request__about">
                </div>


            </div>
            <h2 class="title-second"> </h2>
            <h1 class="section__title">Заказы стилиста</h1>
            <div class="container-home" style="max-width: 100%">


                <ul class="orders-list-links">
                    <li class="link-order link-order--active" value="none">
                        Новые заказы
                    </li>
                    <li class="link-order" value="none">
                        Выполняемые заказы
                    </li>
                    <li class="link-order" value="none">
                        Завершенные заказы
                    </li>
                    <li class="link-order" value="none">
                        Отмененные заказы
                    </li>
                </ul>

                <!-- НОВЫЕ ЗАКАЗЫ СТИЛИСТА -->
            <div class="clear_after">
                    <div class="orders orders--active">
                        <div class="my_orders">

                                <div class="lk-stylist__education lk-stylist__education--empty">
                                    <div>
                                        <span>Выберите стилиста</span>
                                    </div>
                                </div>

                        </div>
                    </div>

                    <!-- ПОДТВЕРЖДЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

                        <div class="orders">
                            <div class="my_orders">
                                <div class="lk-stylist__education lk-stylist__education--empty">
                                    <div>
                                        <span>Выберите стилиста</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ЗАВЕРШЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

                        <div class="orders">
                            <div class="my_orders">
                                <div class="lk-stylist__education lk-stylist__education--empty">
                                    <div>
                                        <span>Выберите стилиста</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ОТМЕНЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

                        <div class="orders">
                            <div class="my_orders">
                                <div class="lk-stylist__education lk-stylist__education--empty">
                                    <div>
                                        <span>Выберите стилиста</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                  </div>
            </div>




        </div>
    </section>
    <div class="message-success">Cообщение успешно отправлено</div>
    <div class="message-error">
@endsection