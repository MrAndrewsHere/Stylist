@extends('layouts.layout')

@section('title','Мои заказы')

@section('content')
  <section class="section">
    <h1 class="section__title">Мои заказы</h1>
    <div class="container-home">

      <div class="message-success"></div>
      <div class="message-error"></div>

      <!-- ЗАКАЗЫ КЛИЕНТА -->

      @if (Auth::user()->role->name == 'client')
        <ul class="orders-list-links">
          <li class="link-order link-order--active">
            Новые заказы
          </li>
          <li class="link-order">
            Принятые заказы
          </li>
          <li class="link-order">
            Завершенные заказы
          </li>
          <li class="link-order">
            Отмененные заказы
          </li>
        </ul>

        <!-- НОВЫЕ ЗАКАЗЫ КЛИЕНТА -->

        <div class="orders orders--active">
          <ul class="orders__title">
            <li class="orders__checkbox">Номер</li>
            <li class="orders__service orders__service--big">Услуга/Стилист</li>
            <li class="orders__price orders__price--big">Цена</li>
            <li class="orders__status">Статус</li>
            <li class="orders__buy"></li>
            <li class="orders__delete"></li>
          </ul>

          @if(isset($orders))
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <a class="orders__link" href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
                  <a class="orders__link" href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price}}</span>
                  <span>₽</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Заказать
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="delete_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order" title="удалить">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет новых заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ПРИНЯТЫЕ ЗАКАЗЫ КЛИЕНТА -->

        <div class="orders">
          <ul class="orders__title">
            <li class="orders__checkbox">Номер</li>
            <li class="orders__service orders__service--big">Услуга/Стилист</li>
            <li class="orders__price orders__price--big">Цена</li>
            <li class="orders__status">Статус</li>
            <li class="orders__buy"></li>
            <li class="orders__delete"></li>
          </ul>

          @if(isset($orders))
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <a class="orders__link" href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
                  <a class="orders__link" href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price}}</span>
                  <span>₽</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Заказать
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="delete_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order" title="удалить">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет выполняемых заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ЗАВЕРШЕННЫЕ ЗАКАЗЫ КЛИЕНТА -->

        <div class="orders">
          <ul class="orders__title">
            <li class="orders__checkbox">Номер</li>
            <li class="orders__service orders__service--big">Услуга/Стилист</li>
            <li class="orders__price orders__price--big">Цена</li>
            <li class="orders__status">Статус</li>
            <li class="orders__buy"></li>
            <li class="orders__delete"></li>
          </ul>

          @if(isset($orders))
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <a class="orders__link" href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
                  <a class="orders__link" href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price}}</span>
                  <span>₽</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Заказать
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="delete_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order" title="удалить">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет завершенных заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ОТМЕНЕННЫЕ ЗАКАЗЫ КЛИЕНТА -->

        <div class="orders">
          <ul class="orders__title">
            <li class="orders__checkbox">Номер</li>
            <li class="orders__service orders__service--big">Услуга/Стилист</li>
            <li class="orders__price orders__price--big">Цена</li>
            <li class="orders__status">Статус</li>
            <li class="orders__buy"></li>
            <li class="orders__delete"></li>
          </ul>

          @if(isset($orders))
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <a class="orders__link" href="{{url('/service-page',$order->service->id)}}">{{$order->service->name}}</a><br/>
                  <a class="orders__link" href="{{url('/stylist_profile',$order->stylist->id)}}">{{$order->stylist->user->name." ".$order->stylist->user->second_name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price}}</span>
                  <span>₽</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Заказать
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="delete_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order" title="удалить">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#rubbish"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет отмененных заказов</span>
              </div>
            </div>
          @endif
        </div>
      @endif


      <!-- ЗАКАЗЫ СТИЛИСТА -->

      @if (Auth::user()->role->name == 'stylist')
        <ul class="orders-list-links">
          <li class="link-order link-order--active">
            Новые заказы
          </li>
          <li class="link-order">
            Выполняемые заказы
          </li>
          <li class="link-order">
            Завершенные заказы
          </li>
          <li class="link-order">
            Отмененные заказы
          </li>
        </ul>

        <!-- НОВЫЕ ЗАКАЗЫ СТИЛИСТА -->

        <div class="orders orders--active">
          @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
              <li class="orders__checkbox">Номер</li>
              <li class="orders__service orders__service--big">Клиент/услуга</li>
              <li class="orders__price orders__price--big">Цена</li>
              <li class="orders__status">Статус</li>
              <li class="orders__buy"></li>
              <li class="orders__delete"></li>
            </ul>
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <span>{{$order->client->user->name." ".$order->client->user->second_name}}</span><br/>
                  <a>{{$order->service->name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price." ₽"}}</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Взять заказ
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="cancel_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#cancel-order"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет новых заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ПОДТВЕРЖДЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

        <div class="orders">
          @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
              <li class="orders__checkbox">Номер</li>
              <li class="orders__service orders__service--big">Клиент/услуга</li>
              <li class="orders__price orders__price--big">Цена</li>
              <li class="orders__status">Статус</li>
              <li class="orders__buy"></li>
              <li class="orders__delete"></li>
            </ul>
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <span>{{$order->client->user->name." ".$order->client->user->second_name}}</span><br/>
                  <a>{{$order->service->name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price." ₽"}}</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Выполнить
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="cancel_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#cancel-order"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет выполняемых заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ЗАВЕРШЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

        <div class="orders">
          @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
              <li class="orders__checkbox">Номер</li>
              <li class="orders__service orders__service--big">Клиент/услуга</li>
              <li class="orders__price orders__price--big">Цена</li>
              <li class="orders__status">Статус</li>
              <li class="orders__buy"></li>
              <li class="orders__delete"></li>
            </ul>
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <span>{{$order->client->user->name." ".$order->client->user->second_name}}</span><br/>
                  <a>{{$order->service->name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price." ₽"}}</span>
                </li>
                <li class="orders__status">
                  <span>Не подтвержден</span>
                </li>
                <li class="orders__buy">
                  <form class="ordered">
                    {{csrf_field()}}
                    <input type="hidden" name="order_id" value="{{$order->id}}">
                    <button type="submit" class="btn btn--action btn--action-buy">
                      Выполнить
                    </button>
                  </form>
                </li>
                <li class="orders__delete">
                  <form class="cancel_order">
                    {{csrf_field()}}
                    <input name="id" value="{{$order->id}}" hidden>
                    <button class="btn" type="submit" class="btn__delete-order">
                      <svg class="orders__delete__pic">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/spritesvg.svg#cancel-order"></use>
                      </svg>
                    </button>
                  </form>
                </li>
              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет завершенных заказов</span>
              </div>
            </div>
          @endif
        </div>

        <!-- ОТМЕНЕННЫЕ ЗАКАЗЫ СТИЛИСТА -->

        <div class="orders">
          @if (isset($orders) && $orders->count() != 0)
            <ul class="orders__title">
              <li class="orders__checkbox">Номер</li>
              <li class="orders__service orders__service--big">Клиент/услуга</li>
              <li class="orders__price orders__price--big">Цена</li>
              <li class="orders__status">Статус</li>
            </ul>
            @foreach($orders as $order)
              <ul class="orders__item">
                <li class="orders__checkbox">
                  <span>{{$order->id}}</span><br/>
                </li>
                <li class="orders__service orders__service--big">
                  <span>{{$order->client->user->name." ".$order->client->user->second_name}}</span><br/>
                  <a>{{$order->service->name}}</a>
                </li>
                <li class="orders__price orders__price--big">
                  <span>{{$order->price." ₽"}}</span>
                </li>
                <li class="orders__status">
                  <span>Отмёнен</span>
                </li>

              </ul>
            @endforeach
          @else
            <div class="lk-stylist__education lk-stylist__education--empty">
              <div>
                <span>У вас нет отменённых заказов</span>
              </div>
            </div>
          @endif
        </div>
      @endif
    </div>
  </section>
@endsection