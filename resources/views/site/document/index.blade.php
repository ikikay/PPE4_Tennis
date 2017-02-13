@extends('layout_front')
@section('content')

<!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Profil
                    <small>Tennis Club Tavaux</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->



<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "document.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
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
                              
                                <th>Titre</th>
                                <th>fichier</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_docs as $unDoc)
                            <tr>
                                <td class="col-md-1">
                                    {{ $unDoc["nom"] }}
                                </td>
                                <td>
                                    <center><objet  data="{{ url('doc/') ."/". $unDoc["fichier"] }}" alt="img{{ $unDoc["id"] }}"><a href="{{ url('doc/') ."/". $unDoc["fichier"] }}">{{ $unDoc["fichier"]}}</a> </objet></center>
                                </td>               
                                <td class="col-md-1">
                                      <div class="row">
                                       
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["document.destroy", $unDoc->id], 'method' => 'delete', 'id' => "form".$unDoc->id]) !!}
                                            <button type="submit" id="{{ $unDoc->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
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




















