<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Events;
use App\Models\Venue;
use App\Models\Genre;


class WelcomeController extends Controller
{
    public function index()
    {
        $eventdata = Events::orderBy('event_date', 'desc')->paginate(10);
         
        $genObj = new Genre();
        $generedata = $genObj->eventRelation()->paginate(10);
        //dd($generedata);

        $genredata = Genre::all();
        $venuedata = Venue::all();


        $title="Events";
        return view('welcome', compact('title', 'eventdata', 'genredata', 'venuedata'));
    }


    public function searchevents(Request $request)
    {
        if(!empty($request->title))
        $eventdata = Events::where('title','LIKE',"%{$request->title}%")->paginate(10);
        else if(!empty($request->genre))
        $eventdata = Events::where('genre_id','=',"{$request->genre}")->paginate(10);
        else if(!empty($request->event_date))
        $eventdata = Events::where('event_date','=',"{$request->event_date}")->paginate(10);
        else if(!empty($request->venue))
        $eventdata = Events::where('venue_id','=',"%{$request->venue}%")->paginate(10);
        else
        $eventdata = Events::orderBy('event_date', 'desc')->paginate(10);


        $genredata = Genre::all();
        $venuedata = Venue::all();

        $title="Events";
        return view('welcome', compact('title', 'eventdata', 'genredata', 'venuedata'));
    }



}
