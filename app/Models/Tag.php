<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function Event(){
        return $this->morphedByMany('App\Models\Event','taggable');
    }
    public function Blog(){
        return $this->morphedByMany('App\Models\Blog','taggable');
    }
}
