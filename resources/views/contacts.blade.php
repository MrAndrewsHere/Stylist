@extends('layouts.layout')

@section('title','Контакты')

@section ('content')
  <section class="section section--contacts">
    <h1 class="section__title">Контакты</h1>
    {{--<a href="{{url('/test')}}">UJ</a>--}}
    <div class="communication">
      <div class="communication__feedback">
        <div class="container-communication">

          <form class="feedback-form" id="contactform" action="/sendmail" method="post" name="send-contact">
            {{ csrf_field() }}

            <div class="message-success">Cообщение успешно отправлено</div>
            <div class="message-error">
              При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста,
              на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
            </div>

            <div class="communication__accent contacts__communication__accent"><b>У вас есть вопросы или предожения?</b>
            </div>
            <label>Имя
              <input class="form__input" type="text" name="name" required="required"/>
            </label>
            <label>Электронная почта
              <input class="form__input" type="email" name="email" required="required"/>
            </label>
            <label>Вопрос
              <textarea class="form__textarea" name="ques" cols="30" rows="10"></textarea>
            </label>
            <button class="btn btn--action btn--action-small" type="submit">Отправить</button>
          </form>

        </div>
      </div>
      <div class="communication__contacts">
        <div class="container-communication">
          <div class="communication__accent contacts__communication__accent"><b>Мы на связи с вами</b></div>
          <div>Звоните с 10:00 до 21:00 по московскому времени</div>
          <div class="communication__contacts__phone-block">
            <a class="phone-number communication__contacts__phone-number" href="tel:+7(843)2922222">
              +7 (843) 292-22-22
            </a>
            <a class="phone-number communication__contacts__phone-number" href="tel:+79274330934">
              +7 (927) 433-09-34
            </a>
          </div>
          <div>Пишите на почту</div>
          <a class="communication__contacts__email" href="mailto:info@stilisty.com">info@stilisty.com</a>
        </div>
      </div>
    </div>
  </section>

@endsection
