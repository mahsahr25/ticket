<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function Order(){
        return $this->belongsTo('App\Models\Order');
    }
    public function Seat(){
        return $this->belongsTo('App\Models\Seat');
    }
}
