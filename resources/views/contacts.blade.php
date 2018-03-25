@extends('layout')


@section('title','Контакты')

@section ('content')

	<section class="section section--contacts section__home">
		<h1 class="section__title">Контакты</h1>
		<div class="communication">
			<div class="communication__feedback">
				<div class="container-communication">
					<form class="feedback-form">
						<div class="communication__accent contacts__communication__accent"><b>У вас есть вопросы или предожения?</b>
						</div>
						<label>Имя
							<input class="form__input" type="text" required="required"/>
						</label>
						<label>Электронная почта
							<input class="form__input" type="email" required="required"/>
						</label>
						<label>Вопрос
							<textarea class="form__textarea" name="" cols="30" rows="10"></textarea>
						</label>
						<input class="btn btn--action btn--action-small" type="submit" value="Отправить"/>
					</form>
				</div>
			</div>
			<div class="communication__contacts">
				<div class="container-communication">
					<div class="communication__accent contacts__communication__accent"><b>Мы на связи с вами</b></div>
					<div>Звоните с 10:00 до 21:00 по московскому времени</div>
					<div class="communication__contacts__phone-block"><a
							class="phone-number communication__contacts__phone-number" href="tel:+7(843)2922222">+7 (843)
							292-22-22</a><a class="phone-number communication__contacts__phone-number" href="tel:+79274330934">+7 9274
							33-09-34</a></div>
					<div>Пишите на почту</div>
					<a class="communication__contacts__email" href="mailto:info@stilisty.com">info@stilisty.com</a>
				</div>
			</div>
		</div>
	</section>

@endsection



