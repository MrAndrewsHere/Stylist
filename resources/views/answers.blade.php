@extends('layouts.layout')

@section('title','Стилисты отвечают')

@section ('content')
  <section class="section">
    <h1 class="section__title">Вопросы и ответы</h1>
    <div class="ask-question">
      <div class="container">
        <div class="ask-question__preview ask-question__preview__wrapper">
          <div class="ask-question__preview-text">
            Eсть вопрос к нашим стилистам? Вы можете задать его здесь и получить развернутый ответ
          </div>
          <button class="btn btn--action" type="submit">Задать вопрос</button>
        </div>
        
        <div class="ask-question__quests">
          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Подскажите, стилист может сам назначать себе категорию? Если да, то каким образом, если нет, то кто это делает?
              </h2>
              <div class="ask-question__quest-block-text">
                Стилист не может присвоить сам себе категорию. Это делает администратор сайта после проверки на соответствие портфолио и образования стилиста той или иной категории.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Могу ли я поменять свою электронную почту, если к старой утратила доступ?
              </h2>
              <div class="ask-question__quest-block-text">
                Вы можете изменить адрес электронной почты в настройках. Помните, что Ваша электронная почта – Ваш логин для авторизации на портале.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Могу ли я несколько раз оформить одну и ту же услугу у одного и того же стилиста?
              </h2>
              <div class="ask-question__quest-block-text">
                Вы можете оформить услугу у стилиста один раз, также можете оформить эту же услугу, но у другого стилиста. Если вы выбрали услугу и стилиста, Вы не можете оформить ее снова, пока статус заказа не поменяется на «Завершено».
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Я стилист с большим стажем. Как много я могу загружать документов, подтверждающих мой статус?
              </h2>
              <div class="ask-question__quest-block-text">
                Загрузка дипломов, сертификатов и других документов, подтверждающих вашу категорию и образование, не ограничивается ничем.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Что делать, если статус моего заказа не изменился в течение долгого времени?
              </h2>
              <div class="ask-question__quest-block-text">
                Если статус Вашего заказа не изменяется в течении долгого времени, то Вы можете написать стилисту, у которого оформлена услуга(и). Если стилист не отвечает на Ваши сообщения, обратитесь к администратору через форму обратной связи.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Где я могу посмотреть личный номер стилиста или его электронную почту, чтоб связаться?
              </h2>
              <div class="ask-question__quest-block-text">
                Личные телефон и электронная почта стилиста не отображается. Вы можете связаться с ним, начав чат на портале.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Обязательно ли регистрироваться для оформления услуги?
              </h2>
              <div class="ask-question__quest-block-text">
                Для оформления услуги обязательно пройти регистрацию и авторизацию на портале.
              </div>
            </div>
          </div>

          <div class="ask-question__quest">
            <div class="ask-question__quest-icon">?</div>
            <div class="ask-question__quest-block">
              <h2 class="ask-question__quest-block-title">
                Оказывают ли стилисты предоставляемые услуги мужчинам?
              </h2>
              <div class="ask-question__quest-block-text">
                Все предоставляемые услуги оказываются стилистами как женщинам, так и мужчинам.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
