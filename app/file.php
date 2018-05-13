<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
  protected $fillable=['path','type'];
    public $timestamps = false;

    public function stylist ()
    {
      return $this->belongsTo('App\Stylist');
    }
}
