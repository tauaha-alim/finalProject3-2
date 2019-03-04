<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


      public function batches(){
        return $this->hasMany('App\Batch');
    }
    public function students(){
        return $this->hasMany('App\Student');
    }
}
