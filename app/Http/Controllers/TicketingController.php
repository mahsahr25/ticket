<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Hall_sanse;


class TicketingController extends Controller
{
    //
    public function section_select($id){
        $hall_sanse=Hall_sanse::findorfail($id);
        // dd($hall_sanse->event);

        // $hall_sanse1=$hall_sanse::with('Event')->get();
        // dd($hall_sanse1);
        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        return view('ticketing.section_select',compact(['filmcat','theatrecat','consertcat','hall_sanse']));

    }
    public function prepay_ticket(){

        return view('ticketing.prepay_ticket');

    }
    public function final_ticket(){

        return view('ticketing.final_ticket');

    }
}
