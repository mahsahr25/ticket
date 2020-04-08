<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function single_event(){

        return view('events.single_event');

    }
    public function m_events(){

        return view('events.m_events');

    }
    public function best_sellers(){


    }
    public function popular_events(){


    }


}
