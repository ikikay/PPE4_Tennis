@extends('layout_back')

@section('title')
<h1>
    Creation d'un album
    <small>- creer un album photo</small>
</h1>
@stop

@section('content')

{!! Form::open(['route' => "album.store", 'method' => 'post', 'files' => true]) !!}

<div class="form-group">
    <label>Nom de l'album : </label>
    <input class="form-control" placeholder="le nom de l'album" name="name">
</div>

<div class="form-group">
    <label>Parcourir image :</label>
    <input type="file" name="image">
</div>

<button type="submit" class="btn btn-success">Créer</button>
<button type="reset" class="btn btn-danger">Effacer le formulaire</button>

{!! Form::close() !!}


@stop