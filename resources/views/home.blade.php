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
                                            <td>{{ $command->date }}</td>
                                            <td>??</td>
                                            <td>{{ $command->type }}</td>
                                            <td>{{ $command->statut }}</td>
                                            <td>{{ $command->livraison }}</td>
                                            <td>{{ $command->TTTC }} €</td>
                                            <td>
                                                <a href="{{ route('get.commandes.edition', ['id' => $command->id]) }}" type="button" class="btn btn-primary"><i class="fas fa-pen"></i></a>
                                                <a href="{{ route('get.commandes.impression', ['id' => $command->id]) }}" type="button" class="btn btn-warning"><i class="fas fa-print"></i></a>
                                                <form action="{{ route('delete.commandes.suppression', ['id' => $command->id]) }}" method="post">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
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
