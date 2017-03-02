<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Contenu;
use App\Models\Comite;

class PagesController extends Controller {

    
       
   
    
    public function index() {
        $lesArticles = Article::all()->sortByDesc("created_at");

        return view('site.index')
                        ->with("tab_articles", $lesArticles);
    }

    function contact() {
        $leComite = Comite::with('Users')->get();
        //dd($leComite);
        return view('site.contact')->with("leComite", $leComite);        
    }

    function documentation() {
        return view('site.documentation');
    }

    function galerie() {
        $lesAlbums = Album::with('photos')->get();
        return view('site.galerie', compact('lesAlbums'));
    }
    
    function showGalerie($id){
        
       $album = Album::with('photos')->find($id);
       return view('site.showGalerie', compact('album'));
    }
    
    function coordonnee() {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        return view('site.coordonnee')->with("contenu", $contenu);
    } 
    function profil() {
        return view('site.profil');
    }
}
