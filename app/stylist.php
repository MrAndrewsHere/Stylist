<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stylist extends Model
{
  protected $fillable = ['user_id', 'category_id', 'about', 'education','commission'];
  protected $hidden = ['user_id'];
  public $new_orders_count = 0;
  public $processing_orders_count = 0;

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
    return $this->belongsToMany('App\service');
  }
  public function portfolios()
  {
    return $this->hasMany('App\portfolio');
  }
  public function files()
  {
    return $this->hasMany('App\file');
  }
}
