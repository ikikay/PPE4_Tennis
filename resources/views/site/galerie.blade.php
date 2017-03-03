@extends('layout_front')
@section('content')

<div class="container ">
    <div class="row col-md-12">
        <center><h1 class="baniere gtitre">ÎgalerieÏ </h1></center> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
        <div class="row contenu">
        @foreach ($lesAlbums as $unAlbum)
        @if($unAlbum->actif == true)
        <div class="col-md-3">@if(count($unAlbum->Photos) === 0)
                    <center>Oups nous n'avons pas de photos a vous presentez dans cette album</center>
                 @else
            <div class="grow pic ">
                    <a title="album {{ $unAlbum["id"] }}" href="{{route('showGalerie',$unAlbum->id)}}">
                        <img src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}">                    
                    </a>
            </div>
                 @endif
            <center class="pirate"> {{$unAlbum["titre"]}}</center>
        </div> 
        @endif    
        @endforeach
        </div>   
    </div>
</div>

@stop