<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
      public function course(){
        return $this->belongsTo('App\Course');
    }
    public function students(){
        return $this->hasMany('App\Student');
    }
}
