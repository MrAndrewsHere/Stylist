<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
  protected $fillable = ['name', 'category_id', 'description', 'result', 'price'];

  public function Stylists()
  {
    return $this->belongsToMany('App\stylist');
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
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','vip')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }

  public function PriceForVip2()
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','firstcat')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }
  public function PriceForVip4()
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', stylistcategory::all()->where('describe','beginner')->first()->id)->withPivot('price');
    return $call->first()->pivot->price;
  }
  public  function priceForStylist(stylist $stylist)
  {
    $call = $this->belongsToMany('App\stylistcategory')->wherePivot('stylistcategory_id', $stylist->category->id)->withPivot('price');
    return $call->first()->pivot->price;
  }



}
