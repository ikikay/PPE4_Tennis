@extends('layout_front')
@section('content')

<div class="container">
    <div class="row">
        <h1>Galerie </h1> <!-- Bootstrap 3 Lightbox image gallery using Modal -->


        @foreach ($album->Photos as $uneImage)
        <div class="col-lg-3 col-sm-4 col-xs-6"><img src="{{ url('img/galerie/miniature') ."/". $uneImage["fichier"] }}" ></div>
        @endforeach
    </div>
</div>
<div tabindex="-1" class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h3 class="modal-title">Heading</h3>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@stop