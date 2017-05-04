@extends('layout_front')

@section('title')
<h1>
    Modification d'un utilisateur
    <small>- Modification de votre mot de passe</small>
</h1>
@stop
@section('content')

{!! Form::open(['url' =>route('updateprofil',$leUser->id),'method' =>'put']) !!}


<div class="container">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                      <!--faire condition if photo existe-->
                        <img src="{{ url('img/profil-default.png')}}" alt="imgDefault" class="img-responsive">



                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        {{ Auth::user()->nom }}
                    </div>
                    <div class="profile-usertitle-job">
                        {{Auth::user()->prenom}}
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
                <div class="profile-userbuttons">

                    <button type="button" class="btn btn-danger btn-sm">Message</button>
                </div>
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li class="active">
                            <a href="{{ route('document.index') }}">
                                <i class="glyphicon glyphicon-home"></i>
                                Document </a>
                        </li>
                        @if(Auth::check())

                        <li>
                            <a href="{{ route('editprofil', Auth::User()->id) }}">
                                <i class="glyphicon glyphicon-user"></i>
                                Modifié son mot de passe </a>
                        </li>

                        @if(Auth::User()->joueur)
                        <li>
                            <a href="{{ route('convocation', Auth::User()->id) }}">
                                <i class="glyphicon glyphicon-flag"></i>
                                Convocation </a>
                        </li>
                        @endif
                        @endif
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        
        
        <div class="col-md-9">


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
    </div>
</div>


{!! Form::close()!!}
@stop
