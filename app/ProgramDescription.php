<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramDescription extends Model
{
    public function program(){
        return $this->belongsTo(Program::class,'program_id','id');
    }
}
