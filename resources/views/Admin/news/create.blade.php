@extends('layout')
@section('content')
   {!! Form::open(['url' =>route('technologie.store')]) !!}

   {!! Form::label('nom', 'nom?') !!}
   {!! Form::text('nom', null,['class'=> 'form-control'] ) !!}
    {!! Form::label('version', 'version ?') !!}
   {!! Form::text('version', null,['class'=> 'form-control'] ) !!}
   {!! Form::label('domaine_id', 'Domaine ?') !!}
   {!! Form::select('domaine_id', $lesDomaines, null, ['class'=>'form-control'] ) !!}

   {!! Form::submit('validation', ['class'=> 'btn btn-info']) !!}
   {!! Form::close()!!}
   @stop


