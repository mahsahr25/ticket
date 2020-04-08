<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myseats;

class SeatController extends Controller
{
    //
    public function seat_section(){

        return view('seats.seat_section');

    }
    public function seats(){

        return view('seats.seats');

    }
    public function seat_reserve(){


    }
    public function seat_sold(){


    }

    public function myseat(){
        $seats=Myseats::all();
        // dd($seats);
        $max=Myseats::max('row');
        // dd($max);

        return view('seats.myseat',compact(['seats','max']));

    }
}
