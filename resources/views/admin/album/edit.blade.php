@extends('layout_back')

@section('title')
<h1>
    Créer un article
    <small>- Page de création d'articles</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ['album.update', $lesAlbums["id"]], 'method' => 'put', 'files' => true]) !!}               
            <div class="box-header">
                <h3 class="box-title">  </h3>

                <div class="form-group">
                    <label>Titre de l'article :  </label>
                    <input class="form-control" value="{{ $lesAlbums["name_album"] }}" name="name"> 
                </div>

                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Réduire">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Supprimer">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="form-group">
                
                 <div class="thumbnail col-md-4 col-md-offset-2">
                    <img src="{{ url('img\galerie\miniature') ."/". $lesAlbums["name_cover_image"] }}" alt="img{{ $lesAlbums["id"] }}">
                    <div class="caption">
                        <h3>image de couverture actuel de l'album</h3>
                        <label>choisir une nouvelle image :</label>
                        <input type="file" name="image">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop


