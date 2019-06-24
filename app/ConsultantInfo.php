<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultantInfo extends Model
{
    public function consultant(){
        return $this->belongsTo(Consultant::class);
    }
}
