<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    public function Seatsection(){
        return $this->belongsTo('App\Models\Seatsection');
    }
    public function Status(){
        return $this->belongsTo('App\Models\Status');
    }
    public function Ticket(){
        return $this->hasMany('App\Models\Ticket');
    }
    public function Sanse(){
        return $this->belongsToMany('App\Models\Sanse');
    }
}
