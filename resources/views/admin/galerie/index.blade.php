@extends('layout_back')

@section('title')
<h1>
    Administration des articles
    <small>- Rechercher, Modifier et supprimer des articles</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "galerie.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
                {!! Form::close() !!}
            </div>
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tab_images as $uneImage)
                    <tr>		
                        <td>
                            <center>
                                <img src="{{ url('img/galerie/') ."/". $uneImage["name_image"] }}" alt="img{{ $uneImage["id"] }}">
                            </center>
                        </td>

                        <td class="col-md-2" id="td{{ $uneImage["id"] }}">
                            {{ $uneImage["name_user"] }}
                        </td>
                        <td class="col-md-4">
                            {{ $uneImage["description"] }}
                        </td>
                        <td class="col-md-1">
                            {!! Form::open(['route' => ["galerie.destroy", $uneImage->id], 'method' => 'delete', 'id' => "form".$uneImage->id]) !!}
                            <button type="submit" id="{{ $uneImage->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                            {!! Form::close() !!}
                        </td>      
                    </tr>
                    @endforeach
                </tbody>                
            </table>
        </div>
    </div>
</div>

@stop

