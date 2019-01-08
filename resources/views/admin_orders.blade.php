@extends('layouts.layout')

@section('title','Заказы стилистов')

@section('content')
    <section class="section section--admin" >

        <h1 class="section__title">Заказы</h1>
        <div class="container" >
            <form class="needs-validation"  style="border: 1px solid antiquewhite; padding: 10px; margin-bottom: 15px" novalidate>
                {{csrf_field()}}
                <div class="form__output" style="text-align: center">
                    <div class="col-md-4 mb-3"  >
                        <label for="validationCustom01">№ заказа</label>
                        <input type="text" style="box-shadow: 0 0px 2px 1px rgba(164,0,116,0.5)" class="form__input" name="order_id" id="validationCustom01" placeholder="№ заказа">

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Стилист</label>
                        <select class="form__input" name="stylist">
                            <option value="">Все</option>
                            @foreach(\App\stylist::all() as $stylist)
                                <option value="{{$stylist->id}}">{{$stylist->user->name." ".$stylist->user->second_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Клиент</label>
                        <div class="input-group">
                            <select class="form__input" name="client">
                                <option value="">Все</option>
                                @foreach(\App\client::all() as $client)
                                    <option value="{{$client->id}}"> {{$client->user->name." ".$client->user->second_name}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                <div class="form__output" style="text-align: center">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Статус</label>
                        <select class="form__input" name="status">
                            <option value="0">Все</option>
                            <option value="newOrders">Новые</option>
                            <option value="processing">Выполняемые</option>
                            <option value="complited">Завершенные</option>
                            <option value="notpaid">Без оплаты</option>
                            <option value="paid">Оплаченные</option>
                            <option value="confirmed_pay">С подтверждением оплаты</option>
                            <option value="canceled">Отменённые</option>
                        </select>

                    </div>
                    {{--<div class="col-md-6 mb-3" style="">--}}
                        {{--<label for="validationCustom03">Статус</label>--}}
                        {{--<div style="display: flex">--}}

                            {{--<div class="row" style="width: 100%">--}}

                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                            {{--</div>--}}
                            {{--<div class="row" style="width: 100%">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                            {{--</div>--}}
                            {{--<div class="row" style="width: 100%">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                                {{--<input type="checkbox" class="form__input">--}}
                            {{--</div>--}}




                        {{--</div>--}}

                    {{--</div>--}}
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom04">Услуга</label>
                        <select class="form__input" name="service">
                            <option value="0">Все</option>
                            @foreach(\App\service::all() as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                            @endforeach
                           </select>

                    </div>

                   </div>

                <div class="form__output" style="text-align: center">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">С</label>
                        <input type="date" class="form__input" name="beginDate" id="validationCustom05" placeholder="Дата" >

                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom05">По</label>
                        <input type="date" class="form__input" name="endDate" id="validationCustom06" placeholder="Дата" >

                    </div>

                </div>
                <div class="form__output" style="text-align: center">
                <button class="btn btn--action btn--action" style="margin: auto" type="submit">Найти</button>
                    <button class="btn btn--action btn--action" id="reset-btn" style="margin: auto; background-color:white; color: black;box-shadow: 0 0px 2px 1px rgba(164,0,116,0.5)" type="button">Сбросить</button>

                </div>
            </form>

            <ul class="orders__title">
                <li class="orders__id">№ заказа</li>
                <li class="orders__status">Клиент/Стилист</li>
                <li class="orders__service orders__service--big">Услуга/Цена (% / ₽)</li>
                <li class="orders__status">Статус</li>
                <li class="orders__delete"></li>
                <li class="orders__delete"></li>

            </ul>
            <div class="orders_table"   >

            </div>

        </div>
    </section>
    <div class="message-success">Cообщение успешно отправлено</div>
    <div class="message-error">
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

            .container
            {
                padding: 1px;

            }
            </style>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

        <script>
            $('#reset-btn').on('click', function (e) {
                $('.needs-validation')[0].reset();
            });

            $('.needs-validation').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type:'post',
                    url:'/filter_orders',
                    data: $(this).serialize(),
                    success(result){
                        $('.orders_table').html(result);
                    },
                    error(result){alert(result)},

                });
            });

        </script>

@endsection
