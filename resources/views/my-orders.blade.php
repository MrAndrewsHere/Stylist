@extends('layout')
@section('title','Мои заказы')
@section('content')

	<section class="section section--my-orders section__home">
		<h1 class="section__title">Мои заказы</h1>
		<div class="container-home">
			<div class="my-orders">
				<div class="my-orders__status"><a class="link-tab link-active" href="#">Новые заказы</a><a class="link-tab"
																																																	 href="#">История
						заказов</a></div>
				<div class="my-orders__item my-orders__item--active">
					<div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
						<ul class="orders__title">
							<li class="orders__photo">Фото</li>
							<li class="orders__service orders__service--big">Услуга</li>
							<li class="orders__count orders__count--big">Кол. часов</li>
							<li class="orders__price orders__price--big">Цена</li>
						</ul>
						@foreach($Neworders as $order)
							<ul class="orders__item">
								<li class="orders__photo"><img src="img/services/selection-hairstyle.png" alt="" width="70%"/></li>
								<li class="orders__service orders__service--big"><span>{{$order->describe}}</span><br/><span>Стилист первой категории</span>
								</li>
								<li class="orders__count orders__count--big">
									<div class="orders__count-change">
										<button class="btn btn--count minus">-</button>
										<input class="input--number input-count" type="number" min="1" max="10" value="2"/>
										<button class="btn btn--count plus">+</button>
									</div>
								</li>
								<li class="orders__price orders__price--big">
									<input class="input--number input-price" type="number" disabled="disabled" value="{{$order->price}}"/><span>р</span>
								</li>
							</ul>
						@endforeach

					</div>
					<div class="my-orders__result">Итого<b>10 000р.</b>
						<div class="my-orders__result-wrapper">
							<button class="btn btn--action">Оформить заказ</button>
						</div>
					</div>
				</div>
				<div class="my-orders__item">
					<div class="scroll-block scroll-block--orders scroll-block--slim scroll-block__wrapper">
						<ul class="orders__title">
							<li class="orders__photo">Фото</li>
							<li class="orders__service orders__service--big">Услуга</li>
							<li class="orders__date-name orders__date-name--big">Дата</li>
							<li class="orders__count orders__count--big">Кол. часов</li>
							<li class="orders__price orders__price--big">Цена</li>
						</ul>
						@foreach($Savedorders as $order)
							<ul class="orders__item">
								<li class="orders__photo"><img src="img/services/selection-hairstyle.png" alt="" width="70%"/></li>
								<li class="orders__service orders__service--big"><span>{{$order->describe}}</span><br/><span>Стилист первой категории</span><br/><a
										class="common-link" href="#">Стилевое решение</a></li>
								<li class="orders__date-name orders__date-name--big">{{ $order->updated_at}}</li>
								<li class="orders__count orders__count--big">2</li>
								<li class="orders__price orders__price--big">
									<input class="input--number input-price" type="number" disabled="disabled" value="{{$order->price}}"/><span>р</span>
								</li>
							</ul>
						@endforeach

					</div>
				</div>
			</div>
		</div>
	</section>

@endsection