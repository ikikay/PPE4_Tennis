<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Contenu;

class PagesController extends Controller {

    
       
    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        $lesImages = Photo::all();
        return view('site.galerie')
                        ->with("tab_images", $lesImages);
    }
    
    function coordonnee() {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        return view('site.coordonnee')
                        ->with("contenu", $contenu);
    }

}
