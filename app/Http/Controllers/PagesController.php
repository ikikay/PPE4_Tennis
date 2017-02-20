<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Contenu;

class PagesController extends Controller {

    
       
   
    
    public function index() {
        $lesArticles = Article::all()->sortByDesc("created_at");

        return view('site.index')
                        ->with("tab_articles", $lesArticles);
    }

    function contact() {
        return view('site.contact');
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
        return view('site.coordonnee')
                        ->with("contenu", $contenu);
    }

}
