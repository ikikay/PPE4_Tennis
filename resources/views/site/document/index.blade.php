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

    <div class="row">
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
                            <li class="active"><a href="#">Document</a></li>
                            <li><a href="#">Autre</a></li>
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
                            <li><a href="#">autre</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!-- Main content -->
        <div class="col-sm-9">
            <div class="row">

                <!-- /.box-header -->
                <div class="box-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 ">
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




            @stop




















