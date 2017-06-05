@extends('layout_back')

@section('title')
<h1>
    Créer une rencontre
    <small>- Page de saisie des résultats </small>
</h1>
@stop

@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => ["rencontre.resultatstore",$rencontre->id], 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>

                    <div class="form-group">
                        <label>Match gagné :  </label>
                        <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="gagner">
                    </div>
                    <div class="form-group">
                        <label>Score :  </label>
                        <input class="form-control" placeholder="6/4 6/3" name="score"> 
                    </div>
                    
                </div>
                <!-- /.box-header -->
                

                <button type="submit" class="btn btn-success btn-lg btn-block">Enregistrer</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop