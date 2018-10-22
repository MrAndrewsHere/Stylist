<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    protected $fillable = [
        'client_purpose',
        'orders',
        'comment',
        'updated_at',
        'picture_before',
        'picture_after',
    ];

    public function stylist()
    {
        return $this->hasOne('App\stylist');
    }
}
