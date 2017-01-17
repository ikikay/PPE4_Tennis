
@extends('layout')
@section('content')
    Ici on va modifier les News{{$unenews->id}} 
    {!! Form::open(['url' =>route('projet.update',$unenews->id),'method' =>'put']) !!}

   {!! Form::label('nom', 'nom') !!}
   {!! Form::text('nom', $unenews->nom,['class'=> 'form-control'] ) !!}
 
   
   {!! Form::submit('Créer la News', ['class'=> 'btn btn-info']) !!}
   
   {!! Form::close()!!}
@stop
