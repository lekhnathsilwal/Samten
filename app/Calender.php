<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    public function holidays(){
        return $this->hasMany(Holiday::class,'calender_id','id');
    }
}
