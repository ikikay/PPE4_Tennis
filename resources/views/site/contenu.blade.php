@extends('layout_front')
@section('content')
<!-- Page Content -->
<div class="container">
    <div class="col-md-12">
        <div class="col-md-8 contenu">
            <h2>
                ICI $contenu["titre"]
            </h2>

            <br>

            <p>ICI $contenu["ckeditor"]</p>
            <hr>

        </div>

        <div class="col-md-4">
            <!-- Side Widget Well -->
            <div class="well">
                <h4>Sponsors</h4>
                <img src="img/sponsor1.png" alt="Chania">
                <img src="img/sponsor2.png" alt="Chania">
            </div>
        </div>

    </div>
</div>
@stop
