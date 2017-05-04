@extends('layout_front')
@section('title')
<h1>
    Administration des rencontres
    <small>- Gérer vos rencontres</small>
</h1>
@stop
@section('content')
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
                                    <a href="#">
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
        <div class="container">
            <div class="row profile">
                <div class="col-md-9">
                        <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Date</th>
                                <th>Lieu</th>
                                <th>Adversaire</th>
                                <th>Equipe</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach (Auth::user()->rencontres as $uneRencontre)
                            {!! Form::open(['route' =>[ "accepter",$uneRencontre->id,Auth::User()->id], 'method' => 'post']) !!}
                            <tr>
                                <td class="col-md-2" id="td{{ $uneRencontre["date"] }}">
                                    {{ $uneRencontre["date"] }}
                                </td>
                                <td class="col-md-2" id="td{{ $uneRencontre["lieu"] }}">
                                    {{ $uneRencontre["lieu"] }}
                                </td>
                                <td class="col-md-3" id="td{{ $uneRencontre["adversaire"] }}">
                                    {{ $uneRencontre["adversaire"] }}
                                </td>
                                <td class="col-md-3" id="td{{ $uneRencontre["equipe_id"] }}">
                                    {{ $uneRencontre->equipe->nom }}
                                </td>
                                <td class="col-md-2">
                                    <div class="checkbox" style="text-align:center">
                                <input data-toggle="toggle" type="checkbox"   data-onstyle="success" name="confirmation{{Auth::User()->id}}">
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                        </table>
                    <button type="submit" class="btn btn-success btn-lg btn-block">Accepter</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@stop