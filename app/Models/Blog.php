<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
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
