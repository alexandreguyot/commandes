@extends('layouts.print')


@section('content')
    @auth
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Votre bon de commande MARJ1824 {{-- {{$commands->id}} --}}</h2>
                        </div>
                        <duv class="panel-body">
                            <div class="col-md-12">
                                <h3>BIOSENSE / NLD INTERNATIONAL</h3>
                            </div>
                            <div class="col-md-6">
                                <span>15 rue des Doizelleries</span><br/>
                                <span>44840 Les Sorinières (Nantes)</span><br/>
                                <span>France</span>
                                <hr>
                                <span>Tél. : +33 2 40 84 02 38   Fax : 02 40 84 02 38</span><br/>
                                <span>SAS au capital de 50 000 euros - RCS Nantes</span><br/>
                                <span>APE : 4690Z    SIRET : 49786313400035</span><br/>
                                <span>N° TVA : FR01497863134</span>
                            </div>
                            <div class="col-md-6">
                                <p>Danièle Puech</p>
                                <ul>
                                    <li>128 RUE DE LA PÉPINIÈRE</li>
                                    <li>34000 MONTPELLIER</li>
                                    <li>FRANCE</li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>
                                                Commande MARJ18<strong>24</strong>
                                                {{-- {{$commands->id}} --}}
                                            </th> 
                                            <th>
                                                Date : <strong>04/11/2018</strong>
                                                {{-- {{$commands->created_at}} --}}
                                            </th> 
                                            <th>
                                                Mode de règlement : <strong>CB</strong>
                                                {{-- {{$commands->type_paiement}} --}}
                                            </th> 
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Code</th> 
                                            <th>Désignation</th> 
                                            <th>Quantité</th> 
                                            <th>P.U. TTC</th> 
                                            <th>Montant TTC</th> 
                                            <th>TVA</th> 
                                        </tr>
                                        <tr>
                                            <td>BIOMATBABBIO60</td>
                                            <td>Baby Bio - 60x120</td>
                                            <td>1</td>
                                            <td>379.00 €</td>
                                            <td>379.00 €</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 pull-right">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Total TVA</th> 
                                            <td>64.67 €</td> 
                                        </tr>
                                        <tr>
                                            <th>Total TTC</th> 
                                            <td>388.00 €</td> 
                                        </tr>
                                        <tr>
                                            <th>Total à payer</th> 
                                            <td>388.00 €</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <p>Clause de réserve de propriété : le vendeur conserve la propri?t? pleine et entière des marchandises vendues jusqu'au paiement complet du prix, en application de la loi du 12 mai 1980.</p>
                            </div>
                        </duv>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection