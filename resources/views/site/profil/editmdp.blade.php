@extends('layout_front')

@section('title')
<h1>
    Modication d'un utilisateur
    <small>- Modication de votre mot de passe</small>
</h1>
@stop
@section('content')

{!! Form::open(['url' =>route('updateprofil',$leUser->id),'method' =>'put']) !!}

</br>
</br>
</br>
</br>
</br>
</br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modification de votre mot de passe</div>
                <div class="panel-body">

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Mot de passe</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirmer le mot de passe</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Valider la modification
                                </button>
                            </div>

                    
                </div>
            </div>
        </div>
    </div>
</div> 


{!! Form::close()!!}
@stop
