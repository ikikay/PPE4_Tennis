<?php

namespace App\Http\Controllers;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Image;
Use File;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lesAlbums = Album::with('Photos')->get();
        //$couverture = Photo::find();
        return view('admin.album.index', compact('lesAlbums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $rules = array(

      'name_album' => 'required',
      'name_cover_image'=>'required|image'

        );
        $validator = Validator::make(Input::all(), $rules);
            if($validator->fails()){

            return Redirect::route('create_album_form')
            ->withErrors($validator)
            ->withInput();
        }*/
            
        
        $album = new Album();

        $album->titre = $request->get('name');
        $album->description = "description";
        $album->actif = true;
        
       
        $album->save();
        $request->session()->flash('success', 'L\'album à été Ajouté !');
        return redirect()->route("album.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $album = Album::with('Photos')->find($id);
       return view('admin.album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesAlbums = Album::find($id);
        return view('admin.album.edit', compact('lesAlbums'));
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
        $request->session()->flash('success', 'L\'album à été Ajouté !');
        
        $album = Album::find($id);

        $album->tire = $request->get('name');
        $album->descrition = "description";
        $album->actif = true;
        /*$fichier = $request->file('image');
        
        $imagename = time().$fichier->getClientOriginalName(); 
         
        if($imagename == $album->name_cover_image ){
            $album->save();
            return redirect()->route("album.index");
        }
        else{
        File::delete("img/galerie/" . $album->name_cover_image, "img/galerie/miniature" . $album->name_cover_image);
        
        $destinationPath = public_path('img/galerie/miniature');
        Image::make($fichier->getRealPath())->resize(100, 100)->save($destinationPath.'/'.$imagename);        
        $destinationPath = public_path('img/galerie/');
        $fichier->move($destinationPath, $imagename);        
        $album->name_cover_image = $imagename;
        }*/
       
                

        $album->save();
        return redirect()->route("album.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
       $request->session()->flash('success', 'L\'album à été Supprimé !');

        $album = Album::find($id);

        File::delete("img/galerie/" . $album->name_cover_image);
        File::delete("img/galerie/miniature" . $album->name_cover_image);

        $album->delete();

        return redirect()->route("album.index");
    }
}
