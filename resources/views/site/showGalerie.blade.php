@extends('layout_front')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1 class="pirate gtitre">{{$album["titre"]}} </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->
        @foreach ($album->Photos as $uneImage)
        <div class="thumbnail col-md-3">
            <a href="{{ url('img/galerie') ."/". $uneImage["fichier"] }}" data-lightbox="roadtrip"><img src="{{ url('img/galerie/miniature') ."/". $uneImage["fichier"] }}" ></a>           
        </div>
        @endforeach  
        </div>
    </div>
</div>



@stop

@section('script')
<!-- lightBox -->
    <script src="{{url('js/lightbox.min.js')}}"></script>
@endsection