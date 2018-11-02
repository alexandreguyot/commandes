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
                                <input type="text" class="form-control" id="filtre" onkeyup="filterTableau()" placeholder="Rechercher une commande">
                                <br>
                                <table class="table table-bordered" id="liste_commandes">
                                    <tr>
                                        <th>Numéro</th>
                                        <th>Date</th>
                                        <th>Nom</th>
                                        <th>Type</th>
                                        <th>Statut</th>
                                        <th>Livraison</th>
                                        <th>TTTC</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach($commands as $command)
                                        <tr>
                                            <td>{{ $command->id }}</td>
                                            <td>{{ date_create($command->date)->format('d/m/Y') }}</td>
                                            <td>{{ $command->client->nom }} {{ $command->client->prenom }}</td>
                                            <td>{{ $command->type }}</td>
                                            <td>{{ $command->statut }}</td>
                                            <td>{{ $command->livraison }}</td>
                                            <td>{{ $command->TTTC }} €</td>
                                            <td class="d-inline-block">
                                                <form action="{{ route('delete.commandes.suppression', ['id' => $command->id]) }}" method="post">
                                                <a href="{{ route('get.commandes.edition', ['id' => $command->id]) }}" type="button" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                                <a href="{{ route('get.commandes.impression', ['id' => $command->id]) }}" type="button" class="btn btn-warning" target="_Blank"><i class="fas fa-print"></i></a>
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Etes-vous sur de vouloir supprimer cette commande ?')"><i class="fas fa-trash-alt"></i></button>
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
