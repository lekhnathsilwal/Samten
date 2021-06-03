<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Program extends Model
{
    public function program_descriptions(){
        return $this->hasMany(ProgramDescription::class,'program_id','id');
    }
}
