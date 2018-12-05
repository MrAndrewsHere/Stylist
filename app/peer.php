<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peer extends Model
{
   protected $fillable = ['peer_id'];

   public function peer()
   {
     return $this->belongsTo('App\User','peer_id','id');
   }
}
