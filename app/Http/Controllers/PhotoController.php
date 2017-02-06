<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Album;
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
    public function create($id) {
        $album = Album::find($id);
        //dd($album);
        return view('admin.photo.create', compact('album'));
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
        $image->album_id = $request->get('album_id');
        $fichier = $request->file('image');
        
        $imagename = time().'.'.$fichier->getClientOriginalExtension(); 
        $destinationPath = public_path('img/galerie/miniature/');
        Image::make($fichier->getRealPath())->resize(100, 100)->save($destinationPath.'/'.$imagename);
     
        $destinationPath = public_path('img/galerie/');
        $fichier->move($destinationPath, $imagename);              
      
        $image->name_image = $imagename;

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
        
        File::delete("img/galerie/" . $lImage->name_image, "img/galerie/miniature" . $lImage->name_image);
        

        $lImage->delete();

        return redirect()->route("photo.index");
    }

}