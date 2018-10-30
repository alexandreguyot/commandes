@extends('layouts.app')


@section('content')
    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Création d'une nouvelle commande</h2></div>

                        <div class="panel-body">
                            <form>
                                <div class="form-group col-md-12">
                                    <div class="panel-title"><h4>Client</h4></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nom">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="prenom">Prénom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">E-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email">Téléphone</label>
                                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Téléphone">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Téléphone secondaire</label>
                                        <input type="text" class="form-control" id="telephone_secondaire" name="telephone_secondaire" placeholder="Téléphone secondaire">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="categorie">Catégorie</label>
                                        <select id="categorie" name="categorie" class="form-control">
                                            @foreach($categorie as $categorie)
                                                <option value="{{$categorie}}">{{$categorie}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="panel-title"><h4>Adresse de facturation</h4></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="ville">Ville</label>
                                        <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pays">Pays</label>
                                        <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="code_postal">Code Postal</label>
                                        <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="panel-title"><h4>Produits</h4></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="categorie">Liste des produits</label>
                                    <select id="products" name="products" class="form-control">
                                        @foreach($products as $key => $product)
                                            <option value="{{$key}}">{{$product->nom}} - {{$product->prix}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection