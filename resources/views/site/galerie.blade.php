@extends('layout_front')
@section('content')

<div class="container">
    <div class="row">
        <h1>Galerie </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->


        @foreach ($lesAlbums as $unAlbum)
        @if($unAlbum->actif == true)
            <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image {{ $unAlbum["id"] }}" href="{{route('showGalerie',$unAlbum->id)}}"><img src="{{ url('img/galerie/miniature') ."/". $unAlbum->Photos->first()->fichier }}" alt="img{{ $unAlbum["id"] }}"></a></div>
        @endif    
        @endforeach

        <hr>

        <hr>
    </div>
</div>




@stop