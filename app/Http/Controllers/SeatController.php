<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myseats;
use App\Models\Totalseat;
use App\Models\Category;
use App\Models\Testseat;




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





    // test part=====================

    public function myseat(){
        $seats=Myseats::all();
        // dd($seats);
        $max=Myseats::max('row');
        // dd($max);

        return view('seats.myseat',compact(['seats','max']));

    }
    public function ourseat_index(){
        // baraye inke akharin input row va totalrowseat ra begirad
        $seats=Totalseat::orderBy('id','Desc')->take('1')->get();
        // dd($seats);
        // $max=Myseats::max('row');
        // dd($max);

        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        return view('seats.ourseat',compact(['seats','filmcat','theatrecat','consertcat']));

    }

    public function seat_arrange($i){
        dd($i);
        // if($request->submit == "shift")
        // {
        // // dd('shift');
        // }
        // else if($request->submit == "Update")
        // {
        // // dd('delete');
        // }
        return redirect('/ourseat');
    }
    public function testseat_save(){
        for($i=1;$i<=3;$i++){
            for($j=1;$j<=4;$j++){
                Testseat::create([
                    'row'=>$i,
                    'number'=>$j,
                    'seatstatus'=>'2'
                ]);

            }
        }
        echo "inser";

    }
    public function testseat_index(){
        $seats=Testseat::all();

        $maxrow=Testseat::max('row');
        $maxseat=Testseat::max('number');
            // dd($maxrow);

        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        return view('seats.testseat',compact(['seats','filmcat','theatrecat','consertcat','maxrow','maxseat']));
    }


    public function seat_shift(){
        $seatid=$_GET['seatid'];
        $seat=Testseat::find($seatid);
        $seat->seatstatus=0;
        $seat->save();
        return response()->json(['success'=>$seatid]);

    }
}
