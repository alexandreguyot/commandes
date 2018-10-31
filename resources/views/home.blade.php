@extends('layouts.app')

@section('content')
    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Liste des commandes</h2></div>

                        <div class="panel-body">
                            <div class="home-content">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Numéro</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Type de Paiement</th>
                                        <th>Statut</th>
                                        <th>Livraison</th>
                                        <th>THT</th>
                                        <th>TTTC</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($commands as $command)
                                        <tr>
                                            <td>{{ $command->id }}</td>
                                            <td>{{ $command->date }}</td>
                                            <td>{{ $command->type }}</td>
                                            <td>{{ $command->type_paiement }}</td>
                                            <td>{{ $command->statut }}</td>
                                            <td>{{ $command->livraison }}</td>
                                            <td>{{ $command->THT }} €</td>
                                            <td>{{ $command->TTTC }} €</td>
                                            <td>
                                                <a href="{{ route('get.commandes.edition', ['id' => $command->id]) }}" type="button" class="btn btn-primary">Editer</a>
                                                <form>
                                                    <a href="{{ route('delete.commandes.suppression', ['id' => $command->id]) }}"
                                                       data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"
                                                       type="submit" class="btn btn-danger">Supprimer
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
