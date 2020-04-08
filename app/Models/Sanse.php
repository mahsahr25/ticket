<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sanse extends Model
{
    public function Event(){
        return $this->hasMany('App\Models\Event');
    }
    public function Date(){
        return $this->belongsTo('App\Models\Date');
    }
    public function Order(){
        return $this->hasMany('App\Models\Order');
    }
    public function Seat(){
        return $this->belongsToMany('App\Models\Seat');
    }
}
