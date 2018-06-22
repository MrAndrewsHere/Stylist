<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['client_id', 'service_id', 'stylist_id', 'price'];
  public $timestamps = false;

  public function client()
  {
    return $this->belongsTo('App\client');
  }

  public function stylist()
  {
    return $this->belongsTo('App\stylist');
  }

  public function service()
  {
    return $this->belongsTo('App\service');
  }


}
