@extends('layouts.layout')
@section('content')
  <form class="" action="{{url('/posttest')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <label>Имя
      <input class="form__input" name="name" type="text" value="" required="required"/>
    </label>
    <select class="select" id="IsStylist" name="IsStylist">Клиент
      <option value="clinet">Клиент</option>
      <option value="stylist">Стилист</option>
    </select>
    <div class="start-change">
      <input class="btn btn--action" type="submit" value="Сохранить"/>
    </div>
  </form>
@endsection