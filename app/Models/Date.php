<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public function Sanse(){
        return $this->hasMany('App\Models\Sanse');
    }
}
