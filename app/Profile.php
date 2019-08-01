<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $guarded = [];

  public function user(){
    return $this->belongsTo("App\User", "user_id");
  }

  public function posts(){
    return $this->hasMany("App\Post", "user_id");
  }
}
