@extends('layout_front')

@section('title')
<h1>
    Modication d'un utilisateur
    <small>- Modication d'un utilisateur</small>
</h1>
@stop
@section('content')
</br>
</br>
</br>
</br>
</br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier son mot de passe</div>
                <div class="panel-body">
                    {!! Form::open(['url' =>route('updateprofil',$leUser->id),'method' =>'put']) !!}

                    

                    {!! Form::label('password', 'Nouveau mot de passe ') !!}
                    <input id="password" type="password" class="form-control" name="password" value="" >

                    <div class="col-md-6 col-md-offset-4">
                        {!! Form::submit('Valider le nouveau mot de passe', ['class'=> 'btn btn-primary ']) !!}

                        {!! Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
