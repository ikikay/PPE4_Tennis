@extends('layout_front')
@section('content')

<div class="container">
    <div class="row col-md-12">
        <center><h1 class="baniere gtitre">ÎgalerieÏ </h1></center> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
        <div class="row">
        @foreach ($lesAlbums as $unAlbum)
        @if($unAlbum->actif == true)
        <div class="col-md-3">
            <div class="grow pic ">
                <a title="Image {{ $unAlbum["id"] }}" href="{{route('showGalerie',$unAlbum->id)}}">
                    <img src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}">                    
                </a>
            </div>
            <center class="pirate"> {{$unAlbum["titre"]}}</center>
        </div> 
        @endif    
        @endforeach
        </div>   
    </div>
</div>




@stop