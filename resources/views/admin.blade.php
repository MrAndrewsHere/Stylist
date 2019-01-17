@extends('layouts.layout')

@section('title','Панель администратора')

@section('content')
  <section class="section section--admin">
    <h1 class="section__title">Новые заявки</h1>
    <div class="container">
      <form class="needs-validation-new-stylist-filter"  style="border: 1px solid antiquewhite; padding: 10px; margin-bottom: 15px" novalidate>
        {{csrf_field()}}
        <div class="form__output" style="text-align: center">
          <div class="col-md-4 mb-3">
            <label for="validationCustom01">Имя</label>
            <input type="text" class="form__input"  name="name" id="validationCustom01" placeholder="Имя">
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustom02">Фамилия</label>
            <input type="text" class="form__input" name="second_name" id="validationCustom02" placeholder="Фамилия">

          </div>
          <div class="col-md-4 mb-3">
            <label for="validationCustomUsername">Город</label>
            <div class="input-group">
              <input type="text" class="form__input" name="City" id="validationCustomUsername" placeholder="Город" aria-describedby="inputGroupPrepend">

            </div>
          </div>
        </div>
        <div style="text-align: center">
          <button class="btn btn--action btn--action" style="margin: auto" type="submit">Найти</button>
        </div>
      </form>

      <h2 class="title-second">Новых стилистов<span class="notification">{{$stylists->count()}}</span></h2>




        <div class="admin-request">
        <!-- Новые заявки -->

          <div class="admin-request__new" style="overflow-y: auto;padding: 2px;width: 15%">
            <div class="stylists_filter_container">

            </div>
          </div>

          <div class="admin-request__about">
        </div>

      </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>




      $('.needs-validation-new-stylist-filter').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          type:'post',
          url:'/filter_new_stylist',
          data: $(this).serialize(),
          success(result){
            $('.stylists_filter_container').html(result);
          },
          error(result){alert(result)},

        });
      });

    </script>

  </section>
@endsection

<style>
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
</style>