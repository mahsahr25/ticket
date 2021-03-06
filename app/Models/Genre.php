<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function Event(){
        return $this->hasMany('App\Models\Event');
    }
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
}
