<?php

namespace App\Http\Controllers;
use App\Models\Resultat;
use App\Models\User;
use App\Models\Rencontre;
use Illuminate\Http\Request;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($rencontre_id)
    {
        $rencontre = Rencontre::find($rencontre_id);
        $lesUsers = User::all();
        return view('admin.resultat.create',  compact($rencontre))->with('tab_joueurs', $lesUsers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->flash('success', 'La rencontre à été ajoutée !');
        $resultat = new Resultat();

        $resultat->rencontre_id = $request->get('rencontre_id');
        $resultat->user_id = $request->get('lieu');
        $resultat->confirmation = $request->get('adversaire');
        $resultat->equipe_id = $request->get('equipe_id');
        $resultat->save();
        return redirect()->route("rencontre.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
