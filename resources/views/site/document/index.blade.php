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
                                <a href="#" target="_blank">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    Tasks </a>
                            </li>
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
            <div class="col-sm-9">
                <div class="profile-content">
                    <!-- Main content -->
                
                        <div class="row">

                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 ">
                                            <div class="panel panel-default">
                                                <div class="panel-heading"> 

                                                    {!! Form::open(['route' => "document.create", 'method' => 'get']) !!}
                                                    <button type="submit" class=" btn btn-success ">Nouveau document</button>
                                                    {!! Form::close() !!}</div>
                                                <div class="panel-body">
                                                    <table>
                                                        <thead class="panel-body">
                                                            <tr>

                                                                <th style="text-align:center" >Titre</th>
                                                                <th style="text-align:center">Fichier</th>
                                                                <th style="text-align:center">Action</th>

                                                            </tr>

                                                        </thead>
                                                        <tbody>

                                                            {{ $c = true}} 

                                                            @foreach ($tab_docs as $unDoc)



                                                            <?php echo '<tr' . (($c = !$c) ? ' class="odd"' : ' class="even"') . ">"; ?>                               
                                                        <td class="col-md-1 col-md-offset-4 ">
                                                            {{ $unDoc["nom"] }}
                                                        </td >
                                                        <td class="col-md-5" >
                                                        <center><objet  data="{{ url('doc/') ."/". $unDoc["fichier"] }}" alt="img{{ $unDoc["id"] }}" ><a href="{{ url('doc/') ."/". $unDoc["fichier"] }}" target="_blank" >{{ $unDoc["fichier"]}}</a> </objet></center>
                                                        </td>               
                                                        <td class="col-md-1">
                                                            <div class="row">


                                                                <div class="col-md-4">
                                                                    {!! Form::open(['route' => ["document.destroy", $unDoc->id], 'method' => 'delete', 'id' => "form".$unDoc->id]) !!}
                                                                    <button type="submit" id="{{ $unDoc->id }}" class="jsDeleteButton btn btn-danger btn-circle "<i class="fa fa-times"> </i>Supprimer</button>
                                                                    {!! Form::close() !!}
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </tr>

                                                        @endforeach
                                                        </tbody> 
                                                    </table>


                                              
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























