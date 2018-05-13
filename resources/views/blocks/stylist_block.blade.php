<div class="lk-stylist__block">
  <div class="card">
    <div class="card__photo-block">
      <a href="{{url('/settings')}}">
        <img class="lk__photo" src={{$stylist->user->avatar}} alt="стилист"/>
      </a>
    </div>

    <div class="card__description">
      <div class="card__description__title">Имя:
        <span class="card__description__text">
                      {{$stylist->user->name}}
                    </span>
      </div>
      <div class="card__description__title">Фамилия:
        <span class="card__description__text">
                    {{$stylist->user->second_name}}
                    </span>
      </div>
      <div class="card__description__title">Обо мне:
        <span class="card__description__text">
                      {{$stylist->about}}
                    </span>
      </div>

      <div class="card__description__title">Город:
        <span class="card__description__text">
                      {{$stylist->user->city}}
                    </span>
      </div>
    </div>
  </div>
</div>

<div class="lk-stylist__block">
  <h2 class="title-block">Дипломы и сертификаты</h2>
  <div class="lk-stylist__education lk-stylist__education--filled">
    @foreach($stylist->files as $file)

      <div class="lk-stylist__education-document">
        <a href="{{$file->path}}">
          <img src="{{$file->path}}" alt="диплом" class="lk-stylist__diplom">
        </a>
      </div>

    @endforeach
  </div>
</div>
<div class="admin-request__accept">
  <h3 class="title-block">Выберите категорию стилиста</h3>
  <form class="admin-request__accept_form" method="POST" action="{{url('/accept_stylist')}}">
    {{csrf_field()}}
    <input name="id" value="{{$stylist->id}}" hidden>
    <select class="select" name="category">
      <option value="1">Все категории</option>
      <option value="1">Vip-стилист</option>
      <option value="2">Стилист первой категории</option>
      <option value="3">Начинающий стилист</option>
    </select>
    <div class="admin-request__accept-buttons">
      <button type="submit" class="btn btn__card btn--edit">Принять</button>
      <button class="btn btn__card btn--edit">Отклонить</button>
    </div>
  </form>
</div>

