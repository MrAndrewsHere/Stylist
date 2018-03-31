<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicecategory extends Model
{
  protected $fillable = ['name','describe'];

 public function service()
 {
   return $this->belongsToMany('App\Service');
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

