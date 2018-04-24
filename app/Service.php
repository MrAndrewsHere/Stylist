<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = ['name', 'category_id', 'description', 'result', 'price'];

  public function Stylists()
  {
    return $this->belongsToMany('App\Stylist');
  }

  public function category()
  {
    return $this->belongsToMany('App\servicecategory');
  }

  public function orders()
  {
    return $this->HasMany('App\Order');
  }

  public function stylistcategory()
  {
    return $this->belongsToMany('App\stylistcategory')->withPivot('price');
  }

  public function PriceForVip()
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','VIP')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }

  public function PriceForVip2()
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','VIP/2')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }
  public function PriceForVip4()
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','VIP/4')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }
  public  function priceForStylist(Stylist $stylist)
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', $stylist->category->id)->withPivot('price');
    return $call->first()->pivot->price;
  }

}
