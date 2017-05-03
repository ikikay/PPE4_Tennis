@extends('layout_back')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">                
                <!-- /.box-header -->
                <div class="box-body">     
                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Auteur</th>
                                <th>Intitulé</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                            @foreach($lesMessages as $unMessage)
                            <tr>
                                <td>{{$unMessage->auteur}}</td>
                                <td>{{$unMessage->titre}}</td>
                                <td>{{$unMessage->created_at->format('d/m/Y')}}</td>
                                <td>traité ou non</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endforeach
@endsection

