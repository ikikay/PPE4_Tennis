@extends('layout_front')
@section('content')

<div class="container">
    <div class="row">
        <h1>Galerie </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
        @foreach ($album->Photos as $uneImage)                
        <a href="{{ url('img/galerie') ."/". $uneImage["fichier"] }}" data-lightbox="roadtrip"><img src="{{ url('img/galerie/miniature') ."/". $uneImage["fichier"] }}" ></a>           
        @endforeach            
    </div>
</div>



@stop

@section('script')
<!-- lightBox -->
    <script src="{{url('js/lightbox.min.js')}}"></script>
@endsection