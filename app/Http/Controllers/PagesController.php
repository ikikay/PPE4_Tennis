<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Galerie;

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

        $lesImages = Galerie::all();
        return view('site.galerie')
                        ->with("tab_images", $lesImages);
    }

}
