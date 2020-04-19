<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Category;
use App\Models\Genre;

class SiteController extends Controller
{
    //
    public function tracking(){

        return view('site.tracking');

    }
    public function contactus(){

        return view('site.contactus');

    }
    public function blog(){

        return view('site.blog');

    }
    public function contactus_save(){

    }
    public function search_result(Request $request){
    //     $cat=Genre::all();
    //     // dd($cat);
        $request=$request->get('keyword');
        $keywords=explode(" ",$request);
    //     $cat=Category::where('name', 'LIKE','%' .$keyword. '%')->first();
    //     if($cat != ""){
    //            $category_id=$cat->id;
    //     }else{
    //         $category_id=null;
    //     }

    //     $genres=Genre::where('name', 'LIKE','%' .$keyword. '%')->get();
    //     // dd($genre);
    //     if($genres != ""){
    //     foreach($genres as $genre )

    //         $genre_id=$genre->id;
    //  }else{
    //      $genre_id=null;
    //  }

    //     if($keyword != " ")
    //     {
    //         $events=Event::with('Genre')->with('Category')->where('name', 'LIKE','%' .$keyword. '%')
    //         ->orWhere('director', 'LIKE','%' .$keyword. '%')
    //         ->orWhere('cast', 'LIKE','%' .$keyword. '%')
    //         ->orWhere('singer', 'LIKE','%' .$keyword. '%')
    //         ->orWhere('categories_id', $category_id)
    //         ->orWhere('genres_id', $genre_id)->get();
            // if(count($events) >0 )
            // dd(is_null($events->id));
            // dd($events);

            foreach ($keywords as $keyword){
            $events=Event::where('name', 'LIKE', '%' .$keyword. '%')//Give me this album if its title matches the input
            ->orwhere('director', 'LIKE', '%' .$keyword. '%')
            ->orwhere('cast', 'LIKE', '%' .$keyword. '%')
            ->orwhere('singer', 'LIKE', '%' .$keyword. '%')


    // I need this album if any of its user's name matches the given input
    ->orWhereHas('category', function($q) use ($keyword) {
        return $q->where('name', 'LIKE', '%' . $keyword . '%');
    })
    ->orWhereHas('venue', function($q) use ($keyword) {
        return $q->where('name', 'LIKE', '%' . $keyword . '%');
    })
    // I need this album if any of its tracks' title matches the given input
    ->orWhereHas('genre', function($q) use ($keyword) {
        return $q->where('name', 'LIKE', '%'. $keyword . '%');
    })->get();

            }



            $message="متاسفانه نتیجه‌ای یافت نشد.";
            $filmcat=Category::find('1');
        $theatrecat=Category::find('2');
        $consertcat=Category::find('3');
            return view('site.searchresult',compact(['filmcat','theatrecat','consertcat']))->with('events',$events)->with('keyword',$keyword)->with('Message',$message);
        //   if($events === null){

        //     return view('site.searchresult');
        //   }
        // }

    }
    public function upcoming_news(){

    }



}
