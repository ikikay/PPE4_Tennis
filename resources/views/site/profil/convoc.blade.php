@extends('layout_front')
@section('content')
<h1>
    Administration des rencontres
    <small>- Gérer vos rencontres</small>
</h1>

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
                                    
                                </td>
                            </tr>
                            @endforeach
                        </tbody> 
                    </table>
@stop