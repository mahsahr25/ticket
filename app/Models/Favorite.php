<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function User(){
        return $this->belongsTo('App\Models\User');
    }
    public function Event(){
        return $this->belongsTo('App\Models\Event');
    }
}
