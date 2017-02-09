@extends('layout_back')

@section('title')
<h1>
    Coordonnées du comité
</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        @foreach ($leComite as $unUser)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $unUser->Comite->fonction }}</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('contenu.create') }}">                    

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-7">
                                @if (!empty($unUser->nom))
                                <input id="nom" type="text" class="form-control" name="nom" value="{{$unUser->nom}}">
                                @else
                                <input id="nom" type="text" class="form-control" name="nom" value="rien">
                                @endif
                                @if ($errors->has('nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-7">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{$unUser->prenom}}" required autofocus>

                                @if ($errors->has('prenom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{$unUser->email}}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-7">
                                <input id="telephone" type="telephone" class="form-control" name="telephone" value="{{$unUser->telephone}}" required>

                                @if ($errors->has('telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
        @endforeach
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>{{ $unUser->Comite->fonction }}</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('contenu.create') }}">                    

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label for="nom" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-7">
                                @if (!empty($unUser->nom))
                                <input id="nom" type="text" class="form-control" name="nom" value="{{$unUser->nom}}">
                                @else
                                <input id="nom" type="text" class="form-control" name="nom" value="rien">
                                @endif
                                @if ($errors->has('nom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label for="prenom" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-7">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="{{$unUser->prenom}}" required autofocus>

                                @if ($errors->has('prenom'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('prenom') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail </label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control" name="email" value="{{$unUser->email}}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-7">
                                <input id="telephone" type="telephone" class="form-control" name="telephone" value="{{$unUser->telephone}}" required>

                                @if ($errors->has('telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 

    </div>
</div>
@endsection
