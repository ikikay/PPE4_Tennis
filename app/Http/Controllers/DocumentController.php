<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Http\Request;
use Image;
Use File;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $lesDocs = Document::all();

        return view('site.document.index')
                        ->with('tab_docs', $lesDocs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('site.document.create'); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->session()->flash('success', 'Le fichier à été Ajouté !');
        
        $image = new Document();

        $image->nom = $request->get('nom');
        
       
        $fichier = $request->file('document');
        
        $imagename = time().'.'.$fichier->getClientOriginalName(); 
      
          
     
        $destinationPath = public_path('doc/');
           
        $fichier->move($destinationPath, $imagename);              
      
        $image->fichier = $imagename;

        $image->save();
        
        return redirect()->route("document.index");
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
    public function destroy(Request $request, $id)
    {
         $request->session()->flash('success', 'Le doc à été Supprimé !');

        $doc = Document::find($id);
        
        File::delete("doc/" . $doc->fichier);
        

        $doc->delete();

        return redirect()->route("document.index");
    }
}
