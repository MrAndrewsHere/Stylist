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

}
