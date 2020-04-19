<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;


class EventController extends Controller
{
    //
    public function single_event($id){
        // dd($id);
        $event=Event::find($id);
        // dd($event);
        $poster=$event->image()->take('1')->get();

        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');
        // $hall=$event->hall()->get();
        // dd($hall);

        return view('events.single_event',compact(['filmcat','theatrecat','consertcat','event','poster']));

    }
    public function m_events(){

        return view('events.m_events');

    }
    public function best_sellers(){


    }
    public function popular_events(){


    }


}
