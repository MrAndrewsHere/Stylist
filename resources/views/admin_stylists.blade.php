@extends('layouts.layout')

@section('title','Стилисты')

@section('content')
    <section class="section section--admin">

        <h1 class="section__title">Стилисты</h1>

        <div class="container">

            <form class="needs-validation"  style="border: 1px solid antiquewhite; padding: 10px; margin-bottom: 15px" novalidate>
                {{csrf_field()}}
                <div class="form__output" style="text-align: center">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Имя</label>
                        <input type="text" class="form__input"  name="name" id="validationCustom01" placeholder="Имя">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Фамилия</label>
                        <input type="text" class="form__input" name="second_name" id="validationCustom02" placeholder="Фамилия">

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Город</label>
                        <div class="input-group">
                            <input type="text" class="form__input" name="City" id="validationCustomUsername" placeholder="Город" aria-describedby="inputGroupPrepend">

                        </div>
                    </div>
                </div>
                <div class="form__output" style="text-align: center">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Категория</label>
                        <select class="form__input" name="status">
                            <option value="0">Все</option>
                            <option value="1">Выполняемые</option>
                            <option value="2">Завершенные</option>
                            <option value="3">Без оплаты</option>
                            <option value="4">Оплаченные</option>
                            <option value="5">Отменённые</option>
                        </select>

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">Услуга</label>
                        <select class="form__input" name="service">
                            <option value="0">Все</option>
                            <option value="1">Выполняемые</option>
                            <option value="2">Завершенные</option>
                            <option value="3">Без оплаты</option>
                            <option value="4">Оплаченные</option>
                            <option value="5">Отменённые</option>
                        </select>

                    </div>

                </div>


                <div style="text-align: center">
                    <button class="btn btn--action btn--action" style="margin: auto" type="submit">Найти</button>
                </div>
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
            <h1 class="section__title">Услуги стилиста</h1>
            <div class="ask-question__quests" ></div>

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
        <style>
            .form__output
            {
                display: flex;
            }


            .col-md-4
            {
                width: 30%;
                padding: 5px;
                margin: auto;

            }
            .col-md-6
            { margin: auto;
                padding: 5px;
                width: 50%;
            }
            .form__input
            {

            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
