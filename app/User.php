<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'second_name', 'email', 'password', 'role_id', 'avatar', 'city'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];


  public function stylist()
  {
    return $this->hasOne('App\stylist', 'user_id');
  }

  protected function client()
  {
    return $this->hasOne('App\client', 'user_id');
  }

  public function role()
  {
    return $this->belongsTo('App\role');
  }

  public function messages()
  {
    return $this->hasMany(message::class);
  }

  public function peers()
  {
    return $this->hasMany(peer::class)->orderBy('updated_at');
  }






}


