@extends('layout')
@section('content')
<div class="row">
    <h1 class="page-header">News</h1>
    
    <a class="btn btn-info" href="{{route('new.create')}}">Ajouter</a>
    <table class="table">
        <tr>
            <th>Code</th>
            <th>Version</th>
            <th>Domaine</th>
            <th>Action</th>
        </tr>
        @foreach($lesNew as $lesNew)
        <tr><td>{{ $lesTechno->titre }}</td>
            <td>{{ $lesTechno->contenue }}</td>
            <td>{{ $lesTechno->domaine->nom }} </td>
            <td> <a class="btn btn-info" href="{{route('technologie.edit', $lesTechno->id)}}">Modifier</a> 
                {!! Form::open(array('method' => 'DELETE', 'class'=>"form", 'route'=> array('technologie.destroy', $lesTechno->id))) !!}
                
                
                <input   type ="submit" value="supprimer" class="btn btn-danger">
            {!! Form::close() !!}
        </tr>
        @endforeach
    </table>
 </div>
  
@stop
