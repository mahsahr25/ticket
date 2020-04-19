<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function Hall(){
        return $this->hasMany('App\Models\Hall');
    }
    public function Event(){
        return $this->belongsToMany('App\Models\Event');
    }
}
