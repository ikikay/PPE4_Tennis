@extends('layout_back')

@section('title')
<h1>
    Modication d'un utilisateur
    <small>- Modication d'un utilisateur</small>
</h1>
@stop
@section('content')
      
    {!! Form::open(['url' =>route('user.update',$leUser->id),'method' =>'put']) !!}

   {!! Form::label('nom', 'nom') !!}
   {!! Form::text('nom', $leUser->nom,['class'=> 'form-control'] ) !!}
 
   {!! Form::label('prenom', 'prenom') !!}
   {!! Form::text('prenom', $leUser->prenom,['class'=> 'form-control'] ) !!}
  
   {!! Form::label('email', 'email') !!}
   {!! Form::text('email', $leUser->email,['class'=> 'form-control'] ) !!}
  
   {!! Form::label('telephone', 'telephone') !!}
   {!! Form::text('telephone', $leUser->telephone,['class'=> 'form-control'] ) !!}
   
   {!! Form::label('password', 'password') !!}
   {!! Form::text('password', $leUser->password,['class'=> 'form-control'] ) !!}
  
   
   
   {!! Form::submit('Valider', ['class'=> 'btn btn-info']) !!}
   
   {!! Form::close()!!}
@stop
