<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function Genre(){
        return $this->belongsTo('App\Models\Genre');
    }
    public function Category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function Hall(){
        return $this->belongsTo('App\Models\Hall');
    }
    public function Sanse(){
        return $this->belongsTo('App\Models\Sanse');
    }
    public function Comment(){
        return $this->hasMany('App\Models\Commment');
    }
    public function Eventpoint(){
        return $this->hasMany('App\Models\Eventpoint');
    }
    public function Order(){
        return $this->hasMany('App\Models\Order');
    }
    public function Favorite(){
        return $this->hasMany('App\Models\Favorite');
    }
    public function Image(){
        return $this->morphMany('App\Models\Image','imageable');
    }
    public function Video(){
        return $this->morphMany('App\Models\Video','videoable');
    }
    public function Tag(){
        return $this->morphtoMany('App\Models\Tag','taggable');
    }

}
