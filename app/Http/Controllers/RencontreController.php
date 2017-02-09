<?php

namespace App\Http\Controllers;
use App\Models\Rencontre;
use App\Models\Equipe;
use Illuminate\Http\Request;

class RencontreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesRencontres = Rencontre::all();
        return view('admin.rencontre.index')->with('tab_rencontres', $lesRencontres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lesEquipes = Equipe::pluck('nom', 'id');
        return view('admin.rencontre.create', compact('lesEquipes'));
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
        $rencontre = new Rencontre();

        $rencontre->date = $request->get('date');
        $rencontre->lieu = $request->get('lieu');
        $rencontre->adversaire = $request->get('adversaire');
        $rencontre->equipe_id = $request->get('equipe_id');
        $rencontre->save();
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
        $rencontre = Rencontre::find($id);
        $lesEquipes = Equipe::pluck('nom', 'id');
        return view('admin.rencontre.edit', compact('rencontre', 'lesEquipes'));
        //->with("rencontre", $rencontre)
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
        $rencontre = Rencontre::find($id);

        $rencontre->date = $request->get('date');
        $rencontre->lieu = $request->get('lieu');
        $rencontre->adversaire = $request->get('adversaire');
        $rencontre->equipe_id= $request->get('equipe_id');

        $rencontre->save();

        return redirect()->route("rencontre.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request->session()->flash('success', 'La rencontre à été supprimée !');

        $rencontre = Rencontre::find($id);

        $rencontre->delete();

        return redirect()->route("rencontre.index");
    }
}
