@extends('layout_front')
@section('content')



</br>
</br>
</br>
</br>
</br>


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
                        <img src="{{ url('img/profil-default.jpg')}}" alt="imgDefault" class="img-responsive">


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
        <div class="col-md-9">
            <div class="profile-content">
                Some user related content goes here...
            </div>
        </div>
    </div>
</div>


</div>

@stop
