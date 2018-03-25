@extends('layout')
@section('title','Мои заказы')
@section('content')

	<section class="section section--lk-stylist section__home">
		<h1 class="section__title">Личный кабинет</h1>
		<div class="lk-stylist">
			<div class="container">
				<div class="lk-stylist__general">
					<div class="card card__margin">
						<div class="card__photo-block"><a href="settings.html"><img src="img/stylist1.png" alt="стилист"/></a><a
								class="btn btn__card btn--edit" href="{{url('/settings')}}">Редактировать</a></div>

						<div class="card__description">
							<div class="card__description__title">{{Auth::user()->name}} {{Auth::user()->second_name}} </div>
							<div class="card__description__text"> {{Auth::user()->stylist->about}}</div>
							<div class="card__title-second">Класс</div>
							<div class="card__description__text">{{Auth::user()->stylist->category_id}}</div>
							<div class="card__title-second">Опыт работы</div>
							<div class="card__description__text">{{Auth::user()->stylist->experience}}
							</div>
							<div class="card__title-second">Образование</div>
							<div class="card__description__text">{{Auth::user()->stylist->education}} </div>
						</div>
					</div>
				</div>
				<div class="lk-stylist__attention info-block__wrapper">
					<h2 class="secondary-title secondary-title--slim">Обратите внимание:</h2>
					<div class="lk-stylist__attention-orders">
						<div class="order order__inner"><a class="order__number" href="#">127609</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">Заказ оплачен</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
						<div class="order order__inner"><a class="order__number" href="#">127610</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">По заказу получен положительный отзыв</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
						<div class="order order__inner"><a class="order__number" href="#">127611</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">Заказ оплачен</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
						<div class="order order__inner"><a class="order__number" href="#">127612</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">По заказу получен положительный отзыв</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
						<div class="order order__inner"><a class="order__number" href="#">127613</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">По заказу получен положительный отзыв</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
						<div class="order order__inner"><a class="order__number" href="#">127614</a>
							<div class="order__status order__number__order__status">
								<div class="order__status-text">Заказ оплачен</div>
								<div class="order__status-pay">Вы можете оплатить заказ <a class="order__pay-link" href="#">здесь</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="orders-list">
					<h3 class="secondary-title">Список заказов:</h3>
					<ul class="orders-list__names-list">
						<li class="orders-list__names-item"><a class="link-change-content link-change-content--active" href="#">Все
								заказы</a></li>
						<li class="orders-list__names-item"><a class="link-change-content" href="#">Одобренные для вас</a></li>
						<li class="orders-list__names-item"><a class="link-change-content" href="#">Вас выбрал клиент</a></li>
						<li class="orders-list__names-item"><a class="link-change-content" href="#">Выполненные заказы</a></li>
					</ul>
					<form class="form-orders-service" action="">
						<div class="form-orders-service__inner">
							<label>Услуга
								<select class="select-orders select-orders--long">
									<option>Подбор макияжа</option>
								</select>
							</label>
							<label>Формат
								<select class="select-orders select-orders--short">
									<option>Очный</option>
								</select>
							</label>
							<label>Класс
								<select class="select-orders select-orders--short">
									<option>Начинающий</option>
								</select>
							</label>
						</div>
						<input class="btn btn--action" type="submit" value="Найти"/>
					</form>
				</div>
				<div class="orders-block orders-block__inner"><a class="link-common" href="#">Как получить заказ</a>
					<div class="orders__tip-description">
						Отправка заявки предполагает, что администратор может назначить
						вас на этот заказ, не переспрашивая. Если вы не уверены на 100%,
						обязательно напишите об этом в комментариях к заявке.
					</div>
					<div class="orders orders__wrapper">
						<ul class="orders__title">
							<li class="orders__checkbox"></li>
							<li class="orders__id">Номер</li>
							<li class="orders__date-name">Дата/Имя</li>
							<li class="orders__service">Услуга</li>
							<li class="orders__format">Формат</li>
							<li class="orders__count">Количество</li>
							<li class="orders__class">Класс</li>
							<li class="orders__price">Цена</li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000001</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000002</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000003</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000004</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000005</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000006</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
						<ul class="orders__item">
							<li class="orders__checkbox">
								<input class="input-checkbox" type="checkbox"/>
							</li>
							<li class="orders__id"><span>000007</span></li>
							<li class="orders__date-name">
								<div>21.02.2018</div>
								<div>Светлана</div>
							</li>
							<li class="orders__service"><span>Подбор макияжа</span></li>
							<li class="orders__format"><span>online</span></li>
							<li class="orders__count"><span>2</span></li>
							<li class="orders__class"><span>VIP</span></li>
							<li class="orders__price"><span>7000</span><span>р</span></li>
						</ul>
					</div>
					<div class="orders__take">
						<input class="btn btn--action" type="submit" value="Взять заказ"/>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection