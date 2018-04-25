@extends('layouts.layout')
  <div class="chat">
    <div class="chat__instrument-panel">
      <div class="chat__interlocutor-name">
        Имя собеседника
      </div>
      <button class="btn btn--chat-exit">
        x
      </button>
    </div>

    <div class="chat__messages">
      <div class="chat__message chat__message-my">
        <div class="nav-profile__img chat__profile__img">
          <img class="nav-profile__img" src="/img/no_avatar.jpg">
        </div>
        <div class="chat__message-text-all">
          <p class="chat__message-text-one">Привет</p>
          <p class="chat__message-text-one">Можно записаться к тебе на ноготочки?</p>
          <p class="chat__message-text-one">Давай сразу обсудим время</p>
        </div>
      </div>

      <div class="chat__message chat__message-notmy">
        <div class="nav-profile__img chat__profile__img">
          <img class="nav-profile__img" src="/img/no_avatar.jpg">
        </div>
        <div class="chat__message-text-all">
          <p class="chat__message-text-one">Привет</p>
          <p class="chat__message-text-one">Конечно</p>
          <p class="chat__message-text-one">Могу взять 26 или 27 в 4 часа дня</p>
        </div>
      </div>

      <div class="chat__message chat__message-my">
        <div class="nav-profile__img chat__profile__img">
          <img class="nav-profile__img" src="/img/no_avatar.jpg">
        </div>
        <div class="chat__message-text-all">
          <p class="chat__message-text-one">Отлично</p>
          <p class="chat__message-text-one">Тогда запиши меня на 27</p>
        </div>
      </div>
    </div>

    <form class="chat__from" action="">
      <input class="chat__input-text" type="text" placeholder="Введите ваше сообщение...">
      <input type="submit" class="chat__submit">
    </form>
  </div>