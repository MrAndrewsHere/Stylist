<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stylistcategory extends Model
{
  protected $fillable = ['name','describe'];

    public function stylist()
		{

		}

  public function service()
  {
    return $this->belongsToMany('App\service')->withPivot('price');
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
