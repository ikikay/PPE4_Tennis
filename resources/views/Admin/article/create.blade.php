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
            <div class="box-header">
                <h3 class="box-title">
                    <small>Outils de création d'articles.</small>
                </h3>
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
            <div class="box-body pad">
                <form>
                    <textarea id="editor1" name="editor1" rows="150" cols="80">
                        Écrire l'article ici.
                    </textarea>
                </form>
            </div>
        </div>
        <!-- /.box -->

        @stop


