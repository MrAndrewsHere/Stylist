<div class="" style="height: 600px;overflow-y: auto;margin-bottom: 20px" >
    <div class="lk-stylist__block" style="padding-bottom: 10px">

        <div class="card">
            <div class="card__photo-block">
                <a >
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

                <div class="card__description__text">
        <span class="card__description__title">
          Категория:
        </span>
                    @if(isset($stylist->category))
                        <span class="card__description__text card__description__text--price" >
                      {{$stylist->category->name}}
                  </span>


                    @else

                    @endif

                </div>

                <div class="card__description__text">
                <span class="card__description__title">
                  Комиссия
                </span>
                    <span class="card__description__text card__description__text--price" style="color: #8b0b3d">
                    {{$stylist->commission." %"}}
                  </span>

                </div>


                <div class="card__description__text">
        <span class="card__description__title">

        </span>



                </div>
            </div>
        </div>
    </div>

<div class="lk-stylist__block" >
    <h2 class="title-second" style="text-align: center">Дипломы и сертификаты</h2>
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

</div>
    <div class="admin-request__accept" style="height: 100px;display: flex">
              <form class="admin-request__accept_form" style="margin: auto;height: 100px">
                  {{csrf_field()}}
                  <input hidden name="id" value="{{$stylist->id}}">
                  <div class="form__output" style="text-align: center">
                      <div class="col-md-4 mb-3">
                          <label for="validationCustom03">Категория</label>
                          <select class="form__input" name="category">
                              @foreach(\App\stylistcategory::all() as $category)
                                  @if($category->id != $stylist->category->id)
                                      <option  value="{{$category->id}}">{{$category->name}}</option>
                                      @else
                                      <option selected value="{{$category->id}}">{{$stylist->category->name}}</option>

                                  @endif
                                  @endforeach
                          </select>

                      </div>
                      <div class="col-md-4 mb-3">
                          <label for="validationCustom03">Рейтинг</label>
                          <input disabled class="form__input" type="text" name="rating">

                      </div>

                      <div class="col-md-4 mb-3">
                          <label for="validationCustom03">Комиссия</label>
                          <input class="form__input" type="text" value="{{$stylist->commission}}" name="commission">

                      </div>
                  </div>
                      <div class="form__output" style="text-align: center">
                          <div class="col-md-6 mb-3">
                              <button class="btn btn--action btn--action-buy" style="margin: auto;background-color: white;color: black;box-shadow: 0 0px 2px 1px rgba(14,126,119,0.7)" type="button">Чат</button>

                          </div>
                          <div class="col-md-6 mb-3">
                              <button class="btn btn--action btn--action-buy" style="margin: auto;background-color: white;color: black;box-shadow: 0 0px 2px 1px rgba(14,126,119,0.7)" type="submit">Сохранить</button>


                          </div>
                          <div class="col-md-6 mb-3">
                              <button class="btn btn--action btn--action-buy" id="reset-btn" style="margin: auto; background-color:white; color: black;box-shadow: 0 0px 2px 1px rgba(164,0,116,0.5)" type="button">Отключить</button>

                          </div>


                      </div>


                      {{--<ul class="stylists__sort">--}}
                {{--{{csrf_field()}}--}}
                {{--<input name="id" value="{{$stylist->id}}" hidden>--}}
                {{--<li class="stylists__sort-category">--}}
                    {{--<select class="select" name="category">--}}
                        {{--<option value="0">Отклонить</option>--}}
                        {{--@if(isset($categories))--}}
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                            {{--@endforeach--}}
                        {{--@endif--}}
                    {{--</select>--}}
                {{--</li>--}}
                {{--<li class="stylists__sort-category">--}}
                {{--<input class="form__input" value="" placeholder="Процент комиссси">--}}
                {{--</li>--}}

                {{--<li class="stylists__sort-category">--}}
                    {{--<div class="admin-request__accept-buttons">--}}
                        {{--<button type="submit" class="btn btn--action btn--action-buy">Выбрать</button>--}}

                    {{--</div>--}}
                {{--</li>--}}
                {{--<li class="stylists__sort-category">--}}
                    {{--<div class="admin-request__accept-buttons">--}}
                        {{--<button type="submit" class="btn btn--action btn--action-buy">Выбрать</button>--}}

                    {{--</div>--}}
                {{--</li>--}}
            {{--</ul>--}}
        </form>
    </div>

<style>
    .stylists__sort-category
    {
        max-width: 36%;
    }
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
    .btn--action-buy
    {

    }

    .container
    {
        padding: 1px;

    }

</style>

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

            },
            error(result) {
                $('.message-error').text(result);
                $('.message-error').css('display', 'block');
            },
        });
    });

    function change(numb)
    {
        $('#peer_id').attr('value',numb);
    }
    $('.send_new_message').on('submit', function (e) {

        e.preventDefault();
        $('.modal-message').addClass('modal-auth-show');



    });
</script>

