<?php

namespace App\Http\Controllers;

use App\Client;
use App\Commands;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CommandController extends Controller
{
    public function create_show() {
        $type = Commands::getPossibleEnumValues('type');
        $type_paiement = Commands::getPossibleEnumValues('type_paiement');
        $statut = Commands::getPossibleEnumValues('statut');
        $livraison = Commands::getPossibleEnumValues('livraison');
        $categorie = Client::getPossibleEnumValues('categorie');
        $products = Products::all();
        $clients = Client::all();
        return view('commands.show')->with([
            'products' => $products,
            'type' => $type,
            'type_paiement' => $type_paiement,
            'statut' => $statut,
            'livraison' => $livraison,
            'categorie' => $categorie,
            'clients' => $clients,
        ]);
    }

    public function edit_show($id) {
        $type = Commands::getPossibleEnumValues('type');
        $type_paiement = Commands::getPossibleEnumValues('type_paiement');
        $statut = Commands::getPossibleEnumValues('statut');
        $livraison = Commands::getPossibleEnumValues('livraison');
        $categorie = Client::getPossibleEnumValues('categorie');
        $products = Products::all();
        $clients = Client::all();
        $command =  Commands::with(['products', 'client'])->find(['id' =>$id])->first();
        $commandproduct = $command->products->pluck('id')->toArray();
        return view('commands.edit')->with([
            'products' => $products,
            'type' => $type,
            'type_paiement' => $type_paiement,
            'statut' => $statut,
            'livraison' => $livraison,
            'categorie' => $categorie,
            'clients' => $clients,
            'command' => $command,
            'commandproduct' => $commandproduct,
        ]);
    }


    public function create(Request $request) {
        $client_id = $request->get('client_id');
        if ($client_id === "null") {
            $client = $this->createClient($request);
        }
        $client_id = $client_id == "null" ? $client->id : $client_id;
        $this->createCommand($request, $client_id);
        return Redirect::route('home');
    }

    public function edit(Request $request) {
        $client = Client::where(['id' => $request->get('client_id')])->first();
        $client = $this->editClient($request, $client);
        $command = Commands::where(['id' => $request->get('command_id')])->first();
        $this->editCommand($request, $command, $client);
        return Redirect::route('home');
    }

    public function print($id) {
        $command = Commands::find($id);
        return view('commands.print')->with('commands', $command);
    }

    public function delete($id) {
        $command = Commands::find($id);
        $command->products()->detach();
        $command->delete();
        return Redirect::route('home');
    }

    private function createCommand($request, $client_id) {
        $command = new Commands();
        $command->client_id = $client_id;
        $command->date = $request->get('date');
        $command->type = $request->get('type');
        $command->type_paiement = $request->get('type_paiement');
        $command->statut = $request->get('statut');
        $command->livraison = $request->get('livraison');
        $command->prix_livraison = $request->get('prix_livraison');
        $command->THT = intval($request->get('TTTC')) / 1.2;
        $command->TTTC = $request->get('TTTC');
        $command->remise = $request->get('remise');
        $command->commentaires = $request->get('commentaires');
        $command->save();
        foreach ($request->get('products') as $idProduct => $nombre) {
            $command->products()->attach($idProduct, ['nombre' => $nombre['nombre']]);
        }
    }

    private function createClient($request) {
        $client = new Client();
        $client->categorie = $request->get('categorie');
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->adresse = $request->get('adresse');
        $client->code_postal = $request->get('code_postal');
        $client->ville = $request->get('ville');
        $client->pays = $request->get('pays');
        $client->telephone = $request->get('telephone');
        $client->telephone_secondaire = $request->get('telephone_secondaire');
        $client->email = $request->get('email');
        $client->livraison_nom = $request->get('livraison_nom');
        $client->livraison_prenom = $request->get('livraison_prenom');
        $client->livraison_adresse = $request->get('livraison_adresse');
        $client->livraison_code_postal = $request->get('livraison_code_postal');
        $client->livraison_ville = $request->get('livraison_ville');
        $client->save();
        return $client;
    }

    private function editClient($request, $client) {
        $client->categorie = $request->get('categorie');
        $client->nom = $request->get('nom');
        $client->prenom = $request->get('prenom');
        $client->adresse = $request->get('adresse');
        $client->code_postal = $request->get('code_postal');
        $client->ville = $request->get('ville');
        $client->pays = $request->get('pays');
        $client->telephone = $request->get('telephone');
        $client->telephone_secondaire = $request->get('telephone_secondaire');
        $client->email = $request->get('email');
        $client->livraison_nom = $request->get('livraison_nom');
        $client->livraison_prenom = $request->get('livraison_prenom');
        $client->livraison_adresse = $request->get('livraison_adresse');
        $client->livraison_code_postal = $request->get('livraison_code_postal');
        $client->livraison_ville = $request->get('livraison_ville');
        $client->save();
        return $client;
    }

    private function editCommand($request, $command, $client) {
        $command->client_id = $client->id;
        $command->date = $request->get('date');
        $command->type = $request->get('type');
        $command->type_paiement = $request->get('type_paiement');
        $command->statut = $request->get('statut');
        $command->livraison = $request->get('livraison');
        $command->prix_livraison = $request->get('prix_livraison');
        $command->THT = intval($request->get('TTTC')) / 1.2;
        $command->TTTC = $request->get('TTTC');
        $command->remise = $request->get('remise');
        $command->commentaires = $request->get('commentaires');
        $command->save();
        $command->products()->sync([]);
        foreach ($request->get('products') as $idProduct => $nombre) {
            $command->products()->attach($idProduct, ['nombre' => $nombre['nombre']]);
        }
    }
}
