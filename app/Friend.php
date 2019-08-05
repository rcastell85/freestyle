<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
  public $guarded = [];

  public function user(){
    return $this->belongsTo("App\User", "user_id");
  }

  public function profile(){
    return $this->belongsTo("App\Profile", "user_id");
  }

  public function seguidor(){
    return $this->belongsTo("App\Profile", "friend_id");
  }

  public function post_user(){
    return $this->belongsToMany('App\Post', 'likes', 'user_id', 'post_id');
  }
}
