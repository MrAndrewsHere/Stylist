<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['client_id','service_id','stylist_id','price'];
  public function client()
  {
    return $this->belongsTo('App\Client');
  }

  public function stylist()
  {
    return $this->belongsTo('App\Stylist');
  }

  public function service()
  {
    return $this->belongsTo('App\Service');
  }

  public function setUpdatedAt($value)
  {
    //Do-nothing
  }

  public function getUpdatedAtColumn()
  {
    //Do-nothing
  }

  public function setCreatedAt($value)
  {
    //Do-nothing
  }

  public function getCreatedAtColumn()
  {
    //Do-nothing
  }

}
