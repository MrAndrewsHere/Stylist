<div class="lk-stylist__block">
    <div class="card">
        <div class="card__photo-block">
            <a href="{{url('/settings')}}">
                <img class="lk__photo" src={{$stylist->user->avatar}} alt="стилист"/>
            </a>
        </div>

        <div class="card__description">
            <div class="card__description__text">
        <span class="card__description__title">
          Имя:
        </span>
                {{$stylist->user->name}}
            </div>

            <div class="card__description__text">
        <span class="card__description__title">
          Фамилия:
        </span>
                {{$stylist->user->second_name}}
            </div>

            <div class="card__description__text">
        <span class="card__description__title">
          Обо мне:
        </span>
                {{$stylist->about}}
            </div>

            <div class="card__description__text">
        <span class="card__description__title">
          Город:
        </span>
                {{$stylist->user->city}}
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
    <h3 class="title-block">Выберите категорию стилиста или отклоните заявку</h3>
    <form class="admin-request__accept_form">
        {{csrf_field()}}
        <input name="id" value="{{$stylist->id}}" hidden>

        <select class="select" name="category">
            <option value="0">Отклонить</option>
            @if(isset($categories))
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            @endif
        </select>
        <div class="admin-request__accept-buttons">
            <button type="submit" class="btn btn__card btn--edit">Выбрать</button>

        </div>
    </form>
</div>
<script>
    $('.admin-request__accept_form').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/accept_stylist',
            data: $(this).serialize(),
            success(result) {
                $('.message-success').text(result);
                $('.message-success').css('display', 'block');
                setTimeout(function () {
                    $('.message-success').css('display', 'none');
                }, 3000);
                location.reload();
            },
            error(result) {
                $('.message-error').text(result);
                $('.message-error').css('display', 'block');
            },
        });
    });
</script>

