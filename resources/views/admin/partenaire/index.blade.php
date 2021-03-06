@extends('layout_back')

@section('title')
<h1>
    Administration des partenaire
    <small>- Rechercher, ajoute, modifier et supprimer des partenaire</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "partenaire.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Ajouter</button>
                {!! Form::close() !!}
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
                                <th>Logo du partenaire</th>
                                <th>Nom du partenaire</th>
                                <th>Site du partenaire</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lesPartenaires as $unPartenaire)
                            <tr>  
                                <td class="col-md-3" id="td{{ $unPartenaire["id"] }}">
                                    <center><img width="50%" src="{{ url('img/partenaire') ."/". $unPartenaire->logo }}" alt="img{{ $unPartenaire["id"] }}"></center>
                                </td>
                                <td class="col-md-3" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["nom"] }}
                                <td class="col-md-2" id="td{{ $unPartenaire["id"] }}">
                                    {{ $unPartenaire["site"] }}
                                </td>                                
                               
                                <td class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-1">
                                            {!! Form::open(['route' => ["partenaire.edit", $unPartenaire->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-pencil"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <br><br>
                                        <div class="col-md-1">
                                            {!! Form::open(['route' => ["partenaire.destroy", $unPartenaire->id], 'method' => 'delete', 'id' => "form".$unPartenaire->id]) !!}
                                            <button type="submit" id="{{ $unPartenaire->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

