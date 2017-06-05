@extends('layout_back')

@section('title')
<h1>
    Ajout d'un partenaire
    <small>- ajoute un partenaire</small>
</h1>
@stop

@section('content')

{!! Form::open(['route' => "partenaire.store",'files' => true, 'method' => 'post']) !!}
<div class="form-group">
    <label>Nom du parenaire : </label>
    <input class="form-control" placeholder="le nom du partenaire" name="name">
</div> 

<div class="form-group">
    <label>Lien du site du parenaire : </label>
    <input class="form-control" placeholder="le site du partenaire si il y a" name="site">
</div>

<div class="form-group">
    <label>Ajouter un logo :</label>
    <input type="file" name="logo">
</div>
<button type="submit" class="btn btn-success">Créer</button>
<button type="reset" class="btn btn-danger">Effacer le formulaire</button>
{!! Form::close() !!}
<!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Uploading Image using dropzone.js and Laravel</h1>
                {!! Form::open([ 'route' => "photo.store", 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'book-image' ]) !!}
                <div>
                    <h3>Upload Image</h3>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>-->
                          






@stop