<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illumintae\Support\Facades\crypt;

use App\Models\Venue;

class VenueController extends Controller
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
        $data = Venue::all();
        // dd($genredata);

        $title="Venue Master";
        return view('admin.venue.list', compact('title', 'data'));
    }

    public function addVenue()
    {
        return view('admin.venue.add');
    }

    public function venueinsert(Request $req)
    {
       $vObj = new Venue;
       $vObj->name = $req->venue;
       $vObj->address = $req->address;
       $vObj->contact_no = $req->contact;
       $vObj->save();


       return redirect('addvenue')->with('message','Successsfully Added.'); 
    }

    /* public function editvenue($id)
    {
        $did = Crypt::decryptString($id);
        $data = Venue::find($did);
        // dd($genredata->name);

        $title="Artist Master";
        return view('admin.venue.edit', compact('title', 'data'));
    }

    public function venueupdate(Request $req, $id)
    {
        $did = Crypt::decryptString($id);
       $artistObj = Venue::find($did);
       $artistObj->name = $req->artistname;
       $artistObj->save();


       return redirect(route('editartist', $id))->with('message','Successsfully Updated.'); 
    }


    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        Venue::destroy($id);

        return redirect(route('artist'))->with('message','Successsfully Deleted.'); 
    } */
}
