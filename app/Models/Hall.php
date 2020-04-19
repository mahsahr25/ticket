<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public function Event(){
        return $this->belongsToMany('App\Models\Event');
    }
    public function Seatsection(){
        return $this->hasMany('App\Models\Seatsection');
    }
    public function Venue(){
        return $this->belongsTo('App\Models\Venue');
    }
    public function Hall_sanse(){
        return $this->hasMany('App\Models\Hall_sanse');
    }
}
