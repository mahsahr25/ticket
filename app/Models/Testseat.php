<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testseat extends Model
{
    protected $fillable=['row','number','seatstatus'];

    public function Seatsection(){
        return $this->belongsTo('App\Models\Seatsection');
    }
}
