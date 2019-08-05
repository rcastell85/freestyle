<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $guarded = [];

    public function user(){
      return $this->belongsTo("App\User", "user_id");
    }

    // public function post_user(){
    //   return $this->belongsToMany('App\Post', 'likes', 'user_id', 'post_id');
    // }

    public function post(){
      return $this->belongsTo('App\Post', 'post_id');
    }
}
