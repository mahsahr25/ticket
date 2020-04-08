<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function Seat(){
        return $this->hasMany('App\Models\Seat');
    }
}
