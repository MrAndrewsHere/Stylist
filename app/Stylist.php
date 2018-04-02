<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
  protected $fillable = ['user_id', 'category_id', 'about', 'education'];
  protected $hidden = ['user_id'];

  public function category()
  {
   return $this->belongsTo('App\stylistcategory');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function orders()
  {
    return $this->hasMany('App\Order');
  }
  public function services()
  {
    return $this->belongsToMany('App\Service');
  }
}
