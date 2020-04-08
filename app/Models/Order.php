<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function Event(){
        return $this->belongsTo('App\Models\Event');
    }
    public function Sanse(){
        return $this->belongsTo('App\Models\Sanse');
    }
    public function User(){
        return $this->belongsTo('App\Models\User');
    }
    public function Seatsection(){
        return $this->belongsTo('App\Models\Seatsection');
    }
    public function Ticket(){
        return $this->hasMany('App\Models\Ticket');
    }
    public function Transaction(){
        return $this->hasMany('App\Models\Transaction');
    }
}
