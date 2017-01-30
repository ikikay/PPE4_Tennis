<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Contenu;

class PagesController extends Controller {

    function index() {
        $lesArticles = Article::all();
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
