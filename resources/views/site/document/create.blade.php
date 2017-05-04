@extends('layout_front')

@section('title')
<h1>
    DOC
    <small>- ajoute des documents</small>
</h1>




@stop

@section('content')



<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Profil
                <small>Tennis Club Tavaux</small>
            </h1>
        </div>
    </div>


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
                <div class="profile-content">
                    <div class="row">

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 ">
                                        <div class="panel panel-default">
                                            <div class="panel-heading"> 


                                                {!! Form::open(['route' => "document.store",'files' => true, 'method' => 'post']) !!}

                                                <div class="form-group  col-md-offset-4 ">
                                                    <label>Nom de l'image : </label>
                                                    <input class="form-control" placeholder="Mon image" name="nom">
                                                    
                                                </div>



                                                @if(Auth::check())






                                                <input type="hidden" name="user_id" value="{{ $user_id = Auth::User()->id }}" />
                                                <div class="form-group col-md-offset-4 ">
                                                    <label>Parcourir image :</label>
                                                    <input type="file" name="document">
                                                </div> 
                                                <button type="submit" class="btn btn-success col-md-offset-4">Créer</button>
                                                <button type="reset" class="btn btn-danger col-md-offset-4 ">Effacer le formulaire</button>
                                                {!! Form::close() !!}


                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
    </div>
    

        @stop