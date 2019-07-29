<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $guarded = [];

  public function user(){
    return $this->belongsTo("App\User", "user_id");
  }
}
