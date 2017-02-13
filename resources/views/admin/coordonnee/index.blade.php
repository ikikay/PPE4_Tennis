@extends('layout_back')

@section('title')
<h1>
    Coordonnées du comité
</h1>
@stop

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
<!--                {!! Form::open(['route' => "article.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
                {!! Form::close() !!}-->
                <!-- /.box-header -->
                <div class="box-body">

                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Statut</th>
                                <th>Utilisateur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leComite as $unStatut)
                            <tr>
                                <td class="col-md-4">
                                    {{ $unStatut->fonction }}
                                </td>
                                <td class="col-md-8" id="td{{ $unStatut->id }}">
                                    @foreach ($unStatut->users as $unUtilisateur)
                                    <table class="table table-bordered">
                                        <td class="col-md-3">{{ $unUtilisateur->nom }} {{ $unUtilisateur->prenom }} </td>
                                        <td class="col-md-3">{{ $unUtilisateur->email }} </td>
                                        <td class="col-md-3">{{ $unUtilisateur->telephone }} </td>
                                        <td class="col-md-3">
                                            {!! Form::open(['route' => ["coordonnee.destroy", $unUtilisateur->id], 'method' => 'delete']) !!}
                                            <button type="submit" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}                                        
                                            </div>
                                    </table>
                                    @endforeach
                                    <!-- Button trigger modal -->

                                    <button type="button" class="btn btn-success btn-circle btn-sm ajout" data-toggle="modal" data-target="#myModal{{ $unStatut->id}}">Ajouter {{ $unStatut->fonction }}
                                    </button>


                                    
                                </td>                                
                            </tr>
                            <!-- Modal -->
                                    {!! Form::open(['route' => ["add_user_statut", $unStatut->id], 'method' => 'post']) !!}

                                    <div class="modal fade" id="myModal{{ $unStatut->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel{{ $unStatut->id}}">Ajouter {{ $unStatut->fonction }}</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="sel1">Select list:</label>
                                                        
                                                        {{ Form::select('user'.$unStatut->id,$lesUsers) }}
                                                        
                                               
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                   
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                            @endforeach
                        </tbody> 
                    </table>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')
    @endsection