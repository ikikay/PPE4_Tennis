<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Intervention\Image\ImageManager;
use Image;
Use File;

class PhotoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $lesImages = Photo::all();
        return view('admin.photo.index')
                        ->with("tab_images", $lesImages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.photo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->session()->flash('success', 'L\'image à été Ajouté !');
        
        $image = new Photo();

        $image->name_user = $request->get('name');
        $image->description = $request->get('description');  
        $fichier = $request->file('image');
        
        /*$imagename = time().'.'.$fichier->getClientOriginalExtension(); 
        $destinationPath = public_path('img/galerie/miniature/');
        $image = Image::make($fichier->getRealPath())->resize(100, 100);
        $image->save($destinationPath.'/'.$imagename);
        $destinationPath = public_path('img/galerie/');
        $fichier->move($destinationPath, $imagename);*/
        
        
        
        
        
        Image::make($fichier->getRealPath())->save("img/galerie/" . $fichier->getClientOriginalName());
        
        $image->name_image = $fichier->getClientOriginalName();

        $image->save();
        
        return redirect()->route("photo.index");
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
    public function destroy(Request $request, $id) {
        $request->session()->flash('success', 'L\'image à été Supprimé !');

        $lImage = Photo::find($id);

        File::delete("img/galerie/" . $lImage->name_image);

        $lImage->delete();

        return redirect()->route("photo.index");
    }

}
