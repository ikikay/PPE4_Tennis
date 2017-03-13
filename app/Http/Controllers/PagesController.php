<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Photo;
use App\Models\Album;
use App\Models\Contenu;
use App\Models\Comite;
use App\Models\User;
use App\Models\Message;

class PagesController extends Controller {

    public function index() {
        $lesArticles = Article::all()->sortByDesc("created_at");

        return view('site.index')
                        ->with("tab_articles", $lesArticles);
    }

    function contact() {
        $leComite = Comite::with('Users')->get();
        return view('site.contact')->with("leComite", $leComite);
        return view('site.contact')->with("leComite", $leComite);        
    }

    function documentation() {
        return view('site.documentation');
    }

    function galerie() {
        $lesAlbums = Album::with('photos')->get();
        return view('site.galerie', compact('lesAlbums'));
    }

    function showGalerie($id) {

        $album = Album::with('photos')->find($id);
        return view('site.showGalerie', compact('album'));
    }

    function coordonnee() {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        return view('site.coordonnee')->with("contenu", $contenu);
    }

    function profil() {
       $lesUsers = User::all();

        return view('site.profil')
                        ->with('tab_users', $lesUsers);
        
    }
    
    function editprofil($id) {
         $leUser = User::find($id);
        return view('site.profil.editmdp')
                        ->with("leUser", $leUser);
    }
    
     public function updateprofil(Request $request, $id) {
        $leUser = User::find($id);


     
     
        
        
     
        if ($request->get('password') !="") {
              $leUser->password = bcrypt($request->get('password'));       
        }
        
     



        $leUser->save();

        return redirect()->route("profil");
    }

    function message(Request $request) {
        $request->session()->flash('success', 'Merci! Votre message à bien été envoyer');
        
        $message = new Message();
        $message->auteur = $request->get('nom') . " " .$request->get('prenom');
        $message->email = $request->get('email');
        $message->titre = $request->get('titre');
        $message->contenu = $request->get('contenu');
        $message->tel = $request->get('telephone');
        
        $message->save();
        return redirect()->route("contact");
    }

}
