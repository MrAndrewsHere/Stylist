<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    protected $fillable = ['about','education'];

public function category()
{
	$this->belongsTo('App\stylistcategory');
}
}
