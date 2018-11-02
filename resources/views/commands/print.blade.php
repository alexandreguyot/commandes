@extends('layouts.print')


@section('content')
    @auth
        

        <div id="factureContainer">
            <div id="factureBlocShop">
                <img src="{{asset('images/logo-nldi-print.jpg')}}" width="150px" /><br/>
                <strong>BIOSENSE / NLD INTERNATIONAL</strong><br />
                15 rue des Doizelleries<br />
                44840 Les Sorinières (Nantes)<br />
                France<br />
                <div id="factureRCS">
                Tél. : +33 2 40 84 02 38&nbsp;&nbsp;&nbsp;Fax : 02 40 84 02 38<br />
                SAS au capital de 50 000 euros - RCS Nantes<br />
                APE : 4690Z &nbsp;&nbsp;&nbsp;SIRET : 49786313400035<br />
                N° TVA : FR01497863134
                </div>
            </div>

            <div id="factureBlocClient">
                <strong>{{ strtoupper($command->client->nom) }} {{ strtoupper($command->client->prenom) }} </strong><br /><br />
                {{ $command->client->adresse }}<br />
                {{ $command->client->code_postal }} {{ $command->client->ville }}<br />
                {{ $command->client->pays }}<br />
            </div>
            <div id="factureType">
                <h2>{{ strtoupper($command->client->type) }}</h2>
            </div>
            <div id="factureTableau">
                <table class="factureCadreFacture">
                    <tr>
                        <td>
                            <h3>Référence</h3>
                            {{ $command->id }}
                        </td>
                        <td>
                            <h3>Date</h3>
                            {{ $command->date }}
                        </td>
                        <td>
                            <h3>Mode de Règlement</h3>
                            {{ $command->type_paiement }}
                        </td>
                    </tr>
                </table>
                <table id="factureTableauFacture">
                    <tr class="factureCadreFacture">
                        <th>Code</th>
                        <th>Désignation</th>
                        <th>Quantité</th>
                        <th>P.U. TTC</th>
                        <th>Montant TTC</th>
                        <th>TVA</th>
                    </tr>
                    @foreach($command->products as $key => $product)
                    <tr>
                        <td>{{ $product->ref }}</td>
                        <td>{{ $product->nom }}</td>
                        <td>{{ $product->pivot->nombre }}</td>
                        <td class="facturePrix">{{ number_format(floatval($product->prix),2, ',', ' ') }} &euro;</td>
                        <td class="facturePrix">{{ number_format(floatval($product->prix * $product->pivot->nombre), 2, ',', ' ') }} &euro;</td>
                        <td class="factureTVA">1</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>&nbsp;</td>
                        <td>
                            Port : {{ $command->livraison }}
                        </td>
                        <td>1</td>
                        <td class="facturePrix">{{  number_format(floatval($command->prix_livraison), 2, ',', ' ') }} &euro;</td>
                        <td class="facturePrix">{{ number_format(floatval($command->prix_livraison), 2, ',', ' ') }} &euro;</td>
                        <td class="factureTVA">1</td>
                    </tr>
                </table>
                <div id="rib">
                    <p>Relevé d'identité bancaire</p>
                    <div>
                        <span>
                            IBAN (International Bank Account Number)<br>
                            <strong>FR76 3004 7141 3100 0210 3050 103</strong>  
                        </span> 
                        <span>
                            BIC (Bank Identifier Code)<br>
                            <strong>CMCIFRPP</strong>
                        </span>
                    </div>
                </div>

                <div id="factureTableauTotaux">
                                Code TVA 1 : 20,0 %<br />
                                
                    <table>
                                            <tr>
                            <td><strong>Total TTC</strong></td>
                            <td class="facturePrix"><strong>{{ number_format(floatval($command->TTTC), 2, ',', ' ') }} &euro;</strong></td>
                        </tr>
                        <tr>
                            <td>Total TVA</td>
                            <td class="facturePrix">{{ number_format(floatval($command->TTTC - $command->THT), 2, ',', ' ') }} &euro;</td>
                        </tr>
                        <tr>
                            <td>Total HT</td>
                            <td class="facturePrix">{{ number_format(floatval($command->THT), 2, ',', ' ') }} &euro;</td>
                        </tr>
                    
                        <tr>
                            <td>Total règlements</td>
                            <td class="facturePrix">0.00 &euro;</td>
                        </tr>
                        <tr id="montantAPayer">
                            <td><strong>Montant à payer</strong></td>
                            <td class="facturePrix"><strong>{{ number_format(floatval($command->TTTC), 2, ',', ' ') }} &euro;</strong></td>
                        </tr>
                    </table>

                                                        <div class="conditions" style="margin: 30px 0 0; width: 380px; float: right; line-height: 10px;">
                                <p style="font-size: 14px;"><strong>- Règlement possible en 3x sans frais par chèques</strong></p>
                                <p style="font-size: 14px;"><strong>- Offre valable jusqu'au 24/11/2018</strong></p>
                            </div> 
                                     

                            </div>
            </div>

            <p></p>

            <div id="factureReservePropriete">      
                Clause de réserve de propriété : le vendeur conserve la propri?t? pleine et entière des marchandises vendues jusqu'au paiement complet du prix, en application de la loi du 12 mai 1980.
            </div>
        </div>
    @endauth
@endsection