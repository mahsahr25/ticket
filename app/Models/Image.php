<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Imageable(){
        return $this->morphTo();
    }
    // public function getNameAttribute($value){
    //     return "/assets/img/post/".$value;
    // }
    public function getNameAttribute($value){
            return "/storage/".$value;
        }
}
