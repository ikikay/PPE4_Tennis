@extends('layout_back')

@section('title')
<h1>
    Upload d'images
    <small>- ajoute des images dans la galerie</small>
</h1>
@stop

@section('content')

{!! Form::open(['route' => "photo.store", 'method' => 'post', 'files' => true]) !!}
<input type="hidden" name="album_id" id="{{$album->id}}" />
<div class="form-group">
    <label>Nom de l'image : </label>
    <input class="form-control" placeholder="Mon image" name="name">
</div>

<div class="form-group">
    <label>Description de l'image : </label>
    <input class="form-control" placeholder="Une description" name="description">
</div>

<div class="form-group">
    <label>Parcourir image :</label>
    <input type="file" name="image">
</div>

<button type="submit" class="btn btn-success">Créer</button>
<button type="reset" class="btn btn-danger">Effacer le formulaire</button>

{!! Form::close() !!}


@stop