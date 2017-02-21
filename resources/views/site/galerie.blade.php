@extends('layout_front')
@section('content')

<div class="container">
    <div class="row col-md-12">
        <h1>Galerie </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->


        @foreach ($lesAlbums as $unAlbum)
        @if($unAlbum->actif == true)
        <div class="col-md-3">
            <div class="grow pic ">
                <a title="Image {{ $unAlbum["id"] }}" href="{{route('showGalerie',$unAlbum->id)}}">
                    <img src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}">                    
                </a>
            </div>
            <center>{{$unAlbum["titre"]}}</center>
        </div> 
        @endif    
        @endforeach


          
    </div>
</div>




@stop