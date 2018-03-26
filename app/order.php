<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function stylist()
    {
      return $this->belongsTo('App\Stylist');
    }
    public function client()
    {
      return $this->belongsTo('App\Client');
    }
    public function service()
    {
      return $this->belongsTo('App\Service');
    }
}
