<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function Favorite(){
    //     return $this->hasMany('App\Models\Favorite');
    // }
    // public function Comment(){
    //     return $this->hasMany('App\Models\Comment');
    // }
    // public function Order(){
    //     return $this->hasMany('App\Models\Order');
    // }
    // public function Eventpoint(){
    //     return $this->hasMany('App\Models\Eventpoint');
    // }
    // public function Contactus(){
    //     return $this->hasMany('App\Models\Contactus');
    // }
    // public function Role(){
    //     return $this->belongsToMany('App\Models\Role');
    // }
    // public function Image(){
    //     return $this->morphMany('App\Models\Image','imageable');
    // }
}
