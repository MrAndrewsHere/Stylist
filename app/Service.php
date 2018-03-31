<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
  protected $fillable = ['name','category_id','description','result','price'];
    public function Stylists()
    {
      return $this->belongsToMany('App\Stylist');
    }
    public function servicecategory()
    {
      return $this->belongsTo('App\servicecategory');
    }
}
