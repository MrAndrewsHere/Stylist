<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
      'client_purpose',
      'comments',
      'updated_at',
      'picture_before',
      'picture_after',
    ];
}
