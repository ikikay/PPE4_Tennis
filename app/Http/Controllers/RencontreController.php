<?php

namespace App\Http\Controllers;
use App\Models\Rencontre;
use App\Models\Equipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RencontreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($equipe_id)
    {
        $uneEquipe = Equipe::find($equipe_id);
        return view('admin.rencontre.index')->with('uneEquipe', $uneEquipe);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createR($equipe_id)
    {
        
        $uneEquipe = Equipe::find($equipe_id);
        return view('admin.rencontre.create')->with('uneEquipe', $uneEquipe);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'lieu' => 'required',
            'adversaire' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('rencontre.createR'))
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->session()->flash('success', 'La rencontre à été ajoutée !');
        $rencontre = new Rencontre();

        $rencontre->date = $request->get('date');
        $rencontre->lieu = $request->get('lieu');
        $rencontre->adversaire = $request->get('adversaire');
        $rencontre->equipe_id = $request->get('equipe_id');
        $rencontre->save();
        return redirect()->route("equipe.index");
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

        return redirect()->route("equipe.index");
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

        return redirect()->route("equipe.index");
    }
    
        public function convoquer($rencontre_id)
    {
       $rencontre = Rencontre::find($rencontre_id);
       $lesUsers = User::where("joueur","=",1);
      return view('admin.rencontre.convoquer')->with('tab_joueurs', $lesUsers)->with('rencontre', $rencontre);
    }
    
    public function convoquerstore($id,Request $request)
    {
        $request->session()->flash('success', 'Les joueurs sont notifiés de la rencontre !');
        $rencontre = Rencontre::find($id);
      
        $lesUser = User::all();
        
        foreach($lesUser as $user){
            $request->get('confirmation'.$user->id); 
            if ($request->get('confirmation'.$user->id)=='on')
            {
                $rencontre->users()->attach($user,['confirmation'=>true]);
            }
        }
  
      
        $rencontre->save();
        return redirect()->route("equipe.index");
    }
}
