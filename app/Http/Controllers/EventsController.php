<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\crypt;
use App\Models\Events;
use App\Models\Genre;
use App\Models\Venue;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Events::all();
        // dd($genredata);

        $title="Events Master";
        return view('admin.events.list', compact('title', 'data'));
    }

    public function addEvents()
    {
        $genredata = Genre::all();
        $venuedata = Venue::all();


        return view('admin.events.add', compact('genredata', 'venuedata'));
    }

    public function eventsinsert(Request $req)
    {
        //dd($req->file('photo'));
        $profileImage = null;
        if(!empty($req->file('photo')))
        {
            if ($image = $req->file('photo')) {
               // $destinationPath = 'upload/';
                $profileImage = 'event_'.date('YmdHis') . "." . $image->getClientOriginalExtension();
                //$image->move($destinationPath, $profileImage);
                $image->move(public_path('photo'), $profileImage);
                $input['photo'] = "$profileImage";
            }
            $image = $req->file('photo');
           
           
           
            // $s3path = 'student';
            // $profileImage = Storage::disk('s3')->put($s3path, $req->file('image'));
            // $filename = explode('/', $profileImage)[1];
            // $req->file('image')->storeAs('uploads/student', $filename);
           ///dd($profileImage);
        }


       $eObj = new Events;
       $eObj->title = $req->title;
       $eObj->genre_id = $req->genre;
       $eObj->photo = $profileImage;
       $eObj->desc = $req->desc;
       $eObj->amount = $req->amt;
       $eObj->event_date = $req->event_date;
       $eObj->venue_Id = $req->venue;
       
       $eObj->save();


       return redirect('addevents')->with('message','Successsfully Added.'); 
    }

    /* public function editvenue($id)
    {
        $did = Crypt::decryptString($id);
        $data = Events::find($did);
        // dd($genredata->name);

        $title="Artist Master";
        return view('admin.venue.edit', compact('title', 'data'));
    }

    public function venueupdate(Request $req, $id)
    {
        $did = Crypt::decryptString($id);
       $artistObj = Events::find($did);
       $artistObj->name = $req->artistname;
       $artistObj->save();


       return redirect(route('editartist', $id))->with('message','Successsfully Updated.'); 
    }


    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        Events::destroy($id);

        return redirect(route('artist'))->with('message','Successsfully Deleted.'); 
    } */
}
