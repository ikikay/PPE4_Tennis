@extends('layout_back')

@section('title')
<h1>
    Administration des utilisateurs
    <small>- Rechercher, Modifier et supprimer des utilisateurs</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "user.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Inscrire un utilisateur</button>
                {!! Form::close() !!}
                <!-- /.box-header -->
                <div class="box-body">
                    
                    <!-- search form (Optional) -->
                    <form action="#" method="get">
                        <div class="input-group margin">
                            <input type="text" name="q" class="form-control" placeholder="Rechercher . . .">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-info btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Noms d'utilisateur</th>
                                <th>Statut </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_users as $unUser)
                            <tr>
                                <td class="col-md-1">
                                    {{ $unUser["id"] }}
                                </td>
                                <td class="col-md-9" id="td{{ $unUser["id"] }}">
                                    {{ $unUser["nom"] }}
                                </td>
                                <td class="col-md-1"> 
                                    @if ( $unUser->valider == 1)
                                     
                                          
                                          
                                    
                                    <button  class="btn  btn-success btn-circle" checked ><i class="fa fa-check  "></i></button>
                                    
                                    @else

                                    
                                        {!! Form::open(['route' => ["user.edit", $unUser->id], 'method' => 'get']) !!}
                                        <button type="submit" class="btn btn-danger btn-circle" ><i class="fa fa-times"></i></button>
                                        {!! Form::close() !!}
                                        @endif           
                                
                                
                                <td class="col-md-1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["user.edit", $unUser->id], 'method' => 'get']) !!}
                                            <button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-list"></i></button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::open(['route' => ["user.destroy", $unUser->id], 'method' => 'delete', 'id' => "form".$unUser->id]) !!}
                                            <button type="submit" id="{{ $unUser->id }}" class="jsDeleteButton btn btn-danger btn-circle "><i class="fa fa-times"></i></button>
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

@stop

