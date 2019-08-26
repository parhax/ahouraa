<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class ConsultantInfo extends Model
{
    public function consultant(){
        return $this->belongsTo(Consultant::class);
    }

    public function getUrlAttribute()
    {
        return route('consultantInfos.show',$this->id);
    }

    public function getCreatedTimeAttribute()
    {
        //bahaalijaat carbon
        return $this->created_at->diffForHumans();
    }
}
