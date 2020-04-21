<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myseats;
use App\Models\Totalseat;
use App\Models\Category;
use App\Models\Testseat;
use App\Models\Event;
use App\Models\Hall_sanse;
use App\Models\Seatsection;







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
        for($i=1;$i<=5;$i++){
            for($j=1;$j<=10;$j++){
                Testseat::create([
                    'row'=>$i,
                    'number'=>$j,
                    'seatstatus'=>'2'
                ]);

            }
        }
        echo "seats save successfully";

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
        $status=$seat->seatstatus;
        if($status==1){
        $seat->seatstatus=3;
        }else{
        $seat->seatstatus=0;
        }
        $seat->save();
        return response()->json(['success'=>$seatid]);

    }
    public function seat_delete(){
        $seatid=$_GET['seatid'];
        // var_dump($seatid);

        $seat=Testseat::find($seatid);
        $row=$seat->row;
        // var_dump($row);
        $seats=Testseat::whereRow($row)->get();
        foreach($seats as $se){
            if($se->id>$seatid){
                $num=$se->number;
                $se->number=$num-1;
                $se->save();
            }
        }
        $seat->seatstatus=1;
        $seat->save();
        return response()->json(['success'=>$row]);

    }
    public function testseatshow(){
        $seats=Testseat::all();

        $maxrow=Testseat::max('row');
        $maxseat=Testseat::max('number');
            // dd($maxrow);

        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        return view('seats.testseatshow',compact(['seats','filmcat','theatrecat','consertcat','maxrow','maxseat']));
    }

    public function testseatevent(){
        $event=Hall_sanse::whereId('1')->get();
        $maxrow=Testseat::max('row');
        $section=Seatsection::whereId('1')->get();

        // dd($section);
        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        return view('seats.testseatevent',compact(['event','filmcat','theatrecat','consertcat','maxrow','section']));
    }
}
