<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comite;
use App\Models\User;
class CoordonneeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leComite = Comite::with('Users')->get();
        $lesUsers = User::pluck('nom','id');
        //dd($leComite);
        return view('admin.coordonnee.index')->with("leComite", $leComite)->with("lesUsers", $lesUsers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //dd($id);
        $user = User::find($id);
        $user->comite_id = NULL;
        $user->save();
        return redirect()->route("coordonnee.index");
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addUserStatut($id,Request $request)
    {
        //
        $user = User::find($request->get("user".$id));
        $user->comite_id = $id;
        $user->save();
        return redirect()->route("coordonnee.index");
    }
}
