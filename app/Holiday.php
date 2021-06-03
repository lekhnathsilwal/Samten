<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    public function calender(){
        return $this->belongsTo(Calender::class,'calender_id','id');
    }
}
