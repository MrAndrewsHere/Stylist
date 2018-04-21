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
        'name', 'email', 'password','role_id','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
//    public function About(){
//     return $this->hasOne('app\about_user', 'user_ID','id');
//    }

		public function stylist()
		{
			return $this->hasOne('App\Stylist','user_id');
		}
		protected function client()
    {
      return $this->hasOne('App\Client','user_id');
    }
		public function role()
    {
      return $this->belongsTo('App\role');
    }

}
