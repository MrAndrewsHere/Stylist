<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = ['client_id','service_id','stylist_id','price'];
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
