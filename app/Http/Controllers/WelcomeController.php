<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Events;



class WelcomeController extends Controller
{
    public function index()
    {
        $eventdata = Events::orderBy('event_date', 'desc')->paginate(10);
         //dd($eventdata);



        $title="Events";
        return view('welcome', compact('title', 'eventdata'));
    }
}
