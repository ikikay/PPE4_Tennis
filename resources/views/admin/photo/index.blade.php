@extends('layout_back')

@section('title')
<h1>
    Administration de la galerie
    <small>- Rechercher, Modifier et supprimer des images</small>
</h1>
@stop

@section('content')


<!-- Main content -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                {!! Form::open(['route' => "photo.create", 'method' => 'get']) !!}
                <button type="submit" class="btn btn-success btn-lg btn-block">Créer</button>
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
                                <th>Image</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tab_images as $uneImage)
                            <tr>
                                <td class="col-md-1">
                                    {{ $uneImage["id"] }}
                                </td>
                                <td>
                                    <center><img src="{{ url('img\galerie\miniature') ."/". $uneImage["name_image"] }}" alt="img{{ $uneImage["id"] }}"></center>
                                </td>
                                <td class="col-md-2" id="td{{ $uneImage["id"] }}">
                                    {{ $uneImage["name_user"] }}
                                </td>
                                <td class="col-md-4">
                                    {{ $uneImage["description"] }}
                                </td>
                                <td class="col-md-1">
                                    {!! Form::open(['route' => ["photo.destroy", $uneImage->id], 'method' => 'delete', 'id' => "form".$uneImage->id]) !!}
                                        <button type="submit" id="{{ $uneImage->id }}" class="btn btn-danger btn-circle jsDeleteButton"><i class="fa fa-times"></i></button>
                                    {!! Form::close() !!}
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