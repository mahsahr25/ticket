<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function profile(){
        return view('users.profile');
    }
    public function register(){
        return view('users.register1');
    }
    public function login(){
        return view('users.login');
    }
    public function edit_profile(){

    }
    public function ticket_history(){

    }
    public function favorite_save(){

    }
    public function favorite_show(){

    }
    


}
