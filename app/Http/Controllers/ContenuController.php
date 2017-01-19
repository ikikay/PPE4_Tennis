<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenu;

class ContenuController extends Controller {

    /**
     * Affiche la page de modification des coordonnees
     *
     */
    public function coordonnee_edit() {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        return view('admin.contenu.coordonnee')
                        ->with("contenu", $contenu);
    }

    public function coordonnee_update(Request $request) {
        $contenu = Contenu::where('page', "coordonnee")->get()->first();
        
        $contenu->ckeditor = $request->get('editor');

        $contenu->save();

        return redirect()->route("coordonnee");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
