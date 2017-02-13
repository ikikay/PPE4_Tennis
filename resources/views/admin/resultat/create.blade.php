@extends('layout_back')

@section('title')
<h1>
    Ajouter des joueurs
    <small>- Page de création de rencontres</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            {!! Form::open(['route' => "resultat.store", 'method' => 'post']) !!}
                <div class="box-header">
                    <h3 class="box-title">  </h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Lieu</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Séléction joueurs</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_joueurs as $unJoueur)
                            <tr>
                                <td class="col-md-1">
                                    {{ $unJoueur["id"] }}
                                </td>
                                <td class="col-md-3">
                                    {{ $unJoueur->rencontre->lieu }}
                                </td>
                                <td class="col-md-3" id="td{{ $unJoueur["nom"] }}">
                                    {{ $unJoueur["nom"] }}
                                </td>
                                <td class="col-md-3" id="td{{ $unJoueur["prenom"] }}">
                                    {{ $unJoueur["prenom"] }}
                                </td>
                                <td>
                                    <div class="checkbox">
                                    <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="confirmation" >
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                    </div>
                    
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                

                <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>

            {!! Form::close() !!}
        </div>
        <!-- /.box -->
    </div>
</div>

@stop