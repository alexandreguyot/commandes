@extends('layouts.app')


@section('content')
    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>Création d'une nouvelle commande</h2></div>

                        <div class="panel-body">
                            <form action="{{route('post.commandes.creation')}}"  method="post" >
                                {{ csrf_field() }}
                                <div class="part">
                                    <div class="form-group col-md-12">
                                        <div class="panel-title"><h4>Informations</h4></div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Date" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="type">Type</label>
                                        <select id="type" name="type" class="form-control" required>
                                            @foreach($type as $type)
                                                <option value="{{$type}}">{{$type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="form-group col-md-12">
                                        <div class="panel-title"><h4>1 / Client</h4></div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="list_client">Recherche un client</label>
                                        <select id="list_client" name="list_client" class="js-example-placeholder-single js-states form-control">
                                            <option></option>
                                            @foreach($clients as $client)
                                                <option value="{{$client}}" onselect="remplirClient(this.value)">{{ $client->nom }} {{ $client->prenom }} {{ $client->ville }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" value="null" id="client_id" name="client_id">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nom">Nom</label>
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="prenom">Prénom</label>
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">E-mail</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Téléphone</label>
                                            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Téléphone" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Téléphone secondaire</label>
                                            <input type="text" class="form-control" id="telephone_secondaire" name="telephone_secondaire" placeholder="Téléphone secondaire">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="categorie">Catégorie</label>
                                            <select id="categorie" name="categorie" class="form-control" required>
                                                @foreach($categorie as $categorie)
                                                    <option value="{{$categorie}}">{{$categorie}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="panel-title"><h4>2 / Adresse de facturation</h4></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse" required>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="code_postal">Code Postal</label>
                                            <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code Postal" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ville">Ville</label>
                                            <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="pays">Pays</label>
                                            <input type="text" class="form-control" id="pays" name="pays" placeholder="Pays" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="checkbox-inline">
                                            <br/>
                                            <input type="checkbox" name="meme_adresse" id="checkboxMemeAdresse" value="">
                                            <span><strong>Cliquez ici si l'adresse de livraison est différente </strong></span>
                                        </label>
                                    </div>
                                    <div class="form-row" id="champs_livraison">
                                        <div class="col-md-12">
                                            <div class="panel-title"><h4>2 / Adresse de livraison</h4></div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="livraison_nom">Nom</label>
                                            <input type="text" class="form-control" id="livraison_nom" name="livraison_nom" placeholder="Nom">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="livraison_prenom">Prénom</label>
                                            <input type="text" class="form-control" id="livraison_prenom" name="livraison_prenom" placeholder="Prénom">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="livraison_adresse">Adresse</label>
                                            <input type="text" class="form-control" id="livraison_adresse" name="livraison_adresse" placeholder="Adresse">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="livraison_code_postal">Code Postal</label>
                                            <input type="text" class="form-control" id="livraison_code_postal" name="livraison_code_postal" placeholder="Code Postal">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="livraison_ville">Ville</label>
                                            <input type="text" class="form-control" id="livraison_ville" name="livraison_ville" placeholder="Ville">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="livraison_pays">Pays</label>
                                            <input type="text" class="form-control" id="livraison_pays" name="livraison_pays" placeholder="Pays">
                                        </div>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="panel-title"><h4>3 / Règlement</h4></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="type_paiement">Type de paiement</label>
                                            <select id="type_paiement" name="type_paiement" class="form-control">
                                                @foreach($type_paiement as $type_paiement)
                                                    <option value="{{$type_paiement}}">{{$type_paiement}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="statut">Statut</label>
                                            <select id="statut" name="statut" class="form-control">
                                                @foreach($statut as $statut)
                                                    <option value="{{$statut}}">{{$statut}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="panel-title"><h4>4 / Produits</h4></div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="list_products">Liste des produits</label>
                                            <select id="list_products" name="list_products[]" multiple="multiple" class="form-control">
                                                @foreach($products as $key => $product)
                                                    <option value="{{ $product }}" onclick="remplirProduit()">{{ $product->ref }} - {{ $product->nom }} - {{ $product->prix }}€</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <!-- <div class="panel-title"><h5><strong>Liste des produits dans la commande</strong></h5></div> -->
                                    </div>
                                    <div class="col-md-12">
                                        <table id="products" class="table products">
                                            <thead>
                                            <tr id="products_header">
                                                <th>Reférence</th>
                                                <th>Nom</th>
                                                <th>Prix</th>
                                                <th>Quantité</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4">
                                                        <div class="col-md-4 pull-right nopadding">
                                                            <select id="livraison" name="livraison" class="form-control" required >
                                                                @foreach($livraison as $livraison)
                                                                    <option value="{{$livraison}}">{{$livraison}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>
                                                       <input type="number" step="0.01" min="0" class="form-control" id="prix_livraison" onchange="calculPrix()" name="prix_livraison" placeholder="Prix Livraison" required>
                                                       <input type="hidden" class="form-control" id="ancien_prix_livraison">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">Remise sur<br/>la commande</td>
                                                    <td>
                                                       <input type="number" step="0.01" min="0" class="form-control" id="remise" onchange="calculPrix()" name="remise" placeholder="Remise">
                                                       <input type="hidden" class="form-control" id="ancienne_remise">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">Total TTC</td>
                                                    <td>
                                                        <input type="hidden" id="TTTC" name="TTTC" value="0">
                                                        <label id="totale_label"></label>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="form-group col-md-12">
                                        <label for="commentaires">Commentaires</label>
                                        <textarea class="form-control" id="commentaires" name="commentaires" placeholder="Commentaires" cols="10"></textarea>
                                    </div>
                                </div>
                                <div class="part">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-default btn-valid">Enregister cette commande</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection