<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall_sanse extends Model
{
    public function Hall(){
        return $this->belongsTo('App\Models\Hall');
    }
    public function Sanse(){
        return $this->belongsTo('App\Models\Sanse');
    }
    public function Event(){
        return $this->belongsTo('App\Models\Event');
    }
}
