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
         
        $cat=Genre::all();
        // dd($cat);
        $k=$request->get('keyword');
        $cat=Category::where('name', 'LIKE','%' .$k. '%')->first();
        if($cat != ""){
               $category_id=$cat->id; 
        }else{
            $category_id=null;
        }
    
        $genre=Genre::where('name', 'LIKE','%' .$k. '%')->first();
        if($genre != ""){
            $genre_id=$genre->id;
     }else{
         $genre_id=null;
     }
        
        if($k != " ") 
        {
            $events=Event::with('Category')->with('Genre')->where('title', 'LIKE','%' .$k. '%')
            ->orWhere('director', 'LIKE','%' .$k. '%')
            ->orWhere('categories_id', $category_id)
            ->orWhere('genres_id', $genre_id)->get();
            // if(count($events) >0 )
            // dd(is_null($events->id));
            // dd($events); 
            $m="متاسفانه رکوردی یافت نشد";
            return view('site.searchresult')->with('events',$events)->with('k',$k)->with('Message',$m);
        //   if($events === null){
             
        //     return view('site.searchresult');
        //   }
        }
    }


    public function upcoming_news(){

   }
}
