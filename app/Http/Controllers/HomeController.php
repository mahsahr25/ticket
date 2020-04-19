<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function myhome()
    {
        $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');

        $movies=Event::whereCategory_id('1')->get();
        $theatres=Event::whereCategory_id('2')->get();
        $conserts=Event::whereCategory_id('3')->get();


        // dd($movies);
        return view('myhome',compact(['movies','filmcat','consertcat','theatrecat','theatres','conserts']));
    }
}
