@if (isset($stylists) && $stylists->count() > 0)
   @foreach($stylists as $stylist)
       <option name = "stylist_id" value="{{$stylist->id}}">{{$stylist->user->name.' '.$stylist->user->second_name}}</option>
       @endforeach
    @else
    <option name = "stylist_id" value="none">Услуга пока не предоставляется</option>
@endif