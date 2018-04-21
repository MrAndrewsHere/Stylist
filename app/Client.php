<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
  protected $fillable = ['user_id'];

  public function orders()
  {
    return $this->HasMany('App\Order');
  }
  public function user()
  {
    return $this->belongsTo('App\User');
  }

}
