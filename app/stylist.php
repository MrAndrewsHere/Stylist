<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stylist extends Model
{
  protected $fillable = ['user_id', 'category_id', 'about', 'education','commission'];
  protected $hidden = ['user_id'];


  public function category()
  {
   return $this->belongsTo('App\stylistcategory');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }

  public function orders()
  {
    return $this->hasMany('App\Order');
  }
  public function services()
  {
    return $this->belongsToMany('App\service');
  }
  public function portfolios()
  {
    return $this->hasMany('App\portfolio');
  }
  public function files()
  {
    return $this->hasMany('App\file');
  }

  public function confirm()
  {
       $this->Confirmed = 1;
       return $this->save();

  }

    public function unconfirm()
    {
        $this->Confirmed = 0;
        return $this->save();

    }

    public function send_confirm()
    {
        $this->Send_Confirm = 1;
        return $this->save();
    }

    public function is_Confirmed()
    {
        if($this->Confirmed == 1){return true;}
        return false;
    }
    public function is_Send_Confirmed()
    {
        if($this->Send_Confirm == 1){return true;}
        return false;
    }

}
