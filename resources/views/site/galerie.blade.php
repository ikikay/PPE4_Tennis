@extends('layout_front')
@section('content')

<div class="container ">
    
        <center><h1 class="baniere gtitre">ÎgalerieÏ </h1></center> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
        <div class="grid">
        @foreach ($lesAlbums as $unAlbum)
        @if($unAlbum->actif == true)
        @if(count($unAlbum->Photos) === 0)
                    <center>Oups nous n'avons pas encore de photos a vous presentez dans cette album</center>
                 @else                
                    <figure class="effect-ruby">
                        <img src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}">                    
                        <figcaption>
                            <h2>{{$unAlbum["titre"]}} </h2>
                            <p>voir les {{count($unAlbum->Photos)}} photos</p>
                            <a title="album {{ $unAlbum["id"] }}" href="{{route('showGalerie',$unAlbum->id)}}">voir l'album</a>
                        </figcaption>            
                    </figure>           
        @endif      
        @endif    
        @endforeach
        </div>   
        </div>
        
        
        
        

@stop