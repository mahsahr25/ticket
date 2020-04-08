<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function Favorite(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function Comment(){
        return $this->hasMany('App\Models\Comment');
    }
    public function Order(){
        return $this->hasMany('App\Models\Order');
    }
    public function Eventpoint(){
        return $this->hasMany('App\Models\Eventpoint');
    }
    public function Contactus(){
        return $this->hasMany('App\Models\Contactus');
    }
    public function Role(){
        return $this->belongsToMany('App\Models\Role');
    }
    public function Image(){
        return $this->morphMany('App\Models\Image','imageable');
    }
}
