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
    <!-- /.row -->

    <!--   <div class="row">
           <div class="col-sm-3">
               <div class="sidebar-nav">
                   <div class="navbar navbar-default" role="navigation">
                       <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                               <span class="sr-only">Toggle navigation</span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                               <span class="icon-bar"></span>
                           </button>
                           <span class="visible-xs navbar-brand">Sidebar menu</span>
                       </div>
                       <div class="navbar-collapse collapse sidebar-navbar-collapse">
                           <ul class="nav navbar-nav">
                               <li ><a href="{{ route('document.index') }}" >Document</a></li>
                               <li><a href="#">droit</a></li>
                               <li class="dropdown">
                                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">deroulant<b class="caret"></b></a>
                                   <ul class="dropdown-menu">
                                       <li><a href="#">Action</a></li>
                                       <li><a href="#">Another action</a></li>
                                       <li><a href="#">Something else here</a></li>
                                       <li class="divider"></li>
                                       <li class="dropdown-header">Nav header</li>
                                       <li><a href="#">Separated link</a></li>
                                       <li><a href="#">One more separated link</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </div>  
                   </div>
               </div>
           </div>  -->

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">


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
                            @endif

                            <li>
                                <a href="#">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Help </a>
                            </li>
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