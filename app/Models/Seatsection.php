<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seatsection extends Model
{
    public function Hall(){
        return $this->belongsTo('App\Models\Hall');
    }
    public function Price(){
        return $this->belongsTo('App\Models\Price');
    }
    public function Order(){
        return $this->hasMany('App\Models\Order');
    }
    public function Seat(){
        return $this->hasMany('App\Models\Seat');
    }

    public function Testseat(){
        return $this->hasMany('App\Models\Testseat');
    }
}
