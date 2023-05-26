<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\crypt;

class ArtistController extends Controller
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
        $data = Artist::all();
        // dd($genredata);

        $title="Artist Master";
        return view('admin.artist.list', compact('title', 'data'));
    }

    public function addArtist()
    {
        return view('admin.artist.add');
    }

    public function artistinsert(Request $req)
    {
       $artistObj = new Artist;
       $artistObj->name = $req->artistname;
       $artistObj->save();


       return redirect('addartist')->with('message','Successsfully Added.'); 
    }

    public function editartist($id)
    {
        $did = Crypt::decryptString($id);
        $data = Artist::find($did);
        // dd($genredata->name);

        $title="Artist Master";
        return view('admin.artist.edit', compact('title', 'data'));
    }

    public function artistupdate(Request $req, $id)
    {
        $did = Crypt::decryptString($id);
       $artistObj = Artist::find($did);
       $artistObj->name = $req->artistname;
       $artistObj->save();


       return redirect(route('editartist', $id))->with('message','Successsfully Updated.'); 
    }


    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        Artist::destroy($id);

        return redirect(route('artist'))->with('message','Successsfully Deleted.'); 
    }

}
