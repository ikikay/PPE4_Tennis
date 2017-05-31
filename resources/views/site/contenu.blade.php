@extends('layout_front')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="col-md-8 contenu">
        <div class="col-md-12">

            <h2>
                {!! $contenu["titre"] !!}
            </h2>

            <br>

            {!! $contenu["ckeditor"] !!}
            <hr>

        </div>
    </div>
</div>
@stop
