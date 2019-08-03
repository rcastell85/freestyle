<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  public $guarded = [];

  public function user(){
    return $this->belongsTo("App\User", "user_id");
  }

  public function perfil(){
    return $this->belongsTo("App\Profile", "user_id");
  }

  public function likes(){
    return $this->belongsToMany("App\Like", "likes", "post_id", "user_id");
  }
}
