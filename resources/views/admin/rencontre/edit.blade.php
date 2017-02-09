@extends('layout_back')

@section('title')
<h1>
    Modifier une rencontre
    <small>- Page de modification de la rencontre</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ['rencontre.update', $rencontre["id"]], 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Date de la rencontre :  </label>
                        <input class="form-control" value="{{ $rencontre["date"] }}" name="date"> 
                    </div>
                    <div class="form-group">
                        <label>Lieu de la rencontre :  </label>
                        <input class="form-control" value="{{ $rencontre["lieu"] }}" name="lieu"> 
                    </div>
                    <div class="form-group">
                        <label>Adversaire :  </label>
                        <input class="form-control" value="{{ $rencontre["adversaire"] }}" name="adversaire"> 
                    </div>
                    <div class="form-group">
                        <label>Equipe :  </label>
                        <input class="form-control" value="{{ $rencontre["equipe_id"] }}" name="equipe_id"> 
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
                

                <button type="submit" class="btn btn-success btn-lg btn-block">Modifier</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop