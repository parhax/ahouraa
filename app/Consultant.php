<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    public function info(){
        return $this->hasOne(ConsultantInfo::class);
    }
}
