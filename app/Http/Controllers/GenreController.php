<?php

namespace App\Http\Controllers;
use App\Models\Genre;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class GenreController extends Controller
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
        $genredata = Genre::all();
        // dd($genredata);

        $title="Genre Master";
        return view('admin.genre.listGenre', compact('title', 'genredata'));
    }

    public function addGenre()
    {
        return view('admin.genre.addGenre');
    }

    public function genreinsert(Request $req)
    {
       $genreObj = new Genre;
       $genreObj->name = $req->genrename;
       $genreObj->save();


       return redirect('addgenre')->with('message','Successsfully Added.'); 
    }

    public function editgenre($id)
    {
        $did = Crypt::decryptString($id);
        $genredata = Genre::find($did);
        // dd($genredata->name);

        $title="Genre Master";
        return view('admin.genre.editGenre', compact('title', 'genredata'));
    }

    public function genreupdate(Request $req, $id)
    {
        $did = Crypt::decryptString($id);
       $genreObj = Genre::find($did);
       $genreObj->name = $req->genrename;
       $genreObj->save();


       return redirect(route('editgenre', $id))->with('message','Successsfully Updated.'); 
    }


    public function destroy($id)
    {
        $id = Crypt::decryptString($id);
        Genre::destroy($id);

        return redirect(route('genre'))->with('message','Successsfully Deleted.'); 
    }




}
