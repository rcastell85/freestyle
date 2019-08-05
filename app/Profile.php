<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $guarded = [];

  public function user(){
        return $this->hasOne('App\User');
    }

  public function posts(){
    return $this->hasMany("App\Post", "user_id");
  }

  public function friends(){
    return $this->hasMany("App\Friend");
  }
}
