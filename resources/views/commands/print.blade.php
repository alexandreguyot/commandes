@extends('layouts.print')


@section('content')
    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Impression de votre commande</h2></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection